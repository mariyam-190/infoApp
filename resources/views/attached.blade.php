@include('layouts.header')

@yield('content')
<div class="row pt-5">
    <div class="col-8 mx-auto">
        <img class="img-fluid" src="{{ asset('assets/img/2.png') }}" width="50px">
        <p class="clr-b mt-1 fw-bold fs-4"> المرافق</p>
        <div class="detail-b">
          <div class="row">
            <div class="col-6 text-center mt-5">
                <img class="img-fluid"  src="{{ asset('assets/img/mc.png') }}">
            </div>

            <div class="col-6 text-center mt-5">
                <img class="img-fluid"  src="{{ asset('assets/img/pizza.png') }}">
            </div>
          </div>

        </div>
    </div>
</div>
