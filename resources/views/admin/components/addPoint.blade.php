@extends('admin.dashboard')

@section('css')
@stop
@section('content')

    <div class="row">

        <div class="col-md-12 ">
            <div class="card mb-4">
                <h5 class="card-header">Yer Adresi Ekle</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">

                    <form method="POST" action="{{ route('move.AddPointAdminPage') }}" class="register-form" id="login-form">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Adres Adı</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                id="exampleFormControlInput1" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Şehir</label>
                            <input type="text" name="sehir" value="{{ old('sehir') }}" class="form-control"
                                id="exampleFormControlInput2" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">ilçe</label>
                            <input type="text" name="ilce" value="{{ old('ilce') }}" class="form-control"
                                id="exampleFormControlInput3" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput4" class="form-label">Mahalle</label>
                            <input type="text" name="mahalle" value="{{ old('mahalle') }}" class="form-control"
                                id="exampleFormControlInput4" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput4" class="form-label">Tam Adres</label>
                            <input type="text" name="Full_address" value="{{ old('Full_address') }}" class="form-control"
                                id="exampleFormControlInput4" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput4" class="form-label">Telefon</label>
                            <input type="phone" name="phone" value="{{ old('phone') }}" class="form-control"
                                id="exampleFormControlInput4" placeholder="" required>
                        </div>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">Konum</span>
                            <textarea class="form-control" name="location" value="{{ old('location') }}" aria-label="With textarea" required></textarea>
                        </div>

                        <div class="mb-3" style="margin-top: 20px">
                            <button type="submit" class="btn btn-primary">Yer Adresi Ekle</button>
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

        <div class="col-md-12 ">

            <div class="card mb-4">
                <h5 class="card-header">Yerler Adresleri</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center">Adresi Adı</th>
                                <th style="text-align: center">şehir</th>
                                <th style="text-align: center">Tam Adres</th>
                                <th style="text-align: center">Telefon</th>
                                <th style="text-align: center">Konum</th>
                                <th style="text-align: center">Ayarlar</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                            @foreach ($points as $point)
                                <tr>
                                    <td style="text-align: center"><i class="fab fa-angular fa-lg text-danger me-3"></i> <label
                                            style="text-transform: capitalize">{{ $point->name }}</label></td>
                                    <td style="text-align: center"> <label style="text-transform: capitalize" for=""> {{ $point->city }}
                                        </label> </td>
                                    <td style="text-align: center"> <label style="text-transform: capitalize" for=""> {{ $point->address }}
                                        </label> </td>
                                    <td style="text-align: center"> <label for=""> {{ $point->phone }} </label> </td>
                                    <td style="text-align: center">
                                        <button type="button" class="btn " data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $point->id }}">
                                            <i class='bx bx-current-location'></i>
                                        </button>
                                    </td>
                                    <div class="modal fade " id="exampleModal{{ $point->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" style="display: flex; ">
                                            <div class="modal-content" style="width: 600px ; height: 600px;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Konum</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe src="{{ $point->location }}" width="100%" height="100%"
                                                        style="border:0;" allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <td style="text-align: center">
                                        <form method="POST" action="{{ route('destroy.AddPointAdminPage' , $point->id ) }}">
                                            @csrf
                                            <button type="submit" style="background: transparent; border:none" >
                                                <i class='bx bxs-trash-alt'></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div style="margin-bottom: 100px"></div>

    </div>

@stop


@section('js')

    <script src="../assets/vendor/js/bootstrap.js"></script>

@stop
