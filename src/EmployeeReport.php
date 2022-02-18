<?php

    namespace App;

    class EmployeeReport {

        public static function Capital(array $employees): array {
            foreach ($employees as $employee) {
                $list[] = strtoupper($employee['name']);
            }
            return $list;
        }

        public static function Older18(array $employees): array {
            foreach ($employees as $employee) {
                if ($employee['age'] >= 18) {
                    $list[] = $employee['name'];
                }
            }
            return $list;
        }

        public static function SortByName(array $employees, int $sort): array {
            $columns = array_column($employees, 'name');
            array_multisort($columns, $sort, $employees);
            foreach ($employees as $employee) {
                $list[] = $employee['name'];
            }
            return $list;
        }

    }
    
?>