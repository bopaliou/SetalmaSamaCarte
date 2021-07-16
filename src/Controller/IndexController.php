<?php

namespace App\Controller;

use App\Repository\AnnonceRepository;
use App\Repository\DocumentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index( DocumentRepository $documentRepository,AnnonceRepository $annonceRepository): Response
    {
        $documents=$documentRepository->findAll(2);
        $annonces=$annonceRepository->findAll(2);
        return $this->render('index/index.html.twig', [
            'documents' => $documents,
            'annonces' => $annonces
        ]);
    }
}
