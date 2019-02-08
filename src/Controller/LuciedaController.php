<?php
//*********************************************************** 
//Nom  du Fichier : 
//Rôle :
//Dâte modification:
//*********************************************************** */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuciedaController extends AbstractController
{
    /**
     * @Route("/lucieda", name="lucieda")
     */
    public function index()
    {
        return $this->render('lucieda/index.html.twig', [
            'controller_name' => 'LuciedaController',
        ]);
    }

    /**
     * @Route ("/", name="home")
     */
    public function home()
    {
        return $this->render('lucieda/home.html.twig');
    }

    /**
     * @Route ("/", name="contact")
     */
    public function contact()
    {
        return $this->render('lucieda/vue/contact.html.twig');
    }

    /**
     * @Route ("/connexion", name="connexion")
     */    
    public function login()
    {
        return $this->render('lucieda/vue/login.html.twig');
    }

    /**
     * @Route ("/catalogue", name="catalogue")
     */
    public function catalogue()
    {
        return $this->render('lucieda/vue/catalogue.html.twig');
    }

    /**
     * @Route ("/about", name="about")
     */
    public function about()
    {
        
    }
}
