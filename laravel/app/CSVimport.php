<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class CSVimport extends Model
{
    protected $fillable = ['name','reserved_date','checkin_date','total_price'];
}