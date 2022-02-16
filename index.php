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

    foreach ($allEmployees as $employee) {
        echo "<br>".$employee['name']." - ".$employee['age']. " ans";
    }

    echo "<br><br>Liste des employés de plus de 18 ans";
    $over18 = $employees::Older18($datas);
    var_dump($over18);

    echo "<br><br>Liste des employés de plus de 18 ans";
    foreach ($over18 as $employee) {
        echo "<br>".$employee;
    }

    echo "<br><br>Liste de employés triés par nom";
    $sortByName = $employees::SortByName($datas);
    foreach ($sortByName as $employee) {
        echo "<br>".$employee;
    }

?>