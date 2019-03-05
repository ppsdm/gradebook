<html>
    <head>
        <title>Report</title>
        <link rel="stylesheet" type="text/css" href="<?php echo url('assets/style-custom.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo url('assets/table-style.css') ?>">
        <script src="<?php echo url('assets/d3.min.js') ?>"></script>
        <script src="<?php echo url('assets/radarChart.js') ?>"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="A4 landscape">
            <section class="sheet padding-15mm">
                <div class="grid-container">
                    <div class="output-one">
                        <table class="biodata">
                            <tr>
                                <td class="column-biodata-title">NOMOR</td>
                            <td colspan="7" class="column-biodata-value">{{  $reportReguler['form']['answers']['nomor_test'] }}</td>
                            </tr>
                            <tr>
                                <td class="column-biodata-title">NAMA PERUSAHAAN</td>
                                <td colspan="7" class="column-biodata-value">{{ $reportReguler['form']['answers']['nama_perusahaan']  }}</td>
                            </tr>
                            <tr>
                                <td class="column-biodata-title">NAMA</td>
                                <td colspan="7" class="column-biodata-value">{{ $userProfile['firstname'] . ' ' . $userProfile['lastname'] }}</td>
                            </tr>
                            <tr>
                                <td class="column-biodata-title">JENIS KELAMIN</td>
                                <td colspan="7"class="column-biodata-value">{{ $userProfile['extra_fields']['gender']['value'] }}</td>
                            </tr>
                            <tr>
                                <td class="column-biodata-title">USIA</td>
                                <td colspan="7" class="column-biodata-value">{{ \Carbon\Carbon::parse($userProfile['extra_fields']['birthday']['value'])->age }}</td>
                            </tr>
                            <tr>
                                <td class="column-biodata-title">PENDIDIKAN</td>
                                <td colspan="7" class="column-biodata-value">{{$userProfile['extra_fields']['jenjang_1']['value']}} </td>
                            </tr>
                            <tr>
                                <td class="column-biodata-title">TANGGAL TEST</td>
                                <td colspan="7" class="column-biodata-value">{{explode('T',$reportReguler['datestamp'])[0] }} </td>
                            </tr>
                            <tr>
                                <td class="column-biodata-title">TUJUAN TEST</td>
                                <td colspan="7" class="column-biodata-value">Seleksi</td>
                            </tr>
                            <tr>
                                <td class="column-biodata-title">TINGKAT JABATAN</td>
                                <td colspan="7" class="column-biodata-value">Staff</td>
                            </tr>
                            <tr class="section-table">
                                <td class="column-biodata-title">KODE BUKU</td>
                                <td colspan="7" class="column-biodata-value">01</td>
                            </tr>
                            <tr class="column-point column-biodata-value section-table">
                                <td class="column-biodata-value border-left-none"></td>
                                <td style="width:10px; ">1</td>
                                <td style="width:10px; ">2</td>
                                <td style="width:10px; ">3</td>
                                <td style="width:10px; ">4</td>
                                <td style="width:10px; ">5</td>
                                <td style="width:10px; ">6</td>
                                <td style="width:10px; ">7</td>
                            </tr>

                            <tr class="column-point">
                                <td class="column-title-point">Kematangan Sosial</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $kematangan_sosial = $reportReguler['output']['kematangan_sosial']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $kematangan_sosial)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Stabilitas Emosi</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $se = $reportReguler['output']['stabilitas_emosi']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $se)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Penyesuaian Diri</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $pd = $reportReguler['output']['penyesuaian_diri']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $pd)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Pengendalian Diri</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $pengendalian_diri = $reportReguler['output']['pengendalian_diri']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $pengendalian_diri)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Kepercayaan Diri</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $kd = $reportReguler['output']['kepercayaan_diri']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $kd)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Konsep Diri</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $konsep_diri = $reportReguler['output']['konsep_diri']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $konsep_diri)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Kerjasama</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $kerjasama = $reportReguler['output']['kerjasama']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $kerjasama)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Sistematika Kerja</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $sk = $reportReguler['output']['sistematika_kerja']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $sk)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Fleksibilitas Kerja</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $fk = $reportReguler['output']['fleksibilitas_kerja']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $fk)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Daya TahanKerja Rutin</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $dtkr = $reportReguler['output']['daya_tahan_kerja_rutin']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $dtkr)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Daya Tahan Dalam Stress</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $dtds = $reportReguler['output']['daya_tahan_dalam_stress']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $dtds)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Motivasi Berprestasi</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $motivasi = $reportReguler['output']['motivasi_berprestasi']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $motivasi)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Orientasi Pelayanan</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $pelayanan = $reportReguler['output']['orientasi_pelayanan']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $pelayanan)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Komitmen Kerja</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $komitmen = $reportReguler['output']['komitmen_kerja']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $komitmen)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point ection-table">
                                <td class="column-title-point">Inisiatif</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $inisiatif = $reportReguler['output']['inisiatif']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $inisiatif)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                        </table>
                    </div>

                    <div class="output-two">
                        <table class="index-value">
                            <tr>
                                <td>G</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['g'] }}</td>
                            </tr>
                            <tr>
                                <td>A</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['a'] }}</td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['l'] }}</td>
                            </tr>
                            <tr>
                                <td>P</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['p'] }}</td>
                            </tr>
                            <tr>
                                <td>I</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['i'] }}</td>
                            </tr>
                            <tr>
                                <td>T</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['t'] }}</td>
                            </tr>
                            <tr>
                                <td>V</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['v'] }}</td>
                            </tr>
                            <tr>
                                <td>X</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['x'] }}</td>
                            </tr>
                            <tr>
                                <td>S</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['s'] }}</td>
                            </tr>
                            <tr>
                                <td>B</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['b'] }}</td>
                            </tr>
                            <tr>
                                <td>O</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['o'] }}</td>
                            </tr>
                            <tr>
                                <td>R</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['r'] }}</td>
                            </tr>
                            <tr>
                                <td>D</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['d'] }}</td>
                            </tr>
                            <tr>
                                <td>C</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['c'] }}</td>
                            </tr>
                            <tr>
                                <td>Z</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['z'] }}</td>
                            </tr>
                            <tr>
                                <td>E</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['e'] }}</td>
                            </tr>
                            <tr>
                                <td>K</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['k'] }}</td>
                            </tr>
                            <tr>
                                <td>F</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['f'] }}</td>
                            </tr>
                            <tr>
                                <td>W</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['w'] }}</td>
                            </tr>
                            <tr>
                                <td>N</td>
                                <td>{{ $reportReguler['papi']['scores']['raw']['n'] }}</td>
                            </tr>
                            <tr>
                                @php
                                    $total = $reportReguler['papi']['scores']['raw']['g'] + $reportReguler['papi']['scores']['raw']['a'] +
                                            $reportReguler['papi']['scores']['raw']['l'] + $reportReguler['papi']['scores']['raw']['p'] +
                                            $reportReguler['papi']['scores']['raw']['i'] + $reportReguler['papi']['scores']['raw']['t'] +
                                            $reportReguler['papi']['scores']['raw']['v'] + $reportReguler['papi']['scores']['raw']['x'] +
                                            $reportReguler['papi']['scores']['raw']['s'] + $reportReguler['papi']['scores']['raw']['b'] +
                                            $reportReguler['papi']['scores']['raw']['o'] + $reportReguler['papi']['scores']['raw']['r'] +
                                            $reportReguler['papi']['scores']['raw']['d'] + $reportReguler['papi']['scores']['raw']['c'] +
                                            $reportReguler['papi']['scores']['raw']['z'] + $reportReguler['papi']['scores']['raw']['e'] +
                                            $reportReguler['papi']['scores']['raw']['k'] + $reportReguler['papi']['scores']['raw']['f'] +
                                            $reportReguler['papi']['scores']['raw']['w'] + $reportReguler['papi']['scores']['raw']['n'];
                                @endphp
                                <td></td>
                                <td>{{ $total }}</td>
                            </tr>
                        </table>
                    </div>
                    


                    <div class="output-four">
                        <div class="radarChart" style="background-image: url('<?php echo url('assets/img/KOSTICK.png') ?>'); background-position: center; background-repeat: no-repeat;background-size: 450px 450px; height: 450px; width: 550px; "></div>
                        <script>

                            /* Radar chart design created by Nadieh Bremer - VisualCinnamon.com */
             
                            //////////////////////////////////////////////////////////////
                            //////////////////////// Set-Up //////////////////////////////
                            //////////////////////////////////////////////////////////////
             
                            var margin = {top: 90, right: 0, bottom: 400, left: 139};
                            var browserZoomLevel = Math.round(window.devicePixelRatio);
                            //alert(browserZoomLevel);
                                //width = Math.min(500, window.innerWidth - 10) - margin.left - margin.right,
                                //height = Math.min(width, window.innerHeight - margin.top - margin.bottom - 15);
                                width = window.innerWidth * browserZoomLevel/10;
                                width =270;
                                //alert(window.innerWidth)
                                height = window.innerHeight * browserZoomLevel/10;
                                height = 270;
             

                               


                            //////////////////////////////////////////////////////////////
                            ////////////////////////// Data //////////////////////////////
                            //////////////////////////////////////////////////////////////
                            var data = [
                                [
                                <?php
                                    $papiK = ($reportReguler['papi']['scores']['raw']['k'] - 9 );
                                    $papiZ = $reportReguler['papi']['scores']['raw']['z'] - 9;
                                    $offset = 1;
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['g']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['a']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['l']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['p']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['i']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['t']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['v']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['x']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['s']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['b']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['o']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['r']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['d']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['c']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim( $papiZ < 0 ? $papiZ * -1 : $papiZ) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['e']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim( $papiK < 0 ? $papiK * -1 : $papiK ) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['f']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['w']) + $offset)."'},";
                                    echo "{axis:'',value:'".(int)(trim($reportReguler['papi']['scores']['raw']['n']) + $offset)."'},";


                                    

                                    

                                ?>
                                ]
                            ];
             
                            
                            //////////////////////////////////////////////////////////////
                            //////////////////// Draw the Chart //////////////////////////
                            //////////////////////////////////////////////////////////////
             
                            var color = d3.scale.ordinal()
                            .range(['#332c2a','#35274E']);
             
                            var radarChartOptions = {
                                w: width,
                                h: height,
                                margin: margin,
                                maxValue: 9,
                                levels: 5,
                                roundStrokes: false,
                                color: color,
                                opacityArea: 0.5,
                                opacityCircles: 0.3,
                                dotRadius: 2,
                                strokeWidth: 1,
                                wrapWidth: 10,
                                labelFactor: 10,
                                showLevels: true,

      showAxes: true,
      showLegend: true,
      showVertices: true,
      showPolygons: true
                            };
                            //Call function to draw the Radar chart
                            RadarChart(".radarChart", data, radarChartOptions);


                            $(window).resize(function() {
                              //  width = window.innerWidth * browserZoomLevel/10;
                            //    alert(window.innerWidth);
                            });


                          </script>
                    </div>

                    <!-- <div class="output-six">
                        <table class="biodata" style="text-align: center;">
                            <tr style="height: 20px; text-align:center;">
                                <td colspan="2"> HOLLAND </td>
                            </tr>
                            <tr>
                                <td>R</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>I</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>A</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>S</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>S</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>E</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>C</td>
                                <td></td>
                            </tr>
                            <tr style="height: 30px;">
                                <td colspan="2"></td>
                            </tr>
                        </table>
                    </div> -->
                </div>
            </section>
        </div>
        <div class="A4 potrait">
            <section class="sheet padding-15mm">
                <div class='left' style="margin-top:-20px;">
                    <table>
                        <tr>
                            <td style="width:70px;">NAMA</td>
                            <td> : </td>
                            <td style="min-width:200px;">{{ strtoupper($userProfile['firstname'] . ' ' . $userProfile['lastname']) }}</td>
                            <td>PERUSAHAAN</td>
                            <td> : </td>
                        <td>{{  $reportReguler['form']['answers']['nama_perusahaan'] }}</td>
                        </tr>
                        <tr>
                            <td style="width:70px;">No. Tes </td>
                            <td> : </td>
                        <td style="min-width:200px;">{{  $reportReguler['form']['answers']['nomor_test'] }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <hr>
                </div>
                <div class="container">
                    <h4>SCORE INTERPRETATION: </br>WORK DIRECTION</h4>
                    @php
                        foreach ($reportReguler["papi"]["uraian_2"] as $data) {
                            $uraian = explode("::", $data);
                            $output = "<p style='font-size: 15px;'>[".trim($uraian[0])."] - " . $uraian[1]."</p>";
                            echo $output;
                        } 
                    @endphp
                </div>
            </section>
            @if(count($reportReguler['uraianNonBase']) > 0)
            <section class="sheet padding-15mm">
                <div class="container">
                    @php
                        // dd($reportReguler['uraianNonBase'][0]);
                        foreach ($reportReguler['uraianNonBase'] as $data) {
                            $uraianNonBase = explode(" ::", $data);
                            if (count($uraianNonBase) > 1){
                                $output = "<p>[".trim($uraianNonBase[0])."] - " . $uraianNonBase[1]."</p>";
                            } else {
                                $output = "<p>[".trim($uraianNonBase[0])."]</p>";
                            }
                            
                            echo $output;
                        } 
                    @endphp
                </div>
            </section>
            @endif
        </div>  
    </body>
</html>   