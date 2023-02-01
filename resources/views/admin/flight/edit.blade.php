@extends('layouts.master')

@section('title','blog Flight')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Edit Flight</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
            <form action="{{ url('admin/add-flight')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for=""> إسم المسافر</label>
                    <input type="text" name="name" class="form-control" value="{{ $flights->name }}">
                </div>

                <div class="mb-3">
                    <label for="">شركة الطيران</label>
                    <input type="text" name="company" class="form-control" value="{{ $flights->company }}">
                </div>

                <div class="mb-3">
                    <label for="">رقم الحجز</label>
                    <input type="text" name="res_no" class="form-control" value="{{ $flights->res_no}}">
                </div>

                <div class="mb-3">
                    <label for="">البوابة</label>
                    <input type="text" name="Gate" class="form-control" value="{{ $flights->Gate }}">
                </div>

                <div class="mb-3">
                    <label for="">المقعد</label>
                    <input type="text" name="seat_no" class="form-control" value="{{ $flights->seat_no }}">
                </div>

                <div class="mb-3">
                    <label for="">وقت الصعود</label>
                    <input type="text" name="asc_time" class="form-control" value="{{ $flights->asc_time }}">
                </div>

                <div class="mb-3">
                    <label for="">وقت الإقلاع</label>
                    <input type="text" name="takeoff_time" class="form-control" value="{{ $flights->takeoff_time}}">
                </div>

                    <div class="col-md-6">
                       <button type="submit" class="btn btn-primary">Update Flight</button>
                    </div>
            </form>
        </div>
    </div>

</div>
</div>
@endsection
