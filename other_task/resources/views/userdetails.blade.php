@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Operation</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($user_deatils as $data)
                          <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->user_name}}</td>
                            <td><a href="">Edit</a></td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection