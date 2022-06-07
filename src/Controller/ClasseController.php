<?php

namespace App\Controller;


use App\Entity\Classe;
use App\Form\ClasseType; 
use App\Repository\ClasseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 
// lister professeur et pagination
class ClasseController extends AbstractController
{
    #[Route('/classe', name: 'app_classe')]
    public function index(
        ClasseRepository $repo,
        PaginatorInterface $paginator,
        Request $request
        ): Response
    {

     $classes=$repo->findAll();
     $classes=$paginator->paginate(
         $classes,
         $request->query->getInt('page',1),5
     );
        return $this->render('classe/index.html.twig', [
            'controller_name' => 'ClasseController',
            'classes'=>$classes
        ]);

    }

    
    
     #[Route('/add/classe', name: 'add-classe')]
     #[Route('/{id}/edit', name: 'classe-edit')]
    
    public function add(Request $request,EntityManagerInterface $manager ,Classe $classe=null)
    {
       

     if(!$classe){
        $classe= new Classe();
     }
     // Creation de formulaire
       
        /* $classe = new Classe(); */
        $form = $this->createForm(ClasseType::class,$classe);

       


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           /* $em= $this-> addReference() */ 
          // dd('in add');

           $manager->persist($classe);
          $manager -> flush();
           

            /* $classe = $form->getData(); */

            return $this->redirectToRoute('add-classe');

        }
        return $this->render('classe/form.html.twig', [
            'form' => $form ->createView(),
             'edit'=>$classe -> getId() !== null
        ]);
    } 
       
}
  

