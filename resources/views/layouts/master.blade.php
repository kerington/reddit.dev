<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reddit</title>
    <!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- CUSTOM FONT -->
<link href="https://fonts.googleapis.com/css?family=Francois+One|Open+Sans+Condensed:300" rel="stylesheet">

<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

</head>

<body>
	<style type="text/css">
		body {
			background-color: #EED8C9;
			font-family: Lora;
			text-align: center;
		}

.nav {
  /*background-color: black;*/
  width: 100%;
  /*margin-top: -20px;*/
  text-transform: uppercase;
  font-size: 1.3em;
  font-family: 'BenchNine', 'Arial Narrow', sans-serif;
}

.nav ul {
  list-style: none;
  text-align: center;
}

.nav li {
  /*font-family: 'Yanone Kaffeesatz', 'Arial Narrow', sans-serif;*/
  font-size: 1em;
  line-height: 30px;
  height: 30px;
}
 
.nav a {
  text-decoration: none;
  color: white;
  display: block;
}
 
.nav a:hover {
  color: white; /*change nav bar TEXT color when hovered*/
  outline: none;
}
 
.nav a.active {
  color: black;
  cursor: default;
}

		#post_box {
			border: 10px solid transparent;
			border-image: url(wood.jpg) 30 round;
			border-image-repeat: stretch;
			background-color: #727077;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		#post_title {
			font-size: 5em;
			color: #E99787;
		}

		.post_content {
			font-size: 2em;
			color: #EED8C9;
		}
		
		.post_url {
			font-size: 1em;
			color: #EED8C9;
		}

/*font-family: 'Francois One', sans-serif;
font-family: 'Open Sans Condensed', sans-serif;
*/
	</style>
	<div class="nav">
		<ul>
			<li>
				<a href="{{ action('HomeController@increment', [50]) }}">Increment</a>
			</li>
			<li>
				<a href="{{ action('HomeController@showNumbers', [2, 12]) }} ">Two Numbers</a>
			</li>
		</ul>
	</div>
		<article>
			<header>
			&nbsp;&nbsp;
			</header>
		</article>

	    @yield('content')

	<div id="footer">
		<hr>
			<p>Created By: Keri Marie Chesire</p>
			<p>Contact me <a href="mailto:kmchesire@gmail.com"> here!</a>.</p>
	</div>

</body>

</html>