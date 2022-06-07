<?php

namespace App\Controller;

use App\Repository\ProfesseurRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfesseurController extends AbstractController
{
    #[Route('/professeur', name: 'app_professeur')]
    public function index( ProfesseurRepository $repo,
    PaginatorInterface $paginator,
    Request $request
     ): Response
    {
         $data=$repo->findAll(); 
        $professeurs=$paginator->paginate($data,
        $request->query->getInt('page',1),5
    ); 
       
        return $this->render('professeur/index.html.twig', [
            'controller_name' => 'ProfesseurController',
            'professeurs'=>$professeurs 
        ]);
    }
}
