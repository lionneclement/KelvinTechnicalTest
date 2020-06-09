<?php

namespace App\Controller;

use App\Form\CalculateType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CalculateController extends AbstractController
{
    /**
     * @Route("/", name="calculate")
     */
    public function index(Request $request)
    {
        $carbonKg = null;
        $form = $this->createForm(CalculateType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $amount = $data["amount"];
            $ratio = $data["expenseType"]->getRatio();
            $carbonKg = ($amount * $ratio)/1000;
        }

        return $this->render('calculate/index.html.twig', [
            'form' => $form->createView(),
            'carbonKg' => $carbonKg
        ]);
    }
}
