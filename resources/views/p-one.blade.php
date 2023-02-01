@include('layouts.header')

@yield('content')
<div class="p-tow">
        <div class="row pt-5">
            <div class="col-6">
                <img class="img-fluid mb-3" src="{{ asset('assets/img/2.PNG')}}" width="80px"><br>
                <a href="{{url('attach')}}" class="btn btn-primary fw-bold">المرافق</a>
            </div>
            <div class="col-6">
                <img class="img-fluid  mb-3" src="{{ asset('assets/img/1.PNG')}}" width="80px"><br>
                <a href="{{url('flight-details')}}" class="btn btn-primary fw-bold">تفاصيل الرحلة</a>
            </div>
    </div>
    <div class="row mt-5 pt-5">
        <div class="col-6">
            <img class="img-fluid  mb-3" src="{{ asset('assets/img/4.PNG')}}" width="80px"> <br>
            <a href="{{url('send')}}" class="btn btn-primary fw-bold">إرسال التفاصيل</a>
        </div>
        <div class="col-6">
            <img class="img-fluid  mb-3" src="{{ asset('assets/img/3.PNG')}}" width="80px"><br>
            <a href="{{url('map')}}" class="btn btn-primary fw-bold">الخريطة</a>
        </div>
</div>
    </div>
</div>
