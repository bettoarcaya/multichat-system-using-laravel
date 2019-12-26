<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewMessage;
use Auth;
use Illuminate\Http\Request;
use App\Repositories\ChatRepository;
use App\Repositories\UserRepository;
use App\Repositories\ContactRepository;


class ChatController extends Controller
{

    protected $contactRepository;
    protected $chatRepository;
    protected $userRepository;

    public function __construct(
        ContactRepository $contact_repository,
        ChatRepository    $chat_repository,
        UserRepository    $user_repository){

        $this->contactRepository = $contact_repository;
        $this->chatRepository    = $chat_repository;
        $this->userRepository    = $user_repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recent_chats = $this->contactRepository->recentChatsByUserId( Auth::user()->id );
        $data         = compact('recent_chats');

        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\NewMessage  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewMessage $request)
    {
        $validation = $request->validated();
        $chat_info  = [
            'from_user'   => Auth::user()->id,
            'to_user'     => $request->contact_id,
            'msg_content' => $request->msg_content
        ];

        $this->chatRepository->storeNewMsg( $chat_info );
        $chat = $this->chatRepository->getChatByContactId( $request->contact_id );
        $data = compact( 'chat' );
        
        return response()->json($data, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact_info = $this->userRepository->getUserInfo($id);
        $chat         = $this->chatRepository->getChatByContactId($id);
        $data         = compact('chat', 'contact_info');

        return response()->json($data, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
