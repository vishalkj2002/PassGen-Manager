<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9R52XVPESL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9R52XVPESL');
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
    <link rel="stylesheet" href="../CSS/managerPasswords.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <a class="navbar-brand" href="#">PassGen Manager</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto"> <!-- Align to the right -->
          <li class="nav-item active">
            <a class="nav-link" href="./home.php">Home<span class="sr-only">(current)</span></a>
          </li>
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More Options
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">About Us</a>
              <a class="dropdown-item" href="#">Contact Us</a>
              <a class="dropdown-item" href="#">Report a problem</a>
            </div>
          </li>
          <li class="nav-item">
            <button class="btn btn-primary p-0 "><a class="nav-link text-light" href="./HTML/loginPage.php">Logout</a></button>
          </li>
        </ul>
      </div>
    </nav>
    <div id="welcome">
       <h1> Welcome to PassGen Manager!</h1> 
    </div>
    <div id="welcome-text"></div>

    <div class="container">
        <h2>Your Passwords</h2>
    <table>
        <tr>
            <th>Website</th>
            <th>Username</th>
            <th>Password</th>
            <th>Edit/Delete</th>
        </tr>
    </table>
    <h2>Add a Password</h2>
    <label for="website" >Website: </label>
    <input type="text" id="input1" placeholder="Enter Website" ><br><br>
    <label for="username" >Username: </label>
    <input type="text" id="input2" placeholder="Enter Username" ><br><br>
    <label for="username" >Password: </label>
    <input type="password" id="input3" placeholder="Enter Password"><br>
    <div id="alertEmptyInput"></div><br>
    <button id="submitbtn">Submit</button>
    </div>

   <script src="../JS/managePasswords.js"></script>
</body>
</html>


