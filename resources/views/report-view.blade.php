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
                            <td colspan="7" class="column-biodata-value"></td>
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
                                <td class="column-title-point">Intelegensi Umum</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $intelegensiUmum = $reportReguler['output']['inteligensi_umum']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $intelegensiUmum)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Daya Tangkap</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $dayaTangkap = $reportReguler['output']['daya_tangkap']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $dayaTangkap)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Pemecahan Masalah</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $pm = $reportReguler['output']['pemecahan_masalah']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $pm)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Kemampuan Analisa Sintesa</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $kas = $reportReguler['output']['kemampuan_analisa_sintesa'];  
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $kas)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Logika Berpikir</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $logikaBerpikir = $reportReguler['output']['logika_berpikir']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $logikaBerpikir)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Penalaran Verbal</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $penalaranVerbal = $reportReguler['output']['penalaran_verbal']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $penalaranVerbal)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Penalaran Numerik</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $penalaranNUumerik = $reportReguler['output']['penalaran_numerik']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $penalaranNUumerik)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Wawasan Pengetahuan</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $wawasanPengetahuan = $reportReguler['output']['wawasan_pengetahuan']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $wawasanPengetahuan)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Kemampuan Abstrak</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $kemampuanAbstrak = $reportReguler['output']['kemampuan_abstrak']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $kemampuanAbstrak)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <!-- WIP: adkudag4 -->
                            <tr class="column-point">
                                <td class="column-title-point">Kemampuan Praktis</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $kemampuanPraktis = $reportReguler['output']['kemampuan_praktis']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $kemampuanPraktis)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Kemampuan Keteknikan</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $kemampuanKeteknikan = $reportReguler['output']['kemampuan_keteknikan']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $kemampuanKeteknikan)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <!-- WIP: adkudag4 -->
                            <tr class="column-point">
                                <td class="column-title-point">Daya Ingat</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $dayaIngat = $reportReguler['output']['daya_ingat']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $dayaIngat)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point section-table">
                                <td class="column-title-point">Kemampuan dan Proses Belajar</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $kpb = $reportReguler['output']['kemampuan_dan_proses_belajar']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $kpb)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
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
                            <tr class="column-point section-table">
                                <td class="column-title-point">Hubungan Interpersonal</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $hi = $reportReguler['output']['hubungan_interpersonal']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $hi)
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
                                <td class="column-title-point">Tempo Kerja</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $tk = $reportReguler['output']['tempo_kerja']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $tk)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Ketekunan</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $tekun = $reportReguler['output']['ketekunan']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $tekun)
                                        <td style="background-color:{{ $background }};">X</td>
                                    @else
                                        <td style="background-color:{{ $background }};"></td>
                                    @endif
                                @endfor
                            </tr>
                            <tr class="column-point">
                                <td class="column-title-point">Ketelitian</td>
                                @php
                                    $backgroundGrey = "#e0e0e0";
                                    $backgroundWhite = "#ffffff";
                                    $teliti = $reportReguler['output']['ketelitian']; 
                                @endphp
                                @for($i = 1; $i<=7; $i++)
                                    @php
                                        $background = $backgroundWhite;
                                        if($i == 4) {
                                            $background = $backgroundGrey;
                                        }
                                    @endphp

                                    @if($i == $teliti)
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
                    
                    <div class="output-three">
                        <table class="index-value">
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['g'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['a'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['l'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['p'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['i'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['t'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['v'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['x'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['s'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['b'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['o'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['r'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['d'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['c'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['z'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['e'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['k'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['f'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['w'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $reportReguler['papi']['scores']['scale20']['n'] }}</td>
                            </tr>
                            <tr>
                                @php
                                    $totalScores = $reportReguler['papi']['scores']['scale20']['g'] + $reportReguler['papi']['scores']['scale20']['a'] +
                                            $reportReguler['papi']['scores']['scale20']['l'] + $reportReguler['papi']['scores']['scale20']['p'] +
                                            $reportReguler['papi']['scores']['scale20']['i'] + $reportReguler['papi']['scores']['scale20']['t'] +
                                            $reportReguler['papi']['scores']['scale20']['v'] + $reportReguler['papi']['scores']['scale20']['x'] +
                                            $reportReguler['papi']['scores']['scale20']['s'] + $reportReguler['papi']['scores']['scale20']['b'] +
                                            $reportReguler['papi']['scores']['scale20']['o'] + $reportReguler['papi']['scores']['scale20']['r'] +
                                            $reportReguler['papi']['scores']['scale20']['d'] + $reportReguler['papi']['scores']['scale20']['c'] +
                                            $reportReguler['papi']['scores']['scale20']['z'] + $reportReguler['papi']['scores']['scale20']['e'] +
                                            $reportReguler['papi']['scores']['scale20']['k'] + $reportReguler['papi']['scores']['scale20']['f'] +
                                            $reportReguler['papi']['scores']['scale20']['w'] + $reportReguler['papi']['scores']['scale20']['n'];
                                @endphp
                                <td>{{ $totalScores }}</td>
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
             
                            var margin = {top: 107, right: 0, bottom: 400, left: 154};
                            var browserZoomLevel = Math.round(window.devicePixelRatio);
                            //alert(browserZoomLevel);
                                //width = Math.min(500, window.innerWidth - 10) - margin.left - margin.right,
                                //height = Math.min(width, window.innerHeight - margin.top - margin.bottom - 15);
                                width = window.innerWidth * browserZoomLevel/10;
                                width =240;
                                //alert(window.innerWidth)
                                height = window.innerHeight * browserZoomLevel/10;
                                height = 240;
             

                               


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
                                maxValue: 6,
                                levels: 5,
                                roundStrokes: false,
                                color: color,
                                opacityArea: 0.5,
                                opacityCircles: 0.2,
                                dotRadius: 3,
                                strokeWidth: 2,
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
                                <?php
                                    $apmCorrect = $reportReguler['apm']['answers']['correct'];
                                    $apmIncorrect = $reportReguler['apm']['answers']['incorrect'];
                                    $apmEmpty = $reportReguler['apm']['answers']['empty'];
                                    $totalApm = $apmCorrect + $apmEmpty + $apmIncorrect;
                               ?>
                                <td class="subtest-text-left">PM ADVANCE</td>
                                <td>{{ $reportReguler['apm']['answers']['correct'] }}</td>
                                <td>{{ $reportReguler['apm']['scores']['scale20'] }}</td>
                                <td>{{ number_format( $totalApm > 0 ? (($apmCorrect + $apmIncorrect) / $totalApm * 100 ): 0 ) . ' %' }}</td>
                                <td>{{ number_format( $totalApm > 0 ? $apmCorrect / $totalApm * 100 : 0) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <?php
                                    $compreCorrect = $reportReguler['compre']['answers']['correct'];
                                    $compreIncorrect = $reportReguler['compre']['answers']['incorrect'];
                                    $compreEmpty = $reportReguler['compre']['answers']['empty'];
                                    $totalCompre = $compreCorrect + $compreEmpty + $compreIncorrect;
                                ?>
                                <td class="subtest-text-left">COMPREHENSION</td>
                                <td>{{ $reportReguler['compre']['answers']['correct']}}</td>
                                <td>{{ $reportReguler['compre']['scores']['scale20'] }}</td>
                                <td>{{ number_format( $totalCompre > 0 ? ($compreCorrect + $compreIncorrect) / $totalCompre * 100 : 0 ) . ' %' }}</td>
                                <td>{{ number_format( $totalCompre > 0 ? $compreCorrect / $totalCompre * 100 : 0) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <?php
                                    $infoCorrect = $reportReguler['tkdinfo']['answers']['correct'];
                                    $infoIncorrect = $reportReguler['tkdinfo']['answers']['incorrect'];
                                    $infoEmpty = $reportReguler['tkdinfo']['answers']['empty'];
                                    $totalInfo = $infoCorrect + $infoEmpty + $infoIncorrect;
                                ?>
                                <td class="subtest-text-left">INFORMATION</td>
                                <td>{{ $reportReguler['tkdinfo']['answers']['correct']}}</td>
                                <td>{{ $reportReguler['tkdinfo']['scores']['scale20'] }}</td>
                                <td>{{ number_format( $totalInfo > 0 ? ($infoCorrect + $infoIncorrect) / $totalInfo * 100 : 0) . ' %' }}</td>
                                <td>{{ number_format( $totalInfo > 0 ? $infoCorrect / $totalInfo * 100 : 0)  . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <?php
                                    $idiotCorrect = $reportReguler['tkdidiot']['answers']['correct'];
                                    $idiotIncorrect = $reportReguler['tkdidiot']['answers']['incorrect'];
                                    $idiotEmpty = $reportReguler['tkdidiot']['answers']['empty'];
                                    $totalIdiot = $idiotCorrect + $idiotEmpty + $idiotEmpty;
                                ?>
                                <td class="subtest-text-left">LOGIKA VERBAL</td>
                                <td>{{ $reportReguler['tkdidiot']['answers']['correct'] }}</td>
                                <td>{{ $reportReguler['tkdidiot']['scores']['scale20'] }}</td>
                                <td>{{ number_format( $totalIdiot > 0 ? ($idiotCorrect + $idiotEmpty) / $totalIdiot * 100 : 0 ) . ' %' }}</td>
                                <td>{{ number_format( $totalIdiot > 0 ? $idiotCorrect / $totalIdiot * 100 : 0 ) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <?php
                                    $verbalCorrect = $reportReguler['tkdanalogiverbal']['answers']['correct'];
                                    $verbalIncorrect = $reportReguler['tkdanalogiverbal']['answers']['incorrect'];
                                    $verbalEmpty = $reportReguler['tkdanalogiverbal']['answers']['empty'];
                                    $totalVerbal = $verbalCorrect + $verbalEmpty + $verbalIncorrect;
                                ?>
                                <td class="subtest-text-left">ANALOGI VERBAL</td>
                                <td>{{ $reportReguler['tkdanalogiverbal']['answers']['correct']}}</td>
                                <td>{{ $reportReguler['tkdanalogiverbal']['scores']['scale20'] }}</td>
                                <td>{{ number_format( $totalVerbal > 0 ? ($verbalCorrect + $verbalIncorrect) / $totalVerbal * 100 : 0 ) . ' %' }}</td>
                                <td>{{ number_format( $totalVerbal > 0 ? $verbalCorrect / $totalVerbal * 100 : 0 ) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <?php
                                    $gatbCorrect = $reportReguler['gatb4']['answers']['correct'];
                                    $gatbIncorrect = $reportReguler['gatb4']['answers']['incorrect'];
                                    $gatbEmpty = $reportReguler['gatb4']['answers']['empty'];
                                    $totalGatb = $gatbCorrect + $gatbEmpty + $gatbIncorrect;
                                ?>
                                <td class="subtest-text-left">ARITMATIKA</td>
                                <td>{{ $reportReguler['gatb4']['answers']['correct']}}</td>
                                <td>{{ $reportReguler['gatb4']['scores']['scale20'] }}</td>
                                <td>{{ number_format( $totalGatb > 0 ? ($gatbCorrect + $gatbIncorrect) / $totalGatb * 100 : 0 ) . ' %' }}</td>
                                <td>{{ number_format( $totalGatb > 0 ? $gatbCorrect / $totalGatb * 100 : 0 ) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <?php   
                                    $adkudag4Correct = $reportReguler['adkudag4']['answers']['correct'];
                                    $adkudag4Incorrect = $reportReguler['adkudag4']['answers']['incorrect'];
                                    $adkudag4Empty = $reportReguler['adkudag4']['answers']['empty']; 
                                    $totalAdkudag4 = $adkudag4Correct + $adkudag4Empty + $adkudag4Incorrect;
                                ?>
                                <td class="subtest-text-left">ADMINISTRASI ADKUDAG-4</td>
                                <td>{{ $reportReguler['adkudag4']['answers']['correct']}}</td>
                                <td>{{ $reportReguler['adkudag4']['scores']['scale20'] }}</td>
                                <td>{{ number_format( $totalAdkudag4 > 0 ? ($adkudag4Correct + $adkudag4Incorrect) / $totalAdkudag4 * 100 : 0 ) . ' %' }}</td>
                                <td>{{ number_format( $totalAdkudag4 > 0 ? $adkudag4Correct  / $totalAdkudag4 * 100 : 0 ) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <?php
                                    $teseCorrect = $reportReguler['tese']['answers']['correct'];
                                    $tesseIncorrect = $reportReguler['tese']['answers']['incorrect'];
                                    $teseEmpty = $reportReguler['tese']['answers']['empty'];
                                    $totalTese = $teseCorrect+ $teseEmpty + $tesseIncorrect;
                                ?>
                                <td class="subtest-text-left">TEST-E</td>
                                <td>{{ $reportReguler['tese']['answers']['correct']}}</td>
                                <td>{{ $reportReguler['tese']['scores']['scale20'] }}</td>
                                <td>{{ number_format( $totalTese > 0 ? ($teseCorrect + $tesseIncorrect) / $totalTese * 100 : 0 ) . ' %' }}</td>
                                <td>{{ number_format( $totalTese > 0 ? $teseCorrect / $totalTese * 100 : 0  ) . ' %' }}</td>
                            </tr>
                            <tr class="subtest-text-center">
                                <td colspan="3">TOTAL</td>
                                <td>{{ round($reportReguler['output']['kecepatan_percentage'] * 100,2)}}%</td>
                                <td>{{ round($reportReguler['output']['ketelitian_percentage'] * 100,2)}}%</td>
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
                            <td></td>
                        </tr>
                        <tr>
                            <td style="width:70px;">No. Tes </td>
                            <td> : </td>
                            <td style="min-width:200px;"></td>
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