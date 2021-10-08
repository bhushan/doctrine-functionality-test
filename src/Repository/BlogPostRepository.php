<?php

declare(strict_types=1);

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class BlogPostRepository extends EntityRepository
{
    /**
     * @return array<string|int, mixed>
     */
    public function getTitlesList(): array
    {
        return $this->createQueryBuilder('bp')
            ->select('bp.title')
            ->addSelect('bp.id as HIDDEN i')
            ->orderBy('i', 'DESC')
            ->getQuery()
            ->getSingleColumnResult();
    }
}
