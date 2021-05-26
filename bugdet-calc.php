<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$weeklyExpenses = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];


// Return the expenses in a nice readable format.
echo "Annual Expenses:\n Vacations: \$${annualExpenses["vacations"]}\n Car Repairs: \$${annualExpenses["carRepairs"]}\n\n";

echo "Monthly Expenses:\n Rent: \$${monthlyExpenses["rent"]}\n Utilities: \$${monthlyExpenses["utilities"]}\n Health Insurance: \$${monthlyExpenses["healthInsurance"]}\n\n";

echo "Weekly Expenses:\n Gas: \$${weeklyExpenses["gas"]}\n Food: \$${weeklyExpenses["food"]}\n Entertainment: \$${weeklyExpenses["entertainment"]}\n\n";

$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1])
  + ($incomeSegments[1][0] * $incomeSegments[1][1])
  + ($incomeSegments[2][0] * $incomeSegments[2][1]);

$annualIncome = $netIncome - $socialSecurity;

echo "Annual Income after Taxes:\n \$${annualIncome}\n\n";

$annualIncome = $annualIncome 
  - $annualExpenses["vacations"] 
  - $annualExpenses["carRepairs"];

echo "Annual Income after Annual Expenses:\n \$${annualIncome}\n\n";

$monthlyIncome = $annualIncome / 12;

echo "Monthly Income:\n \$${monthlyIncome}\n\n";

$monthlyIncome = $monthlyIncome
  - $monthlyExpenses["rent"]
  - $monthlyExpenses["utilities"]
  - $monthlyExpenses["healthInsurance"];

echo "Monthly Income after Monthly Expenses:\n \$${monthlyIncome}\n\n";

$weeklyIncome = $monthlyIncome / 4.33;

echo "Weekly Income before Expenses:\n \$${weeklyIncome}\n\n";

$weeklyIncome = $weeklyIncome
  - $weeklyExpenses["gas"]
  - $weeklyExpenses["food"]
  - $weeklyExpenses["entertainment"];

echo "Weekly Income after Expenses:\n \$${weeklyIncome}\n\n";

$yearlySavings = $weeklyIncome * 52;

echo "Estimated Yearly Savings: \n \$${yearlySavings}";