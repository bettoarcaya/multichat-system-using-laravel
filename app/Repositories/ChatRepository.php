<?php

namespace App\Repositories;

use DB;
use Auth;

class ChatRepository{

    public function getChatByContactId( int $contact_id){
        
        $response = DB::table('chats')
                    ->whereIn('from_user', [Auth::user()->id, $contact_id])
                    ->whereIn('to_user', [Auth::user()->id, $contact_id])
                    ->get();

        return $response;
    }


}