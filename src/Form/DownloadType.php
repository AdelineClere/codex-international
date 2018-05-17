<?php

namespace App\Form;

use App\Entity\Download;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Uerka\TranslationFormBundle\Form\Type\TranslationsType;

class DownloadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pdf_nom', FileType::class, array('data_class' => null))
            ->add('translations',TranslationsType::class, [
                'required_locales' => ['en'],
                'fields' => [
                    'sujet' => [
                        'widget_class' => TextType::class, // optional, default TextType::class
                        'options' => [ // will be passed to field's options
                            'label' => 'form_product.label.title',
                        ],
                    ],
                    'description' => [
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
            'data_class' => Download::class,
        ]);
    }
}
