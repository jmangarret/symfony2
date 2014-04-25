<?php

namespace Acceso\loginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity(repositoryClass="Acceso\loginBundle\Entity\usuariosRepository")
 */
class Usuarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=100)
     */
    private $clave;

    private $confirmar;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer")
     */
    private $nivel;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return usuarios
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
     * Set clave
     *
     * @param string $clave
     * @return usuarios
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    public function setConfirmar($confirmar)
    {
        $this->confirmar = $confirmar;

        return $this;
    }

    /**
     * Get confirmar
     *
     * @return string 
     */
    public function getConfirmar()
    {
        return $this->confirmar;
    }
    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return usuarios
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return usuarios
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
