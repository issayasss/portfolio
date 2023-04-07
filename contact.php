<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		
		<link rel="stylesheet" href="styles.css" />
        <link rel="stylesheet" href="contact.css" />
		
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
			integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<script defer src="app.js"></script>
		<title>Contact</title>
	</head>
	<body>
		<div class="container">
			<header class="header-nav">
				<nav class="nav">
					<h1 class="logo">Touch</h1>
					<ul class="nav-items">
						<li class="items"><a href="index.php">Home</a></li>
						<li class="items"><a href="#">About</a></li>
						<li class="items"><a href="contact.php">Contact</a></li>
						<li class="items"><a href="#">Services</a></li>
						<li class="items"><a href="#">Projects</a></li>
					</ul>
				</nav>
				<i class="fa-solid fa-burger" id="hamburger"></i>
			</header>
			<h1>Message me let's talk Business</h1>
			<div class="wrapper">
				<form action="contact_config.php" method="POST">
					<div class="name">
						<label for="name"> Name: </label>
						<input type="text" name="name" id="">
					</div>
					<div class="phone">
						<label for="phone"> Phone: </label>
						<input type="text" name="phone" id="">
					</div>
					<div class="email">
						<label for="email"> Email: </label>
						<input type="text" name="email" id="">
					</div>
					<div class="message">
						<label for="message"> Message: </label>
						<textarea
						name="message"
							id="message"
							cols="30"
							rows="10"
						></textarea>
					</div>

					<input
						class="contact-btn"
						type="submit"
						value="Send me a Message!"
                        name="save"
					/>
					
				</form>
			</div>
			<footer class="footer">
				<div class="first">
					<h1>Touch</h1>
					<h2>Contact: +250789874753</h2>
					<h3>Privacy Policy</h3>
				</div>

				<div class="second">
					<ul>
						<li>Support</li>
						<li>Contact</li>
						<li>Services</li>
						<li>Products</li>
						<li>Business</li>
					</ul>

					<span class="copyright">Copyright @ 2023</span>
				</div>

				<div class="third">
					<form action="#">
						<input type="text" placeholder="Email Address" />
						<button class="btn">Subscribe</button>
					</form>
					<div class="socials">
						<i class="fa-brands fa-facebook"></i>
						<i class="fa-brands fa-youtube"></i>
						<i class="fa-brands fa-twitter"></i>
						<i class="fa-brands fa-github"></i>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>
