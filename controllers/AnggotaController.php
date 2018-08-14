<?php

namespace app\controllers;

use Yii;
use app\models\Anggota;
use app\models\AnggotaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Converter;
use yii\widgets\ActiveForm;
use yii\web\Response;

/**
 * AnggotaController implements the CRUD actions for Anggota model.
 */
class AnggotaController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Anggota models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AnggotaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Anggota model.
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
     * Creates a new Anggota model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Anggota();

        // Membuat validasi untuk di from tertentu yang sudah ada di databases tidak bisa dibuat kembali.
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Anggota model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        // Membuat validasi untuk di from tertentu yang sudah ada di databases tidak bisa dibuat kembali.
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Anggota model.
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
     * Finds the Anggota model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Anggota the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Anggota::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDaftarAnggota()
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
            'DAFTAR ANGGOTA',
            $headerStyle,
            $paragraphCenter
        );

        $section->addText(
            'Daftar Anggota Perpustakaan Yii2',
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
        $table->addCell(5000)->addText('Nama', $headerStyle, $paragraphCenter);
        $table->addCell(5000)->addText('Alamat', $headerStyle, $paragraphCenter);
        $table->addCell(5000)->addText('Telepon', $headerStyle, $paragraphCenter);
        $table->addCell(5000)->addText('Email', $headerStyle, $paragraphCenter);

        $semuaAnggota = Anggota::find()->all();
        $nomor = 1;

        // Perulangan
        foreach ($semuaAnggota as $anggota)
        {
            $table->addRow(null);
            $table->addCell(500)->addText($nomor++, null, $paragraphCenter);
            $table->addCell(5000)->addText($anggota->nama, null);
            $table->addCell(5000)->addText($anggota->alamat, null);
            $table->addCell(5000)->addText($anggota->telepon, null);
            $table->addCell(5000)->addText($anggota->email, null);
        }

        // Tempat penyimpanan file sama nama file.
        $filename = time() . '_' . 'Daftar-Anggota.docx';
        $path = 'document/' . $filename;
        $xmlWrite = IOFactory::createWriter($phpWord, 'Word2007');
        $xmlWrite->save($path);

        return $this->redirect($path);
    }
}
