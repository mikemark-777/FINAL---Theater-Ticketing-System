<?php
    
    $movieTitle = $_GET['title-db'];
    $numberOfTickets = $_GET['tnum-db'];
    $mallOfPreference = $_GET['mall-db'];
    $date = $_GET['date-db'];

    $con = mysqli_connect("localhost", "root", "rookie");
    if(!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysqli_select_db($con , "theater-ticketing-system-db"); 

    $query = "INSERT INTO bookedtickets VALUES ( 0, '$movieTitle', '$numberOfTickets', '$mallOfPreference', '$date');";

    if ($con->query($query) === TRUE) {
        echo "Tickets has been booked successfully.";
        echo "<a href='../../pages/previews-html/payment.html'><button>Proceed to Payment</button></a>";
      } else {
        echo "Error: " . $query . "<br>" . $con->error;
      }
?>