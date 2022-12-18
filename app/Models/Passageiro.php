<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Passageiro extends Model
{
    
    protected $guarded = ['id'];
    protected $fillabe=[
        'name','cpf','rg','date_born','phone','email','zipcode','address','number','complement','city','state','situation'];



    use SoftDeletes;
      use HasFactory;
}
