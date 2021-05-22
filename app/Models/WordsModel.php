<?php

namespace App\Models;

use CodeIgniter\Model;

class WordsModel extends Model
{
    protected $table = 'words';
    protected $primaryKey = 'word_id';
    protected $allowedFields = ['word_dutch', 'word_english'];
}