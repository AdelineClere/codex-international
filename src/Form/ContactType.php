<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ContactType extends AbstractType
{
    public function __construct() {
        
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom',TextType::class)
            ->add('nom')
            ->add('societe',TextType::class,['required'=>false])
            ->add('telephone', TelType::class)
            ->add('email', EmailType::class)
            ->add('sujet',null,['required'=>false])
            ->add('message', TextareaType::class)                           
            ->add('horaires', ChoiceType::class, array(
                'choices' => array(
                'Choose schedule / Choisissez un horaire' => ('-'),
                '08:00 - 10:00 am / 08h - 10h' => ('08:00 - 10:00 am / 08h - 10h'),
                '10:00 - 11:59 am / 10h - 12h' => ('10:00 - 11:59 am / 10h - 12h'), 
                '00:01 - 02:00 pm / 12h - 14h' => ('00:01 - 02:00 pm / 12h - 14h'), 
                '02:00 - 04:00 pm / 14h - 16h' => ('02:00 - 04:00 pm / 14h - 16h'), 
                '04:00 - 06:00 pm / 16h - 18h' => ('04:00 - 06:00 pm / 16h - 18h'),
                '06:00 - 08:00 pm / 18h - 20h' => ('06:00 - 08:00 pm / 18h - 20h')
            )))                  
            ->getForm();
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}


