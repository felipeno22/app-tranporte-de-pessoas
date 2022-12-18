<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Veiculo extends Model
{
     protected $guarded = ['id'];
    protected $fillabe=[
        'title','placa','situation','modelo','ano'];



    use SoftDeletes;
      use HasFactory;
}
