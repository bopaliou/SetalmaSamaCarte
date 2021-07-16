<?php

namespace App\Controller;

use App\Repository\AnnonceRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AllAnnonceController extends AbstractController
{
    /**
     * @Route("/all/annonce", name="all_annonce")
     */
    public function index(AnnonceRepository $annonceRepository): Response
    {
        $annonces=$annonceRepository->findAll();
        return $this->render('all_annonce/index.html.twig', [
            'annonces' => $annonces,
        ]);
    }
}
