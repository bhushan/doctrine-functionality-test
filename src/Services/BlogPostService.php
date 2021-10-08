<?php

namespace App\Services;

use App\Repository\BlogPostRepository;
use Doctrine\ORM\EntityManagerInterface;

class BlogPostService
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getTitles()
    {
        $titles = $this
            ->entityManager
            ->getRepository(BlogPostRepository::class)
            ->getTitlesList();

        return $titles;
    }
}
