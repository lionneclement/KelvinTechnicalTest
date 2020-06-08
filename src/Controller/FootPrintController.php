<?php

namespace App\Controller;

use App\Entity\FootPrint;
use App\Form\FootprintType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FootPrintController extends AbstractController
{
    /**
     * @Route("/admin/list", name="list_footprint")
     */
    public function list()
    {
        $footprints = $this->getDoctrine()
            ->getRepository(FootPrint::class)
            ->findAll();

        return $this->render('admin/list.html.twig', [
            'footprints' => $footprints,
        ]);
    }

    /**
     * @Route("/admin/create", name="create_footprint")
     */
    public function create(Request $request)
    {
        $footPrint = new FootPrint();

        $form = $this->createForm(FootprintType::class, $footPrint);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($footPrint);
            $entityManager->flush();

            return $this->redirectToRoute('list_footprint');
        }

        return $this->render('admin/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
