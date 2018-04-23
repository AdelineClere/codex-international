<?php

namespace App\Form;

use App\Entity\Blog;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Uerka\TranslationFormBundle\Form\Type\TranslationsType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
                        'widget_class' => TextareaType::class,
                        'options' => [
                            'label' => 'form_product.label.description'
                        ]
                    ],
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Blog::class,
        ]);
    }
}
