<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  /**
   * [protected description]
   * @var [type]
   */
  protected $fillable = [
      'title', 'description', 'address', 'city', 'state', 'zipCode', 'geoLocLatitude', 'geoLocLongitude'
  ];
}
