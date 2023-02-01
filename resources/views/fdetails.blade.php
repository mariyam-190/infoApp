@include('layouts.header')



@yield('content')
<div class="container">
    <div class="row">
        <div class="text-center col-10 col-lg-5 mx-auto mt-5 pt-5 frm">
            <h1 class="clr-b fw-bold">الخطوط الجوية السعودية </h1>
            <p class="clr-g fw-bold">أدخل رقم الحجز أو مرر الباركود الخاص بها</p>
            <form action="{{url('search')}}" method="GET" role="search" class="m-auto col-8 text-center" dir="rtl">
                <div class="mb-3">
                    <input type="name" placeholder="أدخل رقم الحجز" class="form-control" aria-label="Search" name="search" value="">
                </div>
                <a href="" class="btn btn-primary col-12 mt-3"> مرر البار كود QR</a> <br>
                <button type="submit" class="btn btn-primary px-5 col-12 mt-2">موافق</button>
            </form>
        </div>
    </div>
</div>


@include('layouts.footer')
