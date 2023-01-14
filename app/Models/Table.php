<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\TableStatus;
use App\Enums\TableLocation;

class Table extends Model
{
    use HasFactory;
    protected $fillable=['name','guest_number','status','location'];
    protected $casts=[
       'status'=>TableStatus::class,
       'location'=>TableLocation::class
   ];
}
