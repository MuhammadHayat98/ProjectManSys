@extends('layouts.navActionItem')
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
                <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" id="Description" cols="10" rows="10" placeholder="Description of Action Item"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="DateCreated">Date Created</label>
                <input type="month" name="DateCreated" id="DateCreated" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
            <div class="col">
                <label for="DateAssigned">Date Assigned</label>
                <input type="month" name="DateAssigned" id="DateAssigned" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
            <div class="col">
                <label for="ExpectedCompletion">Expected Completion Date</label>
                <input type="month" name="ExpectedCompletion" id="ExpectedCompletion" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
            <div class="col">
                <label for="ActualCompletion">Actual Completion Date</label>
                <input type="month" name="ActualCompletion" id="ActualCompletion" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
        </div>
        <div class="row">
                
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" style=" margin:20px 20px 20px 20px;" type="button" id="Resource" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Resources Assigned
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">resource one</button>
                        <button class="dropdown-item" type="button">Resource Two</button>
                        <button class="dropdown-item" type="button">Resource three</button>
                        <button class="dropdown-item" type="button">resource four</button>
                        <button class="dropdown-item" type="button">Resource five</button>
                        <button class="dropdown-item" type="button">Resource six</button>
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
            <div class="col">
                <label for="UpdateDate">Update Date</label>
                <input type="month" name="UpdateDate" id="UpdateDate" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="StatusDescription">Status Description</label>
                <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" id="StatusDescription" cols="10" rows="10" placeholder="Description of Status"></textarea>
            </div>
        </div>
        <div class="row">
                <div class="col ">
                    <div class="button-custom">
                        <button type="submit" class="btn btn-primary">Submit Action Item</button>
                    </div>
                </div>
            </div>
    </form>
</div>
@section('content')
    
@endsection