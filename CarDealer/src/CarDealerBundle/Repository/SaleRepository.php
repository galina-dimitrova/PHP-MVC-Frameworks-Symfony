<?php

namespace CarDealerBundle\Repository;

/**
 * SaleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SaleRepository extends \Doctrine\ORM\EntityRepository
{
    public function findWithDiscount($percent)
    {
        return $this->createQueryBuilder('s')
            ->where('s.discount = :dis')
            ->setParameter('dis', $percent)
            ->getQuery()
            ->getResult();
    }

    public function findWithSomeDiscount()
    {
        return $this->createQueryBuilder('s')
            ->where('s.discount > :dis')
            ->setParameter('dis', 0)
            ->getQuery()
            ->getResult();
    }
}
