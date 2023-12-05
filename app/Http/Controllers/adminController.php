<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\User;
use App\Models\Photo;
use App\Models\Client;
use App\Models\Slider;

use App\Models\Service;

use App\Models\Employee;
use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\User as AuthUser;


class adminController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return redirect()->back();
        }else
        // return view('login');
        return view('admin.login');
    }

public function authCheck(Request $request) {

    $request->validate([
        'username' => 'required',
        'password' => 'required',

    ]);

    $credential = $request->only('username', 'password');

    if(Auth::attempt($credential)) {
        return redirect()->route('dashboard')->with('success','Login Sucessfull');
    }
     else {
        return redirect()->withInput();
    }

}


    public function logout ()
    {

        Auth::logout();
        return redirect()->route('login');
    }




public function dashboard(){

    $data['user'] = count(User::all());
        $data['slider'] = count(Slider::all());
        $data['employee'] = count(Employee::all());
        $data['service'] = count(Service::all());
        $data['client'] = count(Client::all());
        $data['photo'] = count(Photo::all());
        $data['video'] = count(Video::all());
        $data['banner'] = count(Banner::all());

    return view('admin.dashboard',$data);
}


public function password (){
    return view('admin.PasswordReset.ForgotPassword');
}

public function ForgotPassword(Request $request){

    $request->validate([
        'email'=> "required|email|exists:users",
    ]);

    $token =Str::random(64);


DB::table('password_resets')->insert([
    'email'=>$request->email,
    'token'=>  $token,
    'created_at'=>Carbon::now()
]);

Mail::send("admin.emails.ResetPassword",['token'=> $token],function($massage) use ($request){
    $massage->to($request->email);
    $massage->subject("Reset Password");
});

 return redirect()->to(route('password'))->with("success","We Have Send a email to Reset Password");
}

public function ResetPassword($token){

     return view('admin.PasswordReset.NewPassword',compact('token'));
}



public function ResetPass(Request $request){

$request->validate([
    'email'=> "required|email|exists:users",
    'password'=>"required",
    'password_confirmation'=>'required'
]);

  $updatePassword=DB::table('password_resets')
  ->where([
    'email'=>$request->email,
    'token'=>$request->token,
  ])->first();

  if(!$updatePassword){
    return redirect()->to(route('ResetPassword'))->with('error','Invalid');
  }
  User::where('email',$request->email)
  ->update(['password'=>Hash::make($request->password)]);
  DB::table('password_resets')->where(['email'=>$request->email])->delete();
  return redirect()->to(route('login'))->with('success','password reset successfull');
}


public function index(){

    $user=User::all();
   return view('admin.user.index',compact('user'));
}

public function store( Request $request){

    $this->validate(\request(),
    [
      'name' => 'required',
      'username' => 'required',
      'email'=> 'required',
      'role'=> 'required',
      'password'=> 'required',
      'image'=> 'required',

    ]);

    $userImage='';
    try{
        $userExtension = \request()->file('image')->extension();
        $userImage = "user" . uniqid() . "_" . time() . '.' .$userExtension;

        \request()->file('image')->move('images',$userImage);
        // dd($employeeImage);
    }catch(\Exception $e){
      dd($e->getMessage());
    }




    //     User::create([
    //     'name' =>\request('name'),
    //     'username' =>\request('username'),
    //     'email' =>\request('email'),
    //     'password' =>\request('password'),
    //     // 'image' =>$userImage,

    // ]);
    $user = new User();
    $user->name = $request->name;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->role = $request->role;
    $user->image = $userImage;
    $user->password =  Hash::make($request->password);
    $user->save();
    if($user) {
        return redirect()->back()->with('success','User create Successfully');
    } else {
        return redirect()->back()->with('error','failed');

    }


}




public function edit($id)
    {
        $user = User::latest()->paginate(5);
        $users = User::find($id);
        return view('admin.user.edit', compact('user','users'));
    }

    public function update(Request $request, $id)
    {

        $user =User::find($id);
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->role = $request->input('role');

        if ($request->hasFile('image')) {
            $destination = 'images' . $user->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $user->image = $filename;
        }
        $user->update();
        return redirect()->route('index')->with('success','User Information Update Successfully');

    }

    public function delete(Request $request, $id)
    {

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $file = 'images' . $user->filename;

        $user->delete();
        // if(Storage::delete($data->filename)) {
        //     $data->delete();
        //  }
        return redirect()->route('index')->with('success', 'UserInformation Deleted Successfully');
    }

}
