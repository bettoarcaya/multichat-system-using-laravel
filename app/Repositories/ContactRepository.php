<?php

namespace App\Repositories;

use App\Models\Contact;

class ContactRepository{
    
    
    public function recentChatsByUserId( int $user_id ){

        $response = Contact::where('user_id', $user_id)
                    ->where('has_chat', 1)
                    ->get();

        return $response;
    }
}