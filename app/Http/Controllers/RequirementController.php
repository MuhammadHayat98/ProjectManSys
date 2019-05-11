<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requirement;

class RequirementController extends Controller
{
    public function create() {
        return view('requirement');
    }

    public function store(Request $request) {
        $requirement = new Requirement;
        $requirement->name = $request->get('Name');
        $requirement->description = $request->get('Description');
        $requirement->due_date = $request->get('dueDate');
        
        $requirement->save();

        return redirect('home');
    }
}
