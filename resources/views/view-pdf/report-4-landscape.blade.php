<html>
  <head>
    <title>Report</title>
    {{--
    <script src="{{ url('assets/d3.min.js') }}"></script>
    <script src="{{ url('assets/radarChart.js') }}"></script>
    --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
      body {
        font-family: 'Times New Roman', Times, serif
        text-align: justify;
      }

      .output-one {
        /* grid-area: biodata-1; */
        float: left;
        margin: 5px;
      }

      .output-two {
        /* grid-area: biodata-2;
        margin-left: 30px; */
        /* float: left; */
        margin: 5px;
      }

      .output-three {
        grid-area: biodata-3;
      }

      .output-four {
        margin-left: 20px;
        grid-area: biodata-4;
      }

      .output-five {
        margin-left: 30px;
        margin-top: 30px;
        grid-area: biodata-5;
      }

      .output-six {
        grid-area: biodata-6;
        margin-left: 20px;
        margin-top: 30px;
      }

      .grid-container {
        display: grid;
        grid-template-areas:
          "biodata-1 biodata-2 biodata-3 biodata-4 biodata-4"
          "biodata-1 biodata-5 biodata-5 biodata-5 biodata-5";
        grid-gap: 10px;
      }

      table.biodata {
        border: 2px solid #000000;
        width: 100%;
        text-align: left;
        border-collapse: collapse;
        font-family: cambria;
        font-size: 12px;
     }

    table.biodata td,
    table.biodata th {
        border: 1px solid #000000;
        padding: 2px 2px;
    }
    table.biodata tbody td {
        font-family: cambria;
        font-size: 10px;
    }

    table.biodata thead {
        border-bottom: 2px solid #000000;
    }
    table.biodata thead th {
        font-size: 10px;
        font-weight: bold;
        color: #ffffff;
        border-left: 2px solid #000000;
    }
    table.biodata thead th:first-child {
        border-left: none;
    }

    table.biodata tfoot {
        font-size: 14px;
        font-weight: bold;
        color: #ffffff;

        background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #d0e4f5 100%);
        background: -webkit-linear-gradient(
            top,
            #dcebf7 0%,
            #d4e6f6 66%,
            #d0e4f5 100%
        );
        background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #d0e4f5 100%);
        border-top: 2px solid #444444;
    }
    table.biodata tfoot td {
        font-size: 14px;
    }
    table.biodata tfoot .links {
        text-align: right;
    }
    table.biodata tfoot .links a {
        display: inline-block;

        color: #ffffff;
        padding: 2px 8px;
        border-radius: 5px;
    }


      .biodata .column-biodata-title {
        border-right: 0px solid #000;
      }
      .biodata .column-biodata-value {
        border-left: 0px solid #000;
      }

      .section-table {
        border-bottom: 2px solid #000;
      }
      .border-left-none {
        border-left: 0px solid #000 !important;
      }

      table.index-value {
        border: 2px solid #000000;
        /* width: 100%; */
        text-align: left;
        border-collapse: collapse;
        font-family: cambria;
      }

      table.index-value td,
      table.index-value th {
        border: 1px solid #000000;
        padding: 2px 15px;
      }
      table.index-value tbody td {
        font-family: cambria;
        font-size: 10px;
      }

      .column-point {
        text-align: center;
      }

      .column-title-point {
        text-align: left;
      }

      .subtest-text-center {
        text-align: center;
      }

      .subtest-text-left {
        text-align: left;
      }
    </style>
  </head>
  <body>
    <div class="grid-container">

        <div class="output-one">
            <table class="biodata">
                <tr>
                    <td class="column-biodata-title">NOMOR</td>
                    <td colspan="7"class="column-biodata-value"> -- </td>
                </tr>
                <tr>
                    <td class="column-biodata-title">NAMA</td>
                    <td colspan="7" class="column-biodata-value"> -- </td>
                </tr>
                <tr>
                    <td class="column-biodata-title">JENIS KELAMIN</td>
                    <td colspan="7"class="column-biodata-value"> -- </td>
                </tr>
                <tr>
                    <td class="column-biodata-title">USIA</td>
                    <td colspan="7" class="column-biodata-value"> -- </td>
                </tr>
                <tr>
                    <td class="column-biodata-title">PENDIDIKAN</td>
                    <td colspan="7" class="column-biodata-value"> -- </td>
                </tr>
                <tr>
                    <td class="column-biodata-title">TANGGAL TEST</td>
                    <td colspan="7" class="column-biodata-value"> --  </td>
                </tr>
                <tr>
                    <td class="column-biodata-title">TUJUAN TEST</td>
                    <td colspan="7"class="column-biodata-value"> -- </td>
                </tr>
                <tr>
                    <td class="column-biodata-title">NAMA PERUSAHAAN</td>
                    <td colspan="7"class="column-biodata-value"> -- </td>
                </tr>
                <tr>
                    <td class="column-biodata-title">TINGKAT JABATAN</td>
                    <td colspan="7"class="column-biodata-value"> -- </td>
                </tr>
                <tr>
                    <td class="column-biodata-title">PROSPEK JABATAN</td>
                    <td colspan="7"class="column-biodata-value"> -- </td>
                </tr>
                <tr class="section-table">
                    <td class="column-biodata-title">KODE BUKU</td>
                    <td colspan="7" class="column-biodata-value">01</td>
                </tr>
                <tr>
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
                    @php
                        $backgroundGrey = "#e0e0e0";
                        $backgroundWhite = "#ffffff";
                        $intelegensiUmum = $reportReguler['data']['output']['inteligensi_umum']; 
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
                        $dayaTangkap = $reportReguler['data']['output']['daya_tangkap']; 
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
                        $pm = $reportReguler['data']['output']['pemecahan_masalah']; 
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
                        $kas = $reportReguler['data']['output']['kemampuan_analisa_sintesa'];  
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
                        $logikaBerpikir = $reportReguler['data']['output']['logika_berpikir']; 
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
                        $penalaranVerbal = $reportReguler['data']['output']['penalaran_verbal']; 
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
                        $penalaranNUumerik = $reportReguler['data']['output']['penalaran_numerik']; 
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
                        $wawasanPengetahuan = $reportReguler['data']['output']['wawasan_pengetahuan']; 
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
                        $kemampuanAbstrak = $reportReguler['data']['output']['kemampuan_abstrak']; 
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
                        $kemampuanPraktis = $reportReguler['data']['output']['kemampuan_praktis']; 
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
                        $kemampuanKeteknikan = $reportReguler['data']['output']['kemampuan_keteknikan']; 
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
                        $dayaIngat = $reportReguler['data']['output']['daya_ingat']; 
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
                        $kpb = $reportReguler['data']['output']['kemampuan_dan_proses_belajar']; 
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
                        $kematangan_sosial = $reportReguler['data']['output']['kematangan_sosial']; 
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
                        $se = $reportReguler['data']['output']['stabilitas_emosi']; 
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
                        $pd = $reportReguler['data']['output']['penyesuaian_diri']; 
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
                        $pengendalian_diri = $reportReguler['data']['output']['pengendalian_diri']; 
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
                        $kd = $reportReguler['data']['output']['kepercayaan_diri']; 
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
                        $konsep_diri = $reportReguler['data']['output']['konsep_diri']; 
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
                        $kerjasama = $reportReguler['data']['output']['kerjasama']; 
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
                        $hi = $reportReguler['data']['output']['hubungan_interpersonal']; 
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
                        $sk = $reportReguler['data']['output']['sistematika_kerja']; 
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
                        $fk = $reportReguler['data']['output']['fleksibilitas_kerja']; 
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
                        $tk = $reportReguler['data']['output']['tempo_kerja']; 
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
                        $tekun = $reportReguler['data']['output']['ketekunan']; 
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
                        $teliti = $reportReguler['data']['output']['ketelitian']; 
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
                        $dtkr = $reportReguler['data']['output']['daya_tahan_kerja_rutin']; 
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
                        $dtds = $reportReguler['data']['output']['daya_tahan_dalam_stress']; 
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
                        $motivasi = $reportReguler['data']['output']['motivasi_berprestasi']; 
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
                        $pelayanan = $reportReguler['data']['output']['orientasi_pelayanan']; 
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
                        $komitmen = $reportReguler['data']['output']['komitmen_kerja']; 
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
                        $inisiatif = $reportReguler['data']['output']['inisiatif']; 
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
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['g'] }}</td>
                </tr>
                <tr>
                    <td>A</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['a'] }}</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['l'] }}</td>
                </tr>
                <tr>
                    <td>P</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['p'] }}</td>
                </tr>
                <tr>
                    <td>I</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['i'] }}</td>
                </tr>
                <tr>
                    <td>T</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['t'] }}</td>
                </tr>
                <tr>
                    <td>V</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['v'] }}</td>
                </tr>
                <tr>
                    <td>X</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['x'] }}</td>
                </tr>
                <tr>
                    <td>S</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['s'] }}</td>
                </tr>
                <tr>
                    <td>B</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['b'] }}</td>
                </tr>
                <tr>
                    <td>O</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['o'] }}</td>
                </tr>
                <tr>
                    <td>R</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['r'] }}</td>
                </tr>
                <tr>
                    <td>D</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['d'] }}</td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['c'] }}</td>
                </tr>
                <tr>
                    <td>Z</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['z'] }}</td>
                </tr>
                <tr>
                    <td>E</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['e'] }}</td>
                </tr>
                <tr>
                    <td>K</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['k'] }}</td>
                </tr>
                <tr>
                    <td>F</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['f'] }}</td>
                </tr>
                <tr>
                    <td>W</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['w'] }}</td>
                </tr>
                <tr>
                    <td>N</td>
                    <td>{{ $reportReguler['data']['papi']['scores']['raw']['n'] }}</td>
                </tr>
                <tr>
                    @php
                        $total = $reportReguler['data']['papi']['scores']['raw']['g'] + $reportReguler['data']['papi']['scores']['raw']['a'] +
                                $reportReguler['data']['papi']['scores']['raw']['l'] + $reportReguler['data']['papi']['scores']['raw']['p'] +
                                $reportReguler['data']['papi']['scores']['raw']['i'] + $reportReguler['data']['papi']['scores']['raw']['t'] +
                                $reportReguler['data']['papi']['scores']['raw']['v'] + $reportReguler['data']['papi']['scores']['raw']['x'] +
                                $reportReguler['data']['papi']['scores']['raw']['s'] + $reportReguler['data']['papi']['scores']['raw']['b'] +
                                $reportReguler['data']['papi']['scores']['raw']['o'] + $reportReguler['data']['papi']['scores']['raw']['r'] +
                                $reportReguler['data']['papi']['scores']['raw']['d'] + $reportReguler['data']['papi']['scores']['raw']['c'] +
                                $reportReguler['data']['papi']['scores']['raw']['z'] + $reportReguler['data']['papi']['scores']['raw']['e'] +
                                $reportReguler['data']['papi']['scores']['raw']['k'] + $reportReguler['data']['papi']['scores']['raw']['f'] +
                                $reportReguler['data']['papi']['scores']['raw']['w'] + $reportReguler['data']['papi']['scores']['raw']['n'];
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
                            $papiK = ($reportReguler['data']['papi']['scores']['raw']['k'] - 9 );
                            $papiZ = $reportReguler['data']['papi']['scores']['raw']['z'] - 9;
                            $offset = 1;
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['g']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['a']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['l']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['p']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['i']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['t']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['v']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['x']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['s']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['b']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['o']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['r']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['d']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['c']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim( $papiZ < 0 ? $papiZ * -1 : $papiZ) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['e']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim( $papiK < 0 ? $papiK * -1 : $papiK ) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['f']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['w']) + $offset)."'},";
                            echo "{axis:'',value:'".(int)(trim($reportReguler['data']['papi']['scores']['raw']['n']) + $offset)."'},";


                            

                            

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
    </div>
  </body>
</html>
