<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_catalogues extends Model
{
    use HasFactory;
    protected $table = 'tb_catalogues';
    protected $primaryKey = 'catalogue_id';
    protected $fillable = [
        'catalogue_id',
        'image',
        'package_name',
        'description',
        'price',
        'category_id',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(tb_category::class, 'category_id', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
