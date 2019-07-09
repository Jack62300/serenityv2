<?php

namespace App\Controller;

use App\Entity\News;
use App\Repository\NewsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(NewsRepository $repo)
    {
        $news = new News();
        $news = $repo->findAll();

        return $this->render('index/index.html.twig', [
            'news' => $news,
        ]);
    }
}
