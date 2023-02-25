<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends AbstractController
{

    public function index():Response
    {
        return new Response('Hello index');
    }
    public function list():Response
    {
        return new Response('Hello list');
    }
    public function show():Response
    {
        return new Response('Hello show');
    }
    public function store():Response
    {
        return new Response('Hello store');
    }
    public function update():Response
    {
        return new Response('Hello update');
    }
    public function delete():Response
    {
        return new Response('Hello delete');
    }

# générer un url à partir d'une route
    public function genUrl():Response
    {
        $url= $this->generateUrl('welcome_index_list');
        return new Response($url);

    }



}