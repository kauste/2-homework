<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Color;
class Animal extends Model
{
    use HasFactory;
    public function showColorFromOtherTable(){
        return $this->belongsTo(Color::class, 'color_id', 'id'); // o kodel dvejose vietose ta pati sakom?
    }
}