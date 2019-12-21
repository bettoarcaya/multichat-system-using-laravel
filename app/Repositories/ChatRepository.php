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

        $chat = new Chat();
        $chat->from_user = $msg_data['from_user'];
        $chat->to_user = $msg_data['to_user'];
        $chat->msg_content = $msg_data['msg_content'];
        $chat->save();
    }


}