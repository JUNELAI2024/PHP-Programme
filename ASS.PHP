$employees = [
[
'name' => 'Alice',
'monthly_salaries' => [3000, 3100, 2900, 3000, 3100, 3200, 3000, 3100,
2900, 3000, 3100, 3200]
],
[
'name' => 'Bob',
'monthly_salaries' => [2500, 2600, 2700, 2500, 2600, 2700, 2500, 2600,
2700, 2500, 2600, 2700]
],
[
'name' => 'Charlie',
'monthly_salaries' => [4000, 4100, 4200, 4300, 4400, 4500, 4000, 4100,
4200, 4300, 4400, 4500]
]
];


//Use foreach loop to go through the three employees
foreach ($employees as $employee) {
    echo "Name: " . $employee['name'] . " ";
    echo "Monthly Salaries: " . implode(", ", $employee['monthly_salaries']) . " ";
}



// Use array_sum() to sum the monthly salaries
foreach ($employees as $employee) {
    $annual_salary = array_sum($employee['monthly_salaries']);
    echo "Name: " . htmlspecialchars($employee['name']) . " ";
    echo "Annual Salary: " . $annual_salary . " ";
}


//Include the employee's name and their total annual salary in the output.
foreach ($employees as $employee) {
    $total_annual_salary = array_sum($employee['monthly_salaries']); // Sum of monthly salaries
    echo "Name: " . htmlspecialchars($employee['name']) . " ";
    echo "Total Annual Salary: " . $total_annual_salary . " ";
    // extra point Show the average salary of all three employees combined
    $average_salary = $total_annual_salaries / count($employees); 
echo "Average Annual Salary of All three Employees: " . $average_salary;
}


