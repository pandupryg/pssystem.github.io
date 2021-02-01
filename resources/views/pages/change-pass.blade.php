@extends('template1')

@section('content1')

@if(Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session::get('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif

@if(Session::get('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ Session::get('failed') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif

<main class="login-form">

    <div class="container mb-5" style="min-height: 60vh">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header">Change Password</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('update-password') }}">
                            {{ csrf_field() }}
                            {{-- Untuk input password lama --}}
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Your Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" name="password" required autofocus>
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('password')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Untuk input password baru --}}
                            <div class="form-group row">
                                <label for="new_password" class="col-md-4 col-form-label text-md-right">New Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="new_password" class="form-control {{ $errors->has('new_password') ? 'is-invalid' : ''}}" name="new_password" required>
                                    @if ($errors->has('new_password'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('new_password')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Untuk input confirm password baru --}}
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Confirm New Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="confirm_password" class="form-control {{ $errors->has('confirm_password') ? 'is-invalid' : ''}}" name="confirm_password_confirmation" required>
                                    @if ($errors->has('confirm_password'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('confirm_password')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Tombol konfirmasi change password --}}
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
