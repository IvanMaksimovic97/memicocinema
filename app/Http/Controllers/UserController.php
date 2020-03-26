<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Log;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.login');
    }

    public function indexTable(){
        $response['users'] = User::all();

        return view("partial.admin.display.users")->with($response);
    }

    public function login(LoginRequest $request) {
        $username = $request->username;
        $password = sha1($request->password);

        $user = User::where('username', $username)->where('password', $password)->first();

        if($user != null){
            if($user->active){
                session()->put('user', $user);
                Log::createLogInAttemptLog($user->id);
                return redirect('/');
            }
            else{
                Log::createLogInAttemptLog($user->id, 0);
                session()->flash('messageType', 'danger');
                session()->flash('messageHeading', 'Inactive account!');
                session()->flash('message', 'Your account is not active!');
                return redirect("/login");
            }
        }
        else{
            Log::createLogInAttemptLog(null, 0);
            session()->flash('messageType', 'danger');
            session()->flash('messageHeading', 'Login Failed!');
            session()->flash('message', 'Incorrect login information.');
            return redirect("/login");
        }
    }

    public function logout() {
        session()->forget('user');
        session()->flush();
        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['roles'] = Role::all();

        return view('partial.admin.insert.user')->with($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $passwordRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

        $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|confirmed|regex:'.$passwordRegex
        ], [
            'password.regex' => 'Password format: Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character'
        ]);

        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = new User();

        $user->created_at = date("Y-m-d H:i:s",time());
        $user->username = $username;
        $user->email = $email;
        $user->password = sha1($password);
        $user->active = 0;
        $user->role_id = 2;
        $user->auth_key = sha1(uniqid());

        $to = $email;
        $title = "Account activation";
        $message = "Thank you for registering on our website. In order to activate your account, please use the following link: ".url('/')."/activate/".$user->auth_key;

        if ($user->save() && mail($to,$title,$message)) {
            session()->flash('messageType', 'success');
            session()->flash('messageHeading', 'Success!');
            session()->flash('message', 'You have registered on our website. Please check your email in order to activate your account.');
        }
        else {
            session()->flash('messageType', 'danger');
            session()->flash('messageHeading', 'Error!');
            session()->flash('message', 'Something went wrong while trying to send the activation email. Please try again.');
        }

        return redirect('/register');
    }

    public function adminStore(Request $request){

        $passwordRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/";

        $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|regex:'.$passwordRegex,
            'active' => 'required|min:0|max:1',
            'role' => 'required|min:0|max:1'
        ]);

        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = new User();

        $user->created_at = date("Y-m-d H:i:s",time());
        $user->username = $username;
        $user->email = $email;
        $user->password = sha1($password);
        $user->active = $request->input('active');
        $user->role_id = $request->input('role');

        $user->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'User added to Database');

        return redirect('/admin/display');
    }

    public function activate($key) {
        $user = User::where('auth_key','=',$key)->get();

        if ($user->count() == 1) {
            $user = $user[0];
            $user->active = 1;
            $user->auth_key = null;

            $user->save();

            session()->flash('messageType', 'success');
            session()->flash('messageHeading', 'Success!');
            session()->flash('message', 'You have activated your account. Now you are able to log in to the website.');
        }

        return redirect("/");
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
        $response['user'] = User::find($id);
        if($response['user'] == null){
            session()->flash('messageType', 'danger');
            session()->flash('messageHeading', 'Error!');
            session()->flash('message', 'User not Found!');

            return redirect('/admin/display');
        }
        $response['roles'] = Role::all();

        return view('pages.admin.edit.user')->with($response);
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
        $passwordRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/";

        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|regex:'.$passwordRegex,
            'active' => 'required|min:0|max:1',
            'role' => 'required|min:0|max:1'
        ]);

        $user = User::find($id);

        if($user == null){
            session()->flash('messageType', 'danger');
            session()->flash('messageHeading', 'Error!');
            session()->flash('message', 'User not Found!');

            return redirect('/admin/display');
        }

        $uniqueEmail = User::where('email', '=', $request->email)->first();
        if ($uniqueEmail != null) {
            if($user->email != $request->email){
                session()->flash('messageType', 'danger');
                session()->flash('messageHeading', 'Error!');
                session()->flash('message', 'Email is already in use!');

                return redirect('/admin/edit/User/'.$id);
            }
        }

        $uniqueUsername = User::where('username', '=', $request->username)->first();
        if($uniqueUsername != null){
            if($user->username != $request->username){
                session()->flash('messageType', 'danger');
                session()->flash('messageHeading', 'Error!');
                session()->flash('message', 'Username is already in use!');

                return redirect('/admin/edit/User/'.$id);
            }
        }

        $user->updated_at = date("Y-m-d H:i:s",time());
        $user->username = $request->username;
        $user->email = $request->email;
        if($request->password != null){
            $user->password = sha1($request->password);
        }
        $user->active = $request->active;
        $user->role_id = $request->role;

        $user->save();

        session()->flash('messageType', 'success');
        session()->flash('messageHeading', 'Success!');
        session()->flash('message', 'User updated.');

        return redirect('/admin/edit/User/'.$id);
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
