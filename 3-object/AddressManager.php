<?php
class AddressManager
{
    private $addresses = ["209.131.36.159", "74.125.19.106"];

    public function outputAddresses($resolve)
    {
        foreach ($this->addresses as $address) {
            echo $address . '<br>';

            if ($resolve) {
                echo gethostbyaddr($address);
            }
        }
    }
}
$setting = true;
$manager = new AddressManager();
$manager->outputAddresses($setting);
echo '<pre>';
var_dump($manager);