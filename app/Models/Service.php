<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  use HasFactory;
  protected $guarded = [];

  // Error was:  In Laravel's many-to-many relationships, the convention is to name the pivot table by combining the singular form of the related model names in alphabetical order, separated by an underscore. So, in your case, the pivot table should be named package_service.
  // but my table name service_package so i need to reference the correct pivot table name.
  public function packages()
  {
    return $this->belongsToMany(Package::class, 'service_package');
    //  return $this->belongsToMany(Package::class)->withTimestamps();
  }

  //     public function packages()
  // {
  //     return $this->belongsToMany(Package::class, 'service_package', 'service_id', 'package_id');
  // }

}
