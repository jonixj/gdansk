<?php

require_once "Customer.php";

class BusinessCustomer implements Customer
{
    protected $customerNumber;
    protected $companyName;

    function __construct($customerNumber, $companyName)
    {
        $this->customerNumber = $customerNumber;
        $this->companyName = $companyName;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

}