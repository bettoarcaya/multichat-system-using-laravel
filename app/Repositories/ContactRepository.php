<?php

namespace App\Repositories;

use DB;
use App\Models\Contact;

class ContactRepository{
    
    
    public function recentChatsByUserId( int $user_id ){

        $response = DB::table('contacts')
                    ->where('user_id', $user_id)
                    ->where('has_chat', 1)
                    ->join('users', 'users.id', '=', 'contacts.contact_id')
                    ->get();

        return $response;
    }
}