@extends('template1')

@section('content1')

    <div class="container mb-5" style="min-height: 100vh">
        <div class="col-md-12 p-3">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <td>No</td>
                        <td>Phone</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($carts as $cartIndex => $cart)
                        <form method="POST" action="{{ route('update-cart', $cart->cart_id) }}">
                            @method('PUT')
                            @csrf
                            <tr>
                                <td class="text-center">{{ $cartIndex + 1 }}</td>
                                <td>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="{{ asset('upload/phone/' . $cart->photo) }}" width="100"
                                                     height="100">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="col-md-12">
                                                    <h5 class="font-weight-bold">{{ $cart->type_name }}</h5>
                                                </div>
                                                <div class="col-md-12">
                                                    <span>{{ $cart->color }}</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <span>{{ $cart->memory }}GB / {{ $cart->storage }}GB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">Rp {{ number_format($cart->price, 0, ',', '.') }}</td>
                                <td class="text-center">
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <input name="quantity" class="form-control" type="number"
                                                   value="{{ $cart->quantity }}">
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </td>
                            </tr>
                        </form>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12 mb-3 text-center">
            @if(count($carts) > 0)
                <form method="POST" action="{{ route('create-transaction') }}">
                    @csrf
                    <input type="hidden" name="phones" value="{{ $carts }}">
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">Checkout</button>
                    </div>
                </form>
            @endif
        </div>
    </div>


    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@endsection
