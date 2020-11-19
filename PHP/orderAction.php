<?php
$organization = $_POST['organization'];
$location = $_POST['adress'];
$person = $_POST['contactPerson'];
$number = $_POST['phoneNumber'];
$email_form = 'iamekke@yahoo.com';
$dispensers = $_POST['quantity1'];
$bocebi = $_POST['quantity2'];
$bocebiq = $_POST['quantity3'];

$email_subject = "ახალი შეკვეთა";
$email_body = "საკონტაქტო პირი: $contactPerson.\n".
				"მისამართი: $location.\n".
				"ტელეფონის ნომერი: $number.\n"
				"ორგანიზაცია: $organization.\n"
				"დისპენსერების რაოდენობა (დადებითი რიცხვი ნიშნავს რომ მესაკუთრეა აქვა-გეო): $dispensers.\n"
				"ბოცების რაოდენობა ერთ დისპენსერში (დადებითი რიცხვი ნიშნავს რომ მესაკუთრეა აქვა-გეო): $bocebi.\n"
				"ბოცების რაოდენობა (დადებითი რიცხვი ნიშნავს რომ მესაკუთრეა შემკვეთი): $bocebiq.\n",
				.
$to = "allwinner1998@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $contactPerson \r\n"

mail($to,$email_subject,$email_body,$headers);

header("Location:order-online.html")
?>