<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "petugas".
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property string $telepon
 * @property string $email
 */
class Petugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'petugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama', 'alamat'], 'string', 'max' => 255],
            [['telepon', 'email'], 'string', 'max' => 50],
            [['telepon'],'match', 'pattern' => '/^[0-9-+]\w*$/i','message' => 'Enter Number Only'],
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

    // Untuk menghitung jumlah data yang ada di tabel ini sendiri dan di tampilkan chart kotak.
    public static function getCount()
    {
        return static::find()->count();
    }

    // Untuk mengambil data yang ada di tabel ini sendiri dan di tampilkan di _from tambah buku di bagian create buku.
    public static function getList()
    {
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'id', 'nama');
    }
}
