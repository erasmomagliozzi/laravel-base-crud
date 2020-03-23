<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    protected $fillable =
    [
      'name',
      'price',
      'expedition price',
      'shop',
      'description'
    ];
}
