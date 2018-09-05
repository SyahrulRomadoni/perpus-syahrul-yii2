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

    .fonts1 {
        font-size: 8px;
    }

    .fonts2 {
        font-size: 10px;
    }

    .fonts3 {
        font-size: 12px;
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
    <p class="fonts1">1. Harap diisi dengan huruf cetak dan menggunakan tinta hitam.</p>
    <p class="fonts1">2 Untuk kolom pilihan, harap memberi tanda silang (X) pada kotak pilihan.</p>
    <p class="fonts1">3 Setelah formulir ini diisi dan ditandatangani, harap diserahkan kembali ke kantor Desa/Kelurahan.</p>
</div>

<br>

<table>

    <tr>
        <td width="220"><p style="font-weight: bold; font-size: 10px">PEMERINTAH PROPINSI</p></td>
        <td width="2">:</td>
        <?php for ($i=1; $i <= 2; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <td></td>
        <td></td>
        <td width="50"></td>
        <td width="240" class="kotak-kecil"></td>
    </tr>

    <tr>
        <td width="220"><p style="font-weight: bold; font-size: 10px">PEMERINTAH KABUPATEN/KOTA</p></td>
        <td width="2">:</td>
        <?php for ($i=1; $i <= 2; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <td></td>
        <td></td>
        <td width="50"></td>
        <td width="240" class="kotak-kecil"></td>
    </tr>

    <tr>
        <td width="220"><p style="font-weight: bold; font-size: 10px">KECAMATAN</p></td>
        <td width="2">:</td>
        <?php for ($i=1; $i <= 2; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <td></td>
        <td></td>
        <td width="50"></td>
        <td width="240" class="kotak-kecil"></td>
    </tr>

    <tr>
        <td width="220"><p style="font-weight: bold; font-size: 10px">KELURAHAN/DESA</p></td>
        <td width="2">:</td>
        <?php for ($i=1; $i <= 4; $i++) { ?>
            <td width="20" class="kotak-kecil"></td>
        <?php } ?>
        <td></td>
        <td width="240" class="kotak-kecil"></td>
    </tr>

</table>

<br>

<table>
    <tr>
        <td width="150"><p style="font-weight: bold; font-size: 10px">PERMOHONAN KTP</p></td>
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
        <td align="left" width="100" class="kotak-kecil"><p style="font-size: 10px;">4. Alamat </p></td>
        <td width="600" class="kotak-kecil"></td>
    </tr>
</table>