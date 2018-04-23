<?php
namespace App\Form;
use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Uerka\TranslationFormBundle\Form\Type\TranslationsType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pdf', FileType::class, array('data_class' => null))
            ->add('translations',TranslationsType::class, [
                'required_locales' => ['en'],
                'fields' => [
                    'nom' => [
                        'widget_class' => TextType::class, // optional, default TextType::class
                        'options' => [ // will be passed to field's options
                            'label' => 'form_product.label.title',
                        ],
                    ],
                    
                ],
            ])
                
            ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}