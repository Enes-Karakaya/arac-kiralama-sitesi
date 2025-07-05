@extends('admin.dashboard')
@section('content')




    <div class="col-md-12">
        <div class="card mb-4">
            <h5 style="" class="card-header"> <a style="color: #ccc" href="{{ route('move.maintencePage') }}">Bakım
                    Ekle</a> / Bakım Detaylari</h5>
            <div class="card-body">
                <form method="POST" action="{{ route('store.maintenceEditPage') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="mb-3">
                        <input type="hidden" name="car_id" value="{{ $id }}" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label for="defaultFormControlInput1" class="form-label">En son bakım yapıldığı tarihi</label>
                        <input type="date" name="last_maintence_date" value="{{ old('last_maintence_date') }}"
                            class="form-control" id="defaultFormControlInput1" placeholder=""
                            aria-describedby="defaultFormControlHelp">
                    </div>


                    <div class="mb-3">
                        <label for="defaultFormControlInput2" class="form-label">Problem</label>
                        <input type="text" name="problem" value="{{ old('problem') }}" class="form-control"
                            id="defaultFormControlInput2" placeholder="" aria-describedby="defaultFormControlHelp">
                    </div>

                    <div class="mb-3">
                        <label for="defaultFormControlInput3" class="form-label">Masraf</label>
                        <input type="text" name="cost" value="{{ old('cost') }}" class="form-control"
                            id="defaultFormControlInput3" placeholder="" aria-describedby="defaultFormControlHelp">
                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput4" class="form-label">Ayrıntılar</label>
                        <input type="text" name="description" value="{{ old('description') }}" class="form-control"
                            id="defaultFormControlInput4" placeholder="" aria-describedby="defaultFormControlHelp">
                    </div>

                    <div class="mb-3">

                        <label class="form-label">Fatura fotoğraf</label>
                        <div class="input-group">
                            <input type="file" name="bilPhoto" value="{{ old('bilPhoto') }}" class="form-control"
                                id="inputGroupFile4">
                            <label class="input-group-text" for="inputGroupFile4">Upload</label>
                        </div>
                    </div>

                    <div class="mb-3" style="margin-top: 20px">
                        <button type="submit" class="btn btn-primary">Fatura Ekle</button>
                    </div>
                </form>

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

    </div>



    <hr class="my-5">
    </hr>



    <div class="col-md-12 ">

        <div class="card mb-4">
            <h5 class="card-header">Yerler Adresleri</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center">Son bakım tarihi</th>
                            <th style="text-align: center">problem</th>
                            <th style="text-align: center">Masraf</th>
                            <th style="text-align: center">Ayrıntılar</th>
                            <th style="text-align: center">Fatura fotoğraf</th>
                            <th style="text-align: center">bakım durumu</th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($maintences as $maintence)
                            <tr>
                                <td style="text-align: center"><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <label style="text-transform: capitalize">{{ $maintence->last_maintence_date }}</label>
                                </td>
                                <td style="text-align: center"> <label style="text-transform: capitalize" for="">
                                        {{ $maintence->problem }}
                                    </label> </td>
                                <td style="text-align: center"> <label style="text-transform: capitalize" for="">
                                        {{ $maintence->cost }}
                                    </label>
                                </td>
                                <td style="text-align: center"> <label for=""> {{ $maintence->description }}
                                    </label>
                                </td>
                                <td style="text-align: center">
                                    <button type="button" class="btn " data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $maintence->id }}">
                                        <i style="font-size: 32px;" class='bx bx-image-alt'></i>
                                    </button>
                                </td>
                                <div class="modal fade " id="exampleModal{{ $maintence->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" style="display: flex; ">
                                        <div class="modal-content" style="width: 600px ; height: 600px;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Konum</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="../assets/{{ $maintence->bil_photo }}" width="450px"
                                                    height="450px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <td style="text-align: center">



                                    @if ($maintence->status == 1)
                                        <a href="{{ route('move.maintenceFinish', $maintence->id) }}">
                                            <i style="font-size: 32px; color: #55697E" class='bx bx-refresh'></i>
                                        </a>
                                    @elseif ($maintence->status == 0)
                                        <label for="">
                                            <i style="font-size: 32px;"  class='bx bx-check'></i>
                                        </label>
                                    @endif

                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div style="margin-bottom: 100px"></div>





@stop

@section('js')

    <script src="../assets/vendor/js/bootstrap.js"></script>

@stop
