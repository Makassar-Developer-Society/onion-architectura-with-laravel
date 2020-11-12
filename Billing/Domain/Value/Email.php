<?php
namespace Billing\Domain\Value;

class Email
{
    protected $email="";
    public function __construct(string $email)
    {
        $this->Email = $email;
    }

    public function getEmail(){
        return $this->Email;
    }
}