<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\States;

class Services extends Model
{
    protected $fillable = [
        'name', 'description', 'state_id',
    ];
    
    public function state(){
        return $this->belongsTo(States::class);
    }
}
