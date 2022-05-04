<!DOCTYPE>
<html>

<head>

    <title>Home</title>
    <link rel="stylesheet" href="topnav.css">
    <link rel="stylesheet" href="fstyle.css">

    <!-- <script type="text/javascript">
    function Status(id){
      if(confirm("Car?")){
        window.location.href ='../../../booking_status/checkstatus/check_status.php?id='+id;
      }
    }
  </script> -->

    <style>
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)), url("img30.jpg");
        background-color: #cccccc;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: initial;
        background-attachment: fixed;
    }

    img {
        margin-top: 20%;
        width: 100%;
        height: 50%;
    }

    /* Add styles to the form container */
    .container {
        position: absolute;
        left: 65%;
        top: 5%;
        margin: 20px;
        max-width: 300px;
        padding: 16px;
        background-color: none;
    }
    </style>
</head>

<body>

    <div class="topnav">
        <a href="index.html">Home</a>
        <a href="search.php">Search</a>
        <!-- <a class = "active" href="../../../checkstatus/check_status.php">Status</a></li> -->
        <a href="index.html">Log Out</a> </li>


        <form method="post" class="container">

            <h1 style="color: #d6dbdf;">Book Your Slots!!</h1>
            <label style="color:#d6dbdf;" for="Car"><b>CarName</b></label>
            <select name="cname">
                <option value="Evolved Curvvv">Evolved Curvvv</option>
                <option value="Evolved Truck">Evolved Truck</option>
                <option value="Evolved Ultraviolettt">Evolved Ultraviolettt</option>
            </select>
            
            <label style="color: #d6dbdf;" for="userid"><b>Email</b></label>
            <input type="email" placeholder="Enter the your email" name="userid" required>

            <label style="color: #d6dbdf;" for="bookdate"><b>Date of Booking</b></label>
            <input type="date" placeholder="Enter the Date of Booking" name="bookdate" required>

            <label style="color: #d6dbdf;" for="stime"><b>Start Time</b></label>
            <select name="stime">
                <option value="10:00">10:00am</option>
                <option value="11:00">11:00am</option>
                <option value="12:00">12:00pm</option>
                <option value="1:00">1:00pm</option>
                <option value="2:00">2:00pm</option>
                <option value="3:00">3:00pm</option>
                <option value="4:00">4:00pm</option>
                <option value="5:00">5:00pm</option>
                <option value="6:00">6:00pm</option>
                <option value="7:00">7:00pm</option>
                <option value="8:00">8:00pm</option>
            </select>

            <label style="color: #d6dbdf;" for="etime"><b>End Time</b></label>
            <select name="etime">
                <option value="11:00">11:00am</option>
                <option value="12:00">12:00pm</option>
                <option value="1:00">1:00pm</option>
                <option value="2:00">2:00pm</option>
                <option value="3:00">3:00pm</option>
                <option value="4:00">4:00pm</option>
                <option value="5:00">5:00pm</option>
                <option value="6:00">6:00pm</option>
                <option value="7:00">7:00pm</option>
                <option value="8:00">8:00pm</option>
                <option value="9:00">9:00pm</option>
            </select>

            <label style="color:#d6dbdf;" for="location"><b>Location</b></label>
            <input type="text" placeholder="Enter the location" name="location" required>

            <button name="book" class="btn">Book</button>

    </div>
    </form>
    <?php
  if(isset($_POST['book'])){
    include 'config.php';
    $Cname=$_POST['cname'];
    $userid = $_POST['userid'];
    $bookdate = $_POST['bookdate'];
    $stime = $_POST['stime'];
    $etime = $_POST['etime'];
    $location = $_POST['location'];
     
    $qr1 = "INSERT INTO TEST_SLOT (Car_id,Book_date,Start_time,End_time,U_login_id,Location)
    VALUES('$Cname','$bookdate','$stime','$etime','$userid','$location')";
    $result1 = $conn->query($qr1);
    if($result1 == TRUE){
          echo "<script type = \"text/javascript\">
              alert(\"Booking successful. Reach here on your booking time with driving licence\");
              window.location = (\"index.html\")
              </script>";
          }else{
            echo "<script type = \"text/javascript\">
              alert(\"Booking Failed. Try Again\");
              window.location = (\"login.php\")
              </script>";
            }

        }
      //}
      //}
  ?>



</body>

</html>