<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = [];

    public function service() {
        return $this->belongsToMany(Service::class, 'room_service', 'room_id', 'service_id')->withTimestamps();
    }

    public function booking() {
        return $this->hasMany(Booking::class, 'room_id', 'id');
    }
}
