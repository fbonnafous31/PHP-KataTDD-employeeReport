<?php

use EmployeeReport;

    namespace App\EmployeeReport;

use App\EmployeeReport;
use PHPUnit\Framework\TestCase;
    use function PHPUnit\Framework\assertEquals;

    class EmployeeReportTest extends TestCase {

        public function setup(): void {
            $this->employees = new EmployeeReport();
            $this->datas = array(            
                ['name' => 'Max', 'age' => 17],
                ['name' => 'Sepp', 'age' => 18],
                ['name' => 'Nina', 'age' => 15],
                ['name' => 'Mike', 'age' => 51]
            );
        }
        
        // As shop owner I want to view a list of all employees, which are older than 18 years, so that I know who is allowed to work on Sundays.
        public function testIfEmployeeUnder18() {
            assertEquals(['Sepp', 'Mike'], $this->employees::Older18($this->datas));
        }

        // As shop owner I want the list of employees to be sorted by their name, so I can find employees easier.
        public function testEmployeesSortByNameAsc() {
            assertEquals(['Max', 'Mike', 'Nina', 'Sepp'], $this->employees::SortByNameAsc($this->datas));
        }

        // As shop owner I want the list of employees to be capitalized, so I can read it better.
        public function testCpitalListOfEmployees() {
            assertEquals(['MAX', 'SEPP', 'NINA', 'MIKE'], $this->employees::Capital($this->datas));
        }

        // As shop owner I want the employees to be sorted by their names descending instead of ascending
        public function testEmployeesSortByNameDesc() {
            assertEquals(['Sepp', 'Nina', 'Mike', 'Max'], $this->employees::SortByNameDesc($this->datas));
        }

    }

?>