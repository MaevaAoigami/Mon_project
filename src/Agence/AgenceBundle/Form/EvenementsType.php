<?php

namespace Agence\AgenceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use Agence\AgenceBundle\Form\DanseusesType;
use Agence\AgenceBundle\Form\MediaEventType;

class EvenementsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('location')
            ->add('dateHour')
            ->add('image', new MediaEventType())
            ->add('danseuses', 'entity', array(
                'class' => 'AgenceBundle:Danseuses',
                'multiple' => true,
                'expanded' => true,
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                              ->where('u.disponible = 1')
                              ->orderBy('u.nom', 'ASC');
                },
                ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Agence\AgenceBundle\Entity\Evenements'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'agence_agencebundle_evenements';
    }
}
