<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
            'name',
            'phone_number',
            'company',
            'application_name',
            'message',
            'file',
            'user_id'
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
