<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage() {
        return new Response("<h1>hello world</h1>", 400);
    }

    /**
     * @Route("/questions/{slug}/")
     */
    public function show($slug) {

        $loopsis = [
            "hello",
            "world",
            "how",
            "are",
            "you",
            "doing",
            "hehe"
        ];

        return $this->render("homepage.html.twig", [
            "my" => "context",
            "wuhu" => "nice",
            "testloop" => $loopsis,
        ]);
    }


}