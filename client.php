<!DOCTYPE html>
<html>

<head>
    <script src='js/client.js' charset="utf-8">

    </script>
    <title>Client</title>
    <link rel="stylesheet" href="login.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="fade-in" id="mydiv" style="background-color: cadetblue; height: 140vh;  ">
        <nav class="navbar navbar-inverse height: 60px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href='dashboard.html' class="navbar-brand" style="font-size: 35px;">Leave Management system</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </nav>

        <!--<button id="mybtn" >Hide</button>-->

        <!--form class="register-form" method='post' id='register' onsubmit='return register_validate()'>-->
        <div class="container" style="background-color: darkcyan; width: 40%; color: white;">
            <h1>Leave Request Details</h1>
            <div class="login-page" style="color: white; font-weight: 200;">


                <form action="/Leave_Management/php/client_action.php" class="form" onsubmit="return leaveRequest()"
                    method="get" accept-charset="utf-8" name="myform">
                    <p>Start Date</p>
                    <div class="input-group loginPad">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-calendar"></i></span>
                        <input id='startDate' class="form-control  datepicker" type="date" name="sd" />
                    </div>



                    <p>End Date</p>

                    <!--<form class= "form" action="js/client.js" onsubmit='submit' method="get" accept-charset="utf-8">-->
                    <div class="input-group loginPad">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-calendar"></i></span>
                        <input  id="endDate" class="form-control  datepicker" type="date" name="ed" />
                    </div>


                    <p>Reason</p>
                    <!--<div class="input-group loginPad col-12-md">-->
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                    <textarea id="reason" class="form-control" rows="5" type="text" name="rs"
                        Placeholder="Reason for Leave"></textarea>
                    <!--</div>-->
                    <br>


                    <p>Address</p>
                    <!--<div class="input-group loginPad">-->
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                    <textarea id="address" class="form-control" rows="5" type="text" name="ad"
                        Placeholder="Address"></textarea>
                    <!--</div>-->
                    <!--<button class="submit" name="" id="" value="Submit" style="color: black;" onclick="validateForm" >Submit</button>-->
                    <button class="button" style="color: black;"><a href="dashboard.html">Submit</a></button>
                    <button class="button" style="color: black;"><a href="dashboard.html">Cancel</a></button>

                </form>
            </div>

        </div>
    </div>
    <!--<div class="container">-->
    <!--<div class="row1">-->
    <!--<div class="col">-->
    <!--<p>Start Date</p>-->
    <!--<input class="input"type="text" name="" id="" value="">-->
    <!--</div>-->
    <!--<div class="col">-->
    <!--<p>End Date</p>-->
    <!--<input class="input"type="text" name="" id="" value="">-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="row">-->
    <!--<div class="col">-->
    <!--<p>Reason</p>-->
    <!--<input class="input"type="text" name="" id="" value="">-->
    <!--</div>-->
    <!--<div class="col">-->
    <!--<p>Address</p>-->
    <!--<input class="input"type="text" name="" id="" value="">-->
    <!--</div>-->
    <!--</div>-->
    <!--<br>-->
    <!--<div class="row">-->
    <!--<div class="col">-->
    <!--<button class="submit" name="" id="" value="Submit">Submit</button>-->
    <!--</div>-->
    <!--<div class="col">-->
    <!--<button class="button">Cancel</button><br>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <script>
        document.getElementById("mybtn").addEventListener("click", function () {

            var mybox = document.getElementById("mydiv");
            if (mybox.style.display == "none") {

                mybox.style.display = "block";
            } else {
                mybox.style.display = "none";

            }

        })

        function validateForm() {
            var x = document.forms["myForm"]["sd"].value;
            var y = document.forms["myForm"]["ed"].value;
            var z = document.forms["myForm"]["rs"].value;
            var w = document.forms["myForm"]["ad"].value;

            if (x == "") {
                alert("Start date must be filled out");
                return false;
            }
            if (y == "") {
                alert("End date must be filled out");
                return false;
            }
            if (z == "") {
                alert("Address must be filled out");
                return false;
            }
            if (w == "") {
                alert("Reason must be filled out");
                return false;
            }

        }

    </script>
</body>

</html>
