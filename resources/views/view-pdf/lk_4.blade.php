<html>

<head>
    <title>{{ $userProfile['firstname'] . ' ' . $userProfile['lastname'] }}</title>
    <style>
        body {
            font-family: Calibri, Candara, Segoe, Segoe UI, Arial, sans-serif;
            text-align: justify;
        }

        table {
            page-break-inside: auto;
        }

        tr {
            page-break-inside: avoid;
            page-break-after: auto;
        }

        thead {
            display: table-header-group;
        }

        tfoot {
            display: table-footer-group;
        }

        table.riwayat_pekerjaan {
            /* border: 2px solid #000000; */
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            font-family: cambria;
            border: 2px solid #000000;
        }

        .riwayat-note {
            font-size: 10px;
        }

        table.riwayat_pekerjaan td,
        table.riwayat_pekerjaan th {
            border: 1px solid #000000;
            padding: 2px 2px;
        }

        table.riwayat_pekerjaan td {
            font-family: cambria;
            font-size: 14px;
        }

        /* organisasi */

        table.organisasi {
            /* border: 2px solid #000000; */
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            font-family: cambria;
            border: 2px solid #000000;
        }

        table.organisasi td,
        table.organisasi th {
            border: 1px solid #000000;
            padding: 2px 2px;
        }

        table.organisasi td {
            font-family: cambria;
            font-size: 14px;
        }

        /* Kursus */

        table.kursus {
            /* border: 2px solid #000000; */
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            font-family: cambria;
            border: 2px solid #000000;
        }

        table.kursus td,
        table.kursus th {
            border: 1px solid #000000;
            padding: 2px 2px;
        }

        table.kursus td {
            font-family: cambria;
            font-size: 14px;
        }

        /* Bahasa */

        table.bahasa {
            /* border: 2px solid #000000; */
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            font-family: cambria;
            border: 2px solid #000000;
        }

        table.bahasa td,
        table.bahasa th {
            border: 1px solid #000000;
            padding: 2px 2px;
        }

        table.bahasa td {
            font-family: cambria;
            font-size: 14px;
        }

        .title-lk h4 {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .title-table-lk {
            font-weight: 700;
            text-align: center;
        }

        .body-table-lk {
            text-align: center;
            font-size: 14px;
        }

        .body-jenis-tes {
            text-align: left;
        }

        .collumn-empty {
            height: 20px;
        }

        .title-table-lk-simulasi {
            text-align: center;
        }

        .text-left {
            text-align: left;
        }

        .border-empty {
            border: 0px;
        }

        .left-panel {
            float: left;
            width: 45%;
        }

        .right-panel {
            float: right;
            width: 50%;
        }

        .lk-profile-title {
            text-align: center;
            margin-bottom: 15px;
        }

        .lk-profile-image {
            text-align: right;
            position: absolute;
            right: 40px;
            top: 110px;
            border: 1px solid #e0e0e0;
            padding: 2px;
        }

        .lk-profile-image-center {
            display: block;
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        table.table-profile td {
            padding-top: 5px;
            font-size: 18px;
        }

        .text-18 {
            font-size: 18px;
        }

        .text-16 {
            font-size: 16px;
        }

        .text-14 {
            font-size: 14px;
        }

        .text-bold {
            font-weight: 700;
        }

        .color-black-grey {
            color: #101010;
        }
    </style>
</head>

<body>
    <div>
        <div class="lk-profile-title">
            <div class="text-18 text-bold">LEMBAR KEHIDUPAN</div>
            <div class="text-16 text-bold">RAHASIA</div>
            <hr>
        </div>
        <div>
            <img style="width: 200px; margin-bottom:10px" class="lk-profile-image-center" alt="Profile" src={{ $image }}>
        </div>
        <table class="table-profile">
            <tr>
                <td>Nomor Test</td>
                <td>:</td>
                <td> - </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $userProfile['firstname'] . ' ' . $userProfile['lastname'] }}</td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir</td>
                <td>:</td>
                <td>
                    {{ $userProfile['extra_fields']['birthplace'] ? $userProfile['extra_fields']['birthplace']['value'] : '-' }}, {{ $userProfile['extra_fields']['birthday']['value']
                    ? \Carbon\Carbon::parse($userProfile['extra_fields']['birthday']['value'] )->format('d-m-Y') : '-' }}
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td> {{ isset($userProfile['extra_fields']['gender']['value']) > 0 ? $userProfile['extra_fields']['gender']['value']
                    : '-' }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td style="max-width: 400px;"> {{ isset($userProfile['extra_fields']['alamat']['value']) > 0 ? $userProfile['extra_fields']['alamat']['value']
                    : '-' }}</td>
            </tr>
            <tr>
                <td>Telepon / HP</td>
                <td>:</td>
                <td> {{ isset($userProfile['phone']) > 0 ? $userProfile['phone'] : '-' }}</td>
            </tr>
            <tr>
                <td>eMail</td>
                <td>:</td>
                <td> {{ isset($userProfile['email'] ) > 0 ? $userProfile['email'] : '-'}}</td>
            </tr>
            <tr>
                <td>Facebook</td>
                <td>:</td>
                <td> {{ isset($userProfile['extra_fields']['facebook']['value']) > 0 ? $userProfile['extra_fields']['facebook']['value']
                    : '-' }}</td>
            </tr>
            <tr>
                <td>Instagram</td>
                <td>:</td>
                <td> {{ isset($userProfile['extra_fields']['instagram']['value']) > 0 ? $userProfile['extra_fields']['instagram']['value']
                    : '-' }}</td>
            </tr>
            <tr>
                <td>Twitter</td>
                <td>:</td>
                <td> {{ isset($userProfile['extra_fields']['twitter']['value']) > 0 ? $userProfile['extra_fields']['twitter']['value']
                    : '-' }}</td>
            </tr>
            <tr>
                <td>LinkedIn</td>
                <td>:</td>
                <td> {{ isset($userProfile['extra_fields']['linkedin_url']['value']) > 0 ? $userProfile['extra_fields']['linkedin_url']['value']
                    : '-' }}</td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td> {{ isset($userProfile['extra_fields']['jenjang_1']['value']) > 0 ? $userProfile['extra_fields']['jenjang_1']['value']
                    : '-' }}</td>
            </tr>
            <tr>
                <td>Agama / Kepercayaan</td>
                <td>:</td>
                <td> {{ isset($userProfile['extra_fields']['religion']['value'] ) > 0 ? $userProfile['extra_fields']['religion']['value']
                    : '-' }}</td>
            </tr>
            <tr>
                <td>Suku Bangsa / Asal Bangsa</td>
                <td>:</td>
                <td> {{ isset($userProfile['extra_fields']['suku_bangsa']['value']) > 0 ? $userProfile['extra_fields']['suku_bangsa']['value']
                    : '-' }}</td>
            </tr>
            <tr>
                <td>Jabatan Saat Ini</td>
                <td>:</td>
                <td> {{ isset($userProfile['extra_fields']['jabatan_saat_ini']['value']) > 0 ? $userProfile['extra_fields']['jabatan_saat_ini']['value']
                    : '-' }}</td>
            </tr>
            <tr>
                <td>Prospek Jabatan</td>
                <td>:</td>
                <td> {{ isset($userProfile['extra_fields']['prospek_jabatan']['value']) >0 ? $userProfile['extra_fields']['prospek_jabatan']['value']
                    : '-' }}</td>
            </tr>
        </table>
    </div>

    <div>
        <div class="title-lk">
            <h4>RIWAYAT PENDIDIKAN <small>(Diurut kebelakang dari pendidikan tertinggi, termasuk yang masih dijalani)</small></h4>
        </div>
        <table class="riwayat_pekerjaan">
            <tr class="title-table-lk">
                <td style="width: 130px;">Tingkat Pendidikan</td>
                <td>Nama Sekolah/Perguruan Tinggi</td>
                <td>Fakultas / Jurusan</td>
                <td style="width: 70px;">Tahun Masuk</td>
                <td style="width: 70px;">Tahun Lulus</td>
            </tr>
            @for($i = 1;$i
            < 2;$i++) @if(isset($userProfile[ 'extra_fields'][ 'tk'])) <tr class="body-table-lk">
                <td>TK</td>
                <td>{{ $userProfile['extra_fields']['tk']['value'] }}</td>
                <td>-</td>
                <td>{{ $userProfile['extra_fields']['tk_masuk']['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['tk_lulus']['value'] }}</td>
                </tr>
                @else @break @endif @endfor @for($i = 1;$i
                < 2;$i++) @if(isset($userProfile[ 'extra_fields'][ 'sd'])) <tr class="body-table-lk">
                    <td>SD</td>
                    <td>{{ $userProfile['extra_fields']['sd']['value'] }}</td>
                    <td>-</td>
                    <td>{{ $userProfile['extra_fields']['sd_masuk']['value'] }}</td>
                    <td>{{ $userProfile['extra_fields']['sd_lulus']['value'] }}</td>
                    </tr>
                    @else @break @endif @endfor @for($i = 1;$i
                    < 2;$i++) @if(isset($userProfile[ 'extra_fields'][ 'smp'])) <tr class="body-table-lk">
                        <td>SMP</td>
                        <td>{{ $userProfile['extra_fields']['smp']['value'] }}</td>
                        <td>-</td>
                        <td>{{ $userProfile['extra_fields']['smp_masuk']['value'] }}</td>
                        <td>{{ $userProfile['extra_fields']['smp_lulus']['value'] }}</td>
                        </tr>
                        @else @break @endif @endfor @for($i = 1;$i
                        < 2;$i++) @if(isset($userProfile[ 'extra_fields'][ 'sma'])) <tr class="body-table-lk">
                            <td>SMA/SMK</td>
                            <td>{{ $userProfile['extra_fields']['sma']['value'] }}</td>
                            @if(isset($userProfile['extra_fields']['sma_jurusan']))
                            <td>{{ $userProfile['extra_fields']['sma_jurusan']['value'] }}</td>
                            @else
                            <td>-</td>
                            @endif

                            <td>{{ $userProfile['extra_fields']['sma_masuk']['value'] }}</td>
                            <td>{{ $userProfile['extra_fields']['sma_lulus']['value'] }}</td>
                            </tr>
                            @else @break @endif @endfor @for($i = 1;$i
                            < 2;$i++) @if(isset($userProfile[ 'extra_fields'][ 'pendidikan_lain_lain'])) <tr class="body-table-lk">
                                <td>Pendidikan Lain Lain</td>
                                <td>{{ $userProfile['extra_fields']['pendidikan_lain_lain']['value'] }}</td>
                                <td>-</td>
                                <td>{{ $userProfile['extra_fields']['pendidikan_lain_lain_masuk']['value'] }}</td>
                                <td>{{ $userProfile['extra_fields']['pendidikan_lain_lain_lulus']['value'] }}</td>
                                </tr>
                                @else @break @endif @endfor @for($i = 1;$i
                                < 10;$i++) @if(isset($userProfile[ 'extra_fields'][ 'perguruan_tinggi_' . $i])) <tr class="body-table-lk">
                                    <td>{{ $userProfile['extra_fields']['perguruan_tinggi_jenjang_' . $i]['value'] }}</td>
                                    <td>{{ $userProfile['extra_fields']['perguruan_tinggi_' . $i]['value'] }}</td>
                                    <td>{{ $userProfile['extra_fields']['perguruan_tinggi_fakultas_' . $i]['value'] }}</td>
                                    <td>{{ $userProfile['extra_fields']['perguruan_tinggi_masuk_' . $i]['value'] }}</td>
                                    <td>{{ $userProfile['extra_fields']['perguruan_tinggi_lulus_' . $i]['value'] }}</td>
                                    </tr>
                                    @else @break @endif @endfor
        </table>
        <small class="color-black-grey"> Indeks Kumulatif (IPK) pada saat tamat Diploma / S1: {{ $userProfile['extra_fields']['nilai_ipk_1']['value'] ?: "-" }}</small><br/>
        <small class="color-black-grey"> Indeks Kumulatif (IPK) pada saat tamat S2: {{ $userProfile['extra_fields']['nilai_ipk_2']['value'] ?: "-" }}</small>
    </div>

    <div>
        <div class="title-lk">
            <h4>PENGALAMAN MEMIMPIN DAN BERORGANISASI</h4>
        </div>
        <table class="organisasi">
            <tr class="title-table-lk">
                <td>Nama Organisasi</td>
                <td>Jenis Organisasi</td>
                <td>Tahun Masuk</td>
                <td>Tahun Keluar</td>
                <td>Jabatan</td>
            </tr>
            @for($i = 1;$i
            < 10;$i++) @if(isset($userProfile[ 'extra_fields'][ 'organisasi_' . $i])) <tr class="body-table-lk">
                <td>{{ $userProfile['extra_fields']['organisasi_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['organisasi_type_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['organisasi_masuk_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['organisasi_keluar_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['organisasi_jabatan_' . $i]['value'] }}</td>
                </tr>
                @else @break @endif @endfor
        </table>
    </div>

    <div>
        <div class="title-lk">
            <h4>BAHASA YANG DIKUASAI</h4>
        </div>
        <table class="bahasa">
            <tr class="title-table-lk">
                <td>Bahasa Asing</td>
                <td>Aktif/Pasif</td>
                <td> - </td>
                <td>Bahasa Daerah</td>
                <td>Aktif/Pasif</td>

            </tr>
            @for($i = 1; $i
            <=10; $i++) @if(isset($userProfile[ 'extra_fields'][ 'bahasa_asing_' . $i])) <tr class="body-table-lk">
                <td>{{ $userProfile['extra_fields']['bahasa_asing_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['bahasa_asing_aktif_' . $i]['value'] }}</td>
                <td></td>
                <td>{{ $userProfile['extra_fields']['bahasa_daerah_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['bahasa_daerah_aktif_' . $i]['value'] }}</td>
                </tr>
                @else @break @endif @endfor
        </table>
    </div>

    <div>
        <div class="title-lk">
            <h4>RIWAYAT PEKERJAAN <small>(Diurut kebelakang dari yang terakhir/pekerjaan anda saat ini)</small></h4>
        </div>
        <table class="riwayat_pekerjaan">
            <tr class="title-table-lk">
                <td>Nama Perusahaan\Instansi</td>
                <td>Tahun Masuk</td>
                <td>Tahun Keluar</td>
                <td>Jabatan Terakhir</td>
            </tr>
            @for($i=1; $i
            <=10; $i++) @if(isset($userProfile[ 'extra_fields'][ 'perusahaan_' . $i])) <tr class="body-table-lk">
                <td>{{ $userProfile['extra_fields']['perusahaan_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['perusahaan_masuk_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['perusahaan_keluar_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['perusahaan_jabatan_' . $i]['value'] }}</td>
                @else @break @endif @endfor
        </table>
    </div>

    <div>
        <div class="title-lk">
            <h4>PENGALAMAN PSIKOTES</h4>
        </div>
        <table class="riwayat_pekerjaan">
            <tr class="title-table-lk">
                <td style="width: 130px; ">Tanggal</td>
                <td>Untuk Kepentingan</td>
                <td>Pengirim</td>

            </tr>
            @for($i=1;$i
            <=10;$i++) @if(isset($userProfile[ 'extra_fields'][ 'psikotes_year_' . $i])) <tr class="body-table-lk">
                <td>{{ $userProfile['extra_fields']['psikotes_year_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['psikotes_kepentingan_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['psikotes_pengirim_' . $i]['value'] }}</td>
                </tr>
                @else @break @endif @endfor
        </table>
    </div>

    <div>
        <div class="title-lk">
            <h4>KURSUS / PELATIHAN YANG PERNAH DIIKUTI</h4>
        </div>
        <table class="kursus">
            <tr class="title-table-lk">
                <td>Nama Kursus</td>
                <td>Biaya</td>
                <td>Sertifikat/Ijazah</td>
                <td>Lama Kursus</td>
                <td>Tahun Kursus</td>

            </tr>
            @for($i=1;$i
            <=10;$i++) @if(isset($userProfile[ 'extra_fields'][ 'kursus_' . $i])) <tr class="body-table-lk">
                <td>{{ $userProfile['extra_fields']['kursus_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['kursus_dibiayai_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['kursus_ijazah_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['kursus_lama_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['kursus_tahun_' . $i]['value'] }}</td>
                </tr>
                @else @break @endif @endfor
        </table>
    </div>

    <div>
        <div class="title-lk">
            <h4>REFERENSI</h4>
        </div>
        <table class="riwayat_pekerjaan">
            <tr class="title-table-lk">
                <td style="width: 200px;">Nama</td>
                <td>Telepon</td>
                <td>Hubungan dengan diri</td>

            </tr>
            @for($i = 1;$i
            < 10;$i++) @if(isset($userProfile[ 'extra_fields'][ 'referensi_nama_' . $i])) <tr class="body-table-lk">
                <td>{{ $userProfile['extra_fields']['referensi_nama_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['referensi_telepon_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['referensi_hubungan_' . $i]['value'] }}</td>

                </tr>
                @else @break @endif @endfor
        </table>

    </div>

    <div style="padding-bottom: 20px;">
        <div class="title-lk">
            <h4>STATUS PERKAWINAN<small>(Pilih salah satu)</small></h4>
        </div>
        @php $statusNikah = $userProfile['extra_fields']['status_nikah'] ? $userProfile['extra_fields']['status_nikah']['value']
        : '-' 
@endphp
        <div class="left-panel">
            <input type="checkbox" {{ ( $statusNikah=='Belum' ) ? "checked" : "disabled" }}>Belum Menikah<br>
            <input type="checkbox" {{ ( $statusNikah=='Cerai' ) ? "checked" : "disabled" }}>Bercerai<br>
        </div>
        <div class="right-panel">
            <input type="checkbox" {{ ( $statusNikah=='Menikah' ) ? "checked" : "disabled" }}>Sudah Menikah, Tahun<br>
            <input type="checkbox" {{ ( $statusNikah=='JandaDuda' ) ? "checked" : "disabled" }}>Janda / Duda (pasangan meninggal)<br>
        </div>
    </div>

    <div>
        <br/>
        <div class="title-lk">
            <h4>SUSUNAN KELUARGA <small class="color-black-grey">(Untuk yang sudah menikah, Tuliskan nama Istri/Suami dan anak-anak)</small></h4>
        </div>
        <table class="organisasi">
            <tr class="title-table-lk">
                <td style="width: 110px; "></td>
                <td style="width: 150px; ">Nama</td>
                <td style="width: 30px; ">L/P</td>
                <td>Usia *)</td>
                <td>Pendidikan *)</td>
                <td>Pekerjaan *)</td>
            </tr>
            <tr class="body-table-lk">
                <td>Istri/Suami</td>
                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_fields']['spouse']['value'] : "-" }}</td>
                <td>-</td>
                <td>{{ $userProfile['extra_fields']['spouse_birthyear']['value'] ? ( $userProfile['extra_fields']['spouse_birthyear']['value']
                    == "-" ? "-" : ( strlen($userProfile['extra_fields']['spouse_birthyear']['value']) > 4 ? \Carbon\Carbon::parse($userProfile['extra_fields']['spouse_birthyear']['value'])->age
                    : Date("Y") - $userProfile['extra_fields']['spouse_birthyear']['value'] )) : "-" }}</td>
                {{--
                <td>{{ $userProfile['extra_fields']['spouse_birthyear'] ? ($userProfile['extra_fields']['spouse_birthyear']['value']
                    == "-" ? "-" : Date("Y") - $userProfile['extra_fields']['spouse_birthyear']['value']) : "-" }}</td> --}}
                <td>{{ $userProfile['extra_fields']['spouse_pendidikan'] ? $userProfile['extra_fields']['spouse_pendidikan']['value']
                    : "-" }}</td>
                <td>{{ $userProfile['extra_fields']['spouse_pekerjaan'] ? $userProfile['extra_fields']['spouse_pekerjaan']['value']
                    : "-" }}</td>
            </tr>
            @for($i = 1;$i
            < 10;$i++) @if(isset($userProfile[ 'extra_fields'][ 'anak_' . $i])) <tr class="body-table-lk">
                <td>{{ $userProfile['extra_fields']['anak_' . $i]['display_text'] }}</td>
                <td>{{$userProfile['extra_fields']['anak_' . $i]['value'] }}</td>
                <td>{{ $userProfile['extra_fields']['anak_gender_' . $i] ? $userProfile['extra_fields']['anak_gender_' . $i]['value']
                    : "-" }}</td>
                <td>{{ $userProfile['extra_fields']['anak_birthyear_' . $i]['value'] ? ( $userProfile['extra_fields']['anak_birthyear_'
                    . $i]['value'] == "-" ? "-" : ( strlen($userProfile['extra_fields']['anak_birthyear_' . $i]['value'])
                    > 4 ? \Carbon\Carbon::parse($userProfile['extra_fields']['anak_birthyear_' . $i]['value'])->age : Date("Y")
                    - $userProfile['extra_fields']['anak_birthyear_' . $i]['value'] )) : "-" }}</td>
                {{--
                <td>{{ $userProfile['extra_fields']['anak_birthyear_' . $i] ? ($userProfile['extra_fields']['anak_birthyear_'
                    . $i]['value'] == "-" ? "-" : Date("Y") - $userProfile['extra_fields']['anak_birthyear_' . $i]['value'])
                    : "-" }}</td> --}}
                <td>{{ $userProfile['extra_fields']['anak_pendidikan_' . $i] ? $userProfile['extra_fields']['anak_pendidikan_'
                    . $i]['value'] : "-" }}</td>
                <td>{{ $userProfile['extra_fields']['anak_pekerjaan_' . $i] ? $userProfile['extra_fields']['anak_pekerjaan_'
                    . $i]['value'] : "-" }}</td>
                </tr>
                @else @break @endif @endfor
        </table>
        <small class="color-black-grey">*)Bila sudah meninggal dunia, sebutkan pendidikan dan pekerjaan semasa hidupnya, serta usia saat meninggal</small>
    </div>

    <div>
        <div class="title-lk">
            <h4>DAFTAR NAMA SAUDARA ANDA <small>(Ayah, Ibu dan saudara sekandung termasuk diri anda)</small></h4>
        </div>
        <table class="organisasi">
            <tr class="title-table-lk">
                <td style="width: 110px; "></td>
                <td style="width: 150px; ">Nama</td>
                <td style="width: 30px; ">L/P</td>
                <td>Usia *)</td>
                <td>Pendidikan *)</td>
                <td>Pekerjaan *)</td>
            </tr>

            <tr class="body-table-lk">
                <td>Ayah</td>
                <td>{{ $userProfile['extra_fields']['ayah']['value'] ? $userProfile['extra_fields']['ayah']['value'] : "-" }}</td>
                <td>L</td>
                <td>{{ $userProfile['extra_fields']['ayah_birthyear']['value'] ? ($userProfile['extra_fields']['ayah_birthyear']['value']
                    == "-" ? "-" : (strlen($userProfile['extra_fields']['ayah_birthyear']['value']) > 4 ? \Carbon\Carbon::parse($userProfile['extra_fields']['ayah_birthyear']['value'])->age
                    : Date("Y") - $userProfile['extra_fields']['ayah_birthyear']['value'] )) : "-" }}</td>

                <td>{{ $userProfile['extra_fields']['ayah_pendidikan']['value'] ? $userProfile['extra_fields']['ayah_pendidikan']['value']
                    : "-" }}</td>
                <td>{{ $userProfile['extra_fields']['ayah_pekerjaan']['value'] ? $userProfile['extra_fields']['ayah_pekerjaan']['value']
                    : "-" }}</td>
            </tr>
            <tr class="body-table-lk">
                <td>Ibu</td>
                <td>{{ $userProfile['extra_fields']['ibu']['value'] ? $userProfile['extra_fields']['ibu']['value'] : "-" }}</td>
                <td>P</td>
                <td>{{ $userProfile['extra_fields']['ibu_birthyear']['value'] ? ($userProfile['extra_fields']['ibu_birthyear']['value']
                    == "-" ? "-" : (strlen($userProfile['extra_fields']['ibu_birthyear']['value']) > 4 ? \Carbon\Carbon::parse($userProfile['extra_fields']['ibu_birthyear']['value'])->age
                    : Date("Y") - $userProfile['extra_fields']['ibu_birthyear']['value'] )) : "-" }}</td>
                <td>{{ $userProfile['extra_fields']['ibu_pendidikan']['value'] ? $userProfile['extra_fields']['ibu_pendidikan']['value']
                    : "-" }}</td>
                <td>{{ $userProfile['extra_fields']['ibu_pekerjaan']['value'] ? $userProfile['extra_fields']['ibu_pekerjaan']['value']
                    : "-" }}</td>
            </tr>
            @for($i = 1;$i
            < 10;$i++) @if(isset($userProfile[ 'extra_fields'][ 'saudara_' . $i])) <tr class="body-table-lk">
                <td>{{ $userProfile['extra_fields']['saudara_' . $i]['display_text'] . ' ' . $i }}</td>
                <td>{{ $userProfile['extra_fields']['saudara_' . $i]['value']}}</td>
                <td>{{ $userProfile['extra_fields']['saudara_gender_' . $i]['value'] ? $userProfile['extra_fields']['saudara_gender_'
                    . $i]['value'] : "-" }}</td>
                <td>{{ $userProfile['extra_fields']['saudara_birthyear_' . $i]['value'] ? ( $userProfile['extra_fields']['saudara_birthyear_'
                    . $i]['value'] == "-" ? "-" : ( strlen($userProfile['extra_fields']['saudara_birthyear_' . $i]['value'])
                    > 4 ? \Carbon\Carbon::parse($userProfile['extra_fields']['saudara_birthyear_' . $i]['value'])->age :
                    Date("Y") - $userProfile['extra_fields']['saudara_birthyear_' . $i]['value'] )) : "-" }}</td>
                <td>{{ $userProfile['extra_fields']['saudara_pendidikan_' . $i]['value'] ? $userProfile['extra_fields']['saudara_pendidikan_'
                    . $i]['value'] : "-" }}</td>
                <td>{{ $userProfile['extra_fields']['saudara_pekerjaan_' . $i]['value'] ? $userProfile['extra_fields']['saudara_pekerjaan_'
                    . $i]['value'] : "-" }}</td>
                </tr>
                @else @break @endif @endfor

        </table>
        <small class="color-black-grey">*)Bila sudah meninggal dunia, sebutkan pendidikan dan pekerjaan semasa hidupnya, serta usia saat meninggal</small>
    </div>
</body>

</html>