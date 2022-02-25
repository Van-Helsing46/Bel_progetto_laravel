<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'messages';
    protected $guarded = [];

    public function users() {
        return $this->hasOne('App\Models\User', 'user_id', 'id');
    }

    public function sellers() {
        return $this->hasOne('App\Models\Seller', 'seller_id', 'id');
    }
}
