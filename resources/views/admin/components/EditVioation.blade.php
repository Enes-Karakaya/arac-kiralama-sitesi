@extends('admin.dashboard')
@section('content')


    <div class="col-md-12">
        <div class="card mb-4">
            <h5 style="" class="card-header"> <a style="color: #ccc" href="{{ route('move.vioationPage') }}">Vergi Ekle</a> / Vergi Detaylari</h5>
            <div class="card-body">
                <form method="POST" action="{{ route('move.vioationPage') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="mb-3">
                        <input type="hidden" name="car_id" value="{{ $id }}" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label for="defaultFormControlInput1" class="form-label">Vergi Tipi</label>
                        <input type="text" name="violation_type" value="{{ old('violation_type') }}" class="form-control"
                            id="defaultFormControlInput1" placeholder="" aria-describedby="defaultFormControlHelp">
                    </div>


                    <div class="mb-3">
                        <label for="defaultFormControlInput2" class="form-label">Masraf</label>
                        <input type="text" name="cost" value="{{ old('cost') }}" class="form-control"
                            id="defaultFormControlInput2" placeholder="" aria-describedby="defaultFormControlHelp">
                    </div>

                    <div class="mb-3">

                        <label class="form-label">Vergi fotoğraf</label>
                        <div class="input-group">
                            <input type="file" name="violation_photo" value="{{ old('violation_photo') }}"
                                class="form-control" id="inputGroupFile4">
                            <label class="input-group-text" for="inputGroupFile4">Upload</label>
                        </div>
                    </div>

                    <div class="mb-3" style="margin-top: 20px">
                        <button type="submit" class="btn btn-primary">Vergi Ekle</button>
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
            <h5 class="card-header">Vergiler</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center">Vergi Nedeni</th>
                            <th style="text-align: center">Masraf</th>
                            <th style="text-align: center">Vergi fotoğraf</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($vioations as $vioation)
                            <tr>
                                <td style="text-align: center"> <label for=""> {{ $vioation->violation_type }}
                                    </label>
                                </td>
                                <td style="text-align: center"> <label style="text-transform: capitalize" for="">
                                        {{ $vioation->cost }}
                                    </label>
                                </td>

                                <td style="text-align: center">
                                    <button type="button" class="btn " data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $vioation->id }}">
                                        <i style="font-size: 32px;" class='bx bx-image-alt'></i>
                                    </button>
                                </td>
                                <div class="modal fade " id="exampleModal{{ $vioation->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" style="display: flex; ">
                                        <div class="modal-content" style="width: 600px ; height: 600px;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Konum</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="../assets/{{ $vioation->violation_photo }}" width="450px"
                                                    height="450px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>


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

