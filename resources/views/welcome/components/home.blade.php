@extends('welcome.dashboard')
@section('css')

    <style>
        .overFifo {

            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis:
        }
    </style>
    <link href="assets/css/styleShop.css" rel="stylesheet" />

@stop



@section('content')

    <!-- Carousel Start -->

    <div class="header-carousel">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <img src="assets/img/carousel-1.jpg" class="img-fluid w-100" alt="First slide" />
                    <div class="carousel-caption">
                        <div class="container py-4">
                            <div class="row g-5">
                                <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                                    style="animation-delay: 1s;">
                                    <div class="bg-secondary rounded p-5">
                                        <h4 class="text-white mb-4">ARAÇ KİRALAMA</h4>
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <div
                                                            class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                            <span class="fas fa-car"></span> <span class="ms-1"
                                                                style="width: 100px">Araç tipi</span>
                                                        </div>
                                                        <select class="form-select" name="aracTipi"
                                                            aria-label="Default select example">
                                                            <option value="hepsi">Hepsi</option>
                                                            @foreach ($carsArray as $car)
                                                                <option value="{{ $car }}">{{ $car }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <div
                                                            class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                            <span class="fas fa-map-marker-alt"></span> <span class="ms-1"
                                                                style="width: 100px">Alış yeri</span>
                                                        </div>
                                                        <select class="form-select" name="alisYeri"
                                                            aria-label="Default select example">

                                                            @foreach ($yerler_pointsArray as $yerler_point)
                                                                <option value="{{ $yerler_point }}">{{ $yerler_point }}
                                                                    Mahalesi</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <div
                                                            class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                            <span class="fas fa-calendar-alt"></span>
                                                            <span class="ms-1" style="width: 100px">Alış tarihi
                                                            </span>
                                                        </div>
                                                        <input class="form-control" name="alisTarihi" type="date"
                                                            min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>">
                                                        <select class="form-select ms-2" name = "alisSaati"
                                                            :value="old('alisSaati')" aria-label="Default select example">
                                                            <option value="09:00" selected>09:00</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="12:00">12:00</option>
                                                            <option value="13:00">13:00</option>
                                                            <option value="14:00">14:00</option>
                                                            <option value="15:00">15:00</option>
                                                            <option value="16:00">16:00</option>
                                                            <option value="17:00">17:00</option>
                                                            <option value="18:00">18:00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <div
                                                            class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                            <span class="fas fa-calendar-alt"></span><span class="ms-1"
                                                                style="width: 100px">Teslim tarihi</span>
                                                        </div>
                                                        <input class="form-control" name="verisTarihi" type="date"
                                                            min="<?= date('Y-m-d', strtotime('+1 day')) ?>"
                                                            value="<?= date('Y-m-d', strtotime('+1 day')) ?>">
                                                        <select class="form-select ms-2" name="verisSaati"
                                                            aria-label="Default select example">
                                                            <option value="09:00" selected>09:00</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="12:00">12:00</option>
                                                            <option value="13:00">13:00</option>
                                                            <option value="14:00">14:00</option>
                                                            <option value="15:00">15:00</option>
                                                            <option value="16:00">16:00</option>
                                                            <option value="17:00">17:00</option>
                                                            <option value="18:00">18:00</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <a href="{{ route('must.login') }}"
                                                        class="btn btn-light w-100 py-2">Kiralık araç ara</a>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight"
                                    data-delay="1s" style="animation-delay: 1s;">
                                    <div class="text-start">
                                        <h1 class="display-5 text-white">Kiralamanızda %15 indirim kazanın! Modelinizi Seçin </h1>
                                        <p>Kendinizi TÜRKİYE'de Şımartın</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Car categories Start -->
    <section class="shop_section layout_padding container-fluid categories py-5"
        style="display: flex; justify-content: center">
        <div class=" py-5" style="width:75vw ; ">
            <div class="heading_container heading_center">
                <h2 style="text-align: center; margin-bottom: 50px">
                    Araçlar
                </h2>
            </div>
            <div class="row" style="row-gap: 20px ;">


                @foreach ($cars as $car)
                    {{-- padding-bottom: 20px ; --}}
                    <div class="col-sm-12 col-md-6 col-lg-4" style=" ">
                        <div class="categories-item p-4">
                            <div class="categories-item-inner">
                                <div class="categories-img rounded-top">
                                    <img style=" height: 260px; background-size: initial"
                                        src="assets/{{ $car->photo }}" class="img-fluid w-100 rounded-top"
                                        alt="">
                                </div>
                                <div class="categories-content rounded-bottom p-4 overFifo">
                                    <h4>{{ $car->brand }} {{ $car->model }}</h4>
                                    <div class="categories-review mb-4">
                                        <div class="me-3">4.5 Review</div>
                                        <div class="d-flex justify-content-center text-secondary">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star text-body"></i>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">
                                            {{ $car->car_price }}
                                            tl/Gün</h4>
                                    </div>
                                    <div class="row gy-2 gx-0 text-center mb-4">
                                        <div class="col-4 border-end border-white">
                                            <i class="fa fa-users text-dark"></i> <span
                                                class="text-body ms-1">{{ $car->people_num }} Seat</span>
                                        </div>
                                        <div class="col-4 border-end border-white">
                                            <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">AT/MT</span>
                                        </div>
                                        <div class="col-4 overFifo">
                                            <i class="fa fa-gas-pump text-dark"></i> <span
                                                class="text-body ms-1">{{ $car->Fuel_Type }}</span>
                                        </div>
                                        <div class="col-4 border-end border-white">
                                            <i class="fa fa-car text-dark"></i> <span
                                                class="text-body ms-1">{{ $car->year }}</span>
                                        </div>
                                        <div class="col-4 border-end border-white">
                                            <i class="fa fa-cogs text-dark"></i> <span
                                                class="text-body ms-1">{{ $car->Car_Type }}</span>
                                        </div>
                                        <div class="col-4 overFifo">
                                            <i class="fa fa-road text-dark"></i> <span
                                                class="text-body ms-1">{{ $car->toplam_km }}K</span>
                                        </div>

                                        <div class="col-12 overFifo">
                                            <i class="fa fa-map-marker-alt text-dark"></i>
                                            <span class="text-body ms-1">{{ $car->address }}
                                                Mahallesi
                                            </span>
                                        </div>
                                    </div>

                                    <a href="{{ route('must.login') }}" style="width: 100%"
                                        class="btn btn-primary rounded-pill d-flex justify-content-center py-3">
                                        Seç ve devam et
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </section>
    <!-- Car categories End -->

@stop

@section('ErrorMsg')

    @if (Session::has('ErrorMsg'))
        <div style="width: 100%; display: flex; justify-content: center ">
            <div class="alert alert-warning alert-dismissible fade show"
                style="background-color: red; border-color: red ;color:#eee; width: 50%; position: absolute ; z-index: 5; margin-top:50px;   "
                role="alert">
                <strong>Giriş Yapmalısınız : </strong> {{ Session::get('ErrorMsg') }}
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
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
