<?php
namespace Billing\Domain\Repository;

use Billing\Domain\Entity\AbstractEntity;

interface RepositoryInterface
{
    public function getAll();
    public function findById($id);
    public function flush();
    public function persist(AbstractEntity $entity);
    public function begin();
    public function commit();
    public function remove($id);
}