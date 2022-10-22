<?php
if(isset($_POST['submit'])){
$name =$_POST['name'];
$email =$_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];
$to = "testwebpageno1@gmail.com";
$txt= "Name:".$name."<br>"."email:".$email."<br>"."Subject:".$subject."<br>"."Message:".$message;
$headers="from:".$email."\r\n"."CC: testwebpageno1@gmail.com";
}
if($email!=NULL){
    mail($to,"A New Message from College Website",$txt,$headers);
    echo "/cs/pages/contact.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------------------college title---------------->
    <title>Government Arts snd Science college Kangeyam</title>
    <!----------------------Google Fonts------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500;700&display=swap" rel="stylesheet">
    <!-----------------------javascript------------------->
    <script src="/cs/assets/js/cs.js"></script>
    <!-----------------------stylesheet----------------->
    <link rel="stylesheet" href="/cs/assets/css/style.css">
    <link rel="stylesheet" href="/cs/assets/css/contact.css">
    <!------------------bootstrap scripts------------>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-------------------Scroll reveal API----------------------->
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
    <!-----------------------------navbar starting----------------------------------->
    <section class="navbar">
        <div class="nav-area">
            <!--logo-->
            <div class="nav-logo">
                <a href=""><img src="/cs/assets/images/logo.png" alt="logo"></a>
            </div>
            <!--college name-->
            <div class="nav-name">
                <h1>Government Arts snd Science college Kangeyam</h1><br>
                <p><i>Affiliated to Bharathiyar University</i></p>
            </div>
            <!--navigation links-->
            <div id="togglemenu" class="nav-links">
                <!--toggle-menu-close-->
                <div class="toggleclose" onclick="toggleclose()"><img src="/cs/assets/icons/xmark.svg" alt="close"></div>
                <br>

                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="/cs/pages/principal-staff.html">Staff & Principal</a></li>
                    <li><a href="/cs/pages/courses-dapartments.html">Courses & Department</a></li>
                    <li><a href="" onclick="return false">Certificates</a>
                        <div class="dropdown">
                            <ul>
                                <li><a href="/cs/assets/objects/nirf22 college.pdf" download="NIRF - College Report 2022">NIRF - College Report</a></li>
                                <li><a href="/cs/assets/objects/nirf 22 overall.pdf" download="NIRF - Overall Report 2022">NIRF - Overall Report</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="/cs/pages/activity.html">Activity</a></li>

                    <li><a href="/cs/pages/contact.html">Contact us</a></li>
                </ul>
            </div>
            <!--toggle-menu-open-->
            <div class="toggleopen" onclick="toggleopen()"><img src="/cs/assets/icons/bars.svg" alt="menu"></div>
        </div>
    </section>
    <!-----------------------------navbar ending----------------------------------->
    <!---------------------------conatact us starting---------------------------->
    <section class="contact-us">
        <div class="contactarea">
            <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="inputarea">
                    <label for="name">Name</label>
                    <br>
                    <input type="text" name="name">
                </div>
                <div class="inputarea">
                    <label for="email">E-mail</label>
                    <br>
                    <input type="email" name="email">
                </div>
                <div class="inputarea">
                    <label for="subject">subject</label>
                    <br>
                    <input type="text" name="subject">
                </div>
                <div class="inputarea">
                    <label for="message">Message</label>
                    <br>
                    <textarea name="message" ></textarea>
                </div>
                <div class="txtarea">
                    <button type="submit" name="submit">submit</button>
                </div>
            </form>
            <div class="contactbox">

            </div>
        </div>
    </section>
    <!---------------------------conatact us ending---------------------------->

    <!-----------------------------footer-starting----------------------------------->
    <!--footer-->
    <section class="footer">
        <div class="footer-area">
            <div class="footer-area-quicklinks">
                <!--quicklink heading-->
                <div class="quicklink-heading">
                    <h1>QuickLink</h1>
                </div>
                <!--links-->
                <div class="footer-links">
                    <a href="index.html"><span>></span> Home</a>
                    <a href="/cs/pages/principal-staff.html"><span>></span> Staff & Principal</a>
                    <a href="/cs/pages/courses-dapartments.html"><span>></span> Courses & Department</a>
                    <a href="/cs/pages/activity.html"><span>></span> Activity</a>
                    <a href="/cs/pages/contact.html"><span>></span> Contact</a>
                </div>
                <br>
                <div class="quicklink-heading">
                    <h1>Address</h1>
                </div>
                <div class="footer-address">
                    <p>The Principal,<br>Government Arts and Science College, <br>Mullipuram Post, Kangeyam, Thirupur-638108. <br> Phone No : 04257-241900<br>Email : principal.kangeyam@yahoo.in<br></p>

                </div>
            </div>
            <!--copyright-->
            <div class="copyright">
                <p>&copy; Copyright Government Arts snd Science college Kangeyam</p>
            </div>
        </div>

    </section>
    <!-----------------------------footer-ending----------------------------------->

</body>

</html>