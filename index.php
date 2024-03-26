<!-- USE DEV URL TO RUN -->
<html>

<head>
  <!-- Meta data section -->
  <meta charset="utf-8">
  <meta name="description" content="Calculator for Salary in Canada, Using PHP">
  <meta name="keywords" content="immaculata, icd2o">
  <meta name="author" content="Atri Sarker">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  <link rel="manifest" href="./fav_index/site.webmanifest">

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Title -->
  <title>Salary Program in PHP</title>
</head>

<body>

  <!-- Header -->
  <h1>Salary Program, with PHP</h1>

  <h3>Please enter your employment information:</h3>
  <!-- Input Form -->
  <form method="post">
    <label for="hoursWorkedInput">Numbers of Hours Worked:</label>
    <input id="hoursWorkedInput" type="number" name="hoursWorked" placeholder="Hours" min="0" step="0.01" />
    <br>
    <label for="hourlyRateInput">Hourly Rate: $</label>
    <input id="hourlyRateInput" type="number" name="hourlyRate" placeholder="Rate" min="0" step="0.01" />
    <br>
    <!-- Calculate Button -->
    <button type = "submit" name = "submit" value="Calculate!">Calculate Pay</button>
  </form>

  <!-- Result -->
  <p id="resultHolder">
    <?php
    // Script
    if(isset($_POST['submit']))  
      {   
        // Inputs
        $hourlyRate = floatval($_POST['hourlyRate']) or 0;
        $hoursWorked = floatval($_POST['hoursWorked']) or 0;

        // Calculate Total Income
        $totalIncome = $hourlyRate * $hoursWorked;
        
        // Calculate Federal Tax ( 15% )
        $federalTax = $totalIncome * 0.15;

        // Calculate Ontario Tax ( 5.05% )
        $ontarioTax = $totalIncome * 0.0505;

        // Calculate Final Pay
        $finalPay = $totalIncome - $federalTax - $ontarioTax;
        
        // Display Results, using number_format() to round+add commas
        echo "Total Taxable Income : $" . number_format($totalIncome, 2) . "<br>";
        echo "Federal Tax : $" . number_format($federalTax, 2) . "<br>";
        echo "Ontario Tax : $" . number_format($ontarioTax, 2) . "<br>";
        echo "<b>Final Pay : $" . number_format($finalPay, 2) . "</b>";
      }
    ?>
  </p>

</body>

</html>