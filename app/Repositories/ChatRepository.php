<?php

namespace App\Repositories;

use DB;
use Auth;

class ChatRepository{

    public function getChatByContactId( int $contact_id){
        
        $response = DB::table('chats')
                    ->where('from_user', Auth::user()->id)
                    ->where('to_user', $contact_id)
                    ->get();

        return $response;
    }


}