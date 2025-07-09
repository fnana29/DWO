<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_category extends Model
{
    use HasFactory;
    protected $table = 'tb_categories';
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
