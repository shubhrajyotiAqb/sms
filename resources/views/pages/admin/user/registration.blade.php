@extends('layouts.login')
@section('title', 'Login')
@section('content')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>TrackTrace</b>Rx</a>
    </div>
    <div class="card-body">

      @include('includes.flash')
      
      
      <p class="login-box-msg">Sign in to MGT Portal</p>

     

      <form action="{{ route('user.registration') }}" method="POST">
      @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control is-invalid" name='name' placeholder="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <div  class="invalid-feedback">
               Please choose a username.
           </div>
        </div>
       
        
        <div class="input-group mb-3">
          <input type="telephone" class="form-control" name='telephone' placeholder="telephone">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name='email' placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name='password' placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">
            <i class="fa fa-sign-in-alt"></i> Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

   <!-- FORM END -->

      <p class="mb-1">
        <a href="{{ route('login') }}">Already Registerd Login</a>
      </p>
   
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
 
@endsection

@section('scripts')
<script>

$(document).ready(function(){

})
</script>
@endsection