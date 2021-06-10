<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
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
       <?php
         include 'connect.php';
         $sql = "SELECT * FROM users";
         $result = mysqli_query($conn,$sql);
        ?>
       
       <div style="font-color:black; font-size:20px;">
        <h2 id="texttransfer">Customers</h2>
        <br>
            <div class="row" >
                <div class="col">
                    <div>
                    <table id="customers">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Balance</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['Name']?></td>
                        <td><?php echo $rows['Email']?></td>
                        <td><?php echo $rows['Balance']?></td>
                       
                    </tr>
                <?php
                    }
                ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
         </div>
         <footer>
        <p id="foot">&copf; Tharika Jayaraj</p> 
    </footer>
</body>
</html>