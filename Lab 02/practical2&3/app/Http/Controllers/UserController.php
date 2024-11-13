<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //import the database
use App\Models\User; //import model


class UserController extends Controller
{
    public function index()
    {
        echo "Hello from user Controller";
    }

    public function index01($user)
    {
        echo $user;
        echo ", Hello from user Controller";
    }

    public function index02($user)
    {
        echo $user;
        echo ", Hello from user Controller";
        echo "\n";
        return ['name'=>"ABC", 'age'=>40];
    }

    public function loadView($user)
    {
        return view('user', ['username'=>$user]);
    }

    public function loadView01($user)
    {
        $data=['Ricky','Peter','Ali','ricky'];
        return view('user01', ['username'=>$user, 'users'=>$data]);
    }

    public function loadSum($num1, $num2)
    {
        $sum = $num1 + $num2;
        echo "The Sum of $num1 and $num2 is $sum";
    }

    public function sum($num1, $num2)
    {
        $sum = $num1 + $num2;
        return view('sum', ['sum'=>$sum, 'num1'=>$num1, 'num2'=>$num2]);
    }

    function testData()
    {
        //return DB::select("select * from users");
        //return User::all();
        $data = User::paginate(5);
        return view('/userInner01', ['users'=>$data]);    
    }

    function addUser(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();
        return redirect("addUser");

    }

    function deleteUser($id)
    {
        $data = User::find($id);
        $data-> delete();
        return redirect("testData");
    }

    function updateUser(Request $req)
    {
        $data = User::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->save();
        return redirect("testData");
    }

    function showUpdate($id)
    {
        $data = User::find($id);
        return view("updateUser",['data'=>$data]); 
    }


    //Mass Aissngment
    public function signUp(Request $req )
    {
        $data = $req->all();
        $data['is_admin'] = 0;

        User::create($data);
        return redirect("Sign Up successful");
    }

    function OneToMany() {
        return User::find(3)->getManyCompanies;
    }    

    public function OneToOne()
    {
        return User::find(4)->getCompany;
    }

    public function loginUser(Request $request )
    {
        $request->validate([
            "email"=>"required | max:30",
            "password"=>"required | min:5"
        ]);   
        return $request -> input();   
    }

    public function loginUser01(Request $request )
    {
        $request->validate([
            "email"=>"required | max:30",
            "password"=>"required | min:5"
        ]);   
        $data = $request->input();

        //$data['email'] equal to value of users
        $request->session()->put('sessionUser', $data['email']);

        //redirect to welcome page
        return redirect ("home");
 
    }


    public function signUp01(Request $req )
    {
        $req->validate([
            'name'=>'required |max:20',
            'email'=>'required |email',
            "password"=>['required' , 'regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!$#%]).*$/'],
            'confirm_password'=>'required |same:password'
        ]);
        $data= $req->input();
        $req->session()->flash('sessionUser',$data['name']);
        //$data = $req->all();
        $data['is_admin'] = 0;

        User::create($data);
        return redirect("signUp");
    }


}
