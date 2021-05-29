<?php

namespace App\Controllers;

use App\Models\WordsModel;
class Home extends BaseController
{
	public function index()
	{	
		$wordsModel = new WordsModel();

		$data = [
			'title'			=> 'Dutch Cards - Memorize Dutch Words!',
			'totalWords'	=> $wordsModel->findAll()
		];
		return view('cards', $data);
	}

	public function getAllWords(){
		$wordsModel = new WordsModel();

		$data = $wordsModel->findAll();

		echo json_encode($data);
	}

	public function addCards(){

		$data = [
			'title'			=> 'Dutch Cards - Memorize Dutch Words!',
		];

		return view('addCards', $data);
	}
}
