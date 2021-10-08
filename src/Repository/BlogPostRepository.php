<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class BlogPostRepository extends EntityRepository
{
    public function getTitlesList()
    {
        $this->createQueryBuilder('bp')
            ->select([
                'id as Hidden i',
                'title'
            ])
            ->orderBy('i', 'DESC')
            ->getQuery()
            ->getSingleColumnResult();
    }
}
