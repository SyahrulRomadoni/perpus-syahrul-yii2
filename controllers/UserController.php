<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Converter;
use app\models\ChangePasswordForm;
use yii\filters\AccessControl;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [

            // Access Control URL.
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'create'],
                        'allow' => User::isAdmin() || User::isPetugas(),
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['view', 'update', 'change-password'],
                        'allow' => User::isAdmin() || User::isPetugas() || User::isAnggota(),
                        'roles' => ['@'],
                    ],
                ],
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        $model->token = Yii::$app->getSecurity()->generateRandomString ( $length = 50 );

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    // Ganti password
    public function actionChangePassword($id)
    {

        $model = new ChangePasswordForm();

        $user = User::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            
            $user->password = Yii::$app->getSecurity()->generatePasswordHash($model->password);
            $user->save(false);

            return $this->redirect(['site/dashboard']);
        }
     
        return $this->render('changePassword', [
            'model' => $model,
        ]);
    }

    // Resert password anggota yang bisa di pakai oleh admin dan petugas.
    public function actionResetPassword($id)
    {
        $user = User::findOne($id);
            
        $user->password = Yii::$app->getSecurity()->generatePasswordHash($user->username);
        $user->save(false);

        Yii::$app->session->setFlash('Berhasil', 'Password sudah berhasil di reset');
        return $this->redirect(['user/index']);
    }

    public function actionDaftarUser()
    {
        // Membuat model baru
        $phpWord = new PhpWord();

        // Membuat default ukuran fontz
        $phpWord->setDefaultFontSize(11);

        // Membuat default fontz
        $phpWord->setDefaultFontName('Gentium Basic');

        // Membuat Jarak kertasnya
        $section = $phpWord->addSection([
            'marginTop' => Converter::cmToTwip(1.50),
            'marginBottom' => Converter::cmToTwip(1.50),
            'marginLeft' => Converter::cmToTwip(1.2),
            'marginRight' => Converter::cmToTwip(1.2),
        ]);

        // Custom Style
        $headerStyle = [
            'bold' => true,
        ];

        $paragraphCenter = [
            'alignment' => 'center',
            'spacing' => 0,
        ];

        // Mulai
        // Label atas, tengah
        $section->addText(
            'DAFTAR USER',
            $headerStyle,
            $paragraphCenter
        );

        $section->addText(
            'Daftar User Perpustakaan Yii2',
            $headerStyle,
            $paragraphCenter
        );

        // Breack
        $section->addTextBreak(1);

        // Label samping kiri
        // $section->addText(
        //     'PEJABAT PENGADAAN BARANG/JASA',
        //     $headerStyle,
        //     [
        //         'alignment' => 'left'
        //     ]
        // );

        // $section->addText(
        //     'SATKER 450417 LAN JAKARTA',
        //     $headerStyle,
        //     [
        //         'alignment' => 'left'
        //     ]
        // );

        // Breack
        //$section->addTextBreak(1);

        // Label yang di tengah
        // $section->addText(
        //     'PEKERJAAN PEMBANGUNAN SISTEM INFORMASI PENGADAAN (SIP) KANTOR LAN JAKARTA ',
        //     $headerStyle,
        //     $paragraphCenter
        // );

        // Breack
        //$section->addTextBreak(1);

        // Label di samping
        // $section->addText(
        //     'PAGU DANA  :   Rp. 12.000.000,-',
        //     $headerStyle,
        //     [
        //         'alignment' => 'left'
        //     ]
        // );

        // $section->addText(
        //     'HPS       : Rp. 11.000.000,- ',
        //     $headerStyle,
        //     [
        //         'alignment' => 'left'
        //     ]
        // );

        // Table
        $table = $section->addTable([
            'alignment' => 'center', 
            'bgColor' => '000000',
            'borderSize' => 6,
        ]);

        // Row
        $table->addRow(null);
        $table->addCell(500)->addText('No', $headerStyle, $paragraphCenter);
        $table->addCell(5000)->addText('Username', $headerStyle, $paragraphCenter);
        $table->addCell(5000)->addText('Status User', $headerStyle, $paragraphCenter);
        $table->addCell(5000)->addText('Status', $headerStyle, $paragraphCenter);

        $semuaUser = User::find()->all();
        $nomor = 1;

        // Perulangan
        foreach ($semuaUser as $user)
        {
            $table->addRow(null);
            $table->addCell(500)->addText($nomor++, null, $paragraphCenter);
            $table->addCell(5000)->addText($user->username, null, $paragraphCenter);
            $table->addCell(5000)->addText($user->getUserRole(), null, $paragraphCenter);
            $table->addCell(5000)->addText($user->status, null, $paragraphCenter);
        }

        // Tempat penyimpanan file sama nama file.
        $filename = time() . '_' . 'Daftar-Buku.docx';
        $path = 'document/' . $filename;
        $xmlWrite = IOFactory::createWriter($phpWord, 'Word2007');
        $xmlWrite->save($path);

        return $this->redirect($path);
    }
}
