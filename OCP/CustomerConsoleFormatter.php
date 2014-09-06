<?php

class CustomerConsoleFormatter
{
    public function printArray($customers)
    {
        $response = $this->header();

        foreach ($customers as $customer)
            $response .= $this->customerLine($customer);

        $response .= $this->footer();

        echo $response;
    }

    private function header()
    {
        $header = "CUSTOMERS\n";
        $header .= "================\n";
        return $header;
    }

    private function footer()
    {
        $footer = "================\n";
        $footer .= "END OF CUSTOMERS\n";
        return $footer;
    }

    public function customerLine($customer)
    {
        return $customer->getCompanyName() . "\n";
    }
} 