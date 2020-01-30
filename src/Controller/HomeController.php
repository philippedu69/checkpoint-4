<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @package App\Controller
 * @Route("/", name="home")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("", name="_index")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("gallery", name="_gallery")
     * @return Response
     */
    public function showGallery(): Response
    {
        return $this->render('gallery/index.html.twig');
    }
}