<?php
namespace Billing\Domain\Factory;

use Billing\Domain\Entity\Customer;
use Billing\Domain\Value\Email;
use Billing\Domain\Value\Name;

class CustomerFactory
{
    public function CreateCustomerEntity(Email $email,Name $name)
    {
        $customer = new Customer();
        $customer->setEmail($email);
        $customer->setName($name);
        $customer->setUpdatedAt();
        $customer->setCreatedAt();

        return $customer;
    }


}