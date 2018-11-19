
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class m_pdf {

    function m_pdf()
    {
        $CI = & get_instance();
        log_message('Debug', 'mPDF class is loaded.');
    }

    function load($param=NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';

        if ($params == NULL)
        {
            $param = '"en-GB-x","A4","","",10,10,10,10,6,3';                
        }

        //return new mPDF($param);
        return new mPDF();
    }

    public function save_download()
    { 
        //load mPDF library
        $this->load->library('m_pdf');
        //load mPDF library


        //now pass the data//
        $this->data['title']="MY PDF TITLE 1.";
        $this->data['description']="";
        $this->data['description']=$this->official_copies;
         //now pass the data //

        
        $html=$this->load->view('pdf_output',$this->data, true); //load the pdf_output.php by passing our data and get all data in $html varriable.

        //this the the PDF filename that user will get to download
        $pdfFilePath ="mypdfName-".time()."-download.pdf";

        
        //actually, you can pass mPDF parameter on this load() function
        $pdf = $this->m_pdf->load();
        //generate the PDF!
        $pdf->WriteHTML($html,2);
        //offer it to user via browser download! (The PDF won't be saved on your server HDD)
        $pdf->Output($pdfFilePath, "D");


    }
}
