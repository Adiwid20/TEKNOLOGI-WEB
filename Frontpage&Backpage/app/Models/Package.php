<?php

namespace App\Models;

use App\Http\Controllers\CommunityController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table = 'packages';
    protected $primaryKey = 'package_id';
    protected $fillable=[
        'comunity_id','id_category','name_package','img_package','price','status','facility','descriptions','location','time'
    ];

    public function kategori()
    {
        return $this->belongsTo(Category::class, 'id_category', 'category_id');
    }

    public function komunitas()
    {
        return $this->belongsTo(Comunity_wisata::class, 'id_comunity', 'comunity_id');
    }
}
