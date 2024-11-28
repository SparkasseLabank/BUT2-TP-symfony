<?php

namespace App\Form;

use App\Entity\Article;
use Doctrine\DBAL\Types\TextType;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', null, [
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'form-label mt-2'],
            ])
            ->add('texte', null, [
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'form-label mt-2'],
            ])
            ->add('publie', null, [
                'attr' => ['class' => 'form-check-input mt-2'],
                'label_attr' => ['class' => 'form-check-label mt-1'],
                'required' => false,
            ])
            ->add('date', null, [
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'form-label mt-2'],
                'widget' => 'single_text',
            ])
            ->add('save', SubmitType::class, [
                'label' => "Créer/Modifier l'article",
                'attr' => ['class' => 'btn btn-primary mt-5']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
