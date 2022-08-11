<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $primaryKey = 'id';
    public $incrementing  =  true;
    public $timestamps = true;
    protected $dateFormat = 'YYYY-MM-dd HH:mm:ss';
    protected $connection = 'mysql';

}
