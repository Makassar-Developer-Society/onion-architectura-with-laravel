<?php
namespace Billing\Persistence;

use Billing\Domain\Entity\AbstractEntity;
use Billing\Domain\Repository\RepositoryInterface;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

abstract class RepositoryAbstract implements RepositoryInterface
{
    protected $entity;
    protected $entityClass;

    public function __construct(EntityManagerInterface $entity)
    {
        $this->entity = $entity;
    }

    public function findById($id)
    {
        $result = $this->entity->find($this->entityClass,$id);
        return $result;
    }

    public function begin()
	{
		$this->entity->beginTransaction();
		return $this;
	}

    public function getAll()
    {
        $result = $this->entity->getRepository($this->entityClass)->findAll();

        return $result;
    }

    public function persist(AbstractEntity $entity)
    {
        $this->entity->persist($entity);
		return $this;
    }

    public function commit()
	{
		$this->entity->flush();
		$this->entity->commit();
		return $this;
	}

	public function flush()
	{
		$this->entity->flush();
		return $this;
	}

	public function remove(AbstractEntity $entity)
	{
		$this->entity->remove($entity);
		return $this;
	}
}