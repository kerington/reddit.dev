<?php
/**
 * PHP version 7.1
 *
 * This source file is subject to the license that is bundled with this package in the file LICENSE.
 */
namespace App\Http\Controllers;
class HomeController extends Controller
{
    // actions
    public function showWelcomePage()
    {
        /*header('location: /sayhello/Olympic');
        die;*/
        //return redirect()->action('HomeController@sayHello', ['Olympic']);
        return view('welcome');
    }

    public function showNumbers($start, $end) {
        $data = ['start' => $start, 'end' => $end];
        return view('foreach', $data);
    }

    public function sayHello($name = "World") {
        if($name === "Keri") {
            return Redirect::to("/");
        }
        $data = ['name' => $name];
        return view('my-first-view', $data);
    }

    public function uppercased($word)
    {
        $data = [
            'word' => $word,
            'uppercased' => strtoupper($word),
        ];
        return view('uppercase', $data);
    }

    public function increment($number =0)
    {
        $data =[];
        if(is_numeric($number)) {
            $data['number'] = $number +1;
        } else {
            $data['number'] = "$number is not a number and cannot be incremented.";
        }

        return view('increment', $data);
    }

}