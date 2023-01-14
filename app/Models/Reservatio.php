<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservatio extends Model
{
    use HasFactory;
    protected $fillable=['first_name','last_name','tel_number','email','res_date','guest_number','table_id'];
    protected $dates = [
        'res_date'
    ];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
