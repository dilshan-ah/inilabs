<?php

class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->setName($name);
        $this->setSalary($salary);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            throw new Exception("Something wrong");
        }
    }

}


try {
    $employee = new Employee("Dilshan Ahmed", 50000);

    echo "Employee Name: " . $employee->getName() . "<br>";
    echo "Employee Salary: " . $employee->getSalary() . "৳ <br>";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
