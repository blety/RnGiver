<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Card;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\SecurityBundle\Tests\Functional\Bundle\AclBundle\Entity\Car;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\CardType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $card = new Card();
        $form = $this->createForm(new CardType(), $card);
        $form->handleRequest($request);
        $cardRepository = $this->getDoctrine()->getRepository('AppBundle:Card');

        if ($form->isValid()) {
            $totalCount = $cardRepository->getTotalNb();
            $count = $cardRepository->getNb($card);

            return $this->render('default/homepage.html.twig', array(
                'form' => $form->createView(),
                'count' => $count,
                'totalCount' => $totalCount
            ));
        }

        return $this->render('default/homepage.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/saisie", name="saisie")
     */
    public function saisieAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $card = new Card();
        $form = $this->createForm(new CardType(), $card);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em->persist($card);
            $em->flush();

            return $this->redirectToRoute('list');
        }

        return $this->render('default/saisie.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/list", name="list")
     */
    public function listCardsAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Card');

        $cards = $repository->findAll();
        //var_dump($cards);
        return $this->render('default/listCards.html.twig', array(
            'cards' => $cards
        ));
    }
}
