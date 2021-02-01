@extends('template1')

@section('content1')

    <div class="container mb-5" style="min-height: 100vh">
        <div class="text-center mt-4">
            <h1>Your Transaction History</h1>
        </div>

        <div class="col-md-12 py-3">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Transaction ID</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transactions as $transactionIndex => $transaction)
                        <tr class="text-center" onclick="window.location = '{{ route('transaction-detail', $transaction->id) }}'">
                            <td>{{ $transactionIndex + 1 }}</td>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->date }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@endsection
