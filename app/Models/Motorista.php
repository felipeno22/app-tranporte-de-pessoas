<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
  
    protected $guarded = ['id'];
    protected $fillabe=[
        'name','cpf','rg','date_born','phone','email','zipcode','address','number','complement','city','state','situation'];



    use SoftDeletes;
      use HasFactory;
}
