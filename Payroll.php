<?php

class Payroll {
    // Attributes
    private $employeeId;
    private $employeeName;
    private $basicSalary;
    private $taxRate;

    // Constructor
    public function __construct($employeeId, $employeeName, $basicSalary, $taxRate) {
        $this->employeeId = $employeeId;
        $this->employeeName = $employeeName;
        $this->basicSalary = $basicSalary;
        $this->taxRate = $taxRate;
    }

    // Methods
    public function calculateGrossSalary() {
        return $this->basicSalary;
    }

    public function calculateTax() {
        return $this->basicSalary * ($this->taxRate / 100);
    }

    public function calculateNetSalary() {
        return $this->calculateGrossSalary() - $this->calculateTax();
    }

    public function displayEmployeeInfo() {
        echo "Employee ID: " . $this->employeeId . "<br>";
        echo "Employee Name: " . $this->employeeName . "<br>";
        echo "Basic Salary: " . $this->basicSalary . "<br>";
        echo "Tax Rate: " . $this->taxRate . "%<br>";
        echo "Gross Salary: " . $this->calculateGrossSalary() . "<br>";
        echo "Tax: " . $this->calculateTax() . "<br>";
        echo "Net Salary: " . $this->calculateNetSalary() . "<br>";
    }
}

?>