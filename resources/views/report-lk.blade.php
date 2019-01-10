<html>
    <head>
        <title>Report LK</title>
        <link rel="stylesheet" type="text/css" href="<?php echo url('assets/style-custom.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo url('assets/table-style-lk.css') ?>">
    </head>
    <body>
        <div class="A4 landscape">
            <section class="sheet padding-5mm">
                <div class="left-panel">
                    <div>    
                        <div class="title-lk">
                            <h4>RIWAYAT PEKERJAAN <small>(Diurut kebelakang dari yang terakhir/pekerjaan anda saat ini)</small></h4>
                        </div>
                        <table class="riwayat_pekerjaan">
                            <tr class="title-table-lk">
                                <td>Nama Perusahaan\Instansi</td>
                                <td>Bergerak Dibidang</td>
                                <td>Tahun</td>
                                <td>Jabatan Terakhir</td>
                                <td>Alasan Berhenti</td>
                            </tr>
                            @for($i = 1;$i < 10;$i++)
                                @if(isset($userProfile['extra_fields']['perusahaan_' . $i]))
                                    <tr class="body-table-lk">
                                        <td>{{ $userProfile['extra_fields']['perusahaan_' . $i]['value'] }}</td>
                                        <td>-</td>
                                        <td>{{ $userProfile['extra_fields']['mulai_kerja_' . $i]['value'] }}</td>
                                        <td>{{ $userProfile['extra_fields']['jabatan_' . $i]['value'] }}</td>
                                        <td>-</td>
                                    </tr>
                                @else
                                    @break
                                @endif
                            @endfor
                        </table>
                    </div>
                    <div>
                        <div class="title-lk">
                            <h4>PENGALAMAN MEMIMPIN DAN BERORGANISASI</h4>
                        </div>
                        <table class="organisasi">
                            <tr class="title-table-lk">
                                <td>Nama Organisasi</td>
                                <td>Jenis Organisasi</td>
                                <td>Tahun</td>
                                <td>Jabatan</td>
                            </tr>
                            @for($i = 1;$i < 10;$i++)
                                @if(isset($userProfile['extra_fields']['organisasi_' . $i]))
                                    <tr class="body-table-lk">
                                        <td>{{ $userProfile['extra_fields']['organisasi_' . $i]['value'] }}</td>
                                        <td>-</td>
                                        <td>{{ $userProfile['extra_fields']['organisasi_tahun_' . $i]['value'] }}</td>
                                        <td>{{ $userProfile['extra_fields']['organisasi_jabatan_' . $i]['value'] }}</td>
                                    </tr>
                                @else
                                    @break
                                @endif
                            @endfor
                        </table>
                    </div>
                    <div>
                        <div class="title-lk">
                            <h4>PENGALAMAN MENGIKUTI PSIKOTES<small>(Diurut kebelakang dari yang terakhir)</small></h4>
                        </div>
                        <table class="organisasi">
                            <tr class="title-table-lk">
                                <td>Bulan / Tahun</td>
                                <td>Untuk Kepentingan</td>
                                <td>Pengirim</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <br/>
                        <div class="title-lk">
                            <small>Jika dibutuhkan data tambahan mengenai diri saya, saya mengijinkan pemeriksa untuk bertanya tentang diri saya kepada orang-orang berikut ini :</small>
                        </div>
                        <table class="organisasi">
                            <tr class="title-table-lk">
                                <td>Nama</td>
                                <td>Nomor Telepon / HP</td>
                                <td>Hubungan dengan diri saya</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="right-panel">
                    <div class="lk-profile-title">
                        <h3>LEMBAR KEHIDUPAN</h3>
                        <h4>RAHASIA</h4>
                    </div>
                    <table class="table-profile">
                        <tr>
                            <td>Nomor Test</td>
                            <td>:</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>: {{ $userProfile['firstname'] . ' ' . $userProfile['lastname'] }}</td>
                        </tr>
                        <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td>: 
                                {{ $userProfile['extra_fields']['birthplace'] ? $userProfile['extra_fields']['birthplace']['value'] : '-'  }}, 
                                {{ $userProfile['extra_fields']['birthdate'] ? $userProfile['extra_fields']['birthdate']['value'] : '-'  }}
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: {{ $userProfile['extra_fields']['gender'] ? $userProfile['extra_fields']['gender']['value'] : '-'  }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: {{ $userProfile['address'] }}</td>
                        </tr>
                        <tr>
                            <td>Telepon / HP</td>
                            <td>: {{ $userProfile['phone'] }}</td>
                        </tr>
                        <tr>
                            <td>eMail</td>
                            <td>: {{ $userProfile['email'] }}</td>
                        </tr>
                        <tr>
                            <td>Facebook</td>
                            <td>: {{ $userProfile['extra_fields']['facebook']['value'] }}</td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td>: {{ $userProfile['extra_fields']['instagram']['value'] }}</td>
                        </tr>
                        <tr>
                            <td>Twitter</td>
                            <td>: {{ $userProfile['extra_fields']['twitter']['value'] }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td>:</td>
                        </tr>
                        <tr>
                            <td>Agama / Kepercayaan</td>
                            <td>: {{ $userProfile['extra_fields']['religion']['value'] }}</td>
                        </tr>
                        <tr>
                            <td>Suku Bangsa / Asal Bangsa</td>
                            <td>: {{ $userProfile['extra_fields']['suku_bangsa']['value'] }}</td>
                        </tr>
                        <tr>
                            <td>Jabatan Saat Ini</td>
                            <td>: {{ $userProfile['extra_fields']['jabatan_saat_ini']['value'] }}</td>
                        </tr>
                        <tr>
                            <td>Prospek Jabatan</td>
                            <td>: {{ $userProfile['extra_fields']['prospek_jabatan']['value'] }}</td>
                        </tr>
                    </table>
                </div>
            </section>
        </div>
        <div class="A4 landscape">
            <section class="sheet padding-5mm">
                <div class="left-panel">
                    <div>    
                        <div class="title-lk">
                            <h4>RIWAYAT PENDIDIKAN <small>(Diurut kebelakang dari pendidikan tertinggi, termasuk yang masih dijalani)</small></h4>
                        </div>
                        <table class="riwayat_pekerjaan">
                            <tr class="title-table-lk">
                                <td>Tingkat Pendidikan</td>
                                <td>Nama Sekolah/Perguruan Tinggi</td>
                                <td>Fakultas / Jurusan</td>
                                <td>Tahun Masuk</td>
                                <td>Tahun Lulus</td>
                            </tr>
                            @for($i = 1;$i < 10;$i++)
                                @if(isset($userProfile['extra_fields']['nama_perguruan_tinggi_' . $i]))
                                    <tr class="body-table-lk">
                                        <td>{{ $userProfile['extra_fields']['jenjang_' . $i]['value'] }}</td>
                                        <td>{{ $userProfile['extra_fields']['nama_perguruan_tinggi_' . $i]['value'] }}</td>
                                        <td>{{ $userProfile['extra_fields']['fakultas_' . $i]['value'] }}</td>
                                        <td>-</td>
                                        <td>{{ $userProfile['extra_fields']['tahun_lulus_' . $i]['value'] }}</td>
                                    </tr>
                                @else
                                    @break
                                @endif
                            @endfor
                        </table>
                        <small> Indeks Kumulatif (IPK) pada saat tamat Diploma / S1: {{ $userProfile['extra_fields']['nilai_ipk_1']['value'] ?: "-" }}</small><br/>
                        <small> Indeks Kumulatif (IPK) pada saat tamat S2: {{ $userProfile['extra_fields']['nilai_ipk_2']['value'] ?: "-" }}</small>
                    </div>
                    <div>
                        <div class="title-lk">
                            <h4>KURSUS / PELATIHAN YANG PERNAH DIIKUTI</h4>
                        </div>
                        <table class="organisasi">
                            <tr class="title-table-lk">
                                <td>Jenis Kursus / Pelatihan</td>
                                <td>Tahun</td>
                                <td>Lama Kursus</td>
                                <td>Ijazah / Sertifikat</td>
                                <td>Dibiayai Oleh</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <div class="title-lk">
                            <h4>BAHASA YANG DIKUASAI</h4>
                        </div>
                        <div class="left-panel">
                            <table class="organisasi">
                                <tr class="title-table-lk">
                                    <td colspan="2">BAHASA ASING YANG DIKUASAI</td>
                                </tr>
                                <tr class="body-table-lk">
                                    <td>X</td>
                                    <td>X</td>
                                </tr>
                                <tr class="body-table-lk">
                                    <td>X</td>
                                    <td>X</td>
                                </tr>
                                <tr class="body-table-lk">
                                    <td>X</td>
                                    <td>X</td>
                                </tr>
                            </table>
                        </div>
                        <div class="right-panel">
                        <table class="organisasi">
                            <tr class="title-table-lk">
                                <td colspan="2">BAHASA DAERAH YANG DIKUASAI</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>X</td>
                                <td>X</td>
                            </tr>
                        </table>
                        </div>
                        
                    </div>
                </div>
                <div class="right-panel">
                    <div>
                        <div class="title-lk">
                            <h4>STATUS PERKAWINAN<small>(Pilih salah satu)</small></h4>
                        </div>
                        <div class="left-panel">
                            <input type="checkbox" checked>Belum Menikah<br>
                            <input type="checkbox">Bercerai<br>
                        </div>
                        <div class="right-panel">
                            <input type="checkbox">Sudah Menikah, Tahun<br>
                            <input type="checkbox">Janda / Duda (pasangan meninggal)<br>
                        </div>
                    </div>
                    <div>
                        <br/>
                        <div class="title-lk">
                            <h4>SUSUNAN KELUARGA <small>(Untuk yang sudah menikah, Tuliskan nama Istri/Suami dan anak-anak)</small></h4>
                        </div>
                        <table class="organisasi">
                            <tr class="title-table-lk">
                                <td></td>
                                <td>Nama</td>
                                <td>L/P</td>
                                <td>Usia *)</td>
                                <td>Pendidikan *)</td>
                                <td>Pekerjaan *)</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>Istri/Suami</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_field']['spouse']['value'] : "-" }}</td>
                                <td>-</td>
                                <td>{{ $userProfile['extra_fields']['spouse_birthday'] ? \Carbon\Carbon::parse($userProfile['extra_field']['spouse_birthday']['value'])->age: "-" }}</td>
                                <td>{{ $userProfile['extra_fields']['spouse_pendidikan'] ? $userProfile['extra_field']['spouse_pendidikan']['value'] : "-" }}</td>
                                <td>{{ $userProfile['extra_fields']['spouse_pekerjaan'] ? $userProfile['extra_field']['spouse_pekerjaan']['value'] : "-" }}</td>
                            </tr>
                            @for($i = 1;$i < 10;$i++)
                                @if(isset($userProfile['extra_fields']['anak_' . $i]))
                                    <tr class="body-table-lk">
                                        <td>{{ $userProfile['extra_fields']['anak_' . $i]['display_text'] }}</td>
                                        <td>{{ $userProfile['extra_fields']['anak_' . $i] }}</td>
                                        <td>-</td>
                                        <td>{{ $userProfile['extra_fields']['anak_birthday_' . $i] ? \Carbon\Carbon::parse($userProfile['extra_field']['anak_birthday']['value'])->age : "-" }}</td>
                                        <td>{{ $userProfile['extra_fields']['anak_pendidikan_' . $i] ? $userProfile['extra_fields']['anak_pendidikan_' . $i]['value'] : "-" }}</td>
                                        <td>{{ $userProfile['extra_fields']['anak_pekerjaan_' . $i] ? $userProfile['extra_fields']['anak_pekerjaan_' . $i]['value'] : "-" }}</td>
                                    </tr>
                                @else
                                    @break
                                @endif
                            @endfor

                        </table>
                        <br>
                        <small>*)Bila sudah meninggal dunia, sebutkan pendidikan dan pekerjaan semasa hidupnya, serta usia saat meninggal</small>
                    </div>  
                    <div>
                        <div class="title-lk">
                            <h4>DAFTAR NAMA SAUDARA ANDA <small>(Ayah, Ibu dan saudara sekandung termasuk diri anda)</small></h4>
                        </div>
                        <table class="organisasi">
                            <tr class="title-table-lk">
                                <td></td>
                                <td>Nama</td>
                                <td>L/P</td>
                                <td>Usia *)</td>
                                <td>Pendidikan *)</td>
                                <td>Pekerjaan *)</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>Ayah</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_field']['ayah']['value'] : "-" }}</td>
                                <td>L</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? \Carbon\Carbon::parse($userProfile['extra_field']['ayah_birthday']['value'])->age : "-" }}</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_field']['ayah_pendidikan']['value'] : "-" }}</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_field']['ayah_pekerjaan']['value'] : "-" }}</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>Ibu</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_field']['ibu']['value'] : "-" }}</td>
                                <td>P</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? \Carbon\Carbon::parse($userProfile['extra_field']['ibu_birthday']['value'])->age : "-" }}</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_field']['ibu_pendidikan']['value'] : "-" }}</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_field']['ibu_pekerjaan']['value'] : "-" }}</td>
                            </tr>

                            @for($i = 1;$i < 10;$i++)
                                @if(isset($userProfile['extra_fields']['saudara_' . $i]))
                                    <tr class="body-table-lk">
                                        <td>{{ $userProfile['extra_fields']['saudara_' . $i]['display_text'] . ' ' . $i }}</td>
                                        <td>{{ $userProfile['extra_fields']['saudara_' . $i]['value'] }}</td>
                                        <td>-</td>
                                        <td>{{ $userProfile['extra_fields']['saudara_birthday_' . $i] ? \Carbon\Carbon::parse($userProfile['extra_field']['saudara_birthday']['value'])->age : "-" }}</td>
                                        <td>{{ $userProfile['extra_fields']['saudara_pendidikan_' . $i] ? $userProfile['extra_fields']['saudara_pendidikan_' . $i]['value'] : "-" }}</td>
                                        <td>{{ $userProfile['extra_fields']['saudara_pekerjaan_' . $i] ? $userProfile['extra_fields']['saudara_pekerjaan_' . $i]['value'] : "-" }}</td>
                                    </tr>
                                @else
                                    @break
                                @endif
                            @endfor
                        </table>
                        <br/>
                        <small>*)Bila sudah meninggal dunia, sebutkan pendidikan dan pekerjaan semasa hidupnya, serta usia saat meninggal</small>
                    </div>  
                    
                </div>
            </section>
        </div>
    </body>
</html>