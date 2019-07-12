<?php

namespace App\Controller;

use App\Entity\Email;
use App\Entity\Users;
use App\Entity\SanctionJ;
use App\Entity\CompteEmail;
use App\Entity\ExtensionMail;
use App\Entity\OwnedVehicles;
use App\Form\CompteEmailType;
use App\Repository\EmailRepository;
use App\Repository\UsersRepository;
use App\Repository\CompteEmailRepository;
use App\Repository\ExtensionMailRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function profil(UserInterface $mabite, UsersRepository $repo, CompteEmailRepository $repos,  ObjectManager $manager)
    {
        dump($mabite);
        $info = new Users();
        $info = $repo->findOneBy(['identifier' => $mabite->getSteamHex()]);

        $sanction = new SanctionJ();
        $sanction = $manager->getRepository(SanctionJ::class)->findBysteam($mabite->getSteamHex());

        $vehicle = new OwnedVehicles();
        $vehicle = $manager->getRepository(OwnedVehicles::class)->findBysteam($mabite->getSteamHex());
        // $sanction = $repo2->findOneBy(['steamHex' => $mabite->getSteamHex()]);

        $compte = new CompteEmail();
        $compte = $repos->findOneBy(['steamHex' => $mabite->getSteamHex()]);

        dump($vehicle);
        return $this->render('profil/profil.html.twig',[
            'vehicle' => $vehicle,
            'users' => $mabite,
            'IG' => $info,
            'sanction' => $sanction,
            'emailtcheck' => $compte,
        ]);
    }

    /**
     * @Route("/email", name="boite_email")
     */
    public function boiteemail(UserInterface $user, UsersRepository $repo, EmailRepository $reposs, CompteEmailRepository $repos,  ObjectManager $manager)
    {
        $info = new Users();
        $info = $repo->findOneBy(['identifier' => $user->getSteamHex()]);

        
        $compteE = new CompteEmail();
        $compteE = $repos->findOneBy(['steamHex' => $user->getSteamHex()]);

        $email = new Email();
        $email = $reposs->fetchOneBy(['Cc' => $compteE->getAdresseMail()]);

        


        
        return $this->render('profil/receptionEmail.html.twig',[
            'users' => $user,
            'emailR' => $email,
        ]);
    }

      /**
     * @Route("/emailCreate", name="add_email")
     */
    public function addEmail(Request $request, UserInterface $user, UsersRepository $repo, ExtensionMailRepository $repos, CompteEmailRepository $repoE,  ObjectManager $manager)
    {

        $info = new Users();
        $info = $repo->findOneBy(['identifier' => $user->getSteamHex()]);

        $add = new CompteEmail();
        $form = $this->createForm(CompteEmailType::class, $add);

        $compteE = new CompteEmail();
        $compteE = $repoE->findOneBy(['steamHex' => $user->getSteamHex()]);

        $form->handleRequest($request);

       
            if($form->isSubmitted() && $form->isValid()){

                
                    $posts = $request->request->all();
                    $post = $request->request->get("extension");
                 
                $add->setAdresseMail($add->getAdresseMail().''.$post);
                $manager->persist($add);
                $manager->flush();
                dump($add);
                return $this->redirectToRoute('profil');
            }
      
        
        

        return $this->render('profil/index.html.twig',[
            'form' => $form->createView(),
            'info' => $info,
            'emailtcheck' => $compteE,
        ]);
    }
}
