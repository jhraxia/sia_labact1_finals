<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    protected $table = 'tblteacher';
    public $timestamps = false;
    protected $primaryKey = 'teacherid';

// column sa table

    protected $fillable = [
    'teacherid','firstname', 'middlename', 'lastname'
    ];
}