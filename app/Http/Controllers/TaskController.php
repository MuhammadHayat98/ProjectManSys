<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Task;
use App\Deliverable;


class TaskController extends Controller
{
    public function create() {
        $deliverables = Deliverable::orderBy('created_at')->get();
        return view('task', ['deliverables' => $deliverables]);
    }

    public function store(Request $request) {
        $task = new Task;
        $task->name = $request->get('Name');
        $task->description = $request->get('description');
        $task->start_date = $request->get('start');
        $task->end_date = $request->get('endDate');
        $task->deliverable_id = $request->get('deliverable_id');
        
        $task->save();

        return 'tes';
    }
}
