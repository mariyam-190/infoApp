@include('layouts.header')

@yield('content')
<div class="row pt-5">
    <div class="col-lg-8 col-10 mx-auto">
        <img class="img-fluid" src="{{ asset('assets/img/1.png') }}" width="50px">
        <p class="clr-b mt-1 fw-bold fs-4"> تفاصيل الرحلة</p>
        <div class="detail-b">
            @forelse ($searchflight as $searchItem)

            <form class="m-auto col-10 col-lg-8 pt-5" dir="rtl">
                <div class="mb-3 col-12 clr-b text-end fw-bold">
                    <label for="" class="form-label ">إسم المسافر</label>
                    <input type="email" class="form-control" id="" placeholder="{{$searchItem->name}}">
                </div>
                <div class="row">
                    <div class="mb-3 col-6 clr-b text-end fw-bold">
                        <label for="" class="form-label ">شركة الطيران</label>
                        <input type="email" class="form-control" id="" placeholder="{{$searchItem->company}}">
                    </div>
                    <div class="mb-3 col-6 clr-b text-end fw-bold">
                        <label for="" class="form-label">رقم الحجز</label>
                        <input type="email" class="form-control" id="" placeholder="{{$searchItem->res_no}}">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-6 clr-b text-end fw-bold">
                        <label for="" class="form-label ">البوابة</label>
                        <input type="email" class="form-control" id="" placeholder="{{$searchItem->Gate}}">
                    </div>
                    <div class="mb-3 col-6 clr-b text-end fw-bold">
                        <label for="" class="form-label">المقعد</label>
                        <input type="email" class="form-control" id="" placeholder="{{$searchItem->seat_no}}">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-6 clr-b text-end fw-bold">
                        <label for="" class="form-label ">وقت الصعود</label>
                        <input type="email" class="form-control" id="" placeholder="{{$searchItem->asc_time}}">
                    </div>
                    <div class="mb-3 col-6 clr-b text-end fw-bold">
                        <label for="" class="form-label">وقت الإقلاع</label>
                        <input type="email" class="form-control" id="" placeholder="{{$searchItem->takeoff_time}}">
                    </div>
                </div>
                 <a href="{{url('send')}}" class="btn btn-primary px-5 col-3 mt-2 text-center">SMS</a>
            </form>
            @empty
              <div class="col-md-12 p-2">
                <h4 class="clr-b text-center mt-5 mx-auto fw-bold">لا توجد رحلة </h4>
              </div>
            @endforelse
        </div>
    </div>
</div>
</div>
</div>
