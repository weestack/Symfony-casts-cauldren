<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage() {
        return $this->render("homepage.html.twig");
    }

    /**
     * @Route("/questions/{slug}/", name="app_questions")
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
            dump( $slug,$this);
        return $this->render("questions.twig", [
            "my" => "context",
            "wuhu" => "nice",
            "testloop" => $loopsis,
        ]);
    }


}