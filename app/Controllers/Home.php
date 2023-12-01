<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;

class Home extends BaseController
{
    private $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    public function index()
    {
        $data = [
            'page_title' => 'Início',
            'posts' => $this->postModel->join('users', 'users.idUser = posts.idUser')->findAll(),
        ];

        return view('pages/home/home', $data);
    }

    public function about()
    {
        $data = [
            'page_title' => 'Sobre',
        ];
        return view('pages/home/about', $data);
    }
}
