<?php
namespace Billing\Persistence;

use Billing\Domain\Repository\RepositoryInterface;

class CustomerRepository extends AbstractRepository implements RepositoryInterface
{
    protected $entityClass = "Billing\Domain\Entity\Customer";
}