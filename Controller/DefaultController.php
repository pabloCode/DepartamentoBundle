<?php

namespace Proyectos\DepartamentoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Proyectos\DepartamentoBundle\Entity\Alumno;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {

        return $this->render('ProyectosDepartamentoBundle:Default:index.html.twig', array('name' => $name));
    }
    public function crearAction(){
        $alumno = new Alumno();
        $alumno->setNombre('Antonio');
        $alumno->setApellido('Moya');

        $em = $this->getDoctrine()->getManager();
        $em->persist($alumno);
        $em->flush();

        return new Response('Creado alumno id ' .$alumno->getIdalumno());
    }

    public function muestraAlumnoAction($id){
        $alum = new Alumno();

        $alumno = $this->getDoctrine()->getRepository('ProyectosDepartamentoBundle:Alumno')->find($id);


        return $this->render('ProyectosDepartamentoBundle:Default:index.html.twig', array('name' => $alumno->getNombre()  ));
    }
}
