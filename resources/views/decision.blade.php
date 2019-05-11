@extends('layouts.navDecision')
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
                    <input type="text" name="Name" id="Name" class="form-control shadow-sm p-3 mb-5 bg-white rounded" placeholder="Name for decision">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="Description">Description</label>
                <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" id="Description" cols="10" rows="10" placeholder="Description of decision"></textarea>
            </div>
        </div>
        <div class="row">
            
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" style=" margin:20px 20px 20px 20px;" type="button" id="Priority" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Priority
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">High</button>
                        <button class="dropdown-item" type="button">Medium</button>
                        <button class="dropdown-item" type="button">Low</button>
                
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" style=" margin:20px 20px 20px 20px;" type="button" id="Impact" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Impact
                    </button>
                    <div class="dropdown-menu" aria-labelledby="Impact">
                        <button class="dropdown-item" type="button">Critical</button>
                        <button class="dropdown-item" type="button">High</button>
                        <button class="dropdown-item" type="button">Medium</button>
                        <button class="dropdown-item" type="button">Low</button>
                        <button class="dropdown-item" type="button">Minor</button>
                    </div>
                </div>  
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-group-lg" style=" margin:20px 20px 20px 20px;" type="button" id="Status" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Status
                    </button>
                    <div class="dropdown-menu" aria-labelledby="Status">
                        <button class="dropdown-item" type="button">Closed</button>
                        <button class="dropdown-item" type="button">In Progress</button>
                        <button class="dropdown-item" type="button">Hold</button>
                        <button class="dropdown-item" type="button">Complete</button>
                    </div>
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="DateCreated">Date Created</label>
                <input type="month" name="DateCreated" id="DateCreated" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
            <div class="col">
                <label for="DateNeeded">Date Needed</label>
                <input type="month" name="DateNeeded" id="DateNeeded" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
            <div class="col">
                <label for="DateMade">Date Made</label>
                <input type="month" name="DateMade" id="DateMade" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
            <div class="col">
                <label for="ExpectedCompletionDate">Expected Completion Date</label>
                <input type="month" name="ExpectedCompletionDate" id="ExpectedCompletionDate" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
            <div class="col">
                    <label for="ActualCompletionDate">Actual Completion Date</label>
                    <input type="month" name="ActualCompletionDate" id="ActualCompletionDate" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
            <div class="col">
                    <label for="NoteDate">Note Date</label>
                    <input type="month" name="NoteDate" id="NoteDate" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
            <div class="col">
                    <label for="UpdateDate">Update Date</label>
                    <input type="month" name="UpdateDate" id="UpdateDate" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-group-lg" style=" margin:20px 20px 20px 20px;" type="DecisionMaker" id="Status" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Decision Maker
                    </button>
                    <div class="dropdown-menu" aria-labelledby="Status">
                        <button class="dropdown-item" type="button">Resource 1</button>
                        <button class="dropdown-item" type="button">Resource 2</button>
                        <button class="dropdown-item" type="button">Resource 3</button>
                        <button class="dropdown-item" type="button">Resource 4</button>
                    </div>
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="ListNotes">List of Meeting Notes</label>
                <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" id="ListNotes" cols="10" rows="10"></textarea>
            </div>
            <div class="col">
                <label for="ListRefDoc">List of Reference Documents</label>
                <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" id="ListRefDoc" cols="10" rows="10"></textarea>
            </div>
            <div class="col">
                    <label for="StatusDescription">Status Description</label>
                    <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" id="StatusDescription" cols="10" rows="10"></textarea>
                </div>            
        </div>
        <div class="row">
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