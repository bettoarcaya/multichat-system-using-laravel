<?php

namespace App\Repositories;

use DB;
use Auth;
use App\Models\Chat;

class ChatRepository{

    public function getChatByContactId( int $contact_id){
        
        $response = DB::table('chats')
                    ->whereIn('from_user', [Auth::user()->id, $contact_id])
                    ->whereIn('to_user', [Auth::user()->id, $contact_id])
                    ->get();

        return $response;
    }

    public function storeNewMsg( array $msg_data ){

        $response = \App\Models\Chat::create($msg_data);

        return $response;
    }


}