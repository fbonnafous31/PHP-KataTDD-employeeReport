<?php

    namespace App;

    class EmployeeReport {

        public static function listEmployees(array $employees) {
            return $employees;
        }

        public static function EmployeesUnder18(array $employees) {
            $under18[] = '';
            $i = 0;
            foreach ($employees as $employee) {
                if ($employee['age'] < 18) {
                    $under18[$i] = $employee['name'];
                    $i++;
                }
            }
            return $under18;
        }

    }
    
?>