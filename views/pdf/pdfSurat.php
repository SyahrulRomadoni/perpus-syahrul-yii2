<style type="text/css">

    .t-tengah   {
        text-align: center;
    }

    .t-kiri {
        text-align: left;
    }

    .t-kanan {
        text-align: right;
    }

    .bersih {
        clear: both;
    }

    .kotak {
        border: 1px solid black;
        padding: 0px;
        padding-left: 3px;
        padding-right: 3px;
        width: 100%;
    }

    .kotak-kecil {
        border: 1px solid black;
        padding: 0px;
        padding-left: 3px;
        padding-right: 3px;
    }

    .kotak-kanan {
        border: 1px solid black;
        float: right;
        font-size: 15px;
        font-weight: bold;
        padding: 0px 10px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        width: 17%;
    }

    .kotak-kiri {
        border: 1px solid black;
        float: left;
        font-size: 15px;
        font-weight: bold;
        padding: 0px 10px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        width: 17%;
    }

    p {
        margin-top: 1px;
        margin-bottom: 1px;
    }

</style>

<div class="kanan">
    <h5 class="kotak-kanan">F-1.21</h5>
</div>

<div class="t-tengah">
    <h5>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA</h5>
</div>

<div class="kotak">
    <p style="font-weight: bold; font-size: 12px">Perhatian :</p>
    <p style="font-size: 9px;">1. Harap diisi dengan huruf cetak dan menggunakan tinta hitam.</p>
    <p style="font-size: 9px;">2 Untuk kolom pilihan, harap memberi tanda silang (X) pada kotak pilihan.</p>
    <p style="font-size: 9px;">3 Setelah formulir ini diisi dan ditandatangani, harap diserahkan kembali ke kantor Desa/Kelurahan.</p>
</div>

<br>

<table style="width: 100%;">
    <tr>
        <td style="width: 29%;"><p style="font-weight: bold; font-size: 10px;">PEMERINTAH PROPINSI</p></td>
        <td style="width: 1%;">:</td>
        <?php for ($i=1; $i <= 2; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <?php for ($i=1; $i <= 4; $i++) { ?>
            <td width="20"></td>
        <?php } ?>
        <td width="350" class="kotak-kecil"></td>
        <td width="150"></td>
    </tr>
    <tr>
        <td style="width: 29%;"><p style="font-weight: bold; font-size: 10px;">PEMERINTAH KABUPATEN/KOTA</p></td>
        <td style="width: 1%;">:</td>
        <?php for ($i=1; $i <= 2; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <?php for ($i=1; $i <= 4; $i++) { ?>
            <td width="20"></td>
        <?php } ?>
        <td width="350" class="kotak-kecil"></td>
        <td width="150"></td>
    </tr>
    <tr>
        <td style="width: 29%;"><p style="font-weight: bold; font-size: 10px;">KECAMATAN</p></td>
        <td style="width: 1%;">:</td>
        <?php for ($i=1; $i <= 2; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <?php for ($i=1; $i <= 4; $i++) { ?>
            <td width="20"></td>
        <?php } ?>
        <td width="350" class="kotak-kecil"></td>
        <td width="150"></td>
    </tr>
</table>

<table style="width: 100%;">
    <tr>
        <td style="width: 29%;"><p style="font-weight: bold; font-size: 10px;">KELURAHAN/DESA</p></td>
        <td style="width: 1%;">:</td>
        <?php for ($i=1; $i <= 4; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <?php for ($i=1; $i <= 2; $i++) { ?>
            <td width="20"></td>
        <?php } ?>
        <td width="350" class="kotak-kecil"></td>
        <td width="150"></td>
    </tr>
</table>

<br>

<table>
    <tr>
        <td width="150"><p style="font-weight: bold; font-size: 10px;">PERMOHONAN KTP</p></td>
        <td width="20" class="kotak-kecil"></td>
        <td align="center" width="70" class="kotak-kecil"><p style="font-size: 8px;">A. Baru</p></td>
        <td width="20"></td>
        <td width="20" class="kotak-kecil"></td>
        <td align="center" width="90" class="kotak-kecil"><p style="font-size: 8px;">B. Perpanjangan</p></td>
        <td width="20"></td>
        <td width="20" class="kotak-kecil"></td>
        <td align="center" width="90" class="kotak-kecil"><p style="font-size: 8px;">C. Penggantian</p></td>
    </tr>
</table>

<br>

<table>

    <tr>
        <td align="left" width="100" class="kotak-kecil"><p style="font-size: 10px;">1. Nama Lengkap</p></td>
        <?php for ($i=1; $i <= 30; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
    </tr>

    <tr>
        <td align="left" width="100" class="kotak-kecil"><p style="font-size: 10px;">2. No. KK</p></td>
        <?php for ($i=1; $i <= 16; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
    </tr>

    <tr>
        <td align="left" width="100" class="kotak-kecil"><p style="font-size: 10px;">3. NIK</p></td>
        <?php for ($i=1; $i <= 16; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
    </tr>

</table>

<table>
    <tr>
        <td align="left" width="100" class="kotak-kecil"><p style="font-size: 10px;">4. Alamat</p></td>
        <td width="600" class="kotak-kecil"></td>
    </tr>
    <tr>
        <td width="100"></td>
        <td width="600" height="16" class="kotak-kecil"></td>
    </tr>
</table>

<table>
    <tr>
        <td width="97"></td>
        <td width="40" class="kotak-kecil"><p style="font-size: 10px;">RT</p></td>
        <td width="20"></td>
        <?php for ($i=1; $i <= 3; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <td width="20"></td>
        <td width="40" class="kotak-kecil"><p style="font-size: 10px;">RW</p></td>
        <td width="20"></td>
        <td width="20" class="kotak-kecil"></td>
        <td width="20" class="kotak-kecil"></td>
        <td width="20" class="kotak-kecil"></td>
        <?php for ($i=1; $i <= 3; $i++) { ?>
            <td width="20"></td>
        <?php } ?>
        <td width="90" class="kotak-kecil"><p style="font-size: 10px;">Kode Pos :</p></td>
        <td width="20"></td>
        <?php for ($i=1; $i <= 5; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
    </tr>
</table>

<br>

<table style="width: 100%;">
    <tr>
        <td style="width: 30%;">
            <table style="width: 100%;">
                <tr>
                    <td class="kotak" align="center" style="width: 50%;"><p style="font-size: 7px;">Pas Photo (2 x 3)</p></td>
                    <td class="kotak" align="center" style="width: 50%;"><p style="font-size: 7px;">Cap Jempol</p></td>
                </tr>
                <tr>
                    <td class="kotak" style="height: 113px; width: 75px"></td>
                    <td class="kotak" style="height: 113px; width: 75px"></td>
                </tr>
            </table>
        </td>
        <td style="width: 20%;">
            <table style="width: 100%;">
                <tr>
                    <td class="kotak" align="center" style="width: 50%;"><p style="font-size: 7px;">Specimen Tanda Tangan</p></td>
                </tr>
                <tr>
                    <td class="kotak" style="height: 100px; width: 75px"></td><br>
                </tr>
                <tr>
                    <td><p style="font-size: 7px;">Specimen Tanda/Tangan</p></td>
                </tr>
            </table>
        </td>
        <td style="width: 15%"></td>
        <td style="width: 35%; text-align: center;">
            <p style="font-size: 8px;">.............., .......................</p><br>
            <p style="font-size: 8px;">Pemohon</p>
            <?php for ($i=1; $i <= 3; $i++) { ?>
                <br>
            <?php } ?>
            <p style="font-size: 8px;">(....................................)</p>
        </td>
    </tr>
</table>

<br>

<table style="width: 100%;">
    <tr>
        <td align="right" style="width: 70%; font-size: 8px;">Mengetahui,</td>
        <td style="width: 30%;"></td>
    </tr>
</table>

<table style="width: 100%;">
    <tr>
        <td style="width: 30%;"></td>
        <td align="center" style="width: 35%;">
            <p style="font-size: 8px;">Camat ..................................</p><br>
            <?php for ($i=1; $i <= 3; $i++) { ?>
                <br>
            <?php } ?>
            <p style="font-size: 8px;">(..........................)</p>
            <p style="font-size: 8px;"> NIP.</p>
        </td>
        <td align="center" style="width: 35%;">
            <p style="font-size: 8px;">Kepala Desa/Lurah ...........................</p><br>
            <?php for ($i=1; $i <= 3; $i++) { ?>
                <br>
            <?php } ?>
            <p style="font-size: 8px;">(..........................)</p>
            <p style="font-size: 8px;"> NIP.</p>
        </td>
    </tr>
</table>

<!-- <p style="font-size: 8px;">gunting disini ...................................................................................................................................................................................................................................................................</p> -->

<pagebreak>

<div class="kanan">
    <h5 class="kotak-kanan">F-1.21</h5>
</div>

<div class="t-tengah">
    <h5>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA</h5>
</div>

<div class="kotak">
    <p style="font-weight: bold; font-size: 12px">Perhatian :</p>
    <p style="font-size: 9px;">1. Harap diisi dengan huruf cetak dan menggunakan tinta hitam.</p>
    <p style="font-size: 9px;">2 Untuk kolom pilihan, harap memberi tanda silang (X) pada kotak pilihan.</p>
    <p style="font-size: 9px;">3 Setelah formulir ini diisi dan ditandatangani, harap diserahkan kembali ke kantor Desa/Kelurahan.</p>
</div>

<br>

<table style="width: 100%;">
    <tr>
        <td style="width: 29%;"><p style="font-weight: bold; font-size: 10px;">PEMERINTAH PROPINSI</p></td>
        <td style="width: 1%;">:</td>
        <?php for ($i=1; $i <= 2; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <?php for ($i=1; $i <= 4; $i++) { ?>
            <td width="20"></td>
        <?php } ?>
        <td width="350" class="kotak-kecil"></td>
        <td width="150"></td>
    </tr>
    <tr>
        <td style="width: 29%;"><p style="font-weight: bold; font-size: 10px;">PEMERINTAH KABUPATEN/KOTA</p></td>
        <td style="width: 1%;">:</td>
        <?php for ($i=1; $i <= 2; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <?php for ($i=1; $i <= 4; $i++) { ?>
            <td width="20"></td>
        <?php } ?>
        <td width="350" class="kotak-kecil"></td>
        <td width="150"></td>
    </tr>
    <tr>
        <td style="width: 29%;"><p style="font-weight: bold; font-size: 10px;">KECAMATAN</p></td>
        <td style="width: 1%;">:</td>
        <?php for ($i=1; $i <= 2; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <?php for ($i=1; $i <= 4; $i++) { ?>
            <td width="20"></td>
        <?php } ?>
        <td width="350" class="kotak-kecil"></td>
        <td width="150"></td>
    </tr>
</table>

<table style="width: 100%;">
    <tr>
        <td style="width: 29%;"><p style="font-weight: bold; font-size: 10px;">KELURAHAN/DESA</p></td>
        <td style="width: 1%;">:</td>
        <?php for ($i=1; $i <= 4; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <?php for ($i=1; $i <= 2; $i++) { ?>
            <td width="20"></td>
        <?php } ?>
        <td width="350" class="kotak-kecil"></td>
        <td width="150"></td>
    </tr>
</table>

<br>

<table>
    <tr>
        <td width="150"><p style="font-weight: bold; font-size: 10px;">PERMOHONAN KTP</p></td>
        <td width="20" class="kotak-kecil"></td>
        <td align="center" width="70" class="kotak-kecil"><p style="font-size: 8px;">A. Baru</p></td>
        <td width="20"></td>
        <td width="20" class="kotak-kecil"></td>
        <td align="center" width="90" class="kotak-kecil"><p style="font-size: 8px;">B. Perpanjangan</p></td>
        <td width="20"></td>
        <td width="20" class="kotak-kecil"></td>
        <td align="center" width="90" class="kotak-kecil"><p style="font-size: 8px;">C. Penggantian</p></td>
    </tr>
</table>

<br>

<table>

    <tr>
        <td align="left" width="100" class="kotak-kecil"><p style="font-size: 10px;">1. Nama Lengkap</p></td>
        <?php for ($i=1; $i <= 30; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
    </tr>

    <tr>
        <td align="left" width="100" class="kotak-kecil"><p style="font-size: 10px;">2. No. KK</p></td>
        <?php for ($i=1; $i <= 16; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
    </tr>

    <tr>
        <td align="left" width="100" class="kotak-kecil"><p style="font-size: 10px;">3. NIK</p></td>
        <?php for ($i=1; $i <= 16; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
    </tr>

</table>

<table>
    <tr>
        <td align="left" width="100" class="kotak-kecil"><p style="font-size: 10px;">4. Alamat</p></td>
        <td width="600" class="kotak-kecil"></td>
    </tr>
    <tr>
        <td width="100"></td>
        <td width="600" height="16" class="kotak-kecil"></td>
    </tr>
</table>

<table>
    <tr>
        <td width="97"></td>
        <td width="40" class="kotak-kecil"><p style="font-size: 10px;">RT</p></td>
        <td width="20"></td>
        <?php for ($i=1; $i <= 3; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <td width="20"></td>
        <td width="40" class="kotak-kecil"><p style="font-size: 10px;">RW</p></td>
        <td width="20"></td>
        <td width="20" class="kotak-kecil"></td>
        <td width="20" class="kotak-kecil"></td>
        <td width="20" class="kotak-kecil"></td>
        <?php for ($i=1; $i <= 3; $i++) { ?>
            <td width="20"></td>
        <?php } ?>
        <td width="90" class="kotak-kecil"><p style="font-size: 10px;">Kode Pos :</p></td>
        <td width="20"></td>
        <?php for ($i=1; $i <= 5; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
    </tr>
</table>

<br>

<table style="width: 100%;">
    <tr>
        <td style="width: 30%;">
            <table style="width: 100%;">
                <tr>
                    <td class="kotak" align="center" style="width: 50%;"><p style="font-size: 7px;">Pas Photo (2 x 3)</p></td>
                    <td class="kotak" align="center" style="width: 50%;"><p style="font-size: 7px;">Cap Jempol</p></td>
                </tr>
                <tr>
                    <td class="kotak" style="height: 113px; width: 75px"></td>
                    <td class="kotak" style="height: 113px; width: 75px"></td>
                </tr>
            </table>
        </td>
        <td style="width: 20%;">
            <table style="width: 100%;">
                <tr>
                    <td class="kotak" align="center" style="width: 50%;"><p style="font-size: 7px;">Specimen Tanda Tangan</p></td>
                </tr>
                <tr>
                    <td class="kotak" style="height: 100px; width: 75px"></td><br>
                </tr>
                <tr>
                    <td><p style="font-size: 7px;">Specimen Tanda/Tangan</p></td>
                </tr>
            </table>
        </td>
        <td style="width: 15%"></td>
        <td style="width: 35%; text-align: center;">
            <p style="font-size: 8px;">.............., .......................</p><br>
            <p style="font-size: 8px;">Pemohon</p>
            <?php for ($i=1; $i <= 3; $i++) { ?>
                <br>
            <?php } ?>
            <p style="font-size: 8px;">(....................................)</p>
        </td>
    </tr>
</table>

<br>

<table style="width: 100%;">
    <tr>
        <td align="right" style="width: 70%; font-size: 8px;">Mengetahui,</td>
        <td style="width: 30%;"></td>
    </tr>
</table>

<table style="width: 100%;">
    <tr>
        <td style="width: 30%;"></td>
        <td align="center" style="width: 35%;">
            <p style="font-size: 8px;">Camat ..................................</p><br>
            <?php for ($i=1; $i <= 3; $i++) { ?>
                <br>
            <?php } ?>
            <p style="font-size: 8px;">(..........................)</p>
            <p style="font-size: 8px;"> NIP.</p>
        </td>
        <td align="center" style="width: 35%;">
            <p style="font-size: 8px;">Kepala Desa/Lurah ...........................</p><br>
            <?php for ($i=1; $i <= 3; $i++) { ?>
                <br>
            <?php } ?>
            <p style="font-size: 8px;">(..........................)</p>
            <p style="font-size: 8px;"> NIP.</p>
        </td>
    </tr>
</table>

<pagebreak>

<p style="font-weight: bold; font-size: 12px">UNTUK ARSIP</p><br>
<p style="font-weight: bold; font-size: 10px">TATA CARA PENGISIAN FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA (F-1.21)</p><br>

<p style="font-size: 11px">1. Pemerintah Propinsi : diisi nama Propinsi dimana pemohon bertempat tinggal</p>
<p style="font-size: 11px">2. Pemerintah Kabupaten/Kota : diisi nama Kabupaten/Kota dimana pemohon bertempat tinggal</p>
<p style="font-size: 11px">3. Kecamatan : diisi nama Kecamatan dimana pemohon bertempat tinggal</p>
<p style="font-size: 11px">4. Kelurahan/Desa : diisi nama Kelurahan/Desa dimana pemohon bertempat tinggal</p>
<p style="font-size: 11px">5. Permohonan KTP : diisi sesuai dengan kebutuhan, yaitu : (A) Baru; (B) Perpanjangan; (C) Penggantian</p>
<p style="font-size: 11px">6. Nama Lengkapdiisi nama pemohon secara lengkap sesuai dengan Surat Kenal Lahir atau Akte Kelahiran atau sesuai dengan nama pemberian orang tua, tanpa gelar akademis, kebangsawanan atau gelar agama.</p>
<p style="font-size: 11px">7. Nomor Kartu Keluarga : diisi sesuai Nomor Kartu Keluarga (No. KK) pemohon</p>
<p style="font-size: 11px">8. NIK : diisi sesuai dengan Nomor Induk Kependudukan (NIK) pemohon</p>
<p style="font-size: 11px">9. Alamat : diisi sesuai dengan alamat tempat tinggal terakhir pemohon.</p>
<p style="font-size: 11px">10. Tempelkan Pas Photo ukuran 2 x 3 pada tempatnya</p>
<p style="font-size: 11px">11. Bubuhkan Cap jempol atau bubuhkan tanda tangan dan jangan sampai melewati garis</p>
<p style="font-size: 11px">12. Mengetahui Kepala Desa/Lurah, dengan mebubuhkan tanda tangan dan nama jelas Kepala Desa/Lurah</p>
<p style="font-size: 11px">13. Gunting Formulir Permohonan KTP ini pada tempat yang telah ditandai, 1 (satu) lembar untuk arsip dan 1 (satu) lembar lagi sebagai Resi Pemohon</p>


<?php for ($i=1; $i <= 3; $i++) { ?>
    <br>
<?php } ?>

<p style="font-weight: bold; font-size: 12px">UNTUK PEMOHON</p><br>
<p style="font-weight: bold; font-size: 10px">TATA CARA PENGISIAN FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA (F-1.21)</p><br>
<p style="font-size: 11px">1. Pemerintah Propinsi : diisi nama Propinsi dimana pemohon bertempat tinggal</p>
<p style="font-size: 11px">2. Pemerintah Kabupaten/Kota : diisi nama Kabupaten/Kota dimana pemohon bertempat tinggal</p>
<p style="font-size: 11px">3. Kecamatan : diisi nama Kecamatan dimana pemohon bertempat tinggal</p>
<p style="font-size: 11px">4. Kelurahan/Desa : diisi nama Kelurahan/Desa dimana pemohon bertempat tinggal</p>
<p style="font-size: 11px">5. Permohonan KTP : diisi sesuai dengan kebutuhan, yaitu : (A) Baru; (B) Perpanjangan; (C) Penggantian</p>
<p style="font-size: 11px">6. Nama Lengkapdiisi nama pemohon secara lengkap sesuai dengan Surat Kenal Lahir atau Akte Kelahiran atau sesuai dengan nama pemberian orang tua, tanpa gelar akademis, kebangsawanan atau gelar agama.</p>
<p style="font-size: 11px">7. Nomor Kartu Keluarga : diisi sesuai Nomor Kartu Keluarga (No. KK) pemohon</p>
<p style="font-size: 11px">8. NIK : diisi sesuai dengan Nomor Induk Kependudukan (NIK) Pemohon</p>
<p style="font-size: 11px">9. Alamat : diisi sesuai dengan alamat tempat tinggal terakhir pemohon.</p>
<p style="font-size: 11px">10. Tempelkan Pas Photo ukuran 2 x 3 pada tempatnya</p>
<p style="font-size: 11px">11. Bubuhkan Cap jempol atau bubuhkan tanda tangan dan jangan sampai melewati garis</p>
<p style="font-size: 11px">12. Mengetahui Kepala Desa/Lurah, dengan mebubuhkan tanda tangan dan nama jelas Kepala Desa/Lurah</p>
<p style="font-size: 11px">13. Gunting Formulir Permohonan KTP ini pada tempat yang telah ditandai, 1 (satu) lembar untuk arsip dan 1 (satu) lembar lagi sebagai Resi Pemohon</p>