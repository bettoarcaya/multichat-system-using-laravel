<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //


      return ;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
        $usuario = User::find(Auth::user()->id);

      if ($request->hasFile('img')) {
          # code...
          $file = $request->file('img');
          $fileName = $file->getClientOriginalName();
          //$request->file('img')->storeAs('img/', $fileName, 'uploads');
          //Image::make($file)->save( public_path('/img/' . $fileName ) );
          $usuario->img = $fileName;
      }
      if ($request->password!=NULL) {
        # code...
        $usuario->password = bcrypt($request->password);

      }
      $usuario->name = $request->name;
      $usuario->email = $request->email;
      $usuario->save();

        return redirect()->route('perfil');
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
