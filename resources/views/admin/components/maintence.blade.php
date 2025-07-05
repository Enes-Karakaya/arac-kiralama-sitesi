@extends('admin.dashboard')
@section('content')



    <div class="col-xl-12">
        <div class="nav-align-top mb-4">

            <h5>Bakım</h5>
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

                                                    @if ($driver[$i]->status == 1)
                                                        <td style="text-align: center">
                                                            <a href="{{ route('move.maintenceEditPage', $driver[$i]->id) }}"
                                                                type="submit" style="background: transparent; border:none">
                                                                <i class='bx bx-add-to-queue'
                                                                    style=" font-size: 32px;  color: #68798C"></i>
                                                            </a>
                                                        </td>
                                                    @else
                                                        <td style="text-align: center">
                                                            <a href="{{ route('move.maintenceEditPage', $driver[$i]->id) }}"
                                                                type="submit" style="background: transparent; border:none">
                                                                <i class='bx bx-refresh'
                                                                    style="font-size: 32px; color: #68798C"></i>
                                                            </a>
                                                        </td>
                                                    @endif



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
