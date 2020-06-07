<?php"
$conn + mysqli_connect("localhost", "root", "", "website");
if (!$conn)
die("error in connection" .$conn-> connect_error);
else 
echo "conndected";
header("location:form.php");
?>