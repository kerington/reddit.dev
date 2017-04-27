<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reddit</title>
    <!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

</head>

<body>
<nav>
	<ul>
		<li>
			<a href="{{ action('HomeController@increment', [50]) }}">Increment</a>
		</li>
		<li>
			<a href="{{ action('HomeController@showNumbers', [2, 12]) }} ">Two Numbers</a>
		</li>
	</ul>
</nav>
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