<?php
function amortiazationTable($pNum, $periodicPayment, $balance, $monthlyInterest){
	// Calculate payment interest
	$paymentInterest = round($balance * $monthlyInterest, 2);

	//Calculate payment principal
	$paymentPrincipal = round($periodicPayment - $paymentInterest, 2);

	//Deduct principal from the remaining balance
	$newBalance = round($balance - $paymentPrincipal, 2);

	//If new balance < Monthly payment, set to zero
	if($newBalance < $paymentPrincipal){
		$newBalance = 0;
	}

	printf("<tr><td>%s</td>", $pNum);
	printf("<tr><td>%s</td>", number_format($newBalance, 2));
	printf("<tr><td>%s</td>", number_format($periodicPayment, 2));
	printf("<tr><td>%s</td>", number_format($paymentPrincipal, 2));
	printf("<tr><td>%s</td>", number_format($paymentInterest, 2));

	#if balance not yet zero, recursively call amortizationTable()
	if($newBalance > 0){
		$pNum++;
		amortiazationTable($pNum, $periodicPayment, $newBalance, $monthlyInterest);
	} else {
		return 0;
	}
}

//Loan balance
$balance = 6000000.00;
//Loan interest rate
$interestRate = 0.0575;
//Monthly interest rate
$monthlyInterest = $interestRate/12;
//Term length of the loan, in Years
$termLength = 5;
//Number of payments per year
$paymentsPerYear = 12;
//Payments iteration
$paymentNumber = 1;
//Determine total number payments
$totalPayments = $termLength * $paymentsPerYear;
//Determine interst component of periodic payments
$intCalc = 1+$interestRate/$paymentsPerYear;
//Determine periodic payment
$periodicPayment = $balance * pow($intCalc, $totalPayments)*($intCalc-1)/(pow($intCalc,$totalPayments)-1);
//Round periodic payments to two decimal places
$periodicPayment = round($periodicPayment, 2);

//Create table
echo "<table width='50%' align='center' border='1'>";
echo "<tr>
<th>Payment Number</th><th>Balance</th>
<th>Payment</th><th>Principal</th><th>Interest</th>
</tr>";

//call recursive function
amortiazationTable($paymentNumber, $periodicPayment, $balance, $monthlyInterest);
//close table
echo '</table>';
?>