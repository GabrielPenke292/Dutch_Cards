<?php

namespace App\Controllers;

use App\Models\WordsModel;
class Home extends BaseController
{
	public function index()
	{	
		$wordsModel = new WordsModel();

		$data = [
			'title'	=> 'Dutch Cards - Memorize Dutch Words!',
			'words'	=>	$wordsModel->findAll()
		];
		return view('cards', $data);
	}
}
