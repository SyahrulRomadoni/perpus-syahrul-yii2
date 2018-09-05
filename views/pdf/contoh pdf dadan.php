<div class="kode">
    <span>
        Kode . F-2.01
    </span>
</div>

<div class="clear">
    &nbsp;
</div>

<div class="header">
    <div class="left">
        <table width="100%" autosize="1">
            <tr>
                <td class="caption">
                    Pemerintah Desa / Kelurahan
                </td>
                <td class="point">
                    :
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="caption">
                    Kecamatan
                </td>
                <td class="point">
                    :
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="caption">
                    Kabupaten/Kota
                </td>
                <td class="point">
                    :
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
                <td class="caption">
                    Kode Wilayah
                </td>
                <td class="point">
                    :
                </td>
                <?php for ($i=1; $i <= 9; $i++) { ?>
                    <td class="kotak"></td>
                <?php } ?>
                <td>

                </td>
            </tr>
        </table>
    </div>
    <div class="right">
        <table width="100%" autosize="1">
            <tr>
                <td width="8%">
                    Ket
                </td>
                <td>
                    :
                </td>
                <td>
                    Lembar 1
                </td>
                <td>
                    :
                </td>
                <td>
                    UPTD/Instansi Pelaksana
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>

                </td>
                <td>
                    Lembar 2
                </td>
                <td>
                    :
                </td>
                <td>
                    Untuk yang bersangkutan
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>

                </td>
                <td>
                    Lembar 3
                </td>
                <td>
                    :
                </td>
                <td>
                    Desa/Kelurahan
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>

                </td>
                <td>
                    Lembar 4
                </td>
                <td>
                    :
                </td>
                <td>
                    Kecamatan
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="t-center">
    <h4>
        Surat Keterangan Kelahiran
    </h4>
</div>

<div>
    <table class="form" width="100%">
        <tr>
            <td class="caption">
                Nama Kepala Keluarga
            </td>
            <td class="point">
                :
            </td>
            <?php

            for ($i = 0; $i < 25; $i++) { ?>
                <td class="kotak">
                    &nbsp;
                </td>
            <?php } ?>
            <td class="kanan"></td>
        </tr>
        <tr>
            <td class="caption">
                Nomor Kartu Keluarga
            </td>
            <td class="point">
                :
            </td>
            <?php

            for ($i = 1; $i <= 20 ; $i++) { ?>
                <td class="kotak">
                    &nbsp;
                </td>
            <?php } ?>
            <td class="kanan"></td>
        </tr>
    </table>
</div>

<!--===============================
=            BAYI/ANAK            =
================================-->
<div class="konten">
    <div class="section">
        <h5>
            BAYI/ANAK
        </h5>
        <div class="clear"></div>
        <table width="100%" autosize="1">
            <tr>
                <td class="nomor">
                    1.
                </td>
                <td class="caption">
                    Nama
                </td>
                <td class="point">
                    :
                </td>
                <?php
                for ($i = 0; $i < 25; $i++) { ?>
                    <td class="kotak">
                        &nbsp;
                    </td>
                <?php } ?>
                <td class="kanan">

                </td>
            </tr>
            <tr>
                <td class="nomor">
                    2.
                </td>
                <td class="caption">
                    Jenis Kelamin
                </td>
                <td class="point">
                    :
                </td>
                <td class="kotak">
                   
                </td>
                <td class="colspan" colspan="6">
                    1. Laki-laki
                </td>
                <td class="colspan" colspan="18">
                    2. Perempuan
                </td>
                <td class="kanan">

                </td>
            </tr>
            <tr>
                <td class="nomor">
                    3.
                </td>
                <td class="caption">
                    Tempat dilahirkan
                </td>
                <td class="point">
                    :
                </td>
                <td class="kotak">
                    &nbsp;
                </td>
                <td class="colspan" colspan="4">
                    1. RS/RB
                </td>
                <td class="colspan" colspan="5">
                    2. Puskesmas
                </td>
                <td class="colspan" colspan="4">
                    3. Polindes
                </td>
                <td class="colspan" colspan="4">
                    4. Rumah
                </td>
                <td class="colspan" colspan="6">
                    5. Lainnya
                </td>
                <td class="kanan">

                </td>
            </tr>
            <tr>
                <td class="nomor">
                    4.
                </td>
                <td class="caption">
                    Tempat kelahiran
                </td>
                <td class="point">
                    :
                </td>
                <?php

            
                for ($i = 0; $i < 16; $i++) { ?>
                    <td class="kotak">
                        &nbsp;
                    </td>
                <?php } ?>
                <td colspan="9"></td>
                <td class="kanan">

                </td>
            </tr>
            <tr>
                <td class="nomor">
                    5.
                </td>
                <td class="caption">
                    Hari dan Tanggal lahir
                </td>
                <td class="point">
                    :
                </td>
                <td colspan="2">
                    Hari
                </td>
                <?php
                for ($i = 0; $i < 6; $i++) { ?>
                    <td class="kotak">
                        &nbsp;
                    </td>
                <?php } ?>
                <td colspan="2" class="t-center">
                    Tgl
                </td>
                <?php
                for ($i = 0; $i < 2; $i++) { ?>
                    <td class="kotak">
                        &nbsp;
                    </td>
                <?php } ?>
                <td colspan="3" class="t-center">
                    Bln
                </td>
                <?php
                for ($i = 0; $i < 2; $i++) { ?>
                    <td class="kotak">
                        &nbsp;
                    </td>
                <?php } ?>
                <td colspan="3" class="t-center">
                    Thn
                </td>
                <?php
                for ($i = 0; $i < 4; $i++) { ?>
                    <td class="kotak">
                        &nbsp;
                    </td>
                <?php } ?>
                <td></td>
                <td class="kanan">

                </td>
            </tr>
            <tr>
                <td class="nomor">
                    6.
                </td>
                <td class="caption">
                    Pukul
                </td>
                <td class="point">
                    :
                </td>
                <?php
                for ($i = 0; $i < 4; $i++) { ?>
                    <td class="kotak">
                        &nbsp;
                    </td>
                <?php } ?>
                <td colspan="21"></td>
                <td class="kanan">

                </td>
            </tr>

            <tr>
                <td class="nomor">
                    7.
                </td>
                <td class="caption">
                    Jenis Kelahiran
                </td>
                <td class="point">
                    :
                </td>

                <td class="kotak">
                    &nbsp;
                </td>

                <td class="colspan" colspan="4">
                    1. Tunggal
                </td>
                <td class="colspan" colspan="4">
                    2. Kembar 2
                </td>
                <td class="colspan" colspan="4">
                    3. Kembar 3
                </td>
                <td class="colspan" colspan="4">
                    4. Kembar 4
                </td>
                <td class="colspan" colspan="4">
                    5. Lainnya
                </td>

                <td colspan="4">

                </td>
                <td class="kanan">

                </td>
            </tr>

            <tr>
                <td class="nomor">
                    8.
                </td>
                <td class="caption">
                    Kelahiran Ke
                </td>
                <td class="point">
                    :
                </td>

                <td class="kotak">
                    &nbsp;
                </td>

                <td class="colspan">
                    1.
                </td>
                <td class="colspan">
                    2.
                </td>
                <td class="colspan">
                    3.
                </td>
                <td class="colspan">
                    4.
                </td>
                <td colspan="5" class="t-center">
                    ..................
                </td>
                <td colspan="15"></td>
                <td class="kanan">

                </td>
            </tr>

            <tr>
                <td class="nomor">
                    9.
                </td>
                <td class="caption">
                    Penolong Kelahiran
                </td>
                <td class="point">
                    :
                </td>

                <td class="kotak">
                    &nbsp;
                </td>

                <td class="colspan" colspan="3">
                    1. Dokter
                </td>
                <td class="colspan" colspan="6">
                    2. Bidang/Perawat
                </td>
                <td class="colspan" colspan="4">
                    3. Dukun
                </td>
                <td class="colspan" colspan="4">
                    4. Lainnya
                </td>
                <td colspan="8"></td>
                <td class="kanan">

                </td>
            </tr>

            <tr>
                <td class="nomor">
                    10.
                </td>
                <td class="caption">
                    Berat Bayi
                </td>
                <td class="point">
                    :
                </td>

                <td class="border colspan" colspan="3">
                    &nbsp;
                </td>

                <td class="colspan">
                    Kg
                </td>
                <td colspan="21">

                </td>
                <td class="kanan">

                </td>
            </tr>

            <tr>
                <td class="nomor">
                    11.
                </td>
                <td class="caption">
                    Panjang Bayi
                </td>
                <td class="point">
                    :
                </td>

                <?php
                for ($i = 0; $i < 2; $i++) { ?>
                    <td class="kotak">
                        &nbsp;
                    </td>
                <?php } ?>
                <td class="colspan">
                    Cm
                </td>
                <td colspan="21"></td>
                <td class="kanan">

                </td>
            </tr>
            <tr>
                <td colspan="28">&nbsp;</td>
            </tr>

        </table>
    </div>

    <!--====  End of BAYI / ANAK  ====-->

    <?= $this->render('surat/_pdfSuratKelahiranPihak', ['pihak' => 'ibu']) ?>


</div>

<div class="clear"></div>
<div style="margin-top: 2px;">
    <table width="100%">
        <tr>
            <td class="ttd-left">&nbsp;</td>
            <td class="ttd-middle"></td>
            <td class="ttd-right">...............,................. . 20....</td>
        </tr>
        <tr>
            <td class="ttd-left">
                Mengetahui : <br>
                Kepala Desa/Lurah
            </td>
            <td class="ttd-middle"></td>
            <td class="ttd-right">
                Pelapor
            </td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td class="ttd-left">
                ( ............................................... )
            </td>
            <td class="ttd-middle"></td>
            <td class="ttd-right">
                ( ............................................... )
            </td>
        </tr>
    </table>
</div>
