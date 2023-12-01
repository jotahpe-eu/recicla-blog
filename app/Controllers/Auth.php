<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        $data = [
            'page_title' => 'Login',
        ];
        return view('pages/auth/login', $data);
    }

    public function register()
    {
        $data = [
            'page_title' => 'Registro',
        ];
        return view('pages/auth/register', $data);
    }

    public function store()
    {
        $session = session();
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
                'level'    => 1,
            ];
            $userModel->save($data);
            $session->setFlashdata('msg', 'Cadastro realizado com sucesso.');

            //echo "Cadastro realizado com sucesso.";
            return redirect()->to('/login');
        }else{
            //$data['validation'] = $this->validator;
            //echo view('signup', $data);
            $session->setFlashdata('msg', 'Verifique os campos.');
            return redirect()->to('/register');
        }

    }

    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['idUser'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'level' => $data['level'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/');

            }else{
                $session->setFlashdata('msg', 'Senha incorreta.');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email não está registrado.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy(); // Destroi todas as variáveis de sessão
        return redirect()->to('/login'); // Redireciona para a página de login após o logout
    }
}
