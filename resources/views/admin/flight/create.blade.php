@extends('layouts.master')

@section('title', 'flight')

@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Add flight</h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <form action="{{ url('admin/add-flight') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 text-end">
                        <label for=""> إسم المسافر</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="mb-3 text-end">
                        <label for="">شركة الطيران</label>
                        <input type="text" name="company" class="form-control">
                    </div>

                    <div class="mb-3 text-end">
                        <label for="">رقم الحجز</label>
                        <input type="text" name="res_no" class="form-control">
                    </div>

                    <div class="mb-3 text-end">
                        <label for="">البوابة</label>
                        <input type="text" name="Gate" class="form-control" />
                    </div>

                    <div class="mb-3 text-end">
                        <label for="">المقعد</label>
                        <input type="text" name="seat_no" class="form-control">
                    </div>

                    <div class="mb-3 text-end">
                        <label for="">وقت الصعود</label>
                        <input type="text" name="asc_time" class="form-control">
                    </div>

                    <div class="mb-3 text-end">
                        <label for="">وقت الإقلاع</label>
                        <input type="text" name="takeoff_time" class="form-control">
                    </div>

            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Save Flight</button>
            </div>
        </div>
        </form>
    </div>
    </div>

    </div>
    </div>
@endsection
