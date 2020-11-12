<?php
namespace Billing\Domain\Entity;

trait DateTimeCreateTrait
{

     /**
	 * @Column(type="datetime")
	 */
    protected $created_at;

	/**
	 * @Column(type="datetime", nullable=true)
	 */
    protected $updated_at;

    public function setCreatedAt(){
        $this->created_at = new \DateTime('now');
        return $this;

    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setUpdatedAt(){
        $this->updated_at = new \DateTime('now');
        return $this;

    }

    public function getUpdateddAt()
    {
        return $this->updated_at;
    }
}