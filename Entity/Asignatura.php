<?php

namespace Proyectos\DepartamentoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignatura
 */
class Asignatura
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idasignatura;

    /**
     * @var \Proyectos\DepartamentoBundle\Entity\Alumno
     */
    private $alumnoalumno;

    /**
     * @var \Proyectos\DepartamentoBundle\Entity\Profesor
     */
    private $profesorprofesor;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Asignatura
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get idasignatura
     *
     * @return integer 
     */
    public function getIdasignatura()
    {
        return $this->idasignatura;
    }

    /**
     * Set alumnoalumno
     *
     * @param \Proyectos\DepartamentoBundle\Entity\Alumno $alumnoalumno
     * @return Asignatura
     */
    public function setAlumnoalumno(\Proyectos\DepartamentoBundle\Entity\Alumno $alumnoalumno = null)
    {
        $this->alumnoalumno = $alumnoalumno;
    
        return $this;
    }

    /**
     * Get alumnoalumno
     *
     * @return \Proyectos\DepartamentoBundle\Entity\Alumno 
     */
    public function getAlumnoalumno()
    {
        return $this->alumnoalumno;
    }

    /**
     * Set profesorprofesor
     *
     * @param \Proyectos\DepartamentoBundle\Entity\Profesor $profesorprofesor
     * @return Asignatura
     */
    public function setProfesorprofesor(\Proyectos\DepartamentoBundle\Entity\Profesor $profesorprofesor = null)
    {
        $this->profesorprofesor = $profesorprofesor;
    
        return $this;
    }

    /**
     * Get profesorprofesor
     *
     * @return \Proyectos\DepartamentoBundle\Entity\Profesor 
     */
    public function getProfesorprofesor()
    {
        return $this->profesorprofesor;
    }
}
