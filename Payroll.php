<?php
class Payroll {
    private $firstname;
    private $lastname;
    private $tax;
    private $salary;

    public function __construct($firstname, $lastname, $tax, $salary) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->tax = $tax;
        $this->salary = $salary;
    }

    public function computeNet() {
        return $this->salary - $this->tax;
    }

    public function getEmployeeName() {
        return $this->firstname . " " . $this->lastname;
    }
}

$payroll = new Payroll("Marvin", "Alisbo", 50, 500);

echo "Employee Name: " . $payroll->getEmployeeName() . "\n";

echo "Net: " . $payroll->computeNet();
?>