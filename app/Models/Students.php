<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    //class name and table name
    protected $table = 'students';
    protected $primaryKey =  'id';
    public $timestamps = true;
    // protected $dateFormat = 'h:m;s';
    protected $fillable = ['fullname', 'birthday', 'address'];

}
