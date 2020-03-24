<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    protected $fillable =
    [
      'name',
      'price',
      'shipping_times',
      'shop',
      'description'
    ];
}
