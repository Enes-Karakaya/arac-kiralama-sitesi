@extends('admin.dashboard')

@section('css')
@stop
@section('content')

    <div class="row">

        <div class="col-md-12 ">
            <div class="card mb-4">
                <h5 class="card-header">Yer Sürücü Ekle</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">

                    <form method="POST" action="{{ route('move.AddDriverAdminPage') }}" class="register-form" id="login-form">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Yer Adresi</label>
                            <select class="form-select" name="yer_id" id="exampleFormControlSelect1"
                                aria-label="Default select example" value="{{ old('yer_id') }}" required>
                                <option></option>
                                @foreach ($points as $point)
                                    <option value="{{ $point->id }}" style="text-transform: capitalize">
                                        {{ $point->city }}, {{ $point->ilce }} , {{ $point->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Sürücü Adı</label>
                            <input type="text" name="Ad" class="form-control" id="exampleFormControlInput1"
                                placeholder="" value="{{ old('Ad') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Soyadı</label>
                            <input type="text" name="Soyad" class="form-control" id="exampleFormControlInput2"
                                placeholder="" value="{{ old('Soyad') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">TC Kimlik</label>
                            <input type="text" name="tc" class="form-control" id="exampleFormControlInput3"
                                placeholder="" value="{{ old('tc') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="doğum_günü" class="form-label">Doğum günü</label>
                            <input class="form-control" name="birthDay" type="date" id="doğum_günü"
                                value="{{ old('birthDay') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput4" class="form-label">Email</label>
                            <input type="text" name="Email" class="form-control" id="exampleFormControlInput4"
                                placeholder="name@example.com" value="{{ old('Email') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefon</label>
                            <input type="phone" name="phone" class="form-control" id="phone" placeholder=""
                                value="{{ old('phone') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="maas" class="form-label">Sürücü Maaş</label>
                            <input type="text" name="maas" class="form-control" id="maas" placeholder=""
                                value="{{ old('maas') }}" required>
                        </div>
                        <div class="mb-3" style="margin-top: 20px">
                            <button type="submit" class="btn btn-primary">Sürücü Ekle</button>
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
        </hr>

        <div class="col-xl-12">
            <h6 class="text-muted">Sürücüler</h6>
            <div class="nav-align-top mb-4">


                <ul class="nav nav-pills mb-3 nav-fill" role="tablist">

                    @foreach ($drivers as $driver)
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

                    @foreach ($drivers as $driver)
                        <div class="tab-pane fade" id="navs-pills-{{ $driver['pointId'] }}" role="tabpanel">

                            <div class="col-md-12 ">

                                <div class="card mb-4">
                                    <h5 class="card-header">Yerler Adresleri</h5>
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center">Sürücü Adı</th>
                                                    <th style="text-align: center">Sürücü Soyadı</th>
                                                    <th style="text-align: center">TC Kimlik</th>
                                                    <th style="text-align: center">Doğum günü</th>
                                                    <th style="text-align: center">Email</th>
                                                    <th style="text-align: center">Telefon</th>
                                                    <th style="text-align: center">Sürücü fiyatı</th>
                                                    <th style="text-align: center">Ayarlar</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">



                                                @for ($i = 0; $i < count($driver) - 2; $i++)
                                                    <tr>
                                                        <td style="text-align: center"><i class="fab fa-angular fa-lg text-danger me-3"></i> <label
                                                                style="text-transform: capitalize">{{ $driver[$i]->name }}</label>
                                                        </td>
                                                        <td style="text-align: center"> <label style="text-transform: capitalize" for="">
                                                                {{ $driver[$i]->surname }}
                                                            </label> </td>
                                                        <td style="text-align: center"> <label style="text-transform: capitalize" for="">
                                                                {{ $driver[$i]->tc }}
                                                            </label> </td>
                                                        <td style="text-align: center"> <label for=""> {{ $driver[$i]->birth_day }} </label>
                                                        </td>
                                                        <td style="text-align: center"> <label for=""> {{ $driver[$i]->phone }} </label>
                                                        </td>

                                                        <td style="text-align: center"> <label for=""> {{ $driver[$i]->email }} </label>
                                                        </td>
                                                        <td style="text-align: center"> <label for=""> {{ $driver[$i]->driver_price }}
                                                            </label> </td>

                                                        <td style="text-align: center">
                                                            <form method="POST" action="{{ route('destroy.AddDriverAdminPage' , $driver[$i]->id ) }}">
                                                                @csrf
                                                                <button type="submit" style="background: transparent; border:none" >
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
