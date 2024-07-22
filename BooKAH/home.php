<div class="bookah-logo-container">
    <img src="assets/img/name.png" alt="BooKAHLogo" class="bookah-logo">
</div>

<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['login']!=''){
    $_SESSION['login']='';
}
if(isset($_POST['login'])){
    $email = $_POST['emailid'];
    $password = md5($_POST['password']);
    $sql = "SELECT EmailId,Password,StudentId,Status FROM tblstudents WHERE EmailId=:email and Password=:password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0){
        foreach ($results as $result) {
            $_SESSION['stdid'] = $result->StudentId;
            if($result->Status == 1){
                $_SESSION['login'] = $_POST['emailid'];
                echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
            } else {
                echo "<script>alert('Your Account Has been blocked. Please contact admin');</script>";
            }
        }
    } else {
        echo "<script>alert('Invalid Details');</script>";
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="An Online Library Management System" />
    <meta name="author" content="Alex Wambua" />
    <title>Online Library Management System | Welcome to BooKAH</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <!------HEADER SECTION START-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="header-line">Welcome to BooKAH</h1>
                    <p class="tagline">Streamlining Library Operations with Enhanced User Experience</p>
                    <a href="#features" class="btn btn-primary">Learn More</a>
                    <a href="#ulogin" class="btn btn-success">Get Started</a>
                    <a href="index.php" class="btn btn-success">Login/Register</a>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <!-- FEATURE SECTION START -->
            <section id="features">
            <h4 class="header-line">As User</h4>
                <div class="row">
                    <div class="col-md-4">
                        <h3>Check Available Books</h3>
                        <img src="assets/img/1.jpg" alt="Check Available Books" class="img-responsive" />
                        <p>Easily check the availability of books in the library to ensure you can borrow the ones you need.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Check Not Returned Books</h3>
                        <img src="assets/img/2.jpg" alt="Check Not Returned Books" class="img-responsive" />
                        <p>Keep track of books that haven't been returned yet to avoid late fees and manage your borrowed items better.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>View All Issued Books</h3>
                        <img src="assets/img/3.jpg" alt="View All Issued Books" class="img-responsive" />
                        <p>Access a comprehensive list of all books ever issued to you, making it easier to manage your reading history.</p>
                    </div>
                </div>
                <h4 class="header-line">As Admin</h4>
                <div class="row">
                    <div class="col-md-4">
                        <h3>Issue and View All Issued Books</h3>
                        <p>Access a comprehensive list of all books ever issued by you, making it easier to manage the lending  history.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Register and Manage All Users</h3>
                        <p>Register,manage,and even block users who do not follow rules and regulations.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Add and Manage All Authors</h3>
                        <p>Add, manage,and even delete authors for all the books available in the Library.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Add and Manage All Categories of Books</h3>
                        <p>Add, manage,and even delete categories of books available in the Library.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Manage All Books</h3>
                        <p>Add, manage,and even delete books listed, issued and those not returned yet.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Manage All Fines</h3>
                        <p>Add, manage,and even delete users with books not returned yet and fine them accordingly..</p>
                    </div>
            </section>
            <!-- FEATURE SECTION END -->

            <!-- ABOUT SECTION START -->
            <section id="about">
                <div class="row pad-botm">
                    <div class="col-md-12">
                        <h4 class="header-line">About This Project</h4>
                        <p>This project was inspired by the need to automate and streamline library operations, enhancing the user experience for both librarians and students. Developed as a portfolio project for Holberton School, BooKAH aims to provide an efficient and user-friendly solution for managing library resources.</p>
                        <ul class="list-inline">
                            <li><a href="https://www.linkedin.com/in/alex-mutune-17b7111a0" class="btn btn-success" target="_blank">LinkedIn</a></li>
                            <li><a href="https://github.com/major0001" class="btn btn-success" target="_blank">GitHub</a></li>
                            <li><a href="https://X.com/major_blesking" class="btn btn-success" target="_blank">X (former Twitter)</a></li>
                        </ul>
                        <p><a href="https://github.com/major0001/Bookah" class="btn btn-primary" target="_blank">View the project repository on GitHub</a></p>
                    </div>
                </div>
            </section>
            <!-- ABOUT SECTION END -->

            <!-- LOGIN SECTION START -->
            <a name="ulogin"></a>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">Login to BooKAH</div>
                        <div class="panel-body">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Enter Email id</label>
                                    <input class="form-control" type="text" name="emailid" required autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" required autocomplete="off" />
                                    <p class="help-block"><a href="user-forgot-password.php">Forgot Password</a></p>
                                </div>
                                <button type="submit" name="login" class="btn btn-info">LOGIN</button> | <a href="signup.php">Not Register Yet</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LOGIN SECTION END -->
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php'); ?>
    <!-- FOOTER SECTION END-->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
