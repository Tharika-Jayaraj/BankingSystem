<?php
include 'connect.php';
if ($_POST['submit']) {	 
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

	$sql = "INSERT INTO `contact` (`id`,`Name`,`Email`,`Phone`,`Message`) VALUES ('0','$txtName','$txtEmail','$txtPhone','$txtMessage')";
	 
	$rs = mysqli_query($conn, $sql);
        if($rs)
        {
                echo "<script>;
                        alert('Thankyou! We will be contacting you ASAP'); 
                                window.location='contactus.html'; 
                       </script>";
        }
    	
}	

?>