<?php
function logAction($conn,$admin,$action){
 $stmt=$conn->prepare("INSERT INTO audit_logs(admin,action) VALUES(?,?)");
 $stmt->bind_param("ss",$admin,$action);
 $stmt->execute();
}
?>