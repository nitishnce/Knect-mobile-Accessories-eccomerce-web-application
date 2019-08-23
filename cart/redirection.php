<?php
session_start();
$_SESSION['username']="rakesh";
include '/opt/lampp/htdocs\php\ecommercewebsite\databse\database.php';


$txndetails = 'eyJwYXltZW50SWQiOiI4NGQwZTZjMC01YjVkLTExZTktYmFiOS00ZGIwY2UxNzNlOTEiLCJmcm9tQWNjb3VudCI6eyJjdXN0b21lck5hbWUiOiJESEFSU0hBTkFNIFJBS0VTSCIsImFjY291bnRJZCI6ODE2MDAwMDR9LCJ0b0FjY291bnQiOnsiY3VzdG9tZXJOYW1lIjoiTUFTIFNPVVRIIiwiYWNjb3VudElkIjo4MTYwMDAxN30sImFtb3VudCI6eyJhbW91bnQiOiIxNiIsImN1cnJlbmN5IjoiSU5SIn0sInN0YXR1cyI6dHJ1ZSwidGltZXN0YW1wIjoiMjAxOS0wNC0xMFQwNjo1NDo0Mi45ODhaIn0=';

$decodedtext = base64_decode($txndetails);
//echo $decodedtext;
$arr = json_decode($decodedtext,true);

 $payid = $arr['paymentId'];
$fcname = $arr['fromAccount']['customerName'];
$faccount = $arr['fromAccount']['accountId'];
$tcname = $arr['toAccount']['customerName'];
$taccount = $arr['toAccount']['accountId'];
$amount = $arr['amount']['amount'];
$status = $arr['status'];
$time = $arr['timestamp'];

$query = "INSERT INTO `transactions` (`payment_id`,`cust_name`,`cust_acct`,`amount`,`time`) VALUES('$payid','$fcname','$faccount','$amount','$time')";
//if(mysqli_query($con,$query)){
//	echo 'transactions details are inserted into the database!';
//}
//else {
//	echo 'transaction details are not inserted!';
//}

header('Location: ../cart/placeorder.php?payid='.$payid.'&fcname='.$fcname.'&faccount='.$faccount.'&tcname='.$tcname.'&taccount='.$taccount.'&amount='.$amount.'&status='.$status.'&time='.$time);
?>
