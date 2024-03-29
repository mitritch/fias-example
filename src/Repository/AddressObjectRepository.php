<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\AddressObject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AddressObject|null find($id, $lockMode = null, $lockVersion = null)
 * @method AddressObject|null findOneBy(array $criteria, array $orderBy = null)
 * @method AddressObject[]    findAll()
 * @method AddressObject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddressObjectRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AddressObject::class);
    }
}
