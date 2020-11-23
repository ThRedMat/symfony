<?php

namespace App\Form;

use App\Entity\Offres;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddNewOffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Title')
            ->add('Description')
            ->add('Adresse')
            ->add('CodePostal')
            ->add('Ville')
            //->add('CreatedAt')
            //->add('UpdatedAt')
            ->add('MissionEnd')
            ->add('Contrat')
            ->add('TypeContrat');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Offres::class
        ]);
    }
}
