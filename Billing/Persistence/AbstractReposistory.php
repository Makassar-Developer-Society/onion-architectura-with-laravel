<?php
namespace Billing\Persistence;

use Billing\Domain\Entity\AbstractEntity;
use Billing\Domain\Repository\RepositoryInterface;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

abstract class AbstractRepository implements RepositoryInterface
{
    protected $entity;
    protected $entityClass;

    public function __construct(EntityManager $entity)
    {
        $this->entity = $entity;
    }

    public function findById($id)
    {
        $result = $this->entity->find($this->$entityClass,$id);
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

	public function remove($id)
	{
		$result = $this->entity->find($this->entityClass, $id);
		$this->entity->remove($result);
		return $this;
	}
}