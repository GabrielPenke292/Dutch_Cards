<?php

namespace App\Controllers;

use App\Models\WordsModel;
class Home extends BaseController
{
	public function index($logged = false)
	{	

		if($logged){
			$wordsModel = new WordsModel();

			$data = [
				'title'			=> 'Dutch Cards - Memorize Dutch Words!',
				'totalWords'	=> $wordsModel->findAll()
			];
			return view('cards', $data);
		}
		$data = ['title' => 'Dutch Cards - Memorize Dutch Words!'];
		return view("authentication/login", $data);
		
	}

	public function getAllWords(){
		$wordsModel = new WordsModel();

		$data = $wordsModel->findAll();

		echo json_encode($data);
	}

	public function addCards(){
		$wordsModel = new WordsModel();

		$data = [
			'title'			=> 'Dutch Cards - Memorize Dutch Words!',
			'totalWords'	=> $wordsModel->findAll()
		];

		return view('addCards', $data);
	}

	public function saveNewCard(){
		$wordsModel = new WordsModel();

		$dutchWord = $this->request->getPost('dutchWord');
		$englishWord = $this->request->getPost('englishWord');
		$data = [
			'word_dutch' 	=> $dutchWord,
			'word_english' 	=> $englishWord,
		];
		$response['bool'] = $wordsModel->save($data);
		$response['totalWords'] = $wordsModel->findAll();

		echo json_encode($response);
	}

	public function checkLogin(){
		$logged = true;
		$this->index($logged);
	}
}
