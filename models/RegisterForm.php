<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class RegisterForm extends Model
{
    public $username;
    public $password;
    public $nama;
    public $alamat;
    public $telepon;
    public $email;
    public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['nama', 'alamat', 'email', 'username', 'password'], 'required'],
            [['password'], 'string', 'min' => 6],
            [['telepon'],'match', 'pattern' => '/^[0-9-+]\w*$/i','message' => 'Enter Number Only'],
            ['verifyCode', 'captcha'],
            ['email', 'unique', 'targetClass' => '\app\models\Anggota'], // Membuat nama menjadi uniq atau di buat satu kali buat validasi di from.
        ];
    }

}
