<?php

    namespace App;

    class EmployeeReport {

        public static function listEmployees(array $employees) {
            return $employees;
        }

        public static function Older18(array $employees) {
            $under18[] = '';
            $i = 0;
            foreach ($employees as $employee) {
                if ($employee['age'] >= 18) {
                    $under18[$i] = $employee['name'];
                    $i++;
                }
            }
            return $under18;
        }

        public static function SortByName(array $employees) {
            $sortByName[] = '';
            $i = 0;
            $columns = array_column($employees, 'name');
            array_multisort($columns, SORT_ASC, $employees);
            foreach ($employees as $employee) {
                $sortByName[$i] = $employee['name'];
                $i++;
            }
            return $sortByName;
        }

    }
    
?>