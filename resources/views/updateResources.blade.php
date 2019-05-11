@extends('layouts.navResources')
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
            <div class="col">
                    <div class="form-group">
                        <label for="Name">Title</label>
                        <input type="text" name="Title" id="Title" class="form-control shadow-sm p-3 mb-5 bg-white rounded" placeholder="Title">
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="Name">Pay Rate</label>
                        <input type="text" name="PayRate" id="PayRate" class="form-control shadow-sm p-3 mb-5 bg-white rounded" placeholder="$">
                    </div>
            </div>
        </div>
        <div class="row">
                <div class="col">
                        <div class="form-group">
                            <label for="skills">List of Skills</label>
                            <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" id="skills" cols="10" rows="10" placeholder="Enter skills seperated by commas"></textarea>                        </div>
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