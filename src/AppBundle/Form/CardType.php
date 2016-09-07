<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CardType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array('required' => false))
            ->add('cost', null, array('required' => false))
            ->add('type', 'choice', array('choices' => array('minion' => 'Minion', 'spell' => 'Spell')))
            ->add('race', 'choice', array('choices' => array('Mech' => 'Mech', 'Beast' => 'Beast', 'Murloc' => 'Murloc', 'Demon' => 'Demon', 'Dragon' => 'Dragon', 'Pirate' => 'Pirate'), 'required' => false))
            ->add('health', null, array('required' => false))
            ->add('attack', null, array('required' => false))
            ->add('divineShield')
            ->add('charge')
            ->add('taunt')
            ->add('windfury')
            ->add('stealth')
            ->add('battlecry')
            ->add('deathrattle')
            ->add('discard')
            ->add('combo')
            ->add('enrage', null, array('required' => false))
            ->add('spellDamage', null, array('required' => false))
            ->add('overload')
            ->add('choose')
            ->add('inspire')
            ->add('joust')
            ->add('classe', 'entity', array('class' => 'AppBundle:Classe', 'choice_label' => 'name', 'required' => false))
            ->add('extension', 'entity', array('class' => 'AppBundle:Extension', 'choice_label' => 'name', 'required' => false))
            ->add('rarity', 'entity', array('class' => 'AppBundle:Rarity','choice_label' => 'name', 'required' => false))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Card'
        ));
    }
}
