<?php

namespace JoshGoodson\Http\Controllers;

use JoshGoodson\Http\Requests;
use JoshGoodson\Http\Controllers\Controller;

use JoshGoodson\User;
use Illuminate\Http\Request;
use Auth;
use Validator;

class UserController extends Controller
{

  /**
   * Display a listing of users.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $title = 'Users';
    $users = User::orderBy('id', 'asc')->paginate(10);

    return view('users.index', compact('users', 'title'));
  }

  /**
   * Show the form for creating a new user.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $title = 'Create User';
    $icon = 'user';
    return view('users.create', compact('title', 'icon'));
  }

  /**
   * Store a newly created user in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validator = $this->validator($request->all());

    if ($validator->fails())
    {
      return redirect()->back()->withErrors($validator)->withInput();
    }

    $data = $request->all();

    $user = User::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => bcrypt($data['password']),
    ]);

    return redirect()->route('users.index')->with('message', 'Item created successfully.');
  }

  /**
   * Display the specified user.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $user = User::findOrFail($id);
    $title = $user->name;
    $icon = 'user';

    return view('users.show', compact('user', 'title', 'icon'));
  }

  /**
   * Display the user profile.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function profile($id)
  {
    $user = User::findOrFail($id);
    $title = 'Profile: ' . $user->name;
    $icon = "user";

    return view('users.profile', compact('user', 'title', 'icon'));
  }

  /**
   * Show the form for editing the specified user.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $user = User::findOrFail($id);
    $title = $user->name;
    $icon = 'user';

    return view('users.edit', compact('user', 'title', 'icon'));
  }

  /**
   * Update the specified user in storage.
   *
   * @param  int  $id
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $user = User::findOrFail($id);

    $user->name = $request->name;
    $user->email = $request->email;

    $user->save();

    return redirect()->route('users.index')->with('message', 'Item updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    if (Auth::user()->id == $id)
    {
        return redirect()->back()->with('error', 'You cannot delete your own account.');
    }

    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('users.index')->with('message', 'Item deleted successfully.');
  }

  /**
   * Get a validator for a user creation.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
      return Validator::make($data, [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|confirmed|min:6',
      ]);
  }
}
