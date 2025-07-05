@extends('admin.dashboard')
@section('content')


    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Arabalar kiralama</h5>
            <div class="card-body">
                <form method="POST" action="{{ route('move.AddCarAdminPage') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">yer adresleri</label>
                        <select class="form-select" name="yerler_point_id" value="{{ old('yerler_point_id') }}"
                            id="exampleFormControlSelect1" aria-label="Default select example">
                            <option></option>
                            @foreach ($points as $point)
                                <option value="{{ $point->id }}" style="text-transform: capitalize">
                                    {{ $point->city }}, {{ $point->ilce }} , {{ $point->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="defaultFormControlInput1" class="form-label">MARKA</label>
                        <input type="text" name="brand" value="{{ old('brand') }}" class="form-control"
                            id="defaultFormControlInput1" placeholder="" aria-describedby="defaultFormControlHelp">

                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput2" class="form-label">Model</label>
                        <input type="text" name="model" value="{{ old('model') }}" class="form-control"
                            id="defaultFormControlInput2" placeholder="" aria-describedby="defaultFormControlHelp">

                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput3" class="form-label">yıl</label>
                        <input type="text" name="year" value="{{ old('year') }}" class="form-control"
                            id="defaultFormControlInput3" placeholder="" aria-describedby="defaultFormControlHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect2" class="form-label">Yakıt Tipi</label>
                        <select class="form-select" name="Fuel_Type" value="{{ old('Fuel_Type') }}"
                            id="exampleFormControlSelect2" aria-label="Default select example">
                            <option></option>
                            <option value="Benzin">Benzin</option>
                            <option value="Dizel">Dizel</option>
                            <option value="Electric">Electric</option>
                            <option value="Benzin ve Dizel">Benzin ve Dizel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect3" class="form-label">araba tipi</label>
                        <select class="form-select" name="Car_Type" value="{{ old('Car_Type') }}"
                            id="exampleFormControlSelect3" aria-label="Default select example">
                            <option></option>
                            <option value="otomatic">Otomatic</option>
                            <option value="manuel">Manuel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput4" class="form-label">Renk</label>
                        <input type="text" name="color" value="{{ old('color') }}" class="form-control"
                            id="defaultFormControlInput4" placeholder="" aria-describedby="defaultFormControlHelp">
                        <div id="defaultFormControlHelp" class="form-text">

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput5" class="form-label">Kişi sayısı</label>
                        <input type="text" name="people_num" value="{{ old('people_num') }}" class="form-control"
                            id="defaultFormControlInput5" placeholder="" aria-describedby="defaultFormControlHelp">
                        <div id="defaultFormControlHelp" class="form-text">

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput6" class="form-label">Depozito</label>
                        <input type="text" name="depozito" value="{{ old('depozito') }}" class="form-control"
                            id="defaultFormControlInput6" placeholder="" aria-describedby="defaultFormControlHelp">
                        <div id="defaultFormControlHelp" class="form-text">

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput7" class="form-label">TOPLAM-KM</label>
                        <input type="text" name="toplam_km" value="{{ old('toplam_km') }}" class="form-control"
                            id="defaultFormControlInput7" placeholder="" aria-describedby="defaultFormControlHelp">
                        <div id="defaultFormControlHelp" class="form-text">

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput8" class="form-label">Minimum yaş</label>
                        <input type="text" name="minimum_age" value="{{ old('minimum_age') }}" class="form-control"
                            id="defaultFormControlInput8" placeholder="" aria-describedby="defaultFormControlHelp">
                        <div id="defaultFormControlHelp" class="form-text">

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput9" class="form-label">minimum ehliyet yılı</label>
                        <input type="text" name="minimum_ahliyet_year" value="{{ old('minimum_ahliyet_year') }}"
                            class="form-control" id="defaultFormControlInput9" placeholder=""
                            aria-describedby="defaultFormControlHelp">
                        <div id="defaultFormControlHelp" class="form-text">

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput11" class="form-label">Araba fiyatı</label>
                        <input type="text" name="car_price" value="{{ old('car_price') }}" class="form-control"
                            id="defaultFormControlInput11" placeholder="" aria-describedby="defaultFormControlHelp">
                    </div>

                    <div class="mb-3">

                        <label class="form-label">Araba resmi</label>
                        <div class="input-group">
                            <input type="file" name="photo" value="{{ old('photo') }}" class="form-control"
                                id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                    </div>
                    <div class="mb-3" style="margin-top: 20px">
                        <button type="submit" class="btn btn-primary">Araba Ekle</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="text-align: center ; list-style: none;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <hr class="my-5">

    <div class="col-xl-12">
        <div class="nav-align-top mb-4">


            <ul class="nav nav-pills mb-3 nav-fill" role="tablist">

                @foreach ($cars as $driver)
                    <li class="nav-item">
                        <button type="button" style="text-transform: capitalize" class="nav-link " role="tab"
                            data-bs-toggle="tab" data-bs-target="#navs-pills-{{ $driver['pointId'] }}"
                            aria-controls="navs-pills-justified-home" aria-selected="true">
                            <i class="tf-icons bx bx-user"></i> {{ $driver['pointName'] }}
                        </button>
                    </li>
                @endforeach

            </ul>


            <div class="tab-content">

                @foreach ($cars as $driver)
                    <div class="tab-pane fade" id="navs-pills-{{ $driver['pointId'] }}" role="tabpanel">

                        <div class="col-md-12 ">

                            <div class=" mb-4">
                                <h5 class="card-header">ARACLAR</h5>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-striped">
                                        <thead class="table-light">
                                            <tr>
                                                <th style="text-align: center">FOTOĞRAF</th>
                                                <th style="text-align: center">MARKA</th>
                                                <th style="text-align: center">MODEL</th>
                                                <th style="text-align: center">YIL</th>
                                                <th style="text-align: center">ARAÇ TİPİ</th>
                                                <th style="text-align: center">ARABA FIYATı</th>
                                                <th style="text-align: center">Ayarlar</th>

                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">



                                            @for ($i = 0; $i < count($driver) - 2; $i++)
                                                <tr>
                                                    <td style="text-align: center">
                                                        <img width="120px" height="80px"
                                                            src="../assets/{{ $driver[$i]->photo }}" alt="Avatar"
                                                            class="rounded-circle">

                                                    </td>
                                                    <td style="text-align: center">{{ $driver[$i]->brand }}</td>
                                                    <td style="text-align: center">{{ $driver[$i]->model }}</td>
                                                    <td style="text-align: center">{{ $driver[$i]->year }}</td>
                                                    <td style="text-align: center">{{ $driver[$i]->Car_Type }} </td>
                                                    <td style="text-align: center">{{ $driver[$i]->car_price }} TL
                                                    </td>

                                                    <td style="text-align: center">
                                                        <form method="POST"
                                                            action="{{ route('destroy.AddCarAdminPage', $driver[$i]->id) }}">
                                                            @csrf
                                                            <button type="submit"
                                                                style="background: transparent; border:none">
                                                                <i class='bx bxs-trash-alt'></i>
                                                            </button>
                                                        </form>
                                                    </td>


                                                </tr>
                                            @endfor


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>



@stop
@section('js')

    <script src="../assets/vendor/js/bootstrap.js"></script>

@stop

