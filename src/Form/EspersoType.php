<?php

namespace App\Form;

use App\Entity\Esperso;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Uerka\TranslationFormBundle\Form\Type\TranslationsType;


class EspersoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('image1', FileType::class, array('data_class' => null, 'required'=>false))
            ->add('image2', FileType::class, array('data_class' => null, 'required'=>false))
            ->add('pdf_nom', FileType::class, array('data_class' => null, 'required'=>false))
            ->add('translations',TranslationsType::class, [
                'required_locales' => ['en'],
                'fields' => [
                    'titre' => [
                        'widget_class' => TextType::class, // optional, default TextType::class
                        'options' => [ // will be passed to field's options
                            'label' => 'form_product.label.title',
                        ],
                    ],
                    'article' => [
                        'widget_class' => CKEditorType::class,
                        'options' => [
                            'label' => 'form_product.label.description',
                            'config' => array(
                                'filebrowserBrowseRoute' => 'elfinder',
                                'filebrowserBrowseRouteParameters' => array(
                                    'instance' => 'default',
                                    'homeFolder' => ''
                                )
                            ),
                        ]
                    ],
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Esperso::class,
        ]);
    }
}


