<?php

namespace Acceso\loginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Acceso\loginBundle\Entity\Usuarios;
use Acceso\loginBundle\Form\Type\UsuariosType;
use Doctrine\ORM\EntityRepository;

class UsuariosController extends Controller
{
    public function indexAction()
    {
        return $this->render('AccesologinBundle:Default:index.html.twig');
    }
    ///EJEMPLO LLAMANDO EL FORMULARIO DESDE LA CLASE TYPE
    public function nuevoAction(Request $request)
	{
	    $usuario = new Usuarios();
	    $form = $this->createForm(new UsuariosType(), $usuario);
		

 		if($request->getMethod()=='POST'){ 
	    	$form ->bind($request);
	    	if ($form->isValid()){
	            $em = $this->getDoctrine()->getEntityManager();
	            $em->persist($usuario);
	            $em->flush();
	            return $this->redirect($this->generateUrl('accesologin_lista'));
	        } 
  		}

		return $this->render('AccesologinBundle:Default:newusuario.html.twig', array(
		    'form' => $form->createView(),
		));	 


	    
	}
	///EJEMPLO DECLARANDO EL FORMULARIO EN LA MISMA FUNCION
	public function nuevo2Action(Request $request){
		$usuario= new Usuarios();
 		$form = $this->createFormBuilder($usuario) 
	   	->add('nombre')
            ->add('clave')
            ->add('confirmar','text',array('mapped' => false))
            ->add('nivel','choice',array('choices'=>array(''=>'-- Seleccione --','1'=>'Nivel 1','2'=>'Nivel 2','3'=>'Nivel 3')))
            ->add('status','choice',array('choices'=>array('1'=>'Activo','0'=>'Inactivo')))
            ->add('Enviar', 'submit')
            ->getForm();  
 
 		if($request->getMethod()=='POST'){ 
	    	$form ->bind($request);
	    	if ($form->isValid()){
	            $em = $this->getDoctrine()->getEntityManager();
	            $em->persist($usuario);
	            $em->flush();
	            return $this->redirect($this->generateUrl('accesologin_lista'));
	        } 
  		}
        return $this->render('AccesologinBundle:Default:newusuario.html.twig', array(
		'form' => $form->createView(),)); 
	}

	public function listadoAction()
	{		
		$em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AccesologinBundle:Usuarios')->findAll();
        return $this->render('AccesologinBundle:Default:listausuario.html.twig', array(
            'entities' => $entities,
        ));
	}


}

