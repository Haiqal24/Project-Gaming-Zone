<?php
include('nisaa.php')
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nisaa</title>
	<link rel="stylesheet" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<!-- Navbar -->
	<header>
		<nav>
			<ul class="left-links" type="none">
				<li><a href="#about" class="link">
					about 
				</a></li>
				<li><a href="index.php #menu" class="link">
					menu
				</a></li>
				<li><a href="#index.php gallery" class="link">
					gallery
				</a></li>
			</ul>
			<a href="#home" class="logo">
				<img src="./image/logo nisaa.png" alt="" width="150" height="86">
			</a>
			<ul class="right-links" type="none">
                <li><a href="index.php #contact" class="link">
					contact 
				</a></li>
				<li><a href="#booking" class="link">
					reservations
				</a></li>
				
			</ul>
		</nav>
	</header>


	<!-- booking page -->
	<section class="booking" id="booking">
		<div class="title">
			<img src="./image/yellow wave.png" alt="">
			<p>BOOK NOW</p>
			<img src="./image/yellow wave.png" alt="">
		</div>
		<p class="sub-title">
			Book Your Table Now And Have A Great Meal!   
		</p>
		<form action="nisaa.php" method="post">
			<div class="first">
				<div class="input">
					<p>
						Your full name?
					</p>
					<input type="text" name="Name" placeholder="Write your name here...">
				</div>
				<div class="input">
					<p>
						Your email address?
					</p>
					<input type="email" name="Email" placeholder="Write your email here...">
				</div>
			</div>
			<div class="mid">
				<div class="input">
					<p>
						Total pax?
					</p>
					<div class="input-i">
					<input type="text" name="Pax" placeholder="2 people">
					<i class='bx bxs-down-arrow'></i>
					</div>
				</div>
				<div class="input">
					<p>
						What time?
					</p>
					<div class="input-i">
					<input type="time" name="Time" placeholder="10:00 am">
					</div>
				</div>
			</div>
			<div class="last">
				<div class="input">
					<p>
						What is the date?
					</p>
					<div class="input-i">
					<input type="date" name="Date">
					</div>
				</div>
				<div class="input">
					<p>
						Your phone number?
					</p>
					<input type="phone" name="Phone Number" placeholder="Write your number here...">
				</div>
			</div>
			<button class="btn">
				SUBMIT
			</button>


			<?php
				$con=mysqli_connect("localhost","root","","nisaa");

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$name = $_POST['Name'];
					$email = $_POST['Email'];
					$pax = $_POST['Pax'];
					$time = $_POST['Time'];
					$date = $_POST['Date'];
					$phoneNumber = $_POST['Phone Number'];

					$checkQuery = "SELECT * FROM booking WHERE PhoneNumber = '$phoneNumber'";
					$checkResult = mysqli_query($con, $checkQuery);

					if(mysqli_num_rows($checkResult) > 0) {
						echo "<script type='text/javascript'> alert('User Already Exists')</script>";
					} else {
						$newUserQuery = "INSERT INTO booking (Name, Pax, Date, Email, Time, PhoneNumber) VALUES ('$name', '$pax', '$date', '$email', '$time', '$phoneNumber')";
						if(mysqli_query($con, $newUserQuery)) {
							echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
						} else {
							echo "<script type='text/javascript'> alert('Error adding user to database')</script>";
						}
					}
				}
			?>


		</form>
	</section>
	
	<!-- footer -->
	<footer>
		<a href="#home">
			<img src="./image/logo nisaa.png" alt="">
		</a>
		<ul class="links" type="none">
			<li class="link">
				<a href="#about">ABOUT US</a>
			</li>
			<li class="link">
				<a href="#menu">MENU</a>
			</li>
			<li class="link">
				<a href="#gallery">GALLERY</a>
			</li>
			<li class="link">
				<a href="#booking">RESERVATION</a>
			</li>
			<li class="link">
				<a href="#contact">CONTACT</a>
			</li>
		</ul>
		<div class="box-icon">
			<a href="https://www.facebook.com/profile.php?id=100057588035273">
			<i class='bx bxl-facebook'></i>
			</a>
			<a href="https://www.instagram.com/restorannisaa/?hl=en">
			<i class='bx bxl-instagram'></i>
			</a>
			<a href="https://www.tiktok.com/@restorannisaa">
			<i class='bx bxl-tiktok'></i>
			</a>
		</div>
	</footer>
</body>
</html>