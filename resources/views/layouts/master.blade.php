<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reddit!</title>
    <!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- CUSTOM FONT -->
<link href="https://fonts.googleapis.com/css?family=Francois+One|Open+Sans+Condensed:300" rel="stylesheet">

</head>

<body>
	<style type="text/css">
		body {
			background-color: white;
			font-family: 'Open Sans Condensed', sans-serif;
		}

		.nav {
			width: 100%;
			text-transform: uppercase;
			text-align: center;
			font-size: 1.3em;
		}

		.nav ul {
			list-style: none;
			text-align: center;
		}

		.nav li {
			display: inline-block;
			font-size: 1em;
			line-height: 30px;
			height: 30px;
		}
		 
		.nav a {
			text-decoration: none;
			color: #727077;
			display: block;
		}
		 
		.nav a.active {
			color: black;
			cursor: default;
		}

		#post_box {
			text-align: center;
			border: 1px solid black;
			/*border-image: url(wood.jpg) 30 round;*/
			border-image-repeat: stretch;
			background-color: white;
			margin-top: 10px;
			margin-bottom: 10px;
			margin-right: 10px;
			margin-left: 10px;
		}

		#post_title {
			font-size: 5em;
			color: #022b6d;
			font-family: 'Francois One', sans-serif;
		}

		#post_title a{
			color: #022b6d;
			font-family: 'Francois One', sans-serif;
		}

		.post_content {
			font-size: 1.6em;
			color: #72707E;
			font-family: 'Open Sans Condensed', sans-serif;
		}

		a {
			/*font-size: 1.6em;*/
			color: #72707E;
			font-family: 'Open Sans Condensed', sans-serif;
		}

		a:hover {
			/*font-size: 1.6em;*/
			color: #727077;
			font-family: 'Open Sans Condensed', sans-serif;
		}
		
		.click_to_edit {
			font-size: 1em;
			text-align: right;
			color: #72707E;
			font-family: 'Open Sans Condensed', sans-serif;
		}
		
		.post_url {
			font-size: 1em;
			color: #022b6d;
			font-family: 'Open Sans Condensed', sans-serif;
		}

		.footer {
			text-align: center;
		}

/*

*/
	</style>
	<div class="nav">
		<ul>
			<li>
				<a href="{{ action('PostsController@index') }}">Home</a>
			</li>
			&nbsp;&nbsp;&nbsp;
			<li>
				<a href="{{ action('PostsController@create', [2, 12]) }} ">Create a post</a>
			</li>
		</ul>
	</div>

	<article>
		<header>
		&nbsp;&nbsp;
		</header>
	</article>

    <main class="container">
        @if (Session::has('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{ session('errorMessage') }}</div>
        @endif


        @yield('content')
    </main>

	<div id="footer">
		<hr>
			<p class='footer'><a href="mailto:kmchesire@gmail.com">Created By: Keri Marie Chesire</a></p>
	</div>

<!-- minified jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>