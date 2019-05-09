@extends('layouts.navDeliverable')
<div class="container-fluid">
   <form action="" class="main-form">
       <div class="row">
           <div class="col">
               <div class="form-group">
                   <label for="UniqueID">Unique ID</label>
                   <input type="text" name="UniqueID" id="uniqueID" class="form-control shadow-sm p-3 mb-5 bg-white rounded">
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
                <label for="Description">Description</label>
                <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" id="Description" cols="10" rows="10" placeholder="Description of deliverable"></textarea>
           </div>
       </div>
       <div class="row">
            <div class="col">
                <label for="Tasks">List of tasks</label>
                <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" name="Tasks" id="Tasks" cols="5" rows="10" placeholder="
                "></textarea>
            </div>
            <div class="col">
                <label for="Requirements">Requirements</label>
                <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" name="Requirements" id="requirements" cols="5" rows="10"></textarea>
            </div>
        </div>
       <div class="row">
           <div class="col">
               <label for="dueDate">Due Date</label>
               <input type="month" name="dueDate" id="dueDate" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
           </div>
           <div class="col ">
               <div class="button-custom">
                    <button type="submit" class="btn btn-primary">Submit Deliverable</button>
               </div>
           </div>
       </div>
   </form>
</div>
@section('content')
    
@endsection