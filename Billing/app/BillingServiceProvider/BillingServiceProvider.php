<?php
namespace Billing\App\BillingServiceProvider;

use App\Providers\AppServiceProvider;
use Billing\Domain\Repository\CustomerRepositoryInterface;
use Billing\Persistence\CustomerRepository;
use Doctrine\ORM\EntityManagerInterface;

class BillingServiceProvider extends AppServiceProvider
{
    public function register()
	{
		$this->registerCustomerRepository();
	}
	
	private function registerCustomerRepository()
	{
		$this->app->singleton(CustomerRepositoryInterface::class, function ($app) {
			return new CustomerRepository($app[EntityManagerInterface::class]);
		});
	}
}