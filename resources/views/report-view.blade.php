<html>
    <head>
        <title>Report</title>
        <link rel="stylesheet" type="text/css" href="<?php echo url('assets/style-custom.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo url('assets/table-style.css') ?>">
        <script src="<?php echo url('assets/d3.min.js') ?>"></script>
        <script src="<?php echo url('assets/radarChart.js') ?>"></script>
    </head>
    <body>
        <div class="A4 landscape">
            <section class="sheet padding-15mm">
                <div class="grid-container">
                    <div class="output-one">
                        <table class="biodata">
                            <tr>
                                <td class="column-biodata-title">NOMOR</td>
                            <td colspan="7" class="column-biodata-value"></td>
                            </tr>
                            <tr>
                                <td class="column-biodata-title">NAMA</td>
                                <td colspan="7" class="column-biodata-value">{{ $userProfile['firstname'] . ' ' . $userProfile['lastname'] }}</td>
                            </tr>
                            <tr>
                                <td class="column-biodata-title">JENIS KELAMIN</td>
                                <td colspan="7"class="column-biodata-value">Perempuan</td>
                            </tr>
                            <tr>
                                <td class="column-biodata-title">UMUR</td>
                                <td colspan="7" class="column-biodata-value">25</td>
                            </tr>
                            <tr>
                                <td class="column-biodata-title">PENDIDIKAN</td>
                                <td colspan="7" class="column-biodata-value">S2 </td>
                            </tr>
                            <tr>
                                <td class="column-biodata-title">TANGGAL TEST</td>
                                <td colspan="7" class="column-biodata-value">03122018 </td>
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
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Intelegensi Umum</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Daya Tangkap</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Kemampuan Analisa Sintesa</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Logika Berpikir</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Penalaran Verbal</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Penalaran Numerik</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Wawasan Pengetahuan</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Kemampuan Abstrak</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Kemampuan Praktis</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Kemampuan Keteknikan</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Daya Ingat</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point section-table">
                                <td class="column-title-point">Kemampuan dan Proses Belajar</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Kematangan Sosial</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Stabilitas Emosi</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Penyesuaian Diri</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Pengendalian Diri</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Kepercayaan Diri</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Konsep Diri</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Kerjasama</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point section-table">
                                <td class="column-title-point">Hubungan Interpersonal</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Sistematika Kerja</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Fleksibilitas Kerja</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Tempo Kerja</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Ketekunan</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Ketelitian</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Daya TahanKerja Rutin</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Daya Tahan Dalam Stress</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Motivasi Berprestasi</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Orientasi Pelayanan</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Komitmen Kerja</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="column-point ection-table">
                                <td class="column-title-point">Inisiatif</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                                <td></td>
                                <td>{{ $reportReguler['papi']['scores']['total'] }}</td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="output-three">
                        <table class="index-value">
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['g'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['a'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['l'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['p'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['i'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['t'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['v'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['x'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['s'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['b'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['o'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['r'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['d'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['c'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['z'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['e'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['k'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['f'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['w'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scaled']['n'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['total'] }}</td>
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
             
                            var margin = {top: 77, right: 0, bottom: 35, left: 127},
                                width = Math.min(425, window.innerWidth - 10) - margin.left - margin.right,
                                height = Math.min(width, window.innerHeight - margin.top - margin.bottom - 20);
             
                            //////////////////////////////////////////////////////////////
                            ////////////////////////// Data //////////////////////////////
                            //////////////////////////////////////////////////////////////
                            var data = [
                                [
                                <?php
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['g'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['a'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['l'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['p'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['i'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['t'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['v'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['x'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['s'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['b'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['o'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['r'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['d'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['c'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['z'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['e'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['k'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['f'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['w'])."'},";
                                    echo "{axis:'',value:'".trim($reportReguler['papi']['scores']['raw']['n'])."'},";
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
                                maxValue: 6,
                                levels: 5,
                                roundStrokes: false,
                                color: color,
                                opacityArea: 0.5,
                                opacityCircles: 0,
                                dotRadius: 3,
                                strokeWidth: 2,
                                wrapWidth: 10,
                                labelFactor: 10,
                            };
                            //Call function to draw the Radar chart
                            RadarChart(".radarChart", data, radarChartOptions);
                          </script>
                    </div>

                    <div class="output-five">
                        <table class="biodata">
                            <tr class="subtest-text-center">
                                <td>SUBTEST</td>
                                <td>RS</td>
                                <td>SS</td>
                                <td>SELESAI </td>
                                <td>BENAR</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <td class="subtest-text-left">PM ADVANCE</td>
                                <td>{{ $reportReguler['apm']['answers']['correct'] }}</td>
                                <td>{{ $reportReguler['apm']['answers']['incorrect'] }}</td>
                                <td>{{ number_format($reportReguler['apm']['answers']['correct'] / ($reportReguler['apm']['answers']['correct'] + $reportReguler['apm']['answers']['empty']) * 100) . ' %' }}</td>
                                <td>{{ number_format($reportReguler['apm']['answers']['incorrect'] / ($reportReguler['apm']['answers']['correct'] + $reportReguler['apm']['answers']['empty']) * 100) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <td class="subtest-text-left">COMPREHENSION</td>
                                <td>{{ $reportReguler['compre']['answers']['correct']}}</td>
                                <td>{{ $reportReguler['compre']['answers']['incorrect'] }}</td>
                                <td>{{ number_format($reportReguler['compre']['answers']['correct'] / ($reportReguler['compre']['answers']['correct'] + $reportReguler['compre']['answers']['empty']) * 100) . ' %' }}</td>
                                <td>{{ number_format($reportReguler['compre']['answers']['incorrect'] / ($reportReguler['compre']['answers']['correct'] + $reportReguler['compre']['answers']['empty']) * 100) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <td class="subtest-text-left">INFORMATION</td>
                                <td>{{ $reportReguler['tkdinfo']['answers']['correct']}}</td>
                                <td>{{ $reportReguler['tkdinfo']['answers']['incorrect'] }}</td>
                                <td>{{ number_format($reportReguler['tkdinfo']['answers']['correct'] / ($reportReguler['tkdinfo']['answers']['correct'] + $reportReguler['tkdinfo']['answers']['empty']) * 100) . ' %' }}</td>
                                <td>{{ number_format($reportReguler['tkdinfo']['answers']['incorrect'] / ($reportReguler['tkdinfo']['answers']['correct'] + $reportReguler['tkdinfo']['answers']['empty']) * 100) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <td class="subtest-text-left">LOGIKA VERBAL</td>
                                <td>{{ $reportReguler['tkdidiot']['answers']['correct']}}</td>
                                <td>{{ $reportReguler['tkdidiot']['answers']['incorrect'] }}</td>
                                <td>{{ number_format($reportReguler['tkdidiot']['answers']['correct'] / ($reportReguler['tkdidiot']['answers']['correct'] + $reportReguler['tkdidiot']['answers']['empty']) * 100) . ' %' }}</td>
                                <td>{{ number_format($reportReguler['tkdidiot']['answers']['incorrect'] / ($reportReguler['tkdidiot']['answers']['correct'] + $reportReguler['tkdidiot']['answers']['empty']) * 100) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <td class="subtest-text-left">ANALOGI VERBAL</td>
                                <td>{{ $reportReguler['tkdanalogiverbal']['answers']['correct']}}</td>
                                <td>{{ $reportReguler['tkdanalogiverbal']['answers']['incorrect'] }}</td>
                                <td>{{ number_format($reportReguler['tkdanalogiverbal']['answers']['correct'] / ($reportReguler['tkdanalogiverbal']['answers']['correct'] + $reportReguler['tkdanalogiverbal']['answers']['empty']) * 100) . ' %' }}</td>
                                <td>{{ number_format($reportReguler['tkdanalogiverbal']['answers']['incorrect'] / ($reportReguler['tkdanalogiverbal']['answers']['correct'] + $reportReguler['tkdanalogiverbal']['answers']['empty']) * 100) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <td class="subtest-text-left">ARITMATIKA</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="subtest-text-center">
                                <td class="subtest-text-left">ADMINISTRASI ADKUDAG-4</td>
                                <td>{{ $reportReguler['gatb4']['answers']['correct']}}</td>
                                <td>{{ $reportReguler['gatb4']['answers']['incorrect'] }}</td>
                                <td>{{ number_format($reportReguler['gatb4']['answers']['correct'] / ($reportReguler['gatb4']['answers']['correct'] + $reportReguler['tese']['answers']['empty']) * 100) . ' %' }}</td>
                                <td>{{ number_format($reportReguler['gatb4']['answers']['incorrect'] / ($reportReguler['gatb4']['answers']['correct'] + $reportReguler['tese']['answers']['empty']) * 100) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <td class="subtest-text-left">TEST-E</td>
                                <td>{{ $reportReguler['tese']['answers']['correct']}}</td>
                                <td>{{ $reportReguler['tese']['answers']['incorrect'] }}</td>
                                <td>{{ number_format($reportReguler['tese']['answers']['correct'] / ($reportReguler['tese']['answers']['correct'] + $reportReguler['tese']['answers']['empty']) * 100) . ' %' }}</td>
                                <td>{{ number_format($reportReguler['tese']['answers']['incorrect'] / ($reportReguler['tese']['answers']['correct'] + $reportReguler['tese']['answers']['empty']) * 100) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <td colspan="3">TOTAL</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
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
    </body>
</html>   