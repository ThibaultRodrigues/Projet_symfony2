<?php

namespace App\Form;

use App\Entity\Inscription;
use App\Entity\Employe;
use App\Entity\Formation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lemploye', EntityType::class, [
                'class' => Employe::class,
                'choice_label' => 'nom',
                'label' => 'Employé'
            ])
            ->add('laFormation', EntityType::class, [
                'class' => Formation::class,
                'choice_label' => 'id',
                'label' => 'Formation'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Inscription::class,
        ]);
    }
}
?>