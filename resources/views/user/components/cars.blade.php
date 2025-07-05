@extends('user.dashboard')
@section('content')


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Araba</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            </ol>
        </div>
    </div>
    <!-- Header End -->
    <!-- Car categories Start -->
    <div class="container-fluid categories py-5" style="padding : 0px 50px">
        <div class=" wow fadeInUp" data-wow-delay="0.1s">

            <div class="row">

                {{-- foreach --}}
                @for ($i = 0; $i < count($leasings); $i++)
                    <div class="">
                        @if ($leasings[$i]->teslim_verildi)
                        <div style="background-color: #eee"  class="card flex-md-row mb-4 box-shadow h-md-250 ">
                        @else
                        <div style=""  class="card flex-md-row mb-4 box-shadow h-md-250 ">
                        @endif
                            <div class="card-body d-flex align-items-start"
                                style=" flex-direction: row; justify-content: space-between; margin:0px 20px">

                                <div style=" height: 100%; display: flex; justify-content: space-around ;align-items: center ;
                                            flex-direction: column; ">
                                    <h3 class="" style=" color:#ccc ; font-weight: 600 ; font-size:20px">
                                        {{ $carsData[$i]->brand }} {{ $carsData[$i]->model }} {{ $carsData[$i]->year }}
                                    </h3>
                                    <img class="card-img-right flex-auto d-none d-md-block"
                                        data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]"
                                        style=" height: 150px; " src= "assets/{{ $carsData[$i]->photo }}"
                                        data-holder-rendered="true">
                                </div>


                                <div
                                    style="height: 100% ;  display: flex; flex-direction: column ; justify-content: center  ">

                                    <div style="display: flex; margin-top: 40px ;s">
                                        <p style="margin: 0 10px">Teslim addresi : </p>
                                        <p style="white-space: nowrap; overflow: hidden;  text-overflow:ellipsis ; ">
                                            {{ $carsData[$i]->address }}</p>
                                    </div>
                                    <div style="display: flex; margin-top: 10px ;s">
                                        <p style="margin: 0 10px">Office Phone : </p>
                                        <p style="white-space: nowrap; overflow: hidden;  text-overflow:ellipsis ; ">
                                            {{ $carsData[$i]->phone }}</p>
                                    </div>
                                    <div style="display: flex;margin-top: 10px">
                                        <p style="margin: 0 10px">Veris tarihi : </p>
                                        <p> {{ $leasings[$i]->rental_day }} : {{ $leasings[$i]->rental_hour }}</p>
                                    </div>
                                    <div style="display: flex;margin-top: 10px">
                                        <p style="margin: 0 10px">Teslim tariht : </p>
                                        <p> {{ $leasings[$i]->delivery_day }} : {{ $leasings[$i]->delivery_hour }}</p>

                                    </div>
                                    <div style="display: flex; margin-top: 10px">
                                        <p style="margin: 0 10px">Gun Sayisis : </p>
                                        <p> {{ $leasings[$i]->day_num }} Gundur</p>
                                    </div>

                                </div>


                                @if ($leasings[$i]->driver_id != 0)
                                    <div
                                        style="height: 100%;   display: flex; flex-direction: column ; justify-content: center  ">

                                        <div style="display: flex; margin-top: 40px">
                                            <p style="margin: 0 10px">Driver : </p>
                                            <p>Evet</p>
                                        </div>
                                        <div style="display: flex;margin-top: 10px">
                                            <p style="margin: 0 10px">Driver Name : </p>
                                            <p> {{ $driverData[$i]->name }} {{ $driverData[$i]->surname }} </p>
                                        </div>
                                        <div style="display: flex; margin-top: 10px">
                                            <p style="margin: 0 10px">Driver Phone : </p>
                                            <p> {{ $driverData[$i]->phone }}</p>
                                        </div>

                                        <div style="display: flex;margin-top: 10px">
                                            <p style="margin: 0 10px">Driver Age : </p>
                                            <p> {{ $driverData[$i]->age }}</p>
                                        </div>
                                        <div style="display: flex;margin-top: 10px">
                                            <p style="margin: 0 10px">Driver fiyat ( Gunlik ) </p>
                                            <p> {{ $driverData[$i]->driver_price }} Tl</p>
                                        </div>
                                    </div>
                                @endif

                                <div
                                    style="height: 100%;   display: flex; flex-direction: column ; justify-content: center  ">


                                    <div style="display: flex;margin-top: 40px">
                                        <p style="margin: 0 10px">Teslim Alindi : </p>
                                        <p> {{ $leasings[$i]->teslim_alindi ? 'Evet' : "Hayir" }} </p>
                                    </div>
                                    <div style="display: flex; margin-top: 10px">
                                        <p style="margin: 0 10px">Teslim Verlidi : </p>
                                        <p> {{ $leasings[$i]->teslim_verildi ? 'Evet' : "Hayir"}}</p>
                                    </div>

                                    <div style="display: flex;margin-top: 10px">
                                        <p style="margin: 0 10px">Arac Fiyat (Gunluk) : </p>
                                        <p> {{ $carsData[$i]->car_price }} TL</p>
                                    </div>
                                    <div style="display: flex; margin-top: 10px">
                                        <p style="margin: 0 10px">Depozito : </p>
                                        <p>{{ $carsData[$i]->depozito }} TL</p>
                                    </div>
                                    <div style="display: flex;margin-top: 10px">
                                        <p style="margin: 0 10px">Toplam fiyat </p>
                                        <p>
                                            {{  $carsData[$i]->car_price * $leasings[$i]->day_num + $driverData[$i]->driver_price *$leasings[$i]->day_num }}
                                            TL + {{  $carsData[$i]->depozito }} TL Depozito

                                        </p>
                                    </div>
                                </div>


                                <div style="height: 100% ; ">
                                    <iframe style="height: 100%; width: 400px" src = '{{ $carsData[$i]->location }}'
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>


                            </div>

                        </div>
                    </div>
                @endfor



                {{-- end foreach --}}



            </div>
        </div>
    </div>

    <!-- Car categories End -->





@stop
<!-- JavaScript Libraries -->

@section('js')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
@stop
