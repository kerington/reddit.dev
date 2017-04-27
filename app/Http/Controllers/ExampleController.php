<?php

namespace App\Http\Controllers;


class ExampleController extends Controller
{
	

	public function rollDice($guess)
	{
		$random = mt_rand(1, 6);

		if ($guess == $random) {
			$message = 'You guessed it!';
		} else if ($guess > $random) {
			$message = 'Your guess was too high!';
		} else {
			$message = 'Your guess was too low!';
		}

		if(!is_numeric($guess) || ($guess > 6 || $guess < 1)) {
			$message = 'Your guess must be a number between 1 and 6';
		}

		$data = [
			'guess' => $guess,
			'random' => $random,
			'message' => $message
		];

		return view('roll-dice', $data);
	}


	public function addition($num1, $num2)
	{
		if(is_numeric($num1) && is_numeric($num2)) {
			return $num1 + $num2;
		}
		return 'Both parameters must be numeric.';
	}
}