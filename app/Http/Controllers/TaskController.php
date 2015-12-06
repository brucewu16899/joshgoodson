<?php

namespace JoshGoodson\Http\Controllers;

use JoshGoodson\Http\Requests;
use JoshGoodson\Http\Controllers\Controller;

use JoshGoodson\Task;
use JoshGoodson\Repositories\TaskRepository;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  /**
   * The task repository instance.
   *
   * @var TaskRepository
   */
  protected $tasks;

  /**
   * Create a new Task controller instance.
   *
   * @return void
   */
  public function __construct(TaskRepository $tasks)
  {
      $this->middleware('auth');

      $this->tasks = $tasks;
  }

  /**
   * Display a list of all the user's tasks.
   *
   * @param Request $request
   * @return Response
   */
  public function index(Request $request)
  {
    $tasks = $this->tasks->allForUser($request->user());
    $title = "My Tasks";
    $icon = "tasks";

    return view('tasks.index', compact('tasks', 'title', 'icon'));
  }

  /**
   * Show the form for creating a new task.
   *
   * @return Response
   */
  public function create()
  {
    return view('tasks.create');
  }

  /**
   * Create a new task.
   *
   * @param Request $request
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|max:255',
    ]);

    $request->user()->tasks()->create([
      'name' => $request->name,
    ]);

    return redirect()->route('tasks.index')->with('message', 'Item created successfully.');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Request $request, $id)
  {
    $task = $this->tasks->oneForUser($request->user(), $id);
    $title = $task->name;
    $icon = "tasks";

    return view('tasks.show', compact('task', 'title', 'icon'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Request $request, $id)
  {
    $task = $this->tasks->oneForUser($request->user(), $id);
    $title = $task->name;
    $icon = "edit";

    return view('tasks.edit', compact('task', 'title', 'icon'));
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
    $task = $this->tasks->oneForUser($request->user(), $id);

    $task->name = $request->input("name");

    $task->save();

    return redirect()->route('tasks.index')->with('message', 'Item updated successfully.');
  }

  /**
   * Destroy a given task.
   *
   * @param  Request  $request
   * @param	 Task  		$task
   * @return Response
   */
  public function destroy(Task $task)
  {
    $this->authorize('destroy', $task);
    $task->delete();

    return redirect()->route('tasks.index')->with('message', 'Item deleted successfully.');
  }

}
