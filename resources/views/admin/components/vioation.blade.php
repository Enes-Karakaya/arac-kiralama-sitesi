@extends('admin.dashboard')
@section('content')


<div class="col-xl-12">
    <div class="nav-align-top mb-4">
        <h5>Vergiler</h5>

        <ul class="nav nav-pills mb-3 nav-fill" role="tablist">

            @foreach ($cars as $car)
                <li class="nav-item">
                    <button type="button" style="text-transform: capitalize" class="nav-link " role="tab"
                        data-bs-toggle="tab" data-bs-target="#navs-pills-{{ $car['pointId'] }}"
                        aria-controls="navs-pills-justified-home" aria-selected="true">
                        <i style="" class="tf-icons bx bx-user"></i> {{ $car['pointName'] }}
                    </button>
                </li>
            @endforeach

        </ul>


        <div class="tab-content">

            @foreach ($cars as $car)
                <div class="tab-pane fade" id="navs-pills-{{ $car['pointId'] }}" role="tabpanel">

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



                                        @for ($i = 0; $i < count($car) - 2; $i++)
                                            <tr>
                                                <td style="text-align: center">
                                                    <img width="120px" height="80px"
                                                        src="../assets/{{ $car[$i]->photo }}"
                                                        alt="Avatar" class="rounded-circle">

                                                </td>
                                                <td style="text-align: center">{{ $car[$i]->brand }}</td>
                                                <td style="text-align: center">{{ $car[$i]->model }}</td>
                                                <td style="text-align: center">{{ $car[$i]->year }}</td>
                                                <td style="text-align: center">{{ $car[$i]->Car_Type }} </td>
                                                <td style="text-align: center">{{ $car[$i]->car_price }} TL
                                                </td>

                                                <td style="text-align: center">
                                                    <a href="{{ route('move.vioationEditPage' , $car[$i]->id) }}" type="submit" style="background: transparent; border:none">
                                                        <i class='bx bx-add-to-queue' style="font-size: 32px; color: #68798C"></i>
                                                    </a>
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
