<?php
namespace Billing\Domain\Value;

class Name
{
    protected $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}