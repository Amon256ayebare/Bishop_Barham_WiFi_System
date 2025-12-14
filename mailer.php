<?php
function sendAlert($to,$subject,$msg){
 $headers="From: wifi@bbuc.ac.ug";
 mail($to,$subject,$msg,$headers);
}
?>