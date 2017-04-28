<?php

// 1.Organize code, similar type of classes
// all models in \App\Models
// all controller \App\Http\Controllers
//
// 2. Avoid name collisions
// Classes with the same name -> Laravel's Event class 
// Fully-Qualified Names -> FQN

// File System -> root folder -> /

// \Session (root name space)

//root namespace declaration is optional
namespace MeetupClone { // root namespace
	class Event
	{

	}
//
}

namespace GithubApiClient {
	class Event {}
}


use MeetupClone\Event as Meetupevent;
use GithubApiClient\Event as GithubEvent;


$event = new Meetupevent(); //FQN


$gethubEvent = new GithubApiClient();










