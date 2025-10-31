<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    #[Route('api/news/{id}', name: 'api_news', methods: ['GET'])]
    public function getNew(int $id=null): Response
    {
        // TODO - criar uma query real
        $new = [
            "id" => $id,
            "titulo" => "Artista brasileiro é premiado em festival internacional de cinema.",
            "categoria" => "Cultura",
            "descricao" => "O artista brasileiro João da SIlva ganhou um prêmio de melhor filme no festival de Londres, na Inglaterra",
            "data" => "2022-02-10",
            "imagem" => "https://preview.redd.it/what-movie-truly-is-absolute-cinema-v0-ymqjcopfuh0f1.jpeg?width=320&crop=smart&auto=webp&s=c13eef2695e7cc6d342627bcae8d4f0cf76d8c19"
        ];

        return new JsonResponse($new);
    }
}