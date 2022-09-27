<?php
$tujuan="oktariadamanik2910@gmail.com";
include "classes/class.phpmailer.php";

$mail = new PHPMailer; 
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "smtp.gmail.com"; //host email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "servermaaiil@gmail.com"; //user email server
$mail->Password = "Server123"; //password email server
$mail->SetFrom("servermaaiil@gmail.com","Kantor Notaris Maria Yosefina Neng"); //set email pengirim / server
$mail->Subject = "update berkas"; //subyek email
$mail->AddAddress($tujuan);  // email tujuan
$mail->MsgHTML("Berkas Anda dengan nomor berkas : LGL015<br>
Status : Sedang Ditandatangan");


if(!$mail->Send()) {
    echo "Eror: ".$mail->ErrorInfo;
    exit;
}else {
    echo "<div class='alert alert-success'><strong>Berhasil.</strong> Email telah dikirim.</div>";
}

?>

<!-- Elseif Channel -->