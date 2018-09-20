<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peminjaman".
 *
 * @property int $id
 * @property int $id_buku
 * @property int $id_anggota
 * @property string $tanggal_pinjam
 * @property string $tanggal_kembali
 */
class Peminjaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peminjaman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_buku', 'id_anggota', 'tanggal_pinjam', 'tanggal_kembali', 'status_buku', 'tanggal_pengembalian_buku'], 'required'],
            [['id_buku', 'id_anggota', 'status_buku'], 'integer'],
            [['tanggal_pinjam', 'tanggal_kembali', 'tanggal_pengembalian_buku'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_buku' => 'Buku',
            'id_anggota' => 'Nama Anggota',
            'tanggal_pinjam' => 'Tanggal Pinjam',
            'tanggal_kembali' => 'Tanggal Kembali',
            'status_buku' => 'Status Buku',
            'tanggal_pengembalian_buku' => 'Tanggal Pengembalian Buku',
        ];
    }

    // Untuk menghitung jumlah data yang ada di tabel ini sendiri dan di tampilkan chart kotak.
    public static function getCount()
    {
        return static::find()->count();
    }

    // Untuk mengambil id_anggota di tabel peminjaman dirubah jadi nama anggota yang ada di tabel anggota yang akan di muncukan di index peminjaman
    public function getAnggota()
    {
        // Cara 1 mendapatkan id_*** menjadi nama.
        // $model = Anggota::findOne($this->id_anggota);

        // if ($model !== null) {
        //     return $model->nama;
        // } else {
        //     return null;
        // }

        // Cara 2 mendapatkan id_*** menjadi nama.
        return $this->hasOne(Anggota::className(), ['id' => 'id_anggota']);
    }

    // Untuk mengambil id_buku di tabel buku dirubah jadi nama buku yang ada di tabel buku yang akan di muncukan di index peminjaman
    public function getBuku()
    {
        // Cara 1 mendapatkan id_*** menjadi nama.
        // $model = Buku::findOne($this->id_buku);

        // if ($model !== null) {
        //     return $model->nama;
        // } else {
        //     return null;
        // }

        // Cara 2 mendapatkan id_*** menjadi nama.
        return $this->hasOne(Buku::className(), ['id' => 'id_buku']);
    }
}
