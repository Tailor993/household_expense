<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurment extends Model
{
    use HasFactory;
    
    protected $table = 'measurments';
    protected $primaryKey = 'id';
    public $incrementing  =  true;
    public $timestamps = true;
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $connection = 'mysql';

}
