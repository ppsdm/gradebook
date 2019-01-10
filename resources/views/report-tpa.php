<html>
    <head>
        <title>Report TPA</title>
        <link rel="stylesheet" type="text/css" href="<?php echo url('assets/style-custom.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo url('assets/table-style-tpa.css') ?>">
    </head>
    <body>
        <div class="A4 landscape">
            <section class="sheet padding-5mm">
                <div>
                    <div class="title-tpa">
                        <h4>Sistem Penilaian :<br> Nilai Minimum 200 dan nilai Maksimum 800 untuk 3 jenis tes</h4>
                    </div>
                    <table class="penilaian">
                        <tr class="title-table-tpa">
                            <td style="border: 0px;"></td>
                            <td>Jenis Tes</td>
                            <td>Jumlah Soal</td>
                            <td>Jumlah Soal Benar</td>
                            <td>Nilai TPA</td>
                            <td colspan="4">Keterangan</td>
                        </tr>
                        <tr class="body-table-tpa">
                            <td style="border: 0px;"></td>
                            <td class="body-jenis-tes">1. Kemampuan Verbal</td>
                            <td>60</td>
                            <td>45</td>
                            <td>65.00</td>
                            <td colspan="4">Subtest 1 - 3</td>
                        </tr>
                        <tr class="body-table-tpa">
                            <td style="border: 0px;"></td>
                            <td class="body-jenis-tes">2. Kemampuan Kuantitatif</td>
                            <td>45</td>
                            <td>10</td>
                            <td>33.33</td>
                            <td colspan="4">Subtest 4 - 6</td>
                        </tr>
                        <tr class="body-table-tpa">
                            <td style="border: 0px;"></td>                            
                            <td class="body-jenis-tes">3. Kemampuan Penalaran</td>
                            <td>35</td>
                            <td>20</td>
                            <td>54.29</td>
                            <td colspan="4">Subtest 7 - 9</td>
                        </tr>
                        <tr class="body-table-tpa">
                            <td style="border: 0px;"></td>
                            <td></td>
                            <td>140</td>
                            <td>75</td>
                            <td>508.73</td>
                            <td colspan="4" style="border: 0px;"></td>
                        </tr>
                        <tr class="collumn-empty">
                            <td style="border: 0px;"></td>
                            <td style="border: 0px;"></td>
                            <td style="border: 0px;"></td>
                            <td style="border: 0px;"></td>
                            <td style="border: 0px;"></td>
                            <td colspan="4" style="border: 0px;"></td>
                        </tr>
                        <tr>
                            <td style="border: 0px;"></td>
                            <td style="border: 0px;">Nilai Min</td>
                            <td style="border: 0px; text-align: right; ">200</td>
                            <td style="border: 0px;"></td>
                            <td style="border: 0px;"></td>
                            <td colspan="4" style="border: 0px;"></td>
                        </tr>
                        <tr>
                            <td style="border: 0px;"></td>
                            <td style="border: 0px;">Nilai Max</td>
                            <td style="border: 0px; text-align: right;">800</td>
                            <td style="border: 0px;"></td>
                            <td style="border: 0px;"></td>
                            <td colspan="4" style="border: 0px;"></td>
                        </tr>
                        <tr class="collumn-empty">
                            <td style="border: 0px;"></td>
                            <td style="border: 0px;"></td>
                            <td style="border: 0px;"></td>
                            <td style="border: 0px;"></td>
                            <td style="border: 0px;"></td>
                            <td colspan="4" style="border: 0px;"></td>
                        </tr>
                        <tr class="collumn-empty">
                            <td colspan="11" style="border: 0px; text-align: center; font-weight: 700; font-size: 12px !important;">Simulasi Perhitungan Nilai TPA dan Kualifikasi <br> <hr></td>
                        </tr>
                        <tr class="title-table-tpa-simulasi">
                            <td rowspan="2">No</td>
                            <td rowspan="2">Nama</td>
                            <td colspan="3">Jumlah Benar</td>
                            <td rowspan="2">å</td>
                            <td colspan="3">Nilai TPA</td>
                            <td rowspan="2">Total</td>
                            <td rowspan="2">Nilai Akhir</td>
                        </tr>
                        <tr class="body-table-tpa">
                            <td>Kemampuan verbal</td>
                            <td>Kemampuan kuantitatif</td>
                            <td>Kemampuan Penalaran</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <!-- data -->
                        <?php for ($x = 1; $x <= 20; $x++) { ?>
                        <tr class="body-table-tpa">
                            <td> <?php echo $x; ?> </td>
                            <td class="text-left">Samsul Arifin</td>
                            <td>60</td>
                            <td>45</td>
                            <td>35</td>
                            <td>140</td>
                            <td>80</td>
                            <td>80</td>
                            <td>80</td>
                            <td>800.00</td>
                            <td class="tex-left">Baik</td>
                        </tr>
                        <?php  } ?>
                        <!-- footer-->
                        <tr class="collumn-empty">
                            <td colspan="7" style="border: 0px;"></td>
                        </tr>
                        <tr class="body-table-tpa">
                            <td colspan="6" style="border: 0px;"></td>
                            <td colspan="3">Standar Deviasi</td>
                            <td>124.9</td>
                        </tr>
                        <tr class="body-table-tpa">
                            <td colspan="6" style="border: 0px;"></td>
                            <td colspan="3">Rata - Rata</td>
                            <td>457.92</td>
                        </tr>
                        <tr class="collumn-empty">
                            <td colspan="7" style="border: 0px;"></td>
                        </tr>
                        <tr class="body-table-tpa">
                            <td colspan="4" style="border: 0px;"></td>
                            <td colspan="2" style="border: 0px; ">Kualifikasi</td>
                            <td colspan="2">Baik</td>
                            <td> - </td>
                            <td>521.39</td>
                        </tr>
                        <tr class="body-table-tpa">
                            <td colspan="6" style="border: 0px;"></td>
                            <td colspan="2">Cukup</td>
                            <td> - </td>
                            <td>520.39</td>
                        </tr>
                        <tr class="body-table-tpa">
                            <td colspan="6" style="border: 0px;"></td>
                            <td colspan="2">Kurang</td>
                            <td> - </td>
                            <td>519.39</td>
                        </tr>
                    </table>
                </div>
            </section>
        </div>
    </body>
</html>