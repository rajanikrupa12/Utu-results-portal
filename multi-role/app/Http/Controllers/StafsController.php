<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StafsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staf = User::get()->where('role_id','0');
        return view('staf.index',compact('staf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staf.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|min:6',
            ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $staf = User::create($input);
        // dd($staf);
        return redirect(route('staf.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('staf.changePass',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function store_pass(Request $request)
    {
        // dd($request->all());
            $request->validate([
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
            ]);
        
        $user = User::find($request->get('id'));
        // dd($user);
        // $user->password=$request->input('password');
        if($request->get('new_password') == $request->get('new_confirm_password')){
                 $user['password'] = Hash::make($request->get('new_password'));
                 $user->save();
        // dd($user);
        // $user->password=$request->input('new_confirm_password');
        }
        else
        {
            echo "password not match";
        }
        return redirect(route('user.home'));
        // return back()->with('message','password change successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('staf.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            ]);
        $user = User::find($id);    
        $user->fill($validated);        
        $user->save();
        return redirect(route('staf.index'));
    }

    public function destroy($id)
    {
        $user = User::find($id)->delete();
        // $user->delete();
        return redirect(route('staf.index'));
    }
}
