@extends('backend.layout')
@section('content')
    <div class="container-fluid content-inner pb-0">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table data-table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Numbers</th>
                            <th scope="col">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($participants as $participant)
                        <tr class="white-space-no-wrap">
                            <td></td>
                            <td>{{$participant->address}}</td>
                            <td>{{$participant->numbers}}</td>
                            <td>{{$participant->date}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
@endsection
