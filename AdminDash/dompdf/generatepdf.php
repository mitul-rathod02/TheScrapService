<?php							
	namespace Dompdf;
	require_once 'autoload.inc.php';
	
	//how-to-convert-dynamic-php-file-to-pdf
	if(isset($_POST['submit_val']))
	{
		$table1 = $_POST['table'];
		$dompdf = new Dompdf(); 
 
             $dompdf->loadHtml( $table1);
		$dompdf->setPaper('A4', 'landscape');
		// Render the HTML as PDF
		$dompdf->render();
    
             // displays the generated PDF in a browser
             $dompdf->stream("sample.pdf",array("Attachment" => false));
		
		// Outputs the generated PDF to Browser downloads directly
	      //  $dompdf->stream();
	     
            exit(0);
	}
	
	?>