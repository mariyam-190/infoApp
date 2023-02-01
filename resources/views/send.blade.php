@include('layouts.header')

@yield('content')
        <div class="row pt-5">
            <div class="col-lg-8 col-10 mx-auto">
                <img class="img-fluid" src="{{ asset('assets/img/4.png') }}" width="50px">
                 <p class="clr-b mt-1 fw-bold fs-4">إرسال التفاصيل</p>
                 <div class="map-b mt-5 pt-5">
                    <div class="card-body">
                        @if($success = \Session::get('success'))
                        <div class="alert alert-success">{{$success}}</div>
                        @endif
                    </div>
                    <p class="clr-b fw-bold">أدخل رقم الهاتف</p>
                    <form method="post" action="{{route('send.msg')}}" class="m-auto col-8 text-center" dir="rtl">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="mobile_no" placeholder="أدخل رقم الهاتف" class="form-control" id="">
                        </div>
                        <button type="submit" class="btn btn-primary px-5 col-3 mt-2">موافق</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
