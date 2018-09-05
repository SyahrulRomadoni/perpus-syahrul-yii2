<?php 


namespace app\controllers;

use Yii;
use app\models\Surat;
use app\models\SuratSearch;
use app\models\SuratAtribut;
use app\models\RefSuratJenis;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use PhpOffice\PhpWord\Shared\Converter;
use Mpdf\Mpdf;

/**
 * SuratController implements the CRUD actions for Surat model.
 */
class PdfController extends Controller
{

    public function actionPdf()
    {

         $mpdf  = new mPDF();
         $mpdf->WriteHTML($this->renderPartial('pdfSurat'));
         $mpdf->Output('DataBuku.pdf', 'D');
         exit;

        $content = $this->renderPartial('pdfSurat');

        $marginLeft = 20;
        $marginRight = 15;
        $marginTop = 5;
        $marginBottom = 5;
        $marginHeader = 5;
        $marginFooter = 5;

        $cssInline = <<<CSS
                table {
                    overflow: wrap;
                    font-size: 8pt;
                }

                tr, td {
                    padding: 0px;
                }

                div {
                    overflow: wrap;
                }

                .konten div {
                    box-shadow:
                            2px 0 0 0 #888,
                            0 2px 0 0 #888,
                            2px 2px 0 0 #888,   /* Just to fix the corner */
                            2px 0 0 0 #888 inset,
                            0 2px 0 0 #888 inset;
                }

                .clear {
                    clear: both;
                }

                .kode {
                    border: 1px solid black;
                    float: right;
                    font-size: 15px;
                    font-weight: bold;
                    padding: 0px 10px;
                    height: 35px;
                    line-height: 35px;
                    text-align: center;
                    width: 17%;
                }

                .header {
                    font-size: 8pt;
                    overflow: hidden;
                }

                .header .left {
                    width: 60%;
                    float: left;
                }

                .header .right {
                    width: 40%;
                    float: left;
                }

                .header table {
                    border-spacing: 0px;
                    border-collapse: collapse;
                }

                .header table .caption {
                    width: 45%;
                }

                .header table .point {
                    width: 2%;
                }

                .header table .kotak {
                    width: 5%;
                }

                .kode span {
                    display: inline-block;
                    vertical-align: middle;
                    line-height: normal;
                }

                .debug, .debug tr, .debug td {
                    border: 1px solid black;
                }

                .kotak, .form {
                    border-spacing: 0px;
                    border-collapse: collapse;
                }

                .kotak {
                    border: 1px solid black;
                    height: 15px;
                    width: 2.87%;
                    text-align: center;
                }

                .colspan {
                    padding-left: 2px;
                    text-align: left;
                }

                .kanan {
                    width: 1%;
                }

                .t-center {
                    text-align: center;
                }

                h4 {
                    font-weight: bold;
                    font-family: Arial;
                    font-size: 12pt;
                }

                .form .caption {
                    width: 26.8%;
                }

                .form .point, .section .point {
                    width: 1%;
                }

                .section {
                    border: 2px solid black;
                    padding: 0px;
                    margin: -1px !important;
                }

                .section h5 {
                    margin: 0px;
                    font-weight: bold;
                    text-align: left;
                    font-size: 11px;
                }

                .section table {
                    border-spacing: 0px;
                    border-collapse: collapse;
                }

                .section .nomor {
                    width: 3%;
                }

                .section .caption {
                    width: 24%;
                }

                .section .isi {
                    float: left;
                    overflow: hidden;
                    display: inline-block;
                }

                .border {
                    border: 1px solid black;
                }

                .ttd-left {
                    width: 30%;
                    text-align: center;
                }

                .ttd-middle {
                    width: 40%;
                    text-align: center;
                }

                .ttd-right {
                    width: 30%;
                    text-align: center;
                }

CSS;

        $pdf = new Mpdf([
            'mode' => Mpdf::MODE_UTF8,
            // F4 paper format
            'format' => [210, 330],
            // portrait orientation
            'orientation' => Mpdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Mpdf::DEST_BROWSER,
            // your html content input

            'marginLeft' => $marginLeft,
            'marginRight' => $marginRight,
            'marginTop' => $marginTop,
            'marginBottom' => $marginBottom,
            'marginHeader' => $marginHeader,
            'marginFooter' => $marginFooter,

            'content' => $content,

            // format content from your own css file if needed or use the
            // any css to be embedded if required
            'cssInline' => $cssInline,
             // set mPDF properties on the fly
            'options' => ['title' => 'PDF Surat'],
             // call mPDF methods on the fly
            'methods' => []
        ]);

        return $pdf->render();
    }

}
