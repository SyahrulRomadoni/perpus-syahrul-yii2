<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buku".
 *
 * @property int $id
 * @property string $nama
 * @property string $tahun_terbit
 * @property int $id_penulis
 * @property int $id_penerbit
 * @property int $id_kategori
 * @property string $sinopsis
 * @property string $sampul
 * @property string $berkas
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['tahun_terbit'], 'safe'],
            [['id_penulis', 'id_penerbit', 'id_kategori'], 'integer'],
            [['sinopsis'], 'string'],
            [['nama', 'sampul', 'berkas'], 'string', 'max' => 255],
            [['sampul'], 'file', 'extensions' => 'png, jpg, jpeg', 'maxSize' => 1024 * 1024 * 20],
            [['berkas'], 'file', 'extensions' => 'doc, docx, xls, xlsx, pdf, ppt'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tahun_terbit' => 'Tahun Terbit',
            'id_penulis' => 'Penulis',
            'id_penerbit' => 'Penerbit',
            'id_kategori' => 'Kategori',
            'sinopsis' => 'Sinopsis',
            'sampul' => 'Sampul',
            'berkas' => 'Berkas',
        ];
    }

    // Untuk mengambil id_penulis di tabel buku dirubah jadi nama penulis yang ada di tabel penulis yang akan di muncukan di index buku
    public function getPenulis()
    {
        // Cara 1 mendapatkan id_*** menjadi nama.
        // $model = Penulis::findOne($this->id_penulis);

        // if ($model !== null) {
        //     return $model->nama;
        // } else {
        //     return null;
        // }

        // Cara 2 mendapatkan id_*** menjadi nama.
        return $this->hasOne(Penulis::className(), ['id' => 'id_penulis']);
    }

    // Untuk mengambil id_penerbit di tabel buku dirubah jadi nama penerbit yang ada di tabel penerbit yang akan di muncukan di index buku
    public function getPenerbit()
    {
        // Cara 1 mendapatkan id_*** menjadi nama.
        // $model = Penerbit::findOne($this->id_penerbit);

        // if ($model !== null) {
        //     return $model->nama;
        // } else {
        //     return null;
        // }

        // Cara 2 mendapatkan id_*** menjadi nama.
        return $this->hasOne(Penerbit::className(), ['id' => 'id_penerbit']);
    }

    // Untuk mengambil id_kategori di tabel buku dirubah jadi nama kategori yang ada di tabel kategori yang akan di muncukan di index buku
    public function getKategori()
    {
        // Cara 1 mendapatkan id_*** menjadi nama.
        // $model = Kategori::findOne($this->id_kategori);

        // if ($model !== null) {
        //     return $model->nama;
        // } else {
        //     return null;
        // }

        // Cara 2 mendapatkan id_*** menjadi nama.
        return $this->hasOne(Kategori::className(), ['id' => 'id_kategori']);
    }

    // Untuk menghitung jumlah data yang ada di tabel ini sendiri dan di tampilkan chart kotak.
    public static function getCount()
    {
        return static::find()->count();
    }
}
