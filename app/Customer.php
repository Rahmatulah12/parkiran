<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['type_id', 'name', 'police_number', 'birth_date', 'gender', 'phone'];
    public function vehicleType()
    {
        return $this->hasOne('App\VehicleType', 'foreign_key');
    }
}
