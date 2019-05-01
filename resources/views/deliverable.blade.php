@extends('layouts.navDeliverable')
<div class="container">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServerUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3"></span>
                    </div>
                    <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                    <div class="invalid-feedback">
                    Please choose a username.
                    </div>
                </div>
                </div>
            </div>
        </div>
</div>
@section('content')
    
@endsection