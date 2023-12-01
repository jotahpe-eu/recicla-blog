<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PostModel;

class User extends BaseController
{
    private $userModel;
    private $postModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->postModel = new PostModel();
    }

    public function index()
    {
        $data = [
            'page_title' => 'Usuários',
            'users' => $this->userModel->findAll(),
        ];
        return view('pages/user/users', $data);
    }

    public function profile()
    {
        $session = session();
        $idUser = $session->get('id');

        $data = [
            'page_title' => 'Minhas Publicações',
            'posts' => $this->postModel->where('idUser', $idUser)->findALL(),
        ];
        return view('pages/user/profile', $data);
    }

    public function myprofile()
    {
        $session = session();
        $idUser = $session->get('id');

        $data = [
            'page_title' => 'Meu Perfil',
            'user' => $this->userModel->find($idUser),
        ];
        return view('pages/user/myprofile', $data);
    }

    public function update()
    {
        $session = session();
        $idUser = $session->get('id');
        helper(['form']);

        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
        ];

        if($this->validate($rules)){
            $userModel = new UserModel();

            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];

            var_dump($data);
            $userModel->update($idUser, $data);

            $session->setFlashdata('msg', 'Edição realizada com sucesso.');
            return redirect()->to('/myprofile');
        }else{
            $session->setFlashdata('msg', 'Verifique os campos.');
            return redirect()->to('/myprofile');
        }
    }

    public function delete($idUser)
    {
        $this->userModel->delete($idUser);
        return redirect()->to('/users');
    }
}
