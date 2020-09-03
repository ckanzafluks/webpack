<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function indexAction()
    {
        // template is stored in src/Resources/views/hello/index.html.php
        return $this->render('login/index.html.php', []);

    }

    /**
     * @Route("/lost-password", name="lost-password")
     */
    public function lostPasswordAction()
    {
        return $this->render('login/lost-password.html.php', []);
    }
}
