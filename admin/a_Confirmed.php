<?php
//Database Connection

$conn = new mysqli('localhost' , 'root','', 'Genaral_admin');
if($conn -> connect_errno){
    die('Connection Faild : ' .$conn -> connect_error);
    
}


//require_once('db.php');
$query = "select * from vehicle_booking WHERE status = 'pending'";
$result = mysqli_query($conn, $query);

?>

<head>
    <title>ITUM VIS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="Homelogo.png" >
    
    <style>
        .lg {
            max-height: 100px;
            
        }

        .lr {
            align-items: center;
            max-height: 600px;

        }

        a {
            text-decoration: none;
            color: black;
            font-weight: 600;
        }

        .x {
            background-color: #EC6548;
            color: white;
        }
    </style>
</head>
<body>

    <div class="m-1 row">
        <div class="col-md-3 " style="margin-top: 20px;">
            <div class="logo m-3">
                <img class="lg" src="site-logo.png" alt="Logo">
            </div>
            <nav class="navigation" >

            <div style="margin-top: 50px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                        class="bi bi-house-door-fill p-1"></i></i><a href="a_Home.html" >HOME</a></button>
                </div>
                <!-- <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                            class="bi bi-speedometer p-1"></i><a href="a_Dashboard.html"
                            >DASHBOARD</a></button>
                </div> -->
                <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                            class="bi bi-truck-front-fill p-1"></i><a href="a_Vehicle.html">VEHICLES</a></button>
                </div>
                <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                        class="bi bi-vinyl-fill p-1"></i><a href="a_Records.php">RECORDS </a></button>
                </div>
                <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light x" style="width: 200px;text-align: left;"><i
                        class="bi bi-pencil-square p-1"></i><a href="a_Confirmed.php">BOOKINGS</a></button>
                </div>

                <!-- <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                        class="bi bi-pencil-square p-1"></i><a href="MyBooking.php">MY BOOKING</a></button>
                </div> -->
                <!-- <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                        class="bi bi-gear-fill p-1"></i><a href="a_Setting.html">SETTINGS</a></button>
                </div>
                <div style="margin-top: 10px;">
                    <button class="btn btn-lg btn-light " style="width: 200px;text-align: left;"><i
                        class="bi bi-headset p-1"></i><a href="a_Support.html">SUPPORT</a></button>
                </div> -->
                <div style="margin-top: 60px;">
                    <button class="btn btn-lg btn-danger " style="width: 150px;text-align: left; margin-left:20px ;"><i
                        class="bi bi-box-arrow-left p-2"></i><a href="logout.php"class="text-light">LOGOUT</a></button>
                </div>
                
            </nav>
        </div>


    <div class = "form-horizontal animated bounce  col-md-9" width="100%" height="5px" cellspacing="0"  style="margin-top: 170px; margin-left: -90px;"   >
        <div class="row mt-2">
            <div class="col">
                <div class="card mt-2">
                    <div class="card-header bg-danger" >
                        <h2 class="display-6 text-center text-white"> Bookings Confirmation </h2>
                    </div>

                    <div class="card-body" >
                        <table class="table table-border text-center" style="table-layout:fixed;">
                            <tr >
                                <!-- <td class= "bg-dark text-white" style="width:4%" > Id</td> -->
                                <td class= "bg-dark text-white"style="width:10%" >Name</td>
                                <td class= "bg-dark text-white" style="width:8%">Vehicle Type</td>
                                <td class= "bg-dark text-white" style="width:12%">Division</td>
                                <td class= "bg-dark text-white" style="width:12%">Required Date and time </td>
                                <td class= "bg-dark text-white" style="width:12%">Return Date and Time</td>
                                <td class= "bg-dark text-white"style="width:12%">Destination</td>
                                <td class= "bg-dark text-white" style="width:18%">Reason</td>
                                <td class= "bg-dark text-white" style="width:24%">Email Address</td>
                                <td class= "bg-dark text-white" style="width:12%">Mobile Number</td>
                                <td  class= "bg-dark text-white" style="width:12%" >Genaral Admin Approval</td>
                                <!-- <td class= "bg-dark text-white" style="width:12%">Reject</td> -->
                                <!-- <td class= "bg-dark text-white">Delete</td> -->
                            </tr>

                            <tr>

                            <?php
                             while($row = mysqli_fetch_assoc($result))
                             {
                            ?>
                                <td rowspan="2"><?php echo $row['name'];?> </td>
                                <td rowspan="2"><?php echo $row['vehicleType'];?> </td>
                                <td rowspan="2"><?php echo $row['division'];?> </td>
                                <td rowspan="2"><?php echo $row['dateRequirement'];?> </td>
                                <td rowspan="2"><?php echo $row['dateReturn'];?> </td>
                                <td rowspan="2"><?php echo $row['destination'];?> </td>
                                <td rowspan="2"><?php echo $row['reason'];?> </td>
                                <td rowspan="2"><?php echo $row['email'];?> </td>
                                <td rowspan="2"><?php echo $row['mobile'];?> </td>
                                <td onclick="app(<?php echo $row['id'];?>)"><a class= "btn btn-danger"> Confirm</a></td>
                                
                                <td>
                                <!-- <form action="" method="POST">
                                    <button type="submit" name="delete_booking"  class= "btn btn-danger" value="<?=$row['id'];?>"> Delete </button>
                             </form> -->
                                </td>

                            </tr>
                            <tr>
                                <td  onclick="app2(<?php echo $row['id'];?>)"><a style="width:100%" class= "btn btn-danger"> Reject</a></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script>
       
        function app(id){
          $.ajax({
            url: 'a_approve.php',
            data: {id:id},
            method: 'post',
            success: function (response) {
              if(response){
                alert("Approval Successful!");
                window.location.reload();
              }else{
                alert("Approval Failed");
                window.location.reload();
              }
              
            },
            error: function () {
              alert("Something Wrong");
            }
          });
        }

        function app2(id){
          $.ajax({
            url: 'a_reject.php',
            data: {id:id},
            method: 'post',
            success: function (response) {
              if(response){
                alert("Reject Successful!");
                window.location.reload();
              }else{
                alert("Reject Failed");
                window.location.reload();
              }
              
            },
            error: function () {
              alert("Something Wrong");
            }
          });
        }
      </script>
     
    </body>
    </html>