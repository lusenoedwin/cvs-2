<!DOCTYPE html>
<html lang="en">
<head>
    <title>UoK Student Voting System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/uoklogo.jpeg"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

<!--    stylecard-->
    <style>
        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 12px;
            height: fit-content;
            width: fit-content;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }




        /* Add rounded corners to the top left and the top right corner of the image */
        img {
            border-radius: 5px 5px 0 0;
        }
    </style>
    <!--===============================================================================================-->
</head>
<br>
<br>
<br>
<br>
<br>
<body>
<div style="width:420px; margin:0 auto; text-align: center;">
<div class="card">
    <div class="container">
        <div class="wrap-login100 p-t-85 p-b-20">
            <div class="login100-form validate-form">

                <div style="text-align: center;">
						<img src="images/uoklogo.jpeg" alt="AVATAR">
                </div>
                <br>
                <br>
                <a href="help.php" > <p style="float: right; font-weight: bold;"><u>Click here for Help</u></p></a>
                <span class="login100-form-title p-b-1">
            <label class="fa fa-check-circle" style="color: blue; font-size: 23px; font-weight: bold;"> Vote for your Delegates</label>
          </span>
                <br>
                <label class="container-login100-form-btn"><b style="color: red; font-weight: bold;">Choose Your Appropriate School</b></label>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        <a href="./Science/home.php"><label style="font-size: 14px; color: black"><b>School of Science & Technology</b></label></a>
                    </button>

                </div>
                <br>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        <a href="Education/home.php"><label style="font-size: 14px; color: black"><b>School of Education, Arts and Social Sciences</b></label></a>
                    </button>
                </div>
                <br>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        <a href="Business/home.php"><label style="font-size: 14px; color: black"><b>School of Business & Economics</b></label></a>
                    </button>
                </div>
                <br>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        <a href="Agriculture/home.php"><label style="font-size: 14px; color: black"><b>School of Agricultural Sciences & Natural Resources</b></label></a>
                    </button>
                </div>
                <br>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        <a href="HealthScience/home.php"><label style="font-size: 14px; color: black"><b>School of Health Sciences</b></label></a>
                    </button>
                </div>
                <div style="text-align: center;">
                    <label style="color: blue; font-size: 20px; font-weight: bold;"><b>Simple,Transparent,Honest & Reliable.</b></label>
                </div>

            </div>
        </div>
    </div>
</div>
    </div>
</div>
</div>
<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>


<script>
     document.addEventListener("keyup", function (e) {
    var keyCode = e.keyCode ? e.keyCode : e.which;
            if (keyCode == 44) {
                stopPrntScr();
            }
        });
function stopPrntScr() {

            var inpFld = document.createElement("input");
            inpFld.setAttribute("value", ".");
            inpFld.setAttribute("width", "0");
            inpFld.style.height = "0px";
            inpFld.style.width = "0px";
            inpFld.style.border = "0px";
            document.body.appendChild(inpFld);
            inpFld.select();
            document.execCommand("copy");
            inpFld.remove(inpFld);
        }
       function AccessClipboardData() {
            try {
                window.clipboardData.setData('text', "Access   Restricted");
            } catch (err) {
            }
        }
        setInterval("AccessClipboardData()", 300);

</script>
</body>
</html>