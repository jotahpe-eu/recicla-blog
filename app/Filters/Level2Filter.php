<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Level2Filter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Verifica se o usuário está logado e tem o nível 2
        $session = session();
        if (!$session->isLoggedIn || $session->level == 1) {
            // Se não atender aos critérios, redireciona para a página de login
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Você pode deixar este método vazio ou implementar ações após a execução do controlador
    }
}
