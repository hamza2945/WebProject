<?php

namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use App\Models\User;
use Hash;

class userController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.signup');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $credentials['email'])->first();
            //dd($user);
            // Session::put('email', $user['email']);
            // Session::put('username', $user['username']);
            // Session::put('password', $user['password']);
            // Session::put('id',$user['id']);

            Session::put('user',$user);
            return redirect()->intended('dashboard')->withSuccess('You have Successfully loggedin')->with('user', $user);
        }
  
        return redirect("login")->withSuccess('Error! Invalid Email or Password');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("race")->withSuccess('Great! You have Successfully loggedin');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            
            // $sessionData = Session::all();

            // // Display session data
            // foreach ($sessionData as $key => $value) {
            //     echo $key . ' => ';
            //     var_dump($value);
            //     echo '<br>';
            // }
            return view('profile');
        }
  
        return redirect()->back()->with('error', 'Invalid credentials, Please Log-In');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }


      /**
     * Write code on Method
     *
     * @return response()
     */
    public function edit(Request $request) {
            $data=$request->only(['editusername','id','editpassword']);
            $user=User::find($data['id']);
            
                $user->username = $data['editusername'];
               // $user->password = Hash::make($data['editpassword']);
                $user->save();
                $sesUser=session('user');
                $sesuser['username']=$data['editusername'];
                $sesuser['passsword']=$data['editpassword'];

                Session::put('user', $user);
                return redirect('dashboard')->withSuccess('Updated Successfully');

    }

}
