<?php


namespace App\Controller;

use App\Entity\Price;
use App\Repository\PriceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PriceController extends AbstractController
{
    /**
     * @Route("/billeterie", name="billeterie")
     * @param PriceRepository $priceRepository
     * @return Response
     */
    public function index(PriceRepository $priceRepository): Response
    {
        return $this->render('billeterie/index.html.twig', [
            'prices' => $priceRepository->findAll()
        ]);
    }
}
