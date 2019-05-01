
@extends('layouts.navLogin')
<div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center" style="padding:30px;">Login</h1>
            </div>
        </div>
        <div class="jumbotron wumbo">
            <div class="col-md">
                <form action="/home">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="Username" name="username"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group">
                        <?php
                        if (isset($message)) {
                            echo '<label class="text-danger">' . $message . '</label>';
                        }
                        ?>
                    </div>
                    <button class="btn btn-primary" type="submit"  name="submit" value="Submit" onclick="">Submit</button>
                </form>
            </div>
        </div>
@section('content')
    
@endsection