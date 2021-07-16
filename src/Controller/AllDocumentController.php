<?php

namespace App\Controller;

use App\Repository\DocumentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AllDocumentController extends AbstractController
{
    /**
     * @Route("/all/document", name="all_document")
     */
    public function index( DocumentRepository $documentRepository): Response
    {
        $documents=$documentRepository->findAll();
        return $this->render('all_document/index.html.twig', [
            'documents' => $documents,
        ]);
    }
}
