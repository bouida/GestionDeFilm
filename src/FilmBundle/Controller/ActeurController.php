<?php

namespace FilmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FilmBundle\Entity\Acteur;
use FilmBundle\Form\ActeurType;
use Symfony\Component\HttpFoundation\Response;
class ActeurController extends Controller
{
    public function ajoutAction()
    {
    	$message="Ajouter un Acteur";
    	$en=$this->getDoctrine()->getManager() ;

    	$Acteur=new Acteur();
    	$form=$this->createForm(new ActeurType(),$Acteur);
    	$request=$this->getRequest();
        if($request->getMethod()=='POST'){
        	$form->handleRequest($request);
        	if($form->isValid()){
        		$en->persist($Acteur);
        		$en->flush();
        		//$message="L'envoi de l'acteur a été envoyé avec succés";
                return $this->redirectToRoute('acteur');
        	}
        }
        return $this->render('FilmBundle:Acteur:edit.html.twig',array('form'=>$form->createView(),'msg'=>$message
        	)
        );
     }

     public function afficheAction(){
        $en=$this->getDoctrine()->getManager() ;
        $acteurs=$en->getRepository('FilmBundle:Acteur')->findAll();
        return $this->render('FilmBundle:Acteur:acteur.html.twig',array('acteurs'=>$acteurs));
     }
     public function modifierAction($id) {
        $message="Modifier un Acteur";
        $en=$this->getDoctrine()->getManager() ;

        $Acteur=$acteurs=$en->getRepository('FilmBundle:Acteur')->find($id);
        $form=$this->createForm(new ActeurType(),$Acteur);
        $request=$this->getRequest();
        if($request->getMethod()=='POST'){
            $form->handleRequest($request);
            if($form->isValid()){
                $en->flush();
                //$message="L'envoi de l'acteur a été envoyé avec succés";
                return $this->redirectToRoute('acteur');
            }
        }
        return $this->render('FilmBundle:Acteur:edit.html.twig',array('form'=>$form->createView(),'msg'=>$message
            )
        );


     }
     public function supprimerAction($id){
          $en=$this->getDoctrine()->getManager() ;  

        $Acteur = $en -> find('FilmBundle:Acteur',$id);
        if(!$Acteur){
            throw $this->createNotFoundException('Acteur avec l \'id' . $id. ' n\'existe pas');
        }
        $en->remove($Acteur);
        $en->flush();

        //return new Response('Un acteur  a été suprimé. ');
        return $this->redirectToRoute('acteur');
     }
}
