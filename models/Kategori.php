<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property int $id
 * @property string $nama
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 255],
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
            ->andWhere(['id_kategori' => $this->id])
            ->orderBy(['nama' => SORT_ASC])
            ->all();
    }

    // Untuk menampilkan jumlah buku yang berkaitan dengan from view masing-masing.
    public function getJumlahBuku()
    {
        return Buku::find()
            ->andWhere(['id_kategori' => $this->id])
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
        return $this->hasMany(Buku::class, ['id_kategori' => 'id']);
    }

    // Menjumlah semua data buku yang berkaitan dengan id_***.
    public static function getGrafikList()
    {
        $data = [];
        foreach (static::find()->all() as $kategori) {
            $data[] = [$kategori->nama, (int) $kategori->getManyBuku()->count()];
        }
        return $data;
    }
}
