<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/home", name="home_route")
     */
    public function indexAction()
    {
        $data = array();
        $em = $this->getDoctrine()->getManager();
        $articleRepository = $em->getRepository('BlogBundle:Article');
        $articleAll = $articleRepository->findAll();

        return $this->render('BlogBundle:Default:index.html.twig', ['articleAll' => $articleAll]);

    }

    /**
     * @Route("/create_article", name="create_article_route")
     */

    public function createAction()
    {

        $article = new Article();
        $article->setTitle("Learn Symfony 3");
        $article->setDescription("Learn Symfony 3 and StackAcademy. The easy way.");
        $article->setContent("Welcome the our latest serials turtorial...");
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        return new Response("Saved new article with id = " . $article->getId());

    }


    /**
     * @Route("/show_article/{idArticle}", name="show_article_route")
     */
    public function showArticleAction($idArticle)
    {
        $em = $this->getDoctrine()->getManager();
        $articleRepository = $em->getRepository('BlogBundle:Article');
        $article = $articleRepository->find($idArticle);

        if (is_null($article)) {
            return new Response('No article found for id = ' . $idArticle);
        }

        return $this->render('BlogBundle:Default:article.html.twig', ['article' => $article]);
    }

    /**
     * @Route("/update_article/{idArticle}", name="update_article_route")
     */
    public function updateArticleAction($idArticle)
    {

        $em = $this->getDoctrine()->getManager();
        $articleRepository = $em->getRepository('BlogBundle:Article');
        $article = $articleRepository->find($idArticle);

        if (is_null($article)) {
            return new Response('No article found for id = ' . $idArticle);
        }

        $article->setTitle('Learn Symfony 3 the right way');
        $em->flush();
        return new Response("Updated article with id = " . $article->getId());

    }

    /**
     * @Route("/delete_article/{idArticle}", name="delete_article_route")
     */
    public function deleteArticleAction($idArticle)
    {

        $em = $this->getDoctrine()->getManager();
        $articleRepository = $em->getRepository('BlogBundle:Article');
        $article = $articleRepository->find($idArticle);

        if (is_null($article)) {
            return new Response('No article found for id = ' . $idArticle);
        }

        $em->remove($article);
        $em->flush();
        return new Response("The article with id = " . $article->getId() . " was deleted");

    }
}
