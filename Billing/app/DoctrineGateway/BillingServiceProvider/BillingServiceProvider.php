<?php
namespace Billing\App\BillingServiceProvider;

use App\Providers\AppServiceProvider;

class BillingServiceProvider extends AppServiceProvider
{
    public function register()
    {
        $this->registerCustomerInterface();
    }

    public function registerCustomerInterface()
    {

    }

}