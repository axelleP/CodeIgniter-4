<?php

namespace App\Controllers;

use App\Models\Article;//permet de faire new Article()

class HomeController extends BaseController {

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger) {
        parent::initController($request, $response, $logger);
        $this->modeleArticle = new \App\Models\Article();
        helper('form');
        helper('html');
    }

    public function index() {
        $articles = $this->modeleArticle->findAll();

        foreach ($articles as $article) {
//            $article->a_nom = $article->getNom();
//            $this->modeleArticle->update($article->a_id, $article);
        }

        return view('articles/list', [
            'articles' => $articles
        ]);
    }

    public function addArticle() {
//        if (!empty($this->request)) {
//            $article = new Article();
//            $article->fill = $this->request;
//
//            if ($this->modeleArticle->validate($article)) {
//                $this->modeleArticle->insert($article);
//            } else {
//                //error
//            }
//
//        }

        return $this->index();
    }

}
