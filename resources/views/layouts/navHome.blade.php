<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
            body {
                padding-top: 100px;
            }
            .row{
                padding: 10px 20px;
            }
            .col-one{
                float:right;
                border-spacing: 20px;
            }
            .main-form{
                width: 40%;
                margin:auto;
            }
            .button-custom{
                float: right;
                margin: 10%;
            }
            .jumbotron{
                width:auto;
                height: 95%;
                margin: 1% 5% 5% 5%;
                overflow: auto;
            }
            .list-group{
                height:300px;
                overflow-wrap: normal;
            }
            .container-fluid{
                
            }
            
    </style>
    <title>Home</title>
</head>
<body>
<header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="../home">
                <img src="Capture (2).jpg" alt="Project Management System">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/task">Tasks
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="deliverable">Deliverable
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/issue">Issue
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="actionItem">Action Item
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/resources">Resources
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="decision">Decision
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav   ">
                    <li class="nav-item active">
                        <a class="nav-link">Welcome,User
                            
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="btn btn-outline-danger my-2 my-sm-0" href="/login">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')
</div>
    
</body>
</html>