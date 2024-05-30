<?php
	include 'message.php';
    $id = $_GET['updateid'];

    $sql = "select * from `passwords` where id = $id";
    $result = mysqli_query($cons, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
	$website = $row['website'];
	$username = $row['username'];
	$password = $row['password'];


    if(isset($_POST['submit'])) {
		$website = $_POST['website'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql="update `passwords` set id = '$id', website = '$website', username = '$username', password = '$password' where id = $id";
		$result = mysqli_query($cons, $sql);
		if($result) {
			echo "<script>alert('Password Updated')</script>";
            header("Location: ./managePasswords.php");
		} else {
			die(mysqli_error($cons));
		}
	}
?>

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
			<button class="btn btn-primary p-0 "><a class="nav-link text-light"  onclick="logout()">Logout</a></button>
		  </li>
		</ul>
	  </div>
	</nav>
	<div id="welcome">
	   <h1> Welcome to PassGen Manager!</h1>
	</div>
	<div class="container">
		<h2>Your Passwords</h2>
	<table class="table">
		<thead>
			<tr>
			<th scope="col">Serial No</th>
			<th scope="col">Website</th>
			<th scope="col">Username</th>
			<th scope="col">Password</th>
			<th scope="col">Operations</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql = "Select * from `passwords`";
				$result = mysqli_query($cons, $sql);
				if($result) {
					while($row = mysqli_fetch_assoc($result)) {
						$id = $row['id'];
						$website = $row['website'];
						$username = $row['username'];
						$password = $row['password'];
						echo ' <tr>
							<th scoper="row">'.$id.'</th>
							<td>'.$website.'</td>
							<td>'.$username.'</td>
							<td>'.$password.'</td>
							<td>
								<button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
								<button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
							</td>
						</tr> ';
					}
				}
			?>
		</tbody>
	</table>
	<h2>Add a Password</h2>
	<form method="post">
		<label for="website" >Website: </label>
		<input type="text" id="input1" placeholder="Enter Website" name="website" required value="<?php echo $website;?>" ><br><br>
		<label for="username" >Username: </label>
		<input type="text" id="input2" placeholder="Enter Username" name="username" required value="<?php echo $username;?>" ><br><br>
		<label for="password" >Password: </label>
		<input type="password" id="input3" placeholder="Enter Password" name="password" required value="<?php echo $password;?>" ><br>
		<div id="alertEmptyInput"></div><br>
		<button type="submit" id="submitbtn" name="submit">Update</button>
	</form>
	</div>

   <!-- <script src="../JS/managePasswords.js"></script> -->
   <script>function logout(){
	  window.location.href = '../index.php';
	  alert("Logout successful!");

	}</script>
</body>
</html>


