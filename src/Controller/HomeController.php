<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $categorias = [
            ['title' => 'Mundo', 'text' => 'Noticias sobre o Mundo'],
            ['title' => 'Brasil', 'text' => 'Noticias sobre o Brasil'],
            ['title' => 'Tecnologia', 'text' => 'Noticias sobre Tecnologia'],
            ['title' => 'Desgin', 'text' => 'Noticias sobre Desgin'],
            ['title' => 'Cultura', 'text' => 'Noticias sobre Cultura'],
            ['title' => 'Negócios', 'text' => 'Noticias sobre Negócios'],
            ['title' => 'Política', 'text' => 'Noticias sobre Política'],
            ['title' => 'Opinião', 'text' => 'Noticias sobre Opinião'],
            ['title' => 'Ciência', 'text' => 'Noticias sobre Ciência'],
            ['title' => 'Saúde', 'text' => 'Noticias sobre Saúde'],
            ['title' => 'Estilo de Vida', 'text' => 'Noticias sobre Estilo de Vida'],
            ['title' => 'Viagens', 'text' => 'Noticias sobre Viagens'],
        ];

        $pageTitle = "Sistema de Notícias";
        return $this->render('home.html.twig', [
            'categories' => $categorias,
            'pageTitle' => $pageTitle,
        ]);
    }

    #[Route('/categoria/{slug}', name: 'app_category_list')]
    public function category(string $slug = null): Response
    {
        $categorias = [
            ['title' => 'Mundo', 'text' => 'Noticias sobre o Mundo'],
            ['title' => 'Brasil', 'text' => 'Noticias sobre o Brasil'],
            ['title' => 'Tecnologia', 'text' => 'Noticias sobre Tecnologia'],
            ['title' => 'Desgin', 'text' => 'Noticias sobre Desgin'],
            ['title' => 'Cultura', 'text' => 'Noticias sobre Cultura'],
            ['title' => 'Negócios', 'text' => 'Noticias sobre Negócios'],
            ['title' => 'Política', 'text' => 'Noticias sobre Política'],
            ['title' => 'Opinião', 'text' => 'Noticias sobre Opinião'],
            ['title' => 'Ciência', 'text' => 'Noticias sobre Ciência'],
            ['title' => 'Saúde', 'text' => 'Noticias sobre Saúde'],
            ['title' => 'Estilo de Vida', 'text' => 'Noticias sobre Estilo de Vida'],
            ['title' => 'Viagens', 'text' => 'Noticias sobre Viagens'],
        ];

        $pageTitle = "Noticias sobre $slug";
        return $this->render('category.html.twig', [
            'categories' => $categorias,
            'pageTitle' => $pageTitle,
        ]);
    }
}