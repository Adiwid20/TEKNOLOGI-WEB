<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunity_wisata extends Model
{

    use HasFactory;
    protected $table = 'comunity_wisatas';
    protected $primaryKey = 'comunity_id';
    protected $fillable=[
        'comunity_id','comunity_name','comunity_descriptions'
    ];
    public function test4(){
        return $this->hasMany(Package::class);
    }
}
