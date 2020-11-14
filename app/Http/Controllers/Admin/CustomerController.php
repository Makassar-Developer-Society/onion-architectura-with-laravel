<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Billing\Domain\Repository\CustomerRepositoryInterface;
use Billing\Domain\Service\CustomerService;
use Billing\Domain\Value\Email;
use Billing\Domain\Value\Id;
use Billing\Domain\Value\Name;
use Billing\Persistence\CustomerRepository;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerRepository;
    protected $customerService;
    public function __construct(CustomerRepositoryInterface $customerRepository, CustomerService $customerService)
    {
        $this->customerRepository = $customerRepository;
        $this->customerService = $customerService;
    }

    public function index()
    {
        // dd($this->customerRepository->getAll());
        $customers = $this->customerRepository->getAll();
        return view('customer.index',compact('customers'));
    }

    public function create()
    {
        // dd($this->customerRepository->getAll());
        return view('customer.create');
    }

    public function store(Request $request, $id="")
    {
        // dd($request);
        $this->customerService->create(
            new Id($id),
            new Name($request->nama),
            new Email($request->email)
        );
        return redirect()->route('index.customer');
    }

    public function edit($id)
    {
        $customer = $this->customerRepository->findById($id);
        return view('customer.edit',compact('customer'));
    }

    public function update(Request $request, $id)
    {
       $customer = $this->customerRepository->findById($id);
        if($customer){
            $this->customerService->update(
                new Id($id),
                new Name($request->nama),
                new Email($request->email)
            );
        }else{
            return redirect()->back();
        }
        return redirect()->route('index.customer');
    }

    public function Destroy($id)
    {
        $this->customerService->delete(
            new Id($id)
        );
        return redirect()->back();
    }


}