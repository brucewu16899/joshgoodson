<?php

namespace JoshGoodson\Http\Controllers;

use JoshGoodson\Task;
use JoshGoodson\Http\Requests;
use Illuminate\Http\Request;
use JoshGoodson\Http\Controllers\Controller;
use JoshGoodson\Repositories\TaskRepository;

class TaskController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance.
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
     * @param Response
     */
    public function index(Request $request)
    {
        $tasks = $this->tasks->forUser($request->user());
        return view('tasks.index', ['tasks' => $tasks]);
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

        return redirect('/tasks');
    }

    /**
     * Destroy a given task.
     *
     * @param Request $request
     * @param Task $task
     * @return Response
     */
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);
        $task->delete();
        return redirect('/tasks');
    }
}
