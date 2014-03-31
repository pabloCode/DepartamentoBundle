<?php

namespace Proyectos\DepartamentoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignatura
 *
 * @ORM\Table(name="asignatura")
 * @ORM\Entity
 */
class Asignatura
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAsignatura", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idasignatura;

    /**
     * @var \Proyectos\DepartamentoBundle\Entity\Alumno
     *
     * @ORM\ManyToOne(targetEntity="Proyectos\DepartamentoBundle\Entity\Alumno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Alumno_idAlumno", referencedColumnName="idAlumno")
     * })
     */
    private $alumnoalumno;

    /**
     * @var \Proyectos\DepartamentoBundle\Entity\Profesor
     *
     * @ORM\ManyToOne(targetEntity="Proyectos\DepartamentoBundle\Entity\Profesor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Profesor_idProfesor", referencedColumnName="idProfesor")
     * })
     */
    private $profesorprofesor;


}
