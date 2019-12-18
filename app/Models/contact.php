<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'user_id', 'contact_id', 'contact_state'
    ];
}
