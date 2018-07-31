<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penulis".
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property string $telepon
 * @property string $email
 */
class Penulis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penulis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['alamat'], 'string'],
            [['nama', 'telepon', 'email'], 'string', 'max' => 255],
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
            ->andWhere(['id_penulis' => $this->id])
            ->all();
    }

    // Untuk menampilkan jumlah buku yang berkaitan dengan from view masing-masing.
    public function getJumlahBuku()
    {
        return Buku::find()
            ->andWhere(['id_penulis' => $this->id])
            ->count();
    }
}
