<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class analytics extends Model
{
    function countData($table) {
        $db = \Config\Database::connect();
        return $db->table($table)->countAllResults();
    }
}
