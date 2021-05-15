<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{	
		$data = [
			'title'=> 'Dutch Cards - Memorize Dutch Words!'
		];
		return view('layout', $data);
	}
}
