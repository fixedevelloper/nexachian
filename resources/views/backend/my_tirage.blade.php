@extends('backend.layout')
@section('content')
    <div class="container-fluid content-inner pb-0">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table data-table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Numbers</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($participants as $participant)
                        <tr class="white-space-no-wrap">
                            <td></td>
                            <td>{{$participant->date}}</td>
                            <td>{{$participant->numbers}}</td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
@endsection
