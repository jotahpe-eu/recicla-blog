<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;

class Posts extends BaseController
{
    private $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    public function getPost($id)
    {
        $data = [
            'page_title' => 'Post',
            'posts' => $this->postModel->join('users', 'users.idUser = posts.idUser')->find($id),
        ];
        return view('pages/post/post', $data);
    }

    public function new()
    {
        $data = [
            'page_title' => 'Novo Post',
        ];

        return view('pages/post/new', $data);
    }

    public function store()
    {
        $session = session();
        $idUser = $session->get('id');
        helper(['form']);
        $postModel = new PostModel();

        echo $this->request->getVar('title');

        $data = [
            'idUser'     => $idUser,
            'title'      => $this->request->getVar('title'),
            'content'    => $this->request->getVar('content'),
        ];
        $postModel->save($data);
        $session->setFlashdata('msg', 'Publicado com sucesso!');

        //echo "Cadastro realizado com sucesso.";
        return redirect()->to('/');
    }

    public function edit($id)
    {
        $data = [
            'page_title' => 'Editar Post',
            'post'       => $this->postModel->find($id),
        ];

        return view('pages/post/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'title'      => $this->request->getVar('title'),
            'content'    => $this->request->getVar('content'),
        ];
        $this->postModel->update($id, $data);
        return redirect()->to('/profile');
    }

    public function delete($idPost)
    {
        $this->postModel->delete($idPost);
        return redirect()->to('/profile');
    }
}
