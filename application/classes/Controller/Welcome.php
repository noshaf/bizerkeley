<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('<center><h1>Bizerkeley</h1></center>');
	}

} // End Welcome
