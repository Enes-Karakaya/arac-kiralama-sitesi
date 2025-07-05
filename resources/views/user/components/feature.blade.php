@extends('user.dashboard')
@section('css')
    <style>
        .container1 {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }


        .checkout-form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .form-group {
            width: 100%;
            margin-bottom: 15px;
        }

        .checkout-form label {
            display: block;
            margin-bottom: 5px;
        }

        .checkout-form input[type="text"],
        .checkout-form input[type="email"] {
            width: calc(100% - 25px);
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group i {
            margin-right: 10px;
        }

        .checkout-form button {
            width: 96%;
            padding: 15px;
            background-color: #28a745;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        .checkout-form button:hover {
            background-color: #218838;
        }

        .checkout-form h3 {
            width: 100%;
            border-bottom: 2px solid #f4f4f4;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 20px;
        }

        @media (min-width: 600px) {
            .form-group {
                width: 48%;
            }

            .form-group.full-width {
                width: 100%;
            }

            .checkout-form button {
                width: 48%;
                margin-top: 20px;
            }
        }

        @media (min-width: 768px) {
            .container1 {
                padding: 40px;
            }
        }
    </style>

@stop
@section('content')


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Araba Detayları</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active text-primary">Araba Detayları</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
    <!-- Features Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                {{-- <h1 class="display-5 text-capitalize mb-3">Cental <span class="text-primary">Features</span></h1> --}}
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-xl-4">
                    <div class="row gy-4 gx-0">
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <span class="fa fa-trophy fa-2x"></span>
                                </div>
                                <div class="ms-4">
                                    <h5 class="mb-3">Araç Detayları</h5>
                                    <p class="mb-0">
                                        Brand : {{ $car->brand }}
                                    </p>
                                    <p class="mb-0">
                                        Model : {{ $car->model }}
                                    </p>
                                    <p class="mb-0">
                                        Year : {{ $car->year }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <span class="fa fa-road fa-2x"></span>
                                </div>
                                <div class="ms-4">
                                    <h5 class="mb-3">Araç Özellikleri</h5>

                                    <p class="mb-0">
                                        Yakıt Türü: {{ $car->Fuel_Type }}
                                    </p>
                                    <p class="mb-0">
                                        Araba Tipi: {{ $car->Car_Type }}
                                    </p>
                                    <p class="mb-0">
                                        kişi koltuk : {{ $car->people_num }}
                                    </p>
                                    <p class="mb-0">
                                        Renk: {{ $car->color }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/{{ $car->photo }}" class="img-fluid w-100" style="object-fit: cover;" alt="Img">
                </div>
                <div class="col-xl-4">
                    <div class="row gy-4 gx-0">
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-item justify-content-end">
                                <div class="text-end me-4">
                                    <h5 class="mb-3">Kiralama şartları</h5>
                                    <p class="mb-0">
                                        Toplam km: {{ $car->toplam_km }} Km
                                    </p>
                                    <p class="mb-0">
                                        Minimum Yaş": {{ $car->minimum_age }} Yıl
                                    </p>
                                    <p class="mb-0">
                                        Minimum Ehliyet Yılı : {{ $car->minimum_ahliyet_year }} Yıl
                                    </p>
                                </div>
                                <div class="feature-icon">
                                    <span class="fa fa-tag fa-2x"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-item justify-content-end">
                                <div class="text-end me-4">
                                    <h5 class="mb-3">Teslimat ve ödeme</h5>
                                    <p class="mb-0">
                                        Depozito : {{ $car->depozito }} Tl
                                    </p>
                                    <p class="mb-0">
                                        Araba fiyatı / günlük : {{ $car->car_price }} Tl
                                    </p>

                                    @if ($data->driver == 'on')

                                        @if ($data->isDriver == true)
                                            <p class="mb-0">
                                                Sürücü fiyatı / günlük : {{ $data->driver_price }} Tl
                                            </p>
                                            <p class="mb-0">
                                                Toplam fiyat {{ $data->day_num }} gün için :
                                                {{ $car->car_price * $data->day_num + $data->driver_price * $data->day_num }}
                                                Tl
                                            </p>
                                        @else
                                            <p class="mb-0" style="color: red">
                                                Sürücü : Müsait sürücü yok
                                            </p>
                                            <p class="mb-0">
                                                Toplam Araba fiyatı {{ $data->day_num }} gün için :
                                                {{ $car->car_price * $data->day_num }} Tl
                                            </p>
                                        @endif
                                    @else
                                        <p class="mb-0">
                                            Toplam Araba fiyatı {{ $data->day_num }} gün için :
                                            {{ $car->car_price * $data->day_num }} Tl
                                        </p>
                                    @endif

                                </div>
                                <div class="feature-icon">
                                    <span class="fa fa-map-pin fa-2x"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="wow fadeInUp" data-wow-delay="0.5s">
            <div class="feature-item justify-content-center" style="align-items: center">

                <div class="text-start me-4">
                    <h5 class="mb-3">Teslim Alma Ve Teslim Verme Tarihi Ve Yeri</h5>
                    <p class="mb-0">
                        Teslim Alma Yeri : {{ $data->alisYeri }} Mahallesi
                    </p>
                    <p class="mb-0">
                        Teslim Verme Yeri : {{ $data->alisYeri }} Mahallesi
                    </p>
                    <p class="mb-0">
                        Teslim Alma Tarihi : {{ $data->alisTarihi }} : {{ $data->alisSaati }}
                    </p>
                    <p class="mb-0">
                        Teslim Verme Tarihi : {{ $data->verisTarihi }} : {{ $data->verisSaati }}
                    </p>


                </div>
                <div class="feature-icon">
                    <iframe style="height: 300px"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6206.972985323865!2d34.570458!3d38.935713!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a81837e93fe9d%3A0x6f0a1d652758161e!2sHac%C4%B1bekta%C5%9F%20Teknik%20Bilimler%20Meslek%20Y%C3%BCksekokulu!5e0!3m2!1str!2str!4v1748304011097!5m2!1str!2str"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </div>
    </div>
    <!-- Features End -->



    {{-- Payment --}}
    <div class="container1">
        <form class="checkout-form" method="POST" action="{{ route('payment') }}">
            @csrf
            <h2 style="text-align: center; width: 100% ; margin-bottom: 20px">Ödeme Yap</h2>

            <div class="form-group">
                <input class="form-control" type="hidden"  name="car_id" value="{{ $car->id }}">
                <input class="form-control" type="hidden"  name="rental_day" value="{{  $data->alisTarihi }}">
                <input class="form-control" type="hidden"  name="rental_hour" value="{{ $data->alisSaati }}">
                <input class="form-control" type="hidden"  name="delivery_day" value="{{ $data->verisTarihi }}">
                <input class="form-control" type="hidden"  name="delivery_hour" value="{{ $data->verisSaati }}">
                <input class="form-control" type="hidden"  name="day_num" value="{{  $data->day_num }}">
                <input class="form-control" type="hidden"  name="teslim_alindi" value="0">
                <input class="form-control" type="hidden"  name="teslim_verildi" value="0">
                @if ($data->driver == 'on')
                    @if ($data->isDriver == true)
                        <input class="form-control" type="hidden"  name="driver_id" value="{{ $data->driver_id }}">
                        <input class="form-control" type="hidden"  name="driver_price" value="{{ $data->driver_price }}">
                    @endif
                @endif
                <input class="form-control" type="hidden" name="total"
                value="
                @if ($data->driver == 'on')
                    @if ($data->isDriver == true)
                        {{ $car->car_price * $data->day_num + $data->driver_price * $data->day_num + $car->depozito }}
                    @else
                        {{ $car->car_price * $data->day_num + $car->depozito }}
                    @endif
                @else
                    {{ $car->car_price * $data->day_num + $car->depozito }}
                @endif
                ">
            </div>

            <div style="width: 100%; color:red; margin-bottom: 10px ">
                <i style="margin-right: 5px" class="fas fa-exclamation-triangle"></i>

                Aracı teslim alırken yanınızda kimliğiniz, ehliyetiniz ve üzerinde adınız, soyadınız ve kart numaranızın
                yazdığı bir kredi kartı bulunmalıdır.

            </div>
            <div style="width: 100%; color:red ; margin-bottom: 10px ">
                <i style="margin-right: 5px" class="fas fa-exclamation-triangle"></i>
                Depozito ücretleri araç teslimi sırasında değişkenlik gösterebilir.
                Sigorta, kasko ve ek ürünlerle ilgili detaylı bilgi için firmayla görüşebilirsiniz.
            </div>

            <button
                style=" background-color: #27A745  ; color:#fff; padding : 18px;text-align: center ; width : 100% ; display: flex ; justify-content: center ; align-items: center"
                type="submit" >
                <i style="margin-right: 25px" class="fas fa-3x fa-shield-alt"></i>
                <div>
                    <label style="font-size: 32px ; font-weight: 600">

                        @if ($data->driver == 'on')

                            @if ($data->isDriver == true)
                                <p class="mb-0">

                                    {{ $car->car_price * $data->day_num + $data->driver_price * $data->day_num + $car->depozito }}
                                    Tl
                                </p>
                            @else
                                <p class="mb-0">
                                    {{ $car->car_price * $data->day_num + $car->depozito }} Tl
                                </p>
                            @endif
                        @else
                            <p class="mb-0">
                                {{ $car->car_price * $data->day_num + $car->depozito }} Tl
                            </p>
                        @endif



                        <label style="font-size: 14px">
                            Güvenli Ödeme Yap
                        </label>
                    </label>

                </div>

            </button>
        </form>
    </div>
@stop


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
