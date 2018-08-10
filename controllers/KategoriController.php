<?php

namespace app\controllers;

use Yii;
use app\models\Kategori;
use app\models\KategoriSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
 * KategoriController implements the CRUD actions for Kategori model.
 */
class KategoriController extends Controller
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
     * Lists all Kategori models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KategoriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kategori model.
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
     * Creates a new Kategori model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kategori();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kategori model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kategori model.
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
     * Finds the Kategori model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kategori the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kategori::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDaftarKategori()
    {
        // Membuat model baru
        $phpWord = new PhpWord();

        // Membuat default ukuran fontz
        $phpWord->setDefaultFontSize(11);

        // Membuat default fontz
        $phpWord->setDefaultFontName('Gentium Basic');

        // Membuat Jarak kertasnya
        $section = $phpWord->addSection([
            'marginTop' => Converter::cmToTwip(1.2),
            'marginBottom' => Converter::cmToTwip(1.2),
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
            'DAFTAR KATEGORI',
            $headerStyle,
            $paragraphCenter
        );

        $section->addText(
            'Daftar Kategori Perpustakaan Yii2',
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
        $table->addCell(5000)->addText('Jumlah Buku', $headerStyle, $paragraphCenter);

        $semuaKategori = Kategori::find()->all();
        $nomor = 1;

        // Perulangan
        foreach ($semuaKategori as $kategori)
        {
            $table->addRow(null);
            $table->addCell(500)->addText($nomor++, null, $paragraphCenter);
            $table->addCell(5000)->addText($kategori->nama, null);
            $table->addCell(5000)->addText($kategori->getJumlahBuku(), null, $paragraphCenter);
        }

        // Tempat penyimpanan file sama nama file.
        $filename = time() . '_' . 'Daftar-Kategori.docx';
        $path = 'document/' . $filename;
        $xmlWrite = IOFactory::createWriter($phpWord, 'Word2007');
        $xmlWrite->save($path);

        return $this->redirect($path);
    }

    // Test Word
    public function actionTestWord() {

        // Membuat model baru
        $phpWord = new PhpWord();

        // Membuat default ukuran fontz
        $phpWord->setDefaultFontSize(10);

        // Membuat default fontz
        $phpWord->setDefaultFontName('Footlight MT Light');

        // Membuat Jarak kertasnya
        $section = $phpWord->addSection([
            'marginTop'    => Converter::cmToTwip(0.9),
            'marginBottom' => Converter::cmToTwip(1),
            'marginLeft'   => Converter::cmToTwip(2.5),
            'marginRight'  => Converter::cmToTwip(2.5),
        ]);

        // Custom Style
        // Define styles
        $fontStyleName = 'myOwnStyle';
        $phpWord->addFontStyle($fontStyleName, ['color' => 'FF0000']);
        $paragraphStyleName = 'P-Style';
        $phpWord->addParagraphStyle($paragraphStyleName, ['spaceAfter' => 95]);
        $multilevelNumberingStyleName = 'multilevel';
        $phpWord->addNumberingStyle(
            $multilevelNumberingStyleName,
            [
                'type'   => 'multilevel',
                'levels' => [
                    [
                        'format' => 'upperRoman',
                        'text'   => '%1.',
                        'left'   => 0,
                    ],
                    [
                        'format'  => 'decimal',
                        'text'    => '%2.',
                        'left'    => 920,
                        'hanging' => 200,
                    ],
                    [
                        'format'  => 'lowerLetter',
                        'text'    => '%3.',
                        'left'    => 1150,
                        'hanging' => 200,
                    ],
                ],
            ]
        );

        $fontStyleSizeBold = [
            'bold' => true,
            'size' => 11,
        ];

        $fontStyleSizeUnderBold = [
            'underline' => 'single',
            'bold'      => true,
            'size'      => 11,
        ];

        $fontStyleSize = [
            'size' => 11,
        ];

        $fontStyleSizeUnder = [
            'size'      => 11,
            'underline' => 'single',
        ];

        $paragraphStyleAlignCenter = [
            'alignment'   => 'center',
            'spaceAfter'  => 0,
            'spaceBefore' => 0,
        ];

        $paragraphStyleNoSpace = [
            'spaceAfter'  => 0,
            'spaceBefore' => 0,
        ];

        $paragraphStyleMarginLeft = [
            'indentation' => [
                'left' => 920,
            ],
        ];

        $paragraphStyleVertHoriSpace = [
            'spaceAfter'  => 0,
            'spaceBefore' => 0,
            'indentation' => [
                'left' => 920,
            ],
        ];

        $paragraphStyleVertHoriSpace1 = [
            'spaceAfter'  => Converter::cmToTwip(0.4),
            'spaceBefore' => Converter::cmToTwip(0),
            'indentation' => [
                'left' => 920,
            ],
        ];

        $paragraphStyleVertHoriSpace2 = [
            'spaceAfter'  => Converter::cmToTwip(0.4),
            'spaceBefore' => Converter::cmToTwip(0.2),
            'indentation' => [
                'left' => 700,
            ],
        ];

        $paragraphStyleVertHoriSpace3 = [
            'spaceAfter'  => Converter::cmToTwip(0),
            'spaceBefore' => Converter::cmToTwip(1),
            'indentation' => [
                'left' => 2000,
            ],
        ];

        $paragraphStyleVertHoriSpace4 = [
            'indentation' => [
                'left' => 1700,
            ],
        ];

        // Mulai

        // Images
        $section->addImage('images/P2.jpg', ['width' => 85, 'height' => 67, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER]);

        // Label atas, tengah
        $section->addText(
            'LEMBAGA ADMINISTRASI NEGARA',
            $fontStyleSizeBold,
            $paragraphStyleAlignCenter
        );

        $section->addText(
            'REPUBLIK INDONESIA',
            $fontStyleSizeBold,
            [
                'alignment'   => 'center',
                'spaceAfter'  => Converter::cmToTwip(0.4),
                'spaceBefore' => Converter::cmToTwip(0),
            ]
        );

        $section->addText(
            'BERITA ACARA KLARIFIKASI DAN NEGOSIASI',
            $fontStyleSizeUnderBold,
            $paragraphStyleAlignCenter,
            $paragraphStyleNoSpace
        );

        $section->addText(
            'Nomor : 157/PP/PBJ 01.2/450417',
            $fontStyleSizeBold,
            $paragraphStyleAlignCenter
        );

        $section->addText(
            'Tanggal : ' . date('d F Y'),
            $fontStyleSizeBold,
            [
                'alignment'   => 'center',
                'spaceAfter'  => Converter::cmToTwip(0.4),
                'spaceBefore' => Converter::cmToTwip(0),
            ]
        );

        $section->addText(
            'Pada hari ini Jum’at tanggal Delapan belas bulan Mei tahun Dua ribu delapan belas (' . date('d-m-Y') . ') dimulai  pada  pukul 14.00 WIB, bertempat di Ruang Rapat Layanan Pengadaan Barang/Jasa Kantor LAN Pusat Jakarta, Jl.Veteran No. 10 Jakarta, telah diadakan Rapat Klarifikasi dan Negosiasi terhadap Dokumen Penawaran untuk Pekerjaan Pembangunan Sistem Informasi Pengadaan (SIP) Kantor LAN Jakarta Jl. Veteran No. 10, Jakarta Pusat.',
            $fontStyleSize,
            [
                'alignment'   => 'both',
                'spaceAfter'  => Converter::cmToTwip(0.4),
                'spaceBefore' => Converter::cmToTwip(0),
            ]

        );

        // Lists
        $section->addListItem('Hadir dalam rapat :', 0, $fontStyleSize, $multilevelNumberingStyleName, $paragraphStyleNoSpace);

        $section->addListItem('Pejabat Pengadaan Barang/Jasa Satker 450417 LAN Jakarta', 1, $fontStyleSize, $multilevelNumberingStyleName, $paragraphStyleNoSpace);
        $section->addText('Dwi Astuti, ST', $fontStyleSize, $paragraphStyleVertHoriSpace);

        $section->addListItem('Penyedia:', 1, $fontStyleSize, $multilevelNumberingStyleName, $paragraphStyleNoSpace);
        $section->addText('Konsultan Perorangan', $fontStyleSize, $paragraphStyleVertHoriSpace);
        $section->addText('Diwakili oleh : Sdr. Thomas Alfa Edison', $fontStyleSize, $paragraphStyleVertHoriSpace1);

        $section->addListItem('Berdasarkan klarifikasi dan negosiasi teknis dan harga, dihasilkan hal-hal sebagai berikut:', 0, $fontStyleSize, $multilevelNumberingStyleName, $paragraphStyleNoSpace);
        $section->addListItem('Dokumen Penawaran Teknis :', 1, $fontStyleSize, $multilevelNumberingStyleName);
        $section->addText('Penyedia sanggup untuk melaksanakan pekerjaan sesuai dengan spesifikasi teknis sebagaimana tercantum dalam dokumen pengadaan;', $fontStyleSize, $paragraphStyleMarginLeft);
        $section->addListItem('Dokumen Penawaran Harga:', 1, $fontStyleSize, $multilevelNumberingStyleName);
        //
        //
        //
        $section->addListItem('Kewajaran biaya pada Rincian Biaya Langsung Personil (remuneration);', 2, $fontStyleSize, $multilevelNumberingStyleName);
        $section->addListItem('Kewajaran Biaya tenaga ahli;', 2, $fontStyleSize, $multilevelNumberingStyleName);
        $section->addListItem('Kewajaran biaya pada Rincian Biaya Langsung Non-Personil (direct reimbursable cost)', 2, $fontStyleSize, $multilevelNumberingStyleName);

        $listItemRun = $section->addListItemRun(2, $multilevelNumberingStyleName);
        $textrun     = $listItemRun->addTextRun();
        $textrun->addText('Disepakati bahwa harga penawaran terkoreksi yang diajukan sebesar Rp. 11.000.000,- (Sebelas juta rupiah) dinegosiasi menjadi                 ', $fontStyleSize);

        $textrun->addText('Rp. 10.000.000,- (Sepuluh juta rupiah) dapat diterima.', ['bold' => true, 'size' => 11]);

        $section->addListItem('Rapat ditutup pukul 15.00 WIB.', 0, $fontStyleSize, $multilevelNumberingStyleName, $paragraphStyleNoSpace);
        $section->addText('Demikian Berita Acara ini dibuat dalam rangkap secukupnya untuk dipergunakan seperlunya.', $fontStyleSize, $paragraphStyleVertHoriSpace2);
        //
        // Tanda Tangan menggunakan Table
        //
        $section->addText('Penyedia Jasa', $fontStyleSize, $paragraphStyleVertHoriSpace3);
        $section->addTextBreak(3);
        $section->addText('Thomas Alfa Edison', $fontStyleSizeUnder, $paragraphStyleVertHoriSpace4);
        $section->addText('Konsultan Perorangan', $fontStyleSize, $paragraphStyleVertHoriSpace4);

        // Tempat penyimpanan file sama nama file.
        $filename = time() . '_' . 'Daftar-Test-Word.docx';
        $path     = 'document/' . $filename;
        $xmlWrite = IOFactory::createWriter($phpWord, 'Word2007');
        $xmlWrite->save($path);

        return $this->redirect($path);
    }

    public function actionTestExcel()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');

        $writer = new Xlsx($spreadsheet);
        $writer->save('hello world.xlsx');
    }
}
