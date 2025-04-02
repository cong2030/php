<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    protected $table = 'tin';
    protected $primaryKey = 'id';
    protected $datas = 'ngaydang';
    protected $fillable = ['tieuDe', 'tomTat', 'urlHinh', 'idLT'];
    public $timestamps = true;
}

