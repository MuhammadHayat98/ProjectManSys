@extends('layouts.navTask')
<div class="container-fluid">
    <form action="" class="main-form">
        <div class="row">
            <div class="col">
                <div class="form-group small">
                    <label for="UniqueID">Unique ID</label>
                    <input type="text" name="UniqueID" id="uniqueID" class="form-control shadow-sm p-3 mb-5 bg-white rounded">
                </div>
            </div>
            <div class="col">
                <div class="form-group small">
                    <label for="Name ">Name</label>
                    <input type="text" name="UniqueID" id="Name" class="form-control shadow-sm p-3 mb-5 bg-white rounded">
                </div>
            </div>
            <div class="col">
                <div class="form-group small">
                    <label for="Start">Expected start date</label>
                    <input type="month" name="start" id="start" class="form-control shadow-sm p-3 mb-5 bg-white rounded">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group small">
                    <label for="Description">Description</label>
                    <textarea name="description" class="form-control shadow-sm p-3 mb-5 bg-white rounded pre-scrollable" id="Description" cols="10" rows="10"></textarea>
                </div>
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
                <div class="form-group small">
                    <label for="endDate">Expected End Date</label>
                    <input type="month" name="endDate" id="endDate" class="form-control shadow-sm p-3 mb-5 bg-white rounded">
                </div>
            </div>
            <div class="col">
                <div class="form-group small">
                    <label for="duration">Expected Duration</label>
                    <input type="month" name="duration" id="duration" class="form-control shadow-sm p-3 mb-5 bg-white rounded">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" style=" margin: 20px 20px 20px 20px;" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Expected Effort (1-10)
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <button class="dropdown-item" type="button">1</button>
                        <button class="dropdown-item" type="button">2</button>
                        <button class="dropdown-item" type="button">3</button>
                        <button class="dropdown-item" type="button">4</button>
                        <button class="dropdown-item" type="button">5</button>
                        <button class="dropdown-item" type="button">6</button>
                        <button class="dropdown-item" type="button">7</button>
                        <button class="dropdown-item" type="button">8</button>
                        <button class="dropdown-item" type="button">9</button>
                        <button class="dropdown-item" type="button">10</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group small">
                    <label for="actualStart">Actuall Start Date</label>
                    <input type="month" name="ActualStart" id="ActualStart" class="form-control shadow-sm p-3 mb-5 bg-white rounded">
                </div>
            </div>
            <div class="col">
                <div class="form-group small">
                    <label for="ActualEndDate">Actuall End Date</label>
                    <input type="month" name="duration" id="ActualEndDate" class="form-control shadow-sm p-3 mb-5 bg-white rounded">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" style=" margin: 20px 20px 20px 20px;" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Effort completed
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <button class="dropdown-item" type="button">1</button>
                        <button class="dropdown-item" type="button">2</button>
                        <button class="dropdown-item" type="button">3</button>
                        <button class="dropdown-item" type="button">4</button>
                        <button class="dropdown-item" type="button">5</button>
                        <button class="dropdown-item" type="button">6</button>
                        <button class="dropdown-item" type="button">7</button>
                        <button class="dropdown-item" type="button">8</button>
                        <button class="dropdown-item" type="button">9</button>
                        <button class="dropdown-item" type="button">10</button>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" style=" margin: 20px 20px 20px 20px;" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actual Effort
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <button class="dropdown-item" type="button">1</button>
                            <button class="dropdown-item" type="button">2</button>
                            <button class="dropdown-item" type="button">3</button>
                            <button class="dropdown-item" type="button">4</button>
                            <button class="dropdown-item" type="button">5</button>
                            <button class="dropdown-item" type="button">6</button>
                            <button class="dropdown-item" type="button">7</button>
                            <button class="dropdown-item" type="button">8</button>
                            <button class="dropdown-item" type="button">9</button>
                            <button class="dropdown-item" type="button">10</button>
                        </div>
                    </div>
                </div>
            <div class="col">
                <div class="form-group small ">
                    <label for="Aduration">Actual Duration</label>
                    <input type="month" name="Aduration" id="Aduration" class="form-control shadow-sm p-3 mb-5 bg-white rounded">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="percent">Percent Complete</label>
                <input type="text" id="percent" class="form-control shadow-sm p-3 mb-5 bg-white rounded" placeholder="0%">
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" style=" margin:20px 20px 20px 20px;" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Predecessor Task
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">Task one</button>
                        <button class="dropdown-item" type="button">Task Two</button>
                        <button class="dropdown-item" type="button">Task three</button>
                        <button class="dropdown-item" type="button">Task four</button>
                        <button class="dropdown-item" type="button">Task five</button>
                        <button class="dropdown-item" type="button">Task six</button>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" style=" margin:20px 20px 20px 20px;" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Successor Task
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">Task one</button>
                            <button class="dropdown-item" type="button">Task Two</button>
                            <button class="dropdown-item" type="button">Task three</button>
                            <button class="dropdown-item" type="button">Task four</button>
                            <button class="dropdown-item" type="button">Task five</button>
                            <button class="dropdown-item" type="button">Task six</button>
                        </div>
                    </div>
                </div>
        </div>
        <label for="GnantChart">Gnant Chart</label>
        <br>
        <img src="GnantChartV23.jpg" alt="Gnant Chart" class="custom-Pic">
        <div class="row">
                <div class="col ">
                    <div class="button-custom">
                        <button type="submit" class="btn btn-primary">Submit Deliverable</button>
                    </div>
                </div>
            </div>
    </form>
    <br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br>
</div>
@section('content')
    
@endsection