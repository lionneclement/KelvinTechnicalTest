<?php

namespace App\Form;

use App\Entity\FootPrint;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;

class CalculateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount', MoneyType::class)
            ->add('expenseType', EntityType::class, [
                    'class' => FootPrint::class,
                    'choice_label'=>'expenseType',
                    'label'=>'Expense Type'
                ]
            )
        ;
    }
}
