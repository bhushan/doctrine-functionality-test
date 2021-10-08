<?php

namespace App\Services;

use App\Repository\BlogPostRepository;
use Doctrine\ORM\EntityManagerInterface;

class BlogPostService
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    /**
     * @return array<string|int, mixed>
     */
    public function getTitles(): array
    {
        return $this
            ->entityManager
            ->getRepository(BlogPostRepository::class)
            ->getTitlesList();
    }
}
