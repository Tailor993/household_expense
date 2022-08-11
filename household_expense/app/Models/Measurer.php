<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurer extends Model
{
    use HasFactory;
    
    protected $table = 'measurers';
    protected $primaryKey = 'id';
    public $incrementing  =  true;
    public $timestamps = true;
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $connection = 'mysql';
}
