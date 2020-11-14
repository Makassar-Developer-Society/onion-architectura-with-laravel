<?php
namespace Billing\Domain\Entity;

use Billing\Domain\Value\Name;
use Billing\Domain\Value\Email;

/**
 * @Entity
 * @table(name="customers")
 */
class Customer extends AbstractEntity
{
    // untuk menangani updated_at and created_at
    use DateTimeCreateTrait;

	/**
	 * @Column(type="string")
	 * @Column(length=100)
	 */
	protected $name;

	/**
	 * @Column(type="string")
	 * @Column(length=100)
	 */
    protected $email;

    // /**
	//  * @Column(type="string")
	//  * @Column(length=100)
	//  */
    // protected $role;

    public function setName(Name $name)
    {
        $this->name = $name->getName();
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail(Email $email)
    {
        $this->email = $email->getEmail();
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setRole(string $role)
    {
        $this->email = $role;
        return $this;
    }

    public function getRole()
    {
        return $this->email;
    }
}