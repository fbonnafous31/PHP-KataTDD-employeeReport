<?php

    namespace App;

    class EmployeeReport {

        public static function listEmployees(array $employees) {
            return $employees;
        }

        public static function Older18(array $employees) {
            $list[] = '';
            $i = 0;
            foreach ($employees as $employee) {
                if ($employee['age'] >= 18) {
                    $list[$i] = $employee['name'];
                    $i++;
                }
            }
            return $list;
        }

        public static function SortByNameAsc(array $employees) {
            $list[] = '';
            $i = 0;
            $columns = array_column($employees, 'name');
            array_multisort($columns, SORT_ASC, $employees);
            foreach ($employees as $employee) {
                $list[$i] = $employee['name'];
                $i++;
            }
            return $list;
        }

        public static function SortByNameDesc(array $employees) {
            $list[] = '';
            $i = 0;
            $columns = array_column($employees, 'name');
            array_multisort($columns, SORT_DESC, $employees);
            foreach ($employees as $employee) {
                $list[$i] = $employee['name'];
                $i++;
            }
            return $list;
        }

        public static function Capital(array $employees) {
            $list[] = '';
            $i = 0;
            foreach ($employees as $employee) {
                $list[$i] = strtoupper($employee['name']);
                $i++;
            }
            return $list;
        }

    }
    
?>