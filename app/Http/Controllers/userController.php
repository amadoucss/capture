<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth', ['except' => array('all', 'user')]);
    }

    public function all(Request $request){
         return view('allphotos')->with('users', User::all());
    }
   

     public function index(Request $request)
    {
       
        return view('myphotos')->with('photos', $request->user()->photos()->get());
        
    }

     public function profile()
    {
        return view('profile')->with('users', Auth::user());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'caption' => 'required',
            'photo' => 'required|image'

        ]);

        $photo = $request->photo;
        $url = time().$photo->getClientOriginalName();
        $photo->move('uploads/photos', $url);

        $request->user()->photos()->create([
         'caption' => $request->caption,
         'url' => $url
        ]);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function user($id)
    {
        
    return view('userprofile')->with('user', User::find($id)->with('photos')->first());
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
