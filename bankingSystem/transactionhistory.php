<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="transaction">
<header>
       
       <nav>
           <span id="tsf">TSF Bank</span>
           <a href="contactus.html">Contact us</a>
           <a href="about.html">About</a>
           <a href="HomePage.html">Home</a>
       </nav>
</header>
<hr color="yellow" style="height: 5px;margin-top: 0%;" >
	<div style="font-color:black; font-size:20px;">
        <h2 id="texttransfer">Transaction History</h2>

       <br>
       <div>
    <table id="customers">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connect.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['Balance']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer>
        <p id="foot">&copf; Tharika Jayaraj</p> 
</footer>
</body>
</html>
