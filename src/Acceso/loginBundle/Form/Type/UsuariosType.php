<?php
namespace Acceso\loginBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UsuariosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            //->add('clave')
            //->add('confirmar','text',array('mapped' => false))
            ->add('clave', 'repeated', array(
                'type' => 'password',
                'invalid_message' => 'Los campos de contraseña deben coincidir.',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options'  => array('label' => ''),
                'second_options' => array('label' => ''),
                ))
            ->add('nivel','choice',array('choices'=>array(''=>'-- Seleccione --','1'=>'Nivel 1','2'=>'Nivel 2','3'=>'Nivel 3')))
            ->add('status','choice',array('choices'=>array('1'=>'Activo','0'=>'Inactivo')))            
            ->add('Enviar', 'submit');
    }

 
    public function getName()
    {
        return 'usuarios';
    }
}

