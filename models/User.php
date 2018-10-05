<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $id_anggota
 * @property int $id_petugas
 * @property int $id_user_role
 * @property int $status
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'token'], 'required'],
            [['id_anggota', 'id_petugas', 'id_user_role', 'status'], 'integer'],
            [['username', 'password'], 'string', 'max' => 255],
            [['token'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'id_anggota' => 'Anggota',
            'id_petugas' => 'Petugas',
            //'id_user_role' => 'Id User Role',
            'id_user_role' => 'Status User',
            'status' => 'Status',
            'token' => 'Token',
        ];
    }

    // Cunstom sendiri interface.
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return null;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    // Bagian Login, sudah terkoneksi sama databases.
    public static function findByUsername($username)
    {
        return self::findOne(['username' => $username]);
    }

    public function validatePassword($password)
    {
        //return $this->password == $password;
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }

    // Untuk menghitung jumlah data yang ada di tabel ini sendiri dan di tampilkan chart kotak.
    public static function getCount()
    {
        return static::find()->count();
    }

    // Untuk mengambil nama = id_user_role yang di user maka id_user_role nama resebut akan di ambil di tabel user-role berdasarkan id_user_role 
    public function getUserRole()
    {
        $model = UserRole::findOne($this->id_user_role);

        if ($model !== null) {
            return $model->nama;
        } else {
            return null;
        }
    }

    // Before security password / proses memasukan data security.
    public function beforeSave($insert)
    {
        if ($insert) {
            $this->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        }
        return true;
    }

    // Buat Access Contol User.
    public static function isAdmin()
    {
        // Jika bila user login trs keluar dan user terus masuk lewat url itu tidak bisa maka balik ke login.
        if (Yii::$app->user->isGuest) {
           return false;
        }

        // Buat id akses login user
        if (($user = User::findOne(Yii::$app->user->identity->id_user_role == 1))) {
            return $user;
        } else {
            return false;
        }
    }

    // Buat Access Contol User.
    public static function isAnggota()
    {
        // Jika bila user login trs keluar dan user terus masuk lewat url itu tidak bisa maka balik ke login.
        if (Yii::$app->user->isGuest) {
           return false;
        }

        // Buat id akses login user
        if (($user = User::findOne(Yii::$app->user->identity->id_user_role == 2))) {
            return $user;
        } else {
            return false;
        }
    }

    // Buat Access Contol User.
    public static function isPetugas()
    {
        // Jika bila user login trs keluar dan user terus masuk lewat url itu tidak bisa maka balik ke login.
        if (Yii::$app->user->isGuest) {
           return false;
        }

        // Buat id akses login user
        if (($user = User::findOne(Yii::$app->user->identity->id_user_role == 3))) {
            return $user;
        } else {
            return false;
        }
    }

    // Relasi 2 tabel yang dimana tabel user dan tabel anggota di gambungkan dan di tampilkan di view.
    public function getAnggota()
    {
        return $this->hasOne(Anggota::className(), ['id' => 'id_anggota']);
    }

    // Relasi 2 tabel yang dimana tabel user dan tabel petugas di gambungkan dan di tampilkan di view.
    public function getPetugas()
    {
        return $this->hasOne(Petugas::className(), ['id' => 'id_petugas']);
    }
}
