<?php
namespace Billing\Persistence;

use Billing\Domain\Repository\CustomerRepositoryInterface;
use Billing\Domain\Repository\RepositoryInterface;

class CustomerRepository extends RepositoryAbstract implements CustomerRepositoryInterface
{
    protected $entityClass = "Billing\Domain\Entity\Customer";
}