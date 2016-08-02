<?php
class MasterView {
	public static function showHeader() {
		$title = (array_key_exists ( 'headertitle', $_SESSION )) ? $_SESSION ['headertitle'] : "";
		?>
<!DOCTYPE html>
<html>
<head>
<title><?php $title ?></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
	integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
	crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
	integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX"
	crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"
	integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
	crossorigin="anonymous"></script>
</head>
<body>
        <?php
	}
	public static function showNavBar() {
		// Show the navbar
		$user = (array_key_exists ( 'user', $_SESSION )) ? $_SESSION ['user'] : null;
		if (! is_null ( $user ))
			echo "Hello " . $user->getUserName () . " <br>";
		?>
		<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
					aria-expanded="false">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home">UniReview</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li> -->
					<li><a href="home">Home</a></li>

					<li><a href="tests.html">Tests</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="register">Register</a></li>
					<li><a href="account">Account</a></li>
					<?php
		
		if (isset ( $_SESSION ['user'] )) {
			echo "<li><a href='login'>Log Out</a></li>";
		} else {
			echo "<li><a href='login'>Login</a></li>";
		}
		?>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>



	<!-- <nav>
		<a href="home">Home</a> <a href="register">Sign-up</a> <a
			href="account">Account(temp)</a> <a href="tests.html">Tests</a> <a
			href="login">Login</a>
	</nav> -->
	<?php
	}
	public static function showFooter() {
		$footer = (array_key_exists ( 'footertitle', $_SESSION )) ? $_SESSION ['footertitle'] : "";
		echo $footer;
		?>
		
</body>
</html>
<?php
	}
}
?>