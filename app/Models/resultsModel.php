<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resultsModel extends Model
{
    use HasFactory;
    protected $table='typing_results';
    protected $primaryKey='id';
    protected $fillable = ['wpm', 'cpm', 'errors'];
}
