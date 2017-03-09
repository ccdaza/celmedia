<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Services;

class States extends Model
{
    protected $fillable = [
        'state'
    ];
    
    public function services (){
        return $this->hasMany(Services::class);
    }
}
