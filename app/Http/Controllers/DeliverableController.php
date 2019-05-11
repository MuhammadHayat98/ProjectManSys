<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deliverable;
use Illuminate\View\View;

class DeliverableController extends Controller
{
    public function create() {
        return view('deliverable');
    }

    public function store(Request $request) {
        $deliverable = new Deliverable;
        $deliverable->name = $request->get('Name');
        $deliverable->description = $request->get('Description');
        $deliverable->due_date = $request->get('dueDate');
        
        $deliverable->save();

        return redirect('home');
    }
}
