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
                                <td>Tahun</td>
                                <td>Jabatan Terakhir</td>
                            </tr>
                            @for($i = 1;$i < 10;$i++)
                                @if(isset($userProfile['extra_fields']['perusahaan_' . $i]))
                                    <tr class="body-table-lk">
                                        <td>{{ $userProfile['extra_fields']['perusahaan_' . $i]['value'] }}</td>
                                        <td>{{ $userProfile['extra_fields']['mulai_kerja_' . $i]['value'] }}</td>
                                        <td>{{ $userProfile['extra_fields']['jabatan_' . $i]['value'] }}</td>
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
                            @for($i = 1;$i <= 10 ;$i++)
                                @if(isset($userProfile['extra_fields']['kursus_' . $i]))
                                    <tr class="body-table-lk">
                                        <td>{{ $userProfile['extra_fields']['kursus_' . $i]['value'] }}</td>
                                        <td>{{ $userProfile['extra_fields']['kursus_dibiayai_' . $i]['value'] ? $userProfile['extra_fields']['kursus_dibiayai_' . $i]['value'] : '-' }}</td>
                                        <td>{{ $userProfile['extra_fields']['kursus_ijazah_' . $i]['value'] ? $userProfile['extra_fields']['kursus_ijazah_' . $i]['value'] : '-' }}</td>
                                        <td>{{ $userProfile['extra_fields']['kursus_lama_' . $i]['value'] }}</td>
                                        <td>{{ $userProfile['extra_fields']['kursus_tahun_' . $i]['value'] }}</td>
                                    </tr>
                                @else
                                    @break
                                @endif
                            @endfor
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
                            @for($i = 1;$i <= 10 ;$i++)
                                @if(isset($userProfile['extra_fields']['bahasa_asing_' . $i]))
                                    <tr class="body-table-lk">
                                        <td>{{ $userProfile['extra_fields']['bahasa_asing_' . $i]['value'] }}</td>
                                        <td>{{ $userProfile['extra_fields']['bahasa_asing_aktif_' . $i]['value'] }}</td>
                                        <td> - </td>
                                        <td>{{ $userProfile['extra_fields']['bahasa_daerah_' . $i]['value'] }}</td>
                                        <td>{{ $userProfile['extra_fields']['bahasa_daerah_aktif_' . $i]['value'] }}</td>
                                    </tr>
                                @else
                                    @break
                                @endif
                            @endfor
                        </table>
                    </div>
                </div>
                <div class="right-panel">
                    <div class="lk-profile-title">
                        <h3>LEMBAR KEHIDUPAN</h3>
                        <h4>RAHASIA</h4>
                    </div>
                    <div class="lk-profile-image">
                        <img style="width: 100px;" src={{ "http://online.ppsdm.com/app/upload/users/" . $userProfile['id'] . "/" . $userProfile['id'] . "/" . $userProfile['picture_uri']}}>
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
                                {{ $userProfile['extra_fields']['birthday']['value'] ? \Carbon\Carbon::parse($userProfile['extra_fields']['birthday']['value'] )->format('d-m-Y') : '-'  }}
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: {{ $userProfile['extra_fields']['gender'] ? $userProfile['extra_fields']['gender']['value'] : '-'  }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: {{ $userProfile['extra_fields']['alamat'] ? $userProfile['extra_fields']['alamat']['value'] : '-'  }}</td>
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
                            <td>: {{ $userProfile['extra_fields']['facebook'] ? $userProfile['extra_fields']['facebook']['value'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td>: {{ $userProfile['extra_fields']['instagram'] ? $userProfile['extra_fields']['instagram']['value'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td>Twitter</td>
                            <td>: {{ $userProfile['extra_fields']['twitter'] ? $userProfile['extra_fields']['twitter']['value'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td>LinkedIn</td>
                            <td>: {{ $userProfile['extra_fields']['linkedin_url'] ? $userProfile['extra_fields']['linkedin_url']['value'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td>: {{ $userProfile['extra_fields']['jenjang_1'] ? $userProfile['extra_fields']['jenjang_1']['value'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td>Agama / Kepercayaan</td>
                            <td>: {{ $userProfile['extra_fields']['religion'] ? $userProfile['extra_fields']['religion']['value'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td>Suku Bangsa / Asal Bangsa</td>
                            <td>: {{ $userProfile['extra_fields']['suku_bangsa'] ? $userProfile['extra_fields']['suku_bangsa']['value'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td>Jabatan Saat Ini</td>
                            <td>: {{ $userProfile['extra_fields']['jabatan_saat_ini'] ? $userProfile['extra_fields']['jabatan_saat_ini']['value'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td>Prospek Jabatan</td>
                            <td>: {{ $userProfile['extra_fields']['prospek_jabatan'] ? $userProfile['extra_fields']['prospek_jabatan']['value'] : '-' }}</td>
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
                </div>
                <div class="right-panel">
                    <div>
                        <div class="title-lk">
                            <h4>STATUS PERKAWINAN<small>(Pilih salah satu)</small></h4>
                        </div>
                        @php
                            $statusNikah = $userProfile['extra_fields']['status_nikah'] ? $userProfile['extra_fields']['status_nikah']['value'] : '-'
                        @endphp

                        <div class="left-panel">
                            <input type="checkbox" {{ ( $statusNikah == 'Belum' ) ? "checked" : "disabled" }}>Belum Menikah<br>
                            <input type="checkbox" {{ ( $statusNikah == 'Cerai' ) ? "checked" : "disabled" }}>Bercerai<br>
                        </div>
                        <div class="right-panel">
                            <input type="checkbox" {{ ( $statusNikah == 'Menikah' ) ? "checked" : "disabled" }}>Sudah Menikah, Tahun<br>
                            <input type="checkbox" {{ ( $statusNikah == 'JandaDuda' ) ? "checked" : "disabled" }}>Janda / Duda (pasangan meninggal)<br>
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
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_fields']['spouse']['value'] : "-" }}</td>
                                <td>-</td>
                                <td>{{ $userProfile['extra_fields']['spouse_birthday'] ? \Carbon\Carbon::parse($userProfile['extra_fields']['spouse_birthday']['value'])->age: "-" }}</td>
                                <td>{{ $userProfile['extra_fields']['spouse_pendidikan'] ? $userProfile['extra_fields']['spouse_pendidikan']['value'] : "-" }}</td>
                                <td>{{ $userProfile['extra_fields']['spouse_pekerjaan'] ? $userProfile['extra_fields']['spouse_pekerjaan']['value'] : "-" }}</td>
                            </tr>
                            @for($i = 1;$i < 10;$i++)
                                @if(isset($userProfile['extra_fields']['anak_' . $i]))
                                    <tr class="body-table-lk">
                                        <td>{{ $userProfile['extra_fields']['anak_' . $i]['display_text'] }}</td>
                                        <td>{{ explode("::", $userProfile['extra_fields']['anak_' . $i]['value'])[1] }}</td>
                                        <td>-</td>
                                        <td>{{ $userProfile['extra_fields']['anak_birthday_' . $i]['value'] ? \Carbon\Carbon::parse($userProfile['extra_fields']['anak_birthday_' . $i]['value'])->format('d/m/Y') : "-" }}</td>

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
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_fields']['ayah']['value'] : "-" }}</td>
                                <td>L</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? \Carbon\Carbon::parse($userProfile['extra_fields']['ayah_birthday']['value'])->age : "-" }}</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_fields']['ayah_pendidikan']['value'] : "-" }}</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_fields']['ayah_pekerjaan']['value'] : "-" }}</td>
                            </tr>
                            <tr class="body-table-lk">
                                <td>Ibu</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_fields']['ibu']['value'] : "-" }}</td>
                                <td>P</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? \Carbon\Carbon::parse($userProfile['extra_fields']['ibu_birthday']['value'])->age : "-" }}</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_fields']['ibu_pendidikan']['value'] : "-" }}</td>
                                <td>{{ $userProfile['extra_fields']['spouse'] ? $userProfile['extra_fields']['ibu_pekerjaan']['value'] : "-" }}</td>
                            </tr>
                            @for($i = 1;$i < 10;$i++)
                                @if(isset($userProfile['extra_fields']['saudara_' . $i]))
                                    <tr class="body-table-lk">
                                        <td>{{ $userProfile['extra_fields']['saudara_' . $i]['display_text'] . ' ' . $i }}</td>
                                        <td>{{ explode("::", $userProfile['extra_fields']['saudara_' . $i]['value'])[1] }}</td>
                                        <td>-</td>
                                        <td>{{ $userProfile['extra_fields']['saudara_birthday_' . $i]['value'] ? \Carbon\Carbon::parse($userProfile['extra_fields']['saudara_birthday_' . $i]['value'])->format('d/m/Y') : "-" }}</td>
                                        <td>{{ $userProfile['extra_fields']['saudara_pendidikan_' . $i]['value'] ? $userProfile['extra_fields']['saudara_pendidikan_' . $i]['value'] : "-" }}</td>
                                        <td>{{ $userProfile['extra_fields']['saudara_pekerjaan_' . $i]['value'] ? $userProfile['extra_fields']['saudara_pekerjaan_' . $i]['value'] : "-" }}</td>
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