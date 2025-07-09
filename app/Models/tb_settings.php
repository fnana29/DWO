<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_settings extends Model
{
    use HasFactory;
    protected $table = 'tb_settings';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'phone_number',
        'email',
        'address',
        'instagram',
        'time_business_hour',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
