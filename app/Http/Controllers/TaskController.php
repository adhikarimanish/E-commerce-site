<?php


namespace App\Http\Controllers;

use App\Task;

use App\Http\Requests;

use Illuminate\Http\Request;

use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    protected $tasks;

    public function __construct(TaskRepository $tasks)
    {
    	$this->middleware('auth');

    	$this->tasks = $tasks;
    }

    public function index(Request $request)
    {

    

    	return view('tasks.index',[

    	// 'tasks' =>$request->user()->tasks()->orderBy('created_at','asc')->get(),
    		'tasks' => $this->tasks->forUser($request->user()),


    		]);

    }

    public function store(Request $request)
    {

    	// dd($request->user()->tasks()->get());

    	$this->validate($request, [

    		"name" => 'required|max:255',

    		]);

    	$request->user()->tasks()->create([

    		'name' => $request->name,


    		]);
    	return back();

    		

    }


    public function destroy(Task $task)
    {

        $this->authorize('destroy',$task);

        $task->delete();

        return back();

    }
}
