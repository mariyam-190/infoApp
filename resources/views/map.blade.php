@include('layouts.header')

@yield('content')
        <div class="row pt-5">
            <div class="col-12">
                <img class="img-fluid" src="{{ asset('assets/img/3.png') }}" width="50px">
                 <p class="clr-b mt-1 fw-bold fs-4">الخريطة</p>
                 <div class="map-b" id="map">
                    <img class="img-fluid" src="{{ asset('assets/img/map.png') }}" height="80px">
                </div>
            </div>
        </div>
    </div>
</div>
