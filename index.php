<?php

use App\EmployeeReport;

require_once ('src/EmployeeReport.php');

    $datas = array(            
        ['name' => 'Max', 'age' => 17],
        ['name' => 'Sepp', 'age' => 18],
        ['name' => 'Nina', 'age' => 15],
        ['name' => 'Mike', 'age' => 51]
    );

    $employees = new EmployeeReport();

    echo "<br>Liste des employés";
    $allEmployees = $employees::listEmployees($datas);
    var_dump($allEmployees);

    foreach ($allEmployees as $employee) {
        echo "<br>".$employee['name']." - ".$employee['age']. " ans";
    }

    echo "<br><br>Liste des employés de moins de 18 ans";
    $under18 = $employees::EmployeesUnder18($datas);
    var_dump($under18);

    echo "<br><br>Liste des employés de moins de 18 ans";
    foreach ($under18 as $employee) {
        echo "<br>".$employee;
    }

?>