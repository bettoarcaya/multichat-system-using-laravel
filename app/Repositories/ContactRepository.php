<?php

namespace App\Repositories;

use DB;
use App\Models\Contact;

class ContactRepository{
    
    
    public function recentChatsByUserId( int $user_id ){

      $response = DB::table('contacts')
                  ->select(
                      'contacts.id as contact_id',
                      'users.name', 'users.email', 'users.img', 'users.id as user_id',
                      'user_profiles.bio',
                      'user_states.state'
                  )
                  ->where('contacts.user_id', $user_id)
                  ->where('contacts.has_chat', 1)
                  ->join('users', 'users.id', '=', 'contacts.contact_id')
                  ->join('user_profiles', 'user_profiles.user_id', '=', 'users.id')
                  ->join('user_states', 'user_profiles.state_id', '=', 'user_states.id')
                  ->get();

      return $response;
    }

    public function searchRecentChats( string $query, int $user_id ){

      $response = DB::table('contacts')
                  ->select(
                    'contacts.id as contact_id',
                    'users.name', 'users.email', 'users.img', 'users.id as user_id',
                    'user_profiles.bio',
                    'user_states.state'
                  )
                  ->where('contacts.user_id', $user_id)
                  ->where('contacts.has_chat', 1)
                  ->join('users', 'users.id', '=', 'contacts.contact_id')
                  ->where('users.name', 'like', '%$query%')
                  ->join('user_profiles', 'user_profiles.user_id', '=', 'users.id')
                  ->join('user_states', 'user_profiles.state_id', '=', 'user_states.id')
                  ->get();

      return $response;
    }
}