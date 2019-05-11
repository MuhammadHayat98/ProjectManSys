@extends('layouts.navIssue')
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
                <div class="dropdown">

                    <button class="btn btn-secondary dropdown-toggle" style=" margin:20px 20px 20px 20px;" type="button" id="Priority" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Priority
                    </button>
                    <div class="dropdown-menu" aria-labelledby="Priority">
                        <button class="dropdown-item" type="button">High</button>
                        <button class="dropdown-item" type="button">Medium</button>
                        <button class="dropdown-item" type="button">Low</button>
                    </div>
                </div>  
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" style=" margin:20px 20px 20px 20px;" type="button" id="Severity" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Severity
                    </button>
                    <div class="dropdown-menu" aria-labelledby="Severity">
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
            <div class="col">
                <label for="DateRaised">Date Raised</label>
                <input type="month" name="DateRaised" id="DateRasied" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="DateAssigned">Date Assigned</label>
                <input type="month" name="DateRaised" id="DateRasied" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
            <div class="col">
                <label for="DateRaised">Date Raised</label>
                <input type="month" name="DateRaised" id="DateRasied" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
            <div class="col">
                <label for="ExpectedCompletionDate">Expected Completion Date</label>
                <input type="month" name="ExpectedCompletionDate" id="ExpectedCompletionDate" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="ActualCompletionDate">Actual Completion Date</label>
                <input type="month" name="ActualCompletionDate" id="ActualCompletionDate" class="form-control form-control-md shadow-sm p-3 mb-5 bg-white rounded ">
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
            <div class="col">
                <label for="ActionItemList">List of Action Items</label>
                <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" id="ActionItemList" cols="10" rows="10" placeholder=""></textarea>
            </div>
            <div class="col">
                <label for="DecisionList">List of Decisions</label>
                <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" id="DecisionList" cols="10" rows="10" placeholder=""></textarea>
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