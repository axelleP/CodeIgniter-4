<?php

namespace App\Controllers;

class HomeController extends BaseController {

    protected $helpers = ['form', 'html'];

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger) {
        parent::initController($request, $response, $logger);
        $this->modeleArticle = new \App\Models\Article();
    }

    public function index() {
        $articles = $this->modeleArticle->findAll();
        return view('articles/list', ['articles' => $articles]);
    }

    public function addArticle() {
        $post = $this->request->getPost();

        if (isset($post['btnAnnuler'])) {
            return redirect()->to('/homeController/index');
        }

        $article = new \App\Entities\Article($post);
        $errors = array();

        if (isset($post['btnAddArticle'])) {
            if ($this->modeleArticle->insert($article)) {
                return $this->index();
            } else {
                $errors = $this->modeleArticle->errors();
            }
        }

        return view('articles/form', ['article' => $article, 'errors' => $errors]);
    }

}
