<?php
namespace Billing\Domain\Value;

class Name
{
    protected $name;
    public function __construct(string $name)
    {
        $this->Name = $name;
    }

    public function getName(){
        return $this->Name;
    }
}