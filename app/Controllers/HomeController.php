<?php

namespace App\Controllers;

class HomeController extends BaseController {

    protected $helpers = ['form', 'html'];

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger) {
        parent::initController($request, $response, $logger);
        $this->db = \Config\Database::connect();
        $this->modeleArticle = new \App\Models\Article();
        $this->post = $this->request->getPost();
    }

    public function index() {
        $articles = $this->modeleArticle->findAll();
        return view('articles/list', ['articles' => $articles]);
    }

    public function addArticle() {
        if (isset($this->post['btnAnnuler'])) {
            return redirect()->to('/homeController/index');
        }

        $article = new \App\Entities\Article();
        $errors = array();

        if (isset($this->post['article'])) {
            $article->fill($this->post['article']);
            $image = $this->request->getFile('article.a_image');

            if (!empty($image) && $image->isValid()) {
                $nomImg = $image->getRandomName();
                $dossierImg = 'article';
                $image->move(ROOTPATH . 'public/img/' . $dossierImg, $nomImg, true);
                $article->a_image = $dossierImg . '/' . $nomImg;
            }

            if ($this->modeleArticle->insert($article)) {
                return $this->index();
            } else {
                $errors = $this->modeleArticle->errors();
            }
        }

        return view('articles/form', ['article' => $article, 'errors' => $errors]);
    }

    public function deleteArticle() {
        $tableArticle = $this->db->table('article');
        $query = $tableArticle->select('a_image')
                ->where('a_id', $this->post['id'])
                ->get();
        $image = $query->getResult()[0]->a_image;

        //suppression de l'article
        $tableArticle->delete(['a_id' => $this->post['id']]);

        //suppression de l'image de l'article stockée dans l'application
        unlink($_SERVER['DOCUMENT_ROOT'] . '/img/' . $image);
    }

}
