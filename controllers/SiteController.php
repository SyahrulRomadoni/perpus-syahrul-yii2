<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpWord\Style\TablePosition;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
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
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        // Default Yii2
        //return $this->render('index');

        if (!Yii::$app->user->isGuest)
        {
            return $this->redirect(['site/dashboard']);
        } else {
            return $this->redirect(['site/login']);
        }
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    // Custom Sendiri
    public function actionDashboard()
    {
        return $this->render('dashboard');
    }

    // Custom Sendiri
    public function actionTesting()
    {
        return $this->render('testing');
    }

    // Contoh testing password hash
    /*public function actionGenerate()
    {
        return Yii::$app->getSecurity()->generatePasswordHash('petugas2');
    }*/



    // Test Word
    public function actionTestWordS() {

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
        $filename = time() . '_' . 'Test-Word-S.docx';
        $path     = 'document/' . $filename;
        $xmlWrite = IOFactory::createWriter($phpWord, 'Word2007');
        $xmlWrite->save($path);

        return $this->redirect($path);
    }

    // Test Word
    public function actionTestWordSs() {

        // Membuat model baru
        $phpWord = new PhpWord();

        // Membuat default ukuran fontz
        $phpWord->setDefaultFontSize(10);

        // Membuat default fontz
        $phpWord->setDefaultFontName('Bookman Old Style');

        // Membuat Jarak kertasnya
        $section = $phpWord->addSection([
            'marginTop'    => Converter::cmToTwip(0.9),
            'marginBottom' => Converter::cmToTwip(1),
            'marginLeft'   => Converter::cmToTwip(2.5),
            'marginRight'  => Converter::cmToTwip(2.5),
        ]);

        // Mulai
        // Custom Style
        $headerStyle = [
            'bold' => false,
        ];

        $paragraphStyleNoSpace = [
            'spaceAfter'  => 0,
            'spaceBefore' => 0,
        ];

        // Word
        $section->addText(
            'Pangkalpinang, '. date('d F Y'),
            $headerStyle,
            [
                'alignment' => 'right'
            ]
        );

        $section->addText(
            'Nomer      : R.560/NP.     /DISNAKER/2018.',
            $headerStyle,
            $paragraphStyleNoSpace,
            [
                'alignment' => 'left'
            ]
        );

        $section->addText(
            'Sifat         : Rahasia',
            $headerStyle,
            $paragraphStyleNoSpace,
            [
                'alignment' => 'left'
            ]
        );

        $section->addText(
            'Lampiran : -',
            $headerStyle,
            $paragraphStyleNoSpace,
            [
                'alignment' => 'left'
            ]
        );

        $section->addText(
            'Perihal     : Nota Pemeriksaan II',
            $headerStyle,
            $paragraphStyleNoSpace,
            [
                'alignment' => 'left'
            ]
        );

        $section->addTextBreak(1);

        $section->addText(
            'Yth. Sdr Direktur Utama/Pengurus',
            $headerStyle,
            $paragraphStyleNoSpace,
            [
                'alignment' => 'left'
            ]
        );

        $section->addText(
            'PT. Angkasa Pura II (Persero)',
            $headerStyle,
            $paragraphStyleNoSpace,
            [
                'alignment' => 'left'
            ]
        );

        $section->addText(
            'di PANGKALANBARU',
            $headerStyle,
            $paragraphStyleNoSpace,
            [
                'alignment' => 'left'
            ]
        );

        $section->addTextBreak(1);

        $phpWord->addNumberingStyle(
            'alphanum',
            array('type' => 'multilevel', 'levels' => array(
                array(
                    'format' => 'decimal', 'text' => '%1.',
                    'left' => 360, 'hanging' => 360, 'tabPos' => 360),
                )
            )
        );

        $section->addText(
            "\t Menindaklanjuti Nota Pemeriksaan I No R.560/007/DISNAKER tanggal 12 Januari 2018 diminta kepada Saudara untuk melaksanakan isi Nota Pemeriksaan I tersebut dan melaporkan segala sesuatunya secara tertulis kepada kami dalam waktu 7 (tujuh) hari sejak diterimanya Nota Pemeriksaan II ini.",
            $headerStyle,
            $paragraphStyleNoSpace,
            [
                'alignment' => 'left'
            ]
        );

        $section->addText(
            "\t Apabila dalam waktu yang telah ditentukan, Saudara tetap tidak melaksanakan Nota Pemeriksaan ini dan tidak melaporkan segala sesuatunya secara tertulis kepada kami, akan diproses hukum lebih lanjut sesuai dengan peraturan perundang-undangan.",
            $headerStyle,
            $paragraphStyleNoSpace,
            [
                'alignment' => 'left'
            ]
        );

        $section->addText(
            "\t Nota Pemeriksaan II ini dibuat sebagai peringatan terakhir atas ketidakpatuhan terhadap peraturan perundang-undangan bidang ketenagakerjaan.",
            $headerStyle,
            $paragraphStyleNoSpace,
            [
                'alignment' => 'left'
            ]
        );

        $section->addText(
            "\t     Demikian, atas perhatiannya diucapkan terima kasih.",
            $headerStyle,
            $paragraphStyleNoSpace,
            [
                'alignment' => 'left'
            ]
        );

        $section->addTextBreak(1);

        $table = $section->addTable([
            'alignment' => 'center', 
            'bgColor' => '000000',
            'borderSize' => 'transfer',
        ]);

        $table->addRow(true);
        $table->addCell(Converter::cmToTwip(12.5))->addText('tes1',null,['align' => 'center']);
        $table->addCell(Converter::cmToTwip(12.5))->addText('tes2',null,['align' => 'center']);

        $section->addTextBreak(1);

        $section->addText('Tembusan:');
        $section->addListItem('Menteri Ketenagakerjaan;', 0, null, 'alphanum');
        $section->addListItem('Dirjen Binwasnaker dan K3;', 0, null, 'alphanum');
        $section->addListItem('Kepala Dinas Penanaman Modal, Pelayanan Perizinan Terpadu Satu Pintu dan Tenaga Kerja Kabupaten Bangka Tengah', 0, null, 'alphanum');


        $section->addText('-----------------------------------------------------------------------------------------------------------------');

        $section->addText('Pada hari ini, .................................... tanggal, .................................... 1 (satu) lembar Nota Pemeriksaan II telah diterima oleh yang bersangkutan.');

        $table = $section->addTable([
            'alignment' => 'center', 
            'bgColor' => '000000',
            'borderSize' => 'transfer',
        ]);

        $table->addRow(true);
        $table->addCell(Converter::cmToTwip(12.5))->addText('Yang Menerima,',null,['align' => 'center']);
        $table->addCell(Converter::cmToTwip(12.5))->addText('Yang Menyerahkan,',null,['align' => 'center']);

        $section->addTextBreak(2);

        $table = $section->addTable([
            'alignment' => 'center', 
            'bgColor' => '000000',
            'borderSize' => 'transfer',
        ]);

        $table->addRow(true);
        $table->addCell(Converter::cmToTwip(12.5))->addText('(                              ),',null,['align' => 'center']);
        $table->addCell(Converter::cmToTwip(12.5))->addText('(                              ),',null,['align' => 'center']);

        // Tempat penyimpanan file sama nama file.
        $filename = time() . '_' . 'Test-Word-SS.docx';
        $path     = 'document/' . $filename;
        $xmlWrite = IOFactory::createWriter($phpWord, 'Word2007');
        $xmlWrite->save($path);

        return $this->redirect($path);
    }

    // Test Excel
    public function actionTestExcelS()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Mulai
        $sheet->setCellValue('A1', 'Nama :');
        $sheet->setCellValue('B1', 'Syahrul Romadoni');
        $sheet->setCellValue('A2', 'Hobi :');
        $sheet->setCellValue('B2', 'Ngoding');

        // Tempat penyimpanan file sama nama file.
        $filename = time() . '_' . 'Test-Excel-S.xlsx';
        $path     = 'document/' . $filename;
        $writer   = new Xlsx($spreadsheet);
        $writer->save($path);

        return $this->redirect($path);
    }
}
