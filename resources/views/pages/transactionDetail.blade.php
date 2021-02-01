@extends('template1')

@section('content1')

    <div class="container">
        <div class="col-md-12 text-center mt-4">
            <h1>Your Transaction at {{ $transaction->date }}</h1>
        </div>

        <div class="col-md-12 p-3">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <td>No</td>
                        <td>Phone</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Total</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($phones as $phoneIndex => $phone)
                        <tr>
                            <td class="text-center">{{ $phoneIndex + 1 }}</td>
                            <td>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="{{ asset('upload/phone/' . $phone->photo) }}" width="100"
                                                 height="100">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="col-md-12">
                                                <h5 class="font-weight-bold">{{ $phone->type_name }}</h5>
                                            </div>
                                            <div class="col-md-12">
                                                <span>{{ $phone->color }}</span>
                                            </div>
                                            <div class="col-md-12">
                                                <span>{{ $phone->memory }}GB / {{ $phone->storage }}GB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">Rp {{ number_format($phone->price, 0, ',', '.') }}</td>
                            <td class="text-center">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <input name="quantity" class="form-control" type="number"
                                               value="{{ $phone->quantity }}">
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </td>
                            <td class="text-center">Rp {{ number_format($phone->price * $phone->quantity, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-12 text-center p-3">
            <h4>Total : Rp {{ number_format($totalPrice, 0, ',', '.') }}</h4>
        </div>
    </div>


    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@endsection
