<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_states extends Model
{
    protected $table = 'contact_states';
    protected $fillable = [ 
        'state'
    ];
}
