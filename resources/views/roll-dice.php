<!DOCTYPE html>
<html lang="en">
<head>
    <title>My First View</title>
    <style type="text/css">
    	body {
    		background-color: teal;
    		color: pink;
    		font-family: 'Lora';
			font-size: 2em;
    	}
    </style>
</head>
<body>
	You guessed <?= $guess ?>... 
    but you rolled <?= $random ?>!
</body>
</html>