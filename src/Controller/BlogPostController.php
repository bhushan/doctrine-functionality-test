<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\BlogPost;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/blog/post')]
class BlogPostController extends AbstractController
{
    #[Route('/', name: 'blog_post_index', methods: ['GET'])]
    public function index(): Response
    {
        $blogPosts = $this->getDoctrine()
            ->getRepository(BlogPost::class)
            ->getTitlesList();

        return $this->render('blog_post/index.html.twig', [
            'blog_posts' => $blogPosts,
        ]);
    }
}
