<?php
$login=0;
$invalid=0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // header('location: managePasswords.php');
  include 'message.php';
  $email = $_POST['email'];
  $password = $_POST['psw'];



  $sql = "select * from `registration1` where email='$email' and password ='$password'";
  $result = mysqli_query($cons, $sql);
  if ($result) {
    $num = mysqli_num_rows($result);
    if ($num > 0) {
      // echo "<h1>login successfull</h1>";
      session_start();
      $_SESSION['email']=$email;
      header('location: home.php');

    } else {
      $invalid=1;
      echo '<script>alert("Invalid Credentials");</script>';
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9R52XVPESL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9R52XVPESL');
</script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: block; /* Directly visible */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: #474e5d;
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }
  </style>
</head>
<body>


  <div id="id01" class="modal">

    <form class="modal-content" action="loginPage.php" method="post">
      <div class="imgcontainer">
        <h2>Login Form</h2>
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      </div>

      <div class="container">
        <label for="uname"><b>Email</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <a href="../index.php"><button type="button"  class="cancelbtn">Cancel</button></a>
        <span class="psw"> <a href="#">Forgot password?</a></span>
      </div>
    </form>
  </div>

  <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
        window.location.href = "../index.php";
      }
    }
    document.querySelector('.close').onclick = function() {
      modal.style.display = "none";
      window.location.href = '../index.php'; // Redirect to the home page
    }
  </script>

</body>
</html>
