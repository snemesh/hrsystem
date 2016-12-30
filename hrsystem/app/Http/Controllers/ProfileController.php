<?php

namespace App\Http\Controllers;

use App\User;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('log', ['only' => ['fooAction', 'barAction']]);
        //$this->middleware('subscribed', ['except' => ['fooAction', 'barAction']]);
    }


    public function showProfile()
    {
        //
        $user = Auth::user();
        //$avatar = asset('thumbnail_images/'.Session::get('imagename'));
        $tmpmsg = 'Enter your sallary';
        return view('profile',['user'=>$user, '$avatar'=>'avatar'])
            ->with('tmpmess',$tmpmsg);
    }

    public function index()
    {
        //
    }

    public function getResizeImage()
    {
        return view('profile');
    }

    public function postResizeImage(Request $request)
    {

        $this->validate($request, [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        //$user_id=$request->userid()-id;



        $photo = $request->file('photo');
        $imagename = time().'.'.$photo->getClientOriginalExtension();

        $destinationPath = public_path('/thumbnail_images');
        $thumb_img = Image::make($photo->getRealPath())->resize(225, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $thumb_img->save($destinationPath.'/'.$imagename,80);

        $destinationPath = public_path('/normal_images');
        $photo->move($destinationPath, $imagename);
        return back()
            ->with('success','Image Upload successful')
            ->with('imagename',$imagename);

    }


    public function upload(Request $request)
    {
        $user = Auth::user();
        $this->validate($request,[
            'userid'=> 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $photo = $request->file('photo');
        $userid = $request->userid;

        $imagename = time().'.'.$photo->getClientOriginalExtension();

        $destinationPath = public_path('/thumbnail_images');
        $thumb_img = Image::make($photo->getRealPath())->resize(225, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $thumb_img->save($destinationPath.'/'.$imagename,80);

        $destinationPath = public_path('/normal_images');
        $photo->move($destinationPath, $imagename);
        echo $imagename;

        return back()
            ->with('success','Image Upload successful')
            ->with('imagename',$imagename)
            ->with('user',$user)
            ->with('$avatar','avatar')
            ->with('userid',$userid);

//        return back()
//            ->with('success','Image Upload successful')
//            ->with('imagename',$imagename);


    }
    public function saveuserdata(Request $request){
        $this->validate($request,[
            'salary'=> 'required',

        ]);

        echo $request->salary;
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
    public function show($id)
    {
        //
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
