<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function index()
    {
        // template is stored in src/Resources/views/hello/index.html.php
        return $this->render('contact/index.html.php', [
            'name' => 'toto'
        ]);

    }
}
