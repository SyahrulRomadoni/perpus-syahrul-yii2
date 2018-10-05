<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penerbit".
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property string $telepon
 * @property string $email
 */
class Penerbit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penerbit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alamat'], 'string'],
            [['nama', 'telepon'], 'string', 'max' => 255],
            [['telepon'],'match', 'pattern' => '/^[0-9-+]\w*$/i','message' => 'Enter Number Only'], // Untuk membuat validasi hanya angka / huruf yang bisa di masukan.
            [['email'], 'string', 'max' => 2555],
            ['email', 'unique'], // Membuat nama menjadi uniq atau di buat satu kali buat validasi di from.
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
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'email' => 'Email',
        ];
    }

    // Untuk mengambil data yang ada di tabel ini sendiri dan di tampilkan di _from tambah buku di bagian create buku.
    public static function getList()
    {
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'id', 'nama');
    }

    // Untuk menampilkan data buku yang berkaitan dengan from view masing-masing.
    public function findAllBuku()
    {
        return Buku::find()
            ->andWhere(['id_penerbit' => $this->id])
            ->orderBy(['nama' => SORT_ASC])
            ->all();
    }

    // Untuk menampilkan jumlah buku yang berkaitan dengan from view masing-masing.
    public function getJumlahBuku()
    {
        return Buku::find()
            ->andWhere(['id_penerbit' => $this->id])
            ->count();
    }

    // Untuk menghitung jumlah data yang ada di tabel ini sendiri dan di tampilkan chart kotak.
    public static function getCount()
    {
        return static::find()->count();
    }

    // Mengambil semua data yang ada di tabel buku yang dimana id buku akan ditampilkan berdasarkan id_*** / id_*** akan mengambil data di buku yang berkaitan dengan id_***.
    public function getManyBuku()
    {
        return $this->hasMany(Buku::class, ['id_Penerbit' => 'id']);
    }

    // Menjumlah semua data buku yang berkaitan dengan id_***.
    public static function getGrafikList()
    {
        $data = [];
        foreach (static::find()->all() as $penerbit) {
            $data[] = [$penerbit->nama, (int) $penerbit->getManyBuku()->count()];
        }
        return $data;
    }
}
