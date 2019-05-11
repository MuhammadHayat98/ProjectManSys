@extends('layouts.navDeliverable')
<div class="container-fluid">
<form method="POST" action="" class="main-form">
       {{csrf_field()}}
       <div class="row">
           <div class="col">
               <div class="form-group">
                   <label for="UniqueID">Unique ID</label> 
                   <input type="text" name="UniqueID" id="uniqueID" class="form-control shadow-sm p-3 mb-5 bg-white rounded ">
               </div>
           </div>
           <div class="col">
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name="Name" id="Name" class="form-control shadow-sm p-3 mb-5 bg-white rounded" placeholder="Name for deliverable">
                </div>
           </div>
       </div>
      
       <div class="row">
           <div class="col">
                <label for="Description">Requirement Text</label>
                <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" name="requirement_text" id="Description" cols="10" rows="10" placeholder="Description of deliverable"></textarea>
           </div>
       </div>
       {{-- <div class="row">
            <div class="col">
                <label for="Tasks">List of tasks</label>
                <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" name="Tasks" id="Tasks" cols="5" rows="10" placeholder="
                "></textarea>
            </div>
            <div class="col">
                <label for="Requirements">Requirements</label>
                <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" name="Requirements" id="requirements" cols="5" rows="10"></textarea>
            </div>
        </div> --}}
       <div class="row">
           <div class="col">
               <label for="dueDate">Source document</label>
               <input type="text" name="source_doc" id="source_doc" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
           </div>
           <div class="col ">
               <div class="button-custom">
                    <button type="submit" class="btn btn-primary">Submit Deliverable</button>
               </div>
           </div>
       </div>
   </form>
</div>
   
</div>
@section('content')
    
@endsection