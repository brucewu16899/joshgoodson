<?php

namespace JoshGoodson\Http\Controllers;

use Log;
use JoshGoodson\Http\Requests;
use JoshGoodson\Http\Controllers\Controller;
use JoshGoodson\Role;
use Illuminate\Http\Request;

class RoleController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $title = 'Roles';
    $icon = 'align-justify';
    $roles = Role::orderBy('id', 'desc')->paginate(10);

    return view('roles.index', compact('roles', 'title', 'icon'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $title = "Create Role";
    $icon = 'plus';
    return view('roles.create', compact('title', 'icon'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Request $request
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|unique:roles',
    ]);

    $role = new Role();

    $role->name = $request->name;
    $role->display_name = $request->display_name;
    $role->description = $request->description;

    $role->save();

    return redirect()->route('roles.index')->with('message', 'Item created successfully.');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $role = Role::findOrFail($id);
    $title = "Role: " . $role->display_name;
    $icon = 'user-secret';

    return view('roles.show', compact('role', 'title', 'icon'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $role = Role::findOrFail($id);
    $title = "Role: " . $role->display_name;
    $icon = 'user-secret';

    return view('roles.edit', compact('role', 'title', 'icon'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @param Request $request
   * @return Response
   */
  public function update(Request $request, $id)
  {
    $role = Role::findOrFail($id);

    $role->name = $request->name;
    $role->display_name = $request->display_name;
    $role->description = $request->description;

    $role->save();

    return redirect()->route('roles.index')->with('message', 'Item updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $role = Role::findOrFail($id);
    $role->delete();

    return redirect()->route('roles.index')->with('message', 'Item deleted successfully.');
  }

}
