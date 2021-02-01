@extends('template')

@section('content')

<main class="login-form">
    <div class="container mb-5" style="min-height: 100vh">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        
                        <form action="/regis/regis_new" method="POST">
                            {{ csrf_field() }}  
                            
                            
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    
                                    <input type="text" id="username" class="form-control {{ $errors->has('username') ? 'is-invalid' : ''}}" name="username" required autofocus>
                                    @if ($errors->has('username'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('username')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    
                                    <input type="text" id="email_address" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('email')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                           
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                   
                                    <input type="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" name="password" required>
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('password')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label for="confirm-password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                <div class="col-md-6">
                                    
                                    <input type="password" id="confirm-password" class="form-control {{ $errors->has('confirm-password') ? 'is-invalid' : ''}}" name="confirm-password" required>
                                    @if ($errors->has('confirm-password'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('confirm-password')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                                <div class="col-md-6">
                                    <textarea id="address" class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" name="address" placeholder="Address" required autofocus >
                                    </textarea>
                                    
                                    @if ($errors->has('address'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('address')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right mr-3">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input mt-2" type="radio" name="gender" id="genderM" value="M" checked>
                                <label class="form-check-label mr-3 mt-1" for="genderM">
                                  Male
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input mt-2" type="radio" name="gender" id="genderF" value="F">
                                <label class="form-check-label mt-1" for="genderF">
                                  Female
                                </label>
                              </div>
                            </div>

                            
                            <div class="form-group row">
                                    <label for="date" class="col-md-4 col-form-label text-md-right mr-3">Date Of Birth</label>
                                    <input type="date" id="dateofbirth" name="dateofbirth">
                            </div>


                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
 </div>

    

</main>


@endsection