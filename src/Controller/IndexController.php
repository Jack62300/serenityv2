<?php

namespace App\Controller;

use App\Entity\News;
use App\Entity\Users;
use App\Entity\SanctionJ;
use App\Entity\OwnedVehicles;
use App\Repository\NewsRepository;
use App\Repository\UsersRepository;
use App\Repository\SanctionJRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(EntityManagerInterface $em)
    {
        $limit = 5;
        $queryBuilder = $em->getRepository(News::class)->createQueryBuilder('j');
        $queryBuilder->setMaxResults( $limit );
        $queryBuilder->orderBy('j.id', 'ASC');
        $news = $queryBuilder->getQuery()->getResult();

        return $this->render('index/index.html.twig', [
            'news' => $news,
        ]);
    }

    /**
     * @Route("/news/{id}", name="news_perso")
     */
    public function newsPerso(NewsRepository $repo, $id)
    {
       $news = new News();
       $news = $repo->find($id);

        return $this->render('index/article.html.twig', [
            'news' => $news,
        ]);
    }

    
}
