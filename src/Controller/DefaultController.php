<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\TodoLists;
use App\GreetingGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/simplicity")
     */
    public function simple()
    {
        return new Response('Simple! Easy! Great!');
    }

    /**
     * @Route("/api/hello/{name}")
     */
    public function apiExample($name)
    {
        return $this->json([
            'name' => $name,
            'symfony' => 'rocks',
       ]);
    }

    /**
     * @Route("/")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $list = $entityManager->getRepository(TodoLists::class)->findBy(array(), array('name' => 'DESC'));
        dump($list);
        return $this->render('default/index.html.twig', [
            'list' => $list,
        ]);
    }
}
