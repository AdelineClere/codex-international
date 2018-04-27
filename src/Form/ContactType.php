<?php
// c est pour le formulaire des produits
//c est un service. c est lui qui va gerer notre formulaire produits. il gere tout ce qui est en rapport avc notre formulaire
namespace App\Form;
//pas de pb que textarea soit declare ci dessous et a la ligne 19.


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
                '8am-10am' => ('8am-10am'),
                '10am-12am' => ('10am-12am'), 
                '12pm-14pm' => ('12pm-14pm'), 
                '14pm-16pm' => ('14pm-16pm'), 
                '16pm-18pm' => ('16pm-18pm'),
                '18pm-20pm' => ('18pm-20pm')
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


