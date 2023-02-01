@extends('layouts.master')

@section('title','Flight')

@section('content')

<div class="container-fluid px-4">

<div class="card mt-4">
    <div class="card-header">
       <h4>View Flight <a href="{{ url('admin/add-flight') }}" class="btn btn-primary btn-sm float-end">Add flight</a></h4>
    </div>
    <div class="card-body">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <table id="myDataTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>res_no</th>
                    <th>Gate</th>
                    <th>seat_no</th>
                    <th>asc_time</th>
                    <th>takeoff_time</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flights as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->company}}</td>
                    <td>{{ $item->res_no }}</td>
                    <td>{{ $item->Gate }}</td>
                    <td>{{ $item->seat_no }}</td>
                    <td>{{ $item->asc_time }}</td>
                    <td>{{ $item->takeoff_time }}</td>
                    <td>
                        <a href="{{ url('admin/flight/' .$item->id) }}" class="btn btn-success">Edit</a>
                    </td>

                    <td>
                        <a href="{{ url('admin/delete-flight/' .$item->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div>

@endsection
