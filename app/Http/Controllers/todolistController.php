<?php

namespace App\Http\Controllers;
use App\Models\todos;
use Illuminate\Http\Request;

class todolistController extends Controller
{
    public function index(Request $request, $todonum){
        $data=todos::where('tadonum',$todonum)->get();
        return view('todolist',['data'=>$data,'num'=>$todonum]);
    }

    public function add(Request $request){
        $task = new todos();
        $task->task = $request->addtask;
        $task->tadonum = $request->todonum;
        $task->save();
        return redirect()->route('todolist',['listid'=>$request->todonum]);
    }

    public function delete(Request $request, $id ){
        $task = todos::find($id);
        $task->delete();
        return redirect()->route('todolist',['listid'=>$task->tadonum]);
    }
}
