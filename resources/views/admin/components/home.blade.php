@extends('admin.dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 style="text-transform: capitalize" class="card-title text-primary">Herhabalar {{ Auth::user()->name }} {{ Auth::user()->surname }}</h5>
                            <p class="mb-4">
                                Iyi Günler
                            </p>

                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body " >
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <i style="font-size: 26px  ; color:#70DC37" class='bx bxs-car btn p-0'></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Vergi Giderleri</span>
                            <h3 class="card-title mb-2">$12,628</h3>
                            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <i style="font-size: 26px  ; color:#02C2EC" class='bx bxs-car btn p-0'></i>
                                </div>
                            </div>
                            <span>Bakım Giderleri</span>
                            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                        <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                            <div id="apexcharts3limazvn" class="apexcharts-canvas apexcharts3limazvn apexcharts-theme-light"
                                style="width: 475px; height: 300px;"><svg id="SvgjsSvg2109" width="475" height="300"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="475" height="300">
                                        <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="2021"
                                                data:collapsed="false" style="margin: 2px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="1"
                                                    data:collapsed="false"
                                                    style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="2021" data:collapsed="false"
                                                    style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="2020"
                                                data:collapsed="false" style="margin: 2px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="2"
                                                    data:collapsed="false"
                                                    style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="2020" data:collapsed="false"
                                                    style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG2111" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(53.796875, 51)">
                                        <defs id="SvgjsDefs2110">
                                            <linearGradient id="SvgjsLinearGradient2115" x1="0" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop2116" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop2117" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop2118" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMask3limazvn">
                                                <rect id="SvgjsRect2120" width="411.203125" height="223.73" x="-5" y="-3"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask3limazvn"></clipPath>
                                            <clipPath id="nonForecastMask3limazvn"></clipPath>
                                            <clipPath id="gridRectMarkerMask3limazvn">
                                                <rect id="SvgjsRect2121" width="405.203125" height="221.73" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect2119" width="20.06015625" height="217.73" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke-dasharray="3" fill="url(#SvgjsLinearGradient2115)"
                                            class="apexcharts-xcrosshairs" y2="217.73" filter="none"
                                            fill-opacity="0.9"></rect>
                                        <g id="SvgjsG2141" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG2142" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText2144"
                                                    font-family="Helvetica, Arial, sans-serif" x="28.657366071428573"
                                                    y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2145">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText2147" font-family="Helvetica, Arial, sans-serif"
                                                    x="85.97209821428572" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2148">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText2150" font-family="Helvetica, Arial, sans-serif"
                                                    x="143.28683035714286" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2151">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText2153" font-family="Helvetica, Arial, sans-serif"
                                                    x="200.6015625" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2154">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText2156" font-family="Helvetica, Arial, sans-serif"
                                                    x="257.91629464285717" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2157">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText2159" font-family="Helvetica, Arial, sans-serif"
                                                    x="315.23102678571433" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2160">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText2162" font-family="Helvetica, Arial, sans-serif"
                                                    x="372.5457589285715" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2163">Jul</tspan>
                                                    <title>Jul</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG2178" class="apexcharts-grid">
                                            <g id="SvgjsG2179" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine2181" x1="0" y1="0" x2="401.203125"
                                                    y2="0" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2182" x1="0" y1="43.546" x2="401.203125"
                                                    y2="43.546" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2183" x1="0" y1="87.092" x2="401.203125"
                                                    y2="87.092" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2184" x1="0" y1="130.638" x2="401.203125"
                                                    y2="130.638" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2185" x1="0" y1="174.184" x2="401.203125"
                                                    y2="174.184" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2186" x1="0" y1="217.73" x2="401.203125"
                                                    y2="217.73" stroke="#eceef1" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2180" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine2188" x1="0" y1="217.73" x2="401.203125"
                                                y2="217.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2187" x1="0" y1="1" x2="0"
                                                y2="217.73" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG2122" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG2123" class="apexcharts-series" seriesName="2021"
                                                rel="1" data:realIndex="0">
                                                <path id="SvgjsPath2125"
                                                    d="M 18.627287946428574 120.638L 18.627287946428574 62.255200000000016Q 18.627287946428574 52.255200000000016 28.627287946428574 52.255200000000016L 22.687444196428572 52.255200000000016Q 32.68744419642857 52.255200000000016 32.68744419642857 62.255200000000016L 32.68744419642857 62.255200000000016L 32.68744419642857 120.638Q 32.68744419642857 130.638 22.687444196428572 130.638L 28.627287946428574 130.638Q 18.627287946428574 130.638 18.627287946428574 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 18.627287946428574 120.638L 18.627287946428574 62.255200000000016Q 18.627287946428574 52.255200000000016 28.627287946428574 52.255200000000016L 22.687444196428572 52.255200000000016Q 32.68744419642857 52.255200000000016 32.68744419642857 62.255200000000016L 32.68744419642857 62.255200000000016L 32.68744419642857 120.638Q 32.68744419642857 130.638 22.687444196428572 130.638L 28.627287946428574 130.638Q 18.627287946428574 130.638 18.627287946428574 120.638z"
                                                    pathFrom="M 18.627287946428574 120.638L 18.627287946428574 120.638L 32.68744419642857 120.638L 32.68744419642857 120.638L 32.68744419642857 120.638L 32.68744419642857 120.638L 32.68744419642857 120.638L 18.627287946428574 120.638"
                                                    cy="52.255200000000016" cx="72.94202008928572" j="0" val="18"
                                                    barHeight="78.38279999999999" barWidth="20.06015625"></path>
                                                <path id="SvgjsPath2126"
                                                    d="M 75.94202008928572 120.638L 75.94202008928572 110.15580000000001Q 75.94202008928572 100.15580000000001 85.94202008928572 100.15580000000001L 80.00217633928571 100.15580000000001Q 90.00217633928571 100.15580000000001 90.00217633928571 110.15580000000001L 90.00217633928571 110.15580000000001L 90.00217633928571 120.638Q 90.00217633928571 130.638 80.00217633928571 130.638L 85.94202008928572 130.638Q 75.94202008928572 130.638 75.94202008928572 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 75.94202008928572 120.638L 75.94202008928572 110.15580000000001Q 75.94202008928572 100.15580000000001 85.94202008928572 100.15580000000001L 80.00217633928571 100.15580000000001Q 90.00217633928571 100.15580000000001 90.00217633928571 110.15580000000001L 90.00217633928571 110.15580000000001L 90.00217633928571 120.638Q 90.00217633928571 130.638 80.00217633928571 130.638L 85.94202008928572 130.638Q 75.94202008928572 130.638 75.94202008928572 120.638z"
                                                    pathFrom="M 75.94202008928572 120.638L 75.94202008928572 120.638L 90.00217633928571 120.638L 90.00217633928571 120.638L 90.00217633928571 120.638L 90.00217633928571 120.638L 90.00217633928571 120.638L 75.94202008928572 120.638"
                                                    cy="100.15580000000001" cx="130.25675223214287" j="1" val="7"
                                                    barHeight="30.482199999999995" barWidth="20.06015625"></path>
                                                <path id="SvgjsPath2127"
                                                    d="M 133.25675223214287 120.638L 133.25675223214287 75.31900000000002Q 133.25675223214287 65.31900000000002 143.25675223214287 65.31900000000002L 137.31690848214288 65.31900000000002Q 147.31690848214288 65.31900000000002 147.31690848214288 75.31900000000002L 147.31690848214288 75.31900000000002L 147.31690848214288 120.638Q 147.31690848214288 130.638 137.31690848214288 130.638L 143.25675223214287 130.638Q 133.25675223214287 130.638 133.25675223214287 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 133.25675223214287 120.638L 133.25675223214287 75.31900000000002Q 133.25675223214287 65.31900000000002 143.25675223214287 65.31900000000002L 137.31690848214288 65.31900000000002Q 147.31690848214288 65.31900000000002 147.31690848214288 75.31900000000002L 147.31690848214288 75.31900000000002L 147.31690848214288 120.638Q 147.31690848214288 130.638 137.31690848214288 130.638L 143.25675223214287 130.638Q 133.25675223214287 130.638 133.25675223214287 120.638z"
                                                    pathFrom="M 133.25675223214287 120.638L 133.25675223214287 120.638L 147.31690848214288 120.638L 147.31690848214288 120.638L 147.31690848214288 120.638L 147.31690848214288 120.638L 147.31690848214288 120.638L 133.25675223214287 120.638"
                                                    cy="65.31900000000002" cx="187.571484375" j="2" val="15"
                                                    barHeight="65.31899999999999" barWidth="20.06015625"></path>
                                                <path id="SvgjsPath2128"
                                                    d="M 190.571484375 120.638L 190.571484375 14.35460000000002Q 190.571484375 4.354600000000019 200.571484375 4.354600000000019L 194.63164062500002 4.354600000000019Q 204.63164062500002 4.354600000000019 204.63164062500002 14.35460000000002L 204.63164062500002 14.35460000000002L 204.63164062500002 120.638Q 204.63164062500002 130.638 194.63164062500002 130.638L 200.571484375 130.638Q 190.571484375 130.638 190.571484375 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 190.571484375 120.638L 190.571484375 14.35460000000002Q 190.571484375 4.354600000000019 200.571484375 4.354600000000019L 194.63164062500002 4.354600000000019Q 204.63164062500002 4.354600000000019 204.63164062500002 14.35460000000002L 204.63164062500002 14.35460000000002L 204.63164062500002 120.638Q 204.63164062500002 130.638 194.63164062500002 130.638L 200.571484375 130.638Q 190.571484375 130.638 190.571484375 120.638z"
                                                    pathFrom="M 190.571484375 120.638L 190.571484375 120.638L 204.63164062500002 120.638L 204.63164062500002 120.638L 204.63164062500002 120.638L 204.63164062500002 120.638L 204.63164062500002 120.638L 190.571484375 120.638"
                                                    cy="4.354600000000019" cx="244.88621651785715" j="3" val="29"
                                                    barHeight="126.28339999999999" barWidth="20.06015625"></path>
                                                <path id="SvgjsPath2129"
                                                    d="M 247.88621651785715 120.638L 247.88621651785715 62.255200000000016Q 247.88621651785715 52.255200000000016 257.8862165178572 52.255200000000016L 251.94637276785716 52.255200000000016Q 261.94637276785716 52.255200000000016 261.94637276785716 62.255200000000016L 261.94637276785716 62.255200000000016L 261.94637276785716 120.638Q 261.94637276785716 130.638 251.94637276785716 130.638L 257.8862165178572 130.638Q 247.88621651785715 130.638 247.88621651785715 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 247.88621651785715 120.638L 247.88621651785715 62.255200000000016Q 247.88621651785715 52.255200000000016 257.8862165178572 52.255200000000016L 251.94637276785716 52.255200000000016Q 261.94637276785716 52.255200000000016 261.94637276785716 62.255200000000016L 261.94637276785716 62.255200000000016L 261.94637276785716 120.638Q 261.94637276785716 130.638 251.94637276785716 130.638L 257.8862165178572 130.638Q 247.88621651785715 130.638 247.88621651785715 120.638z"
                                                    pathFrom="M 247.88621651785715 120.638L 247.88621651785715 120.638L 261.94637276785716 120.638L 261.94637276785716 120.638L 261.94637276785716 120.638L 261.94637276785716 120.638L 261.94637276785716 120.638L 247.88621651785715 120.638"
                                                    cy="52.255200000000016" cx="302.2009486607143" j="4" val="18"
                                                    barHeight="78.38279999999999" barWidth="20.06015625"></path>
                                                <path id="SvgjsPath2130"
                                                    d="M 305.2009486607143 120.638L 305.2009486607143 88.3828Q 305.2009486607143 78.3828 315.2009486607143 78.3828L 309.26110491071427 78.3828Q 319.26110491071427 78.3828 319.26110491071427 88.3828L 319.26110491071427 88.3828L 319.26110491071427 120.638Q 319.26110491071427 130.638 309.26110491071427 130.638L 315.2009486607143 130.638Q 305.2009486607143 130.638 305.2009486607143 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 305.2009486607143 120.638L 305.2009486607143 88.3828Q 305.2009486607143 78.3828 315.2009486607143 78.3828L 309.26110491071427 78.3828Q 319.26110491071427 78.3828 319.26110491071427 88.3828L 319.26110491071427 88.3828L 319.26110491071427 120.638Q 319.26110491071427 130.638 309.26110491071427 130.638L 315.2009486607143 130.638Q 305.2009486607143 130.638 305.2009486607143 120.638z"
                                                    pathFrom="M 305.2009486607143 120.638L 305.2009486607143 120.638L 319.26110491071427 120.638L 319.26110491071427 120.638L 319.26110491071427 120.638L 319.26110491071427 120.638L 319.26110491071427 120.638L 305.2009486607143 120.638"
                                                    cy="78.3828" cx="359.51568080357146" j="5" val="12"
                                                    barHeight="52.255199999999995" barWidth="20.06015625"></path>
                                                <path id="SvgjsPath2131"
                                                    d="M 362.51568080357146 120.638L 362.51568080357146 101.44660000000002Q 362.51568080357146 91.44660000000002 372.51568080357146 91.44660000000002L 366.57583705357143 91.44660000000002Q 376.57583705357143 91.44660000000002 376.57583705357143 101.44660000000002L 376.57583705357143 101.44660000000002L 376.57583705357143 120.638Q 376.57583705357143 130.638 366.57583705357143 130.638L 372.51568080357146 130.638Q 362.51568080357146 130.638 362.51568080357146 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 362.51568080357146 120.638L 362.51568080357146 101.44660000000002Q 362.51568080357146 91.44660000000002 372.51568080357146 91.44660000000002L 366.57583705357143 91.44660000000002Q 376.57583705357143 91.44660000000002 376.57583705357143 101.44660000000002L 376.57583705357143 101.44660000000002L 376.57583705357143 120.638Q 376.57583705357143 130.638 366.57583705357143 130.638L 372.51568080357146 130.638Q 362.51568080357146 130.638 362.51568080357146 120.638z"
                                                    pathFrom="M 362.51568080357146 120.638L 362.51568080357146 120.638L 376.57583705357143 120.638L 376.57583705357143 120.638L 376.57583705357143 120.638L 376.57583705357143 120.638L 376.57583705357143 120.638L 362.51568080357146 120.638"
                                                    cy="91.44660000000002" cx="416.8304129464286" j="6" val="9"
                                                    barHeight="39.191399999999994" barWidth="20.06015625"></path>
                                            </g>
                                            <g id="SvgjsG2132" class="apexcharts-series" seriesName="2020"
                                                rel="2" data:realIndex="1">
                                                <path id="SvgjsPath2134"
                                                    d="M 18.627287946428574 150.638L 18.627287946428574 187.24779999999998Q 18.627287946428574 197.24779999999998 28.627287946428574 197.24779999999998L 22.687444196428572 197.24779999999998Q 32.68744419642857 197.24779999999998 32.68744419642857 187.24779999999998L 32.68744419642857 187.24779999999998L 32.68744419642857 150.638Q 32.68744419642857 140.638 22.687444196428572 140.638L 28.627287946428574 140.638Q 18.627287946428574 140.638 18.627287946428574 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 18.627287946428574 150.638L 18.627287946428574 187.24779999999998Q 18.627287946428574 197.24779999999998 28.627287946428574 197.24779999999998L 22.687444196428572 197.24779999999998Q 32.68744419642857 197.24779999999998 32.68744419642857 187.24779999999998L 32.68744419642857 187.24779999999998L 32.68744419642857 150.638Q 32.68744419642857 140.638 22.687444196428572 140.638L 28.627287946428574 140.638Q 18.627287946428574 140.638 18.627287946428574 150.638z"
                                                    pathFrom="M 18.627287946428574 150.638L 18.627287946428574 150.638L 32.68744419642857 150.638L 32.68744419642857 150.638L 32.68744419642857 150.638L 32.68744419642857 150.638L 32.68744419642857 150.638L 18.627287946428574 150.638"
                                                    cy="177.24779999999998" cx="72.94202008928572" j="0" val="-13"
                                                    barHeight="-56.60979999999999" barWidth="20.06015625"></path>
                                                <path id="SvgjsPath2135"
                                                    d="M 75.94202008928572 150.638L 75.94202008928572 209.0208Q 75.94202008928572 219.0208 85.94202008928572 219.0208L 80.00217633928571 219.0208Q 90.00217633928571 219.0208 90.00217633928571 209.0208L 90.00217633928571 209.0208L 90.00217633928571 150.638Q 90.00217633928571 140.638 80.00217633928571 140.638L 85.94202008928572 140.638Q 75.94202008928572 140.638 75.94202008928572 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 75.94202008928572 150.638L 75.94202008928572 209.0208Q 75.94202008928572 219.0208 85.94202008928572 219.0208L 80.00217633928571 219.0208Q 90.00217633928571 219.0208 90.00217633928571 209.0208L 90.00217633928571 209.0208L 90.00217633928571 150.638Q 90.00217633928571 140.638 80.00217633928571 140.638L 85.94202008928572 140.638Q 75.94202008928572 140.638 75.94202008928572 150.638z"
                                                    pathFrom="M 75.94202008928572 150.638L 75.94202008928572 150.638L 90.00217633928571 150.638L 90.00217633928571 150.638L 90.00217633928571 150.638L 90.00217633928571 150.638L 90.00217633928571 150.638L 75.94202008928572 150.638"
                                                    cy="199.0208" cx="130.25675223214287" j="1" val="-18"
                                                    barHeight="-78.38279999999999" barWidth="20.06015625"></path>
                                                <path id="SvgjsPath2136"
                                                    d="M 133.25675223214287 150.638L 133.25675223214287 169.8294Q 133.25675223214287 179.8294 143.25675223214287 179.8294L 137.31690848214288 179.8294Q 147.31690848214288 179.8294 147.31690848214288 169.8294L 147.31690848214288 169.8294L 147.31690848214288 150.638Q 147.31690848214288 140.638 137.31690848214288 140.638L 143.25675223214287 140.638Q 133.25675223214287 140.638 133.25675223214287 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 133.25675223214287 150.638L 133.25675223214287 169.8294Q 133.25675223214287 179.8294 143.25675223214287 179.8294L 137.31690848214288 179.8294Q 147.31690848214288 179.8294 147.31690848214288 169.8294L 147.31690848214288 169.8294L 147.31690848214288 150.638Q 147.31690848214288 140.638 137.31690848214288 140.638L 143.25675223214287 140.638Q 133.25675223214287 140.638 133.25675223214287 150.638z"
                                                    pathFrom="M 133.25675223214287 150.638L 133.25675223214287 150.638L 147.31690848214288 150.638L 147.31690848214288 150.638L 147.31690848214288 150.638L 147.31690848214288 150.638L 147.31690848214288 150.638L 133.25675223214287 150.638"
                                                    cy="159.8294" cx="187.571484375" j="2" val="-9"
                                                    barHeight="-39.191399999999994" barWidth="20.06015625"></path>
                                                <path id="SvgjsPath2137"
                                                    d="M 190.571484375 150.638L 190.571484375 191.6024Q 190.571484375 201.6024 200.571484375 201.6024L 194.63164062500002 201.6024Q 204.63164062500002 201.6024 204.63164062500002 191.6024L 204.63164062500002 191.6024L 204.63164062500002 150.638Q 204.63164062500002 140.638 194.63164062500002 140.638L 200.571484375 140.638Q 190.571484375 140.638 190.571484375 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 190.571484375 150.638L 190.571484375 191.6024Q 190.571484375 201.6024 200.571484375 201.6024L 194.63164062500002 201.6024Q 204.63164062500002 201.6024 204.63164062500002 191.6024L 204.63164062500002 191.6024L 204.63164062500002 150.638Q 204.63164062500002 140.638 194.63164062500002 140.638L 200.571484375 140.638Q 190.571484375 140.638 190.571484375 150.638z"
                                                    pathFrom="M 190.571484375 150.638L 190.571484375 150.638L 204.63164062500002 150.638L 204.63164062500002 150.638L 204.63164062500002 150.638L 204.63164062500002 150.638L 204.63164062500002 150.638L 190.571484375 150.638"
                                                    cy="181.6024" cx="244.88621651785715" j="3" val="-14"
                                                    barHeight="-60.96439999999999" barWidth="20.06015625"></path>
                                                <path id="SvgjsPath2138"
                                                    d="M 247.88621651785715 150.638L 247.88621651785715 152.411Q 247.88621651785715 162.411 257.8862165178572 162.411L 251.94637276785716 162.411Q 261.94637276785716 162.411 261.94637276785716 152.411L 261.94637276785716 152.411L 261.94637276785716 150.638Q 261.94637276785716 140.638 251.94637276785716 140.638L 257.8862165178572 140.638Q 247.88621651785715 140.638 247.88621651785715 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 247.88621651785715 150.638L 247.88621651785715 152.411Q 247.88621651785715 162.411 257.8862165178572 162.411L 251.94637276785716 162.411Q 261.94637276785716 162.411 261.94637276785716 152.411L 261.94637276785716 152.411L 261.94637276785716 150.638Q 261.94637276785716 140.638 251.94637276785716 140.638L 257.8862165178572 140.638Q 247.88621651785715 140.638 247.88621651785715 150.638z"
                                                    pathFrom="M 247.88621651785715 150.638L 247.88621651785715 150.638L 261.94637276785716 150.638L 261.94637276785716 150.638L 261.94637276785716 150.638L 261.94637276785716 150.638L 261.94637276785716 150.638L 247.88621651785715 150.638"
                                                    cy="142.411" cx="302.2009486607143" j="4" val="-5"
                                                    barHeight="-21.772999999999996" barWidth="20.06015625"></path>
                                                <path id="SvgjsPath2139"
                                                    d="M 305.2009486607143 150.638L 305.2009486607143 204.6662Q 305.2009486607143 214.6662 315.2009486607143 214.6662L 309.26110491071427 214.6662Q 319.26110491071427 214.6662 319.26110491071427 204.6662L 319.26110491071427 204.6662L 319.26110491071427 150.638Q 319.26110491071427 140.638 309.26110491071427 140.638L 315.2009486607143 140.638Q 305.2009486607143 140.638 305.2009486607143 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 305.2009486607143 150.638L 305.2009486607143 204.6662Q 305.2009486607143 214.6662 315.2009486607143 214.6662L 309.26110491071427 214.6662Q 319.26110491071427 214.6662 319.26110491071427 204.6662L 319.26110491071427 204.6662L 319.26110491071427 150.638Q 319.26110491071427 140.638 309.26110491071427 140.638L 315.2009486607143 140.638Q 305.2009486607143 140.638 305.2009486607143 150.638z"
                                                    pathFrom="M 305.2009486607143 150.638L 305.2009486607143 150.638L 319.26110491071427 150.638L 319.26110491071427 150.638L 319.26110491071427 150.638L 319.26110491071427 150.638L 319.26110491071427 150.638L 305.2009486607143 150.638"
                                                    cy="194.6662" cx="359.51568080357146" j="5" val="-17"
                                                    barHeight="-74.0282" barWidth="20.06015625"></path>
                                                <path id="SvgjsPath2140"
                                                    d="M 362.51568080357146 150.638L 362.51568080357146 195.957Q 362.51568080357146 205.957 372.51568080357146 205.957L 366.57583705357143 205.957Q 376.57583705357143 205.957 376.57583705357143 195.957L 376.57583705357143 195.957L 376.57583705357143 150.638Q 376.57583705357143 140.638 366.57583705357143 140.638L 372.51568080357146 140.638Q 362.51568080357146 140.638 362.51568080357146 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMask3limazvn)"
                                                    pathTo="M 362.51568080357146 150.638L 362.51568080357146 195.957Q 362.51568080357146 205.957 372.51568080357146 205.957L 366.57583705357143 205.957Q 376.57583705357143 205.957 376.57583705357143 195.957L 376.57583705357143 195.957L 376.57583705357143 150.638Q 376.57583705357143 140.638 366.57583705357143 140.638L 372.51568080357146 140.638Q 362.51568080357146 140.638 362.51568080357146 150.638z"
                                                    pathFrom="M 362.51568080357146 150.638L 362.51568080357146 150.638L 376.57583705357143 150.638L 376.57583705357143 150.638L 376.57583705357143 150.638L 376.57583705357143 150.638L 376.57583705357143 150.638L 362.51568080357146 150.638"
                                                    cy="185.957" cx="416.8304129464286" j="6" val="-15"
                                                    barHeight="-65.31899999999999" barWidth="20.06015625"></path>
                                            </g>
                                            <g id="SvgjsG2124" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG2133" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine2189" x1="0" y1="0" x2="401.203125"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2190" x1="0" y1="0" x2="401.203125"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG2191" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG2192" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG2193" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG2164" class="apexcharts-yaxis" rel="0"
                                        transform="translate(15.796875, 0)">
                                        <g id="SvgjsG2165" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2166"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="52.5"
                                                text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2167">30</tspan>
                                                <title>30</title>
                                            </text><text id="SvgjsText2168" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="96.04599999999999" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2169">20</tspan>
                                                <title>20</title>
                                            </text><text id="SvgjsText2170" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="139.59199999999998" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2171">10</tspan>
                                                <title>10</title>
                                            </text><text id="SvgjsText2172" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="183.13799999999998" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2173">0</tspan>
                                                <title>0</title>
                                            </text><text id="SvgjsText2174" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="226.68399999999997" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2175">-10</tspan>
                                                <title>-10</title>
                                            </text><text id="SvgjsText2176" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="270.22999999999996" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2177">-20</tspan>
                                                <title>-20</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG2112" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(105, 108, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(3, 195, 236);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 492px; height: 377px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                        id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        2022
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                        <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="growthChart" style="min-height: 154.875px;">
                            <div id="apexcharts63ky5y77"
                                class="apexcharts-canvas apexcharts63ky5y77 apexcharts-theme-light"
                                style="width: 246px; height: 154.875px;"><svg id="SvgjsSvg2194" width="246"
                                    height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG2196" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(16, -25)">
                                        <defs id="SvgjsDefs2195">
                                            <clipPath id="gridRectMask63ky5y77">
                                                <rect id="SvgjsRect2198" width="222" height="285" x="-3" y="-1"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask63ky5y77"></clipPath>
                                            <clipPath id="nonForecastMask63ky5y77"></clipPath>
                                            <clipPath id="gridRectMarkerMask63ky5y77">
                                                <rect id="SvgjsRect2199" width="220" height="287" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient2204" x1="1" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop2205" stop-opacity="1"
                                                    stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop2206" stop-opacity="0.6"
                                                    stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop2207" stop-opacity="0.6"
                                                    stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient2215" x1="1" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop2216" stop-opacity="1"
                                                    stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop2217" stop-opacity="0.6"
                                                    stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop2218" stop-opacity="0.6"
                                                    stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="SvgjsG2200" class="apexcharts-radialbar">
                                            <g id="SvgjsG2201">
                                                <g id="SvgjsG2202" class="apexcharts-tracks">
                                                    <g id="SvgjsG2203" class="apexcharts-radialbar-track apexcharts-track"
                                                        rel="1">
                                                        <path id="apexcharts-radialbarTrack-0"
                                                            d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                                            fill="none" fill-opacity="1"
                                                            stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="17.357317073170734"
                                                            stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                            data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2209">
                                                    <g id="SvgjsG2214" class="apexcharts-series apexcharts-radial-series"
                                                        seriesName="Growth" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2219"
                                                            d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                                            fill="none" fill-opacity="0.85"
                                                            stroke="url(#SvgjsLinearGradient2215)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="17.357317073170734"
                                                            stroke-dasharray="5"
                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                            data:angle="234" data:value="78" index="0" j="0"
                                                            data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481">
                                                        </path>
                                                    </g>
                                                    <circle id="SvgjsCircle2210" r="54.65121951219512" cx="108"
                                                        cy="108" class="apexcharts-radialbar-hollow"
                                                        fill="transparent"></circle>
                                                    <g id="SvgjsG2211" class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                            id="SvgjsText2212" font-family="Public Sans" x="108" y="123"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="15px" font-weight="500" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-label"
                                                            style="font-family: &quot;Public Sans&quot;;">Growth</text><text
                                                            id="SvgjsText2213" font-family="Public Sans" x="108" y="99"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="22px" font-weight="500" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-value"
                                                            style="font-family: &quot;Public Sans&quot;;">78%</text></g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine2220" x1="0" y1="0" x2="216"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2221" x1="0" y1="0" x2="216"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG2197" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                            </div>
                        </div>
                        <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-primary p-2"><i
                                            class="bx bx-dollar text-primary"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2022</small>
                                    <h6 class="mb-0">$32.5k</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2021</small>
                                    <h6 class="mb-0">$41.2k</h6>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 247px; height: 377px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded">
                                </div>
                                <div class="dropdown">
                                    <i style="font-size: 26px  ; color:#FF3E1C" class='bx bxs-car btn p-0'></i>
                                </div>
                            </div>
                            <span class="d-block mb-1">Sürücü Giderleri</span>
                            <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <i style="font-size: 26px  ; color:#686BFF" class='bx bxs-car btn p-0'></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Kiralama Girdileri</span>
                            <h3 class="card-title mb-2">$14,857</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                        </div>
                    </div>
                </div>
                <!-- </div>
        <div class="row"> -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                                style="position: relative;">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Profile Report</h5>
                                        <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <small class="text-success text-nowrap fw-semibold"><i
                                                class="bx bx-chevron-up"></i> 68.2%</small>
                                        <h3 class="mb-0">$84,686k</h3>
                                    </div>
                                </div>
                                <div id="profileReportChart" style="min-height: 80px;">
                                    <div id="apexchartskh90m1mu"
                                        class="apexcharts-canvas apexchartskh90m1mu apexcharts-theme-light"
                                        style="width: 170px; height: 80px;"><svg id="SvgjsSvg1940" width="170"
                                            height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1942" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1941">
                                                    <clipPath id="gridRectMaskkh90m1mu">
                                                        <rect id="SvgjsRect1947" width="171" height="85"
                                                            x="-4.5" y="-2.5" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskkh90m1mu"></clipPath>
                                                    <clipPath id="nonForecastMaskkh90m1mu"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskkh90m1mu">
                                                        <rect id="SvgjsRect1948" width="166" height="84" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter1954" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood1955" flood-color="#ffab00"
                                                            flood-opacity="0.15" result="SvgjsFeFlood1955Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite1956" in="SvgjsFeFlood1955Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite1956Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset1957" dx="5" dy="10"
                                                            result="SvgjsFeOffset1957Out" in="SvgjsFeComposite1956Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur1958" stdDeviation="3 "
                                                            result="SvgjsFeGaussianBlur1958Out"
                                                            in="SvgjsFeOffset1957Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge1959" result="SvgjsFeMerge1959Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode1960"
                                                                in="SvgjsFeGaussianBlur1958Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode1961"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend1962" in="SourceGraphic"
                                                            in2="SvgjsFeMerge1959Out" mode="normal"
                                                            result="SvgjsFeBlend1962Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine1946" x1="0" y1="0"
                                                    x2="0" y2="80" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                    height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                    stroke-width="1"></line>
                                                <g id="SvgjsG1963" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1964" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1972" class="apexcharts-grid">
                                                    <g id="SvgjsG1973" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1975" x1="0" y1="0"
                                                            x2="162" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1976" x1="0" y1="20"
                                                            x2="162" y2="20" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1977" x1="0" y1="40"
                                                            x2="162" y2="40" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1978" x1="0" y1="60"
                                                            x2="162" y2="60" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1979" x1="0" y1="80"
                                                            x2="162" y2="80" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1974" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1981" x1="0" y1="80"
                                                        x2="162" y2="80" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1980" x1="0" y1="1"
                                                        x2="0" y2="80" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1949"
                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG1950" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1953"
                                                            d="M 0 76C 11.339999999999998 76 21.060000000000002 12 32.4 12C 43.739999999999995 12 53.46 62 64.8 62C 76.14 62 85.86 22 97.2 22C 108.53999999999999 22 118.25999999999999 38 129.6 38C 140.94 38 150.66 6 162 6"
                                                            fill="none" fill-opacity="1"
                                                            stroke="rgba(255,171,0,0.85)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="5"
                                                            stroke-dasharray="0" class="apexcharts-line"
                                                            index="0" clip-path="url(#gridRectMaskkh90m1mu)"
                                                            filter="url(#SvgjsFilter1954)"
                                                            pathTo="M 0 76C 11.339999999999998 76 21.060000000000002 12 32.4 12C 43.739999999999995 12 53.46 62 64.8 62C 76.14 62 85.86 22 97.2 22C 108.53999999999999 22 118.25999999999999 38 129.6 38C 140.94 38 150.66 6 162 6"
                                                            pathFrom="M -1 120L -1 120L 32.4 120L 64.8 120L 97.2 120L 129.6 120L 162 120">
                                                        </path>
                                                        <g id="SvgjsG1951" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1987" r="0" cx="0"
                                                                    cy="0"
                                                                    class="apexcharts-marker whg2raz9w no-pointer-events"
                                                                    stroke="#ffffff" fill="#ffab00" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1952" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1982" x1="0" y1="0"
                                                    x2="162" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1983" x1="0" y1="0"
                                                    x2="162" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1984" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1985" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1986" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect1945" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                            <g id="SvgjsG1971" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1943" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 171, 0);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 308px; height: 117px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <hr class="my-5">
    </hr>


    <div class="col-md-12 ">

        <div class=" mb-4">
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
                            <th style="text-align: center">depozito</th>
                            <th style="text-align: center">Durum</th>
                            <th style="text-align: center">Durumu Değiştir</th>


                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($cars as $car)
                            @for ($i = 0; $i < count($car); $i++)
                                <tr>
                                    <td style="text-align: center">
                                        <img width="120px" height="80px" src="../assets/{{ $car[$i]->photo }}"
                                            alt="Avatar" class="rounded-circle">
                                    </td>
                                    <td style="text-align: center">{{ $car[$i]->brand }}</td>
                                    <td style="text-align: center">{{ $car[$i]->model }}</td>
                                    <td style="text-align: center">{{ $car[$i]->year }}</td>
                                    <td style="text-align: center">{{ $car[$i]->Car_Type }} </td>
                                    <td style="text-align: center">{{ $car[$i]->car_price }} TL
                                    </td>

                                    <td style="text-align: center">{{ $car[$i]->depozito }} TL</td>

                                    @if ($car[$i]->status == 1)
                                        <td style="text-align: center">
                                            <i class='bx bxs-car' style=" font-size: 32px; color: #68798C"></i>
                                        </td>
                                    @else
                                        <td style="text-align: center">
                                            <i class='bx bxs-car-mechanic' style="font-size: 32px; color: #68798C"></i>
                                        </td>
                                    @endif

                                    @if ($car[$i]->status == 0)
                                    <td style="text-align: center">
                                        <a href="{{ route('edit.removeCarAdminEdit' , $car[$i]->id) }}">

                                        <i style="font-size: 32px; color: #70DC37" class='bx bx-refresh'></i>
                                        </a>
                                    </td>
                                @else
                                    <td style="text-align: center">
                                        <a href="{{ route('edit.AddCarAdminEdit', $car[$i]->id) }}">

                                            <i style="font-size: 32px; color: red" class='bx bx-refresh'></i>
                                        </a>

                                    </td>
                                @endif


                                </tr>
                            @endfor
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>






@stop

@section('js')

    <script src="../assets/vendor/js/bootstrap.js"></script>

@stop

