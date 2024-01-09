<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;




class Room extends Model
{ 
    protected $table = 'hotelroom'; // Adjust to match your actual table name
    protected $primaryKey = 'hotelRoomID'; 
    protected $fillable = ['hotelRoomID','roomNumber', 'outletName', 'maxOccupancy', 'roomType', 'roomPrice', 'breakfastincluded', 'roomStatus', 'image'];

    public function getRouteKeyName()
    {
        return 'hotelRoomID'; // Adjust to match the attribute you want to use
    }
    
    
}

