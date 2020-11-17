<?php

			//call the FPDF library
		require('fpdf181/fpdf.php');

		//A4 width : 219mm
		//default margin : 10mm each side
		//writable horizontal : 219-(10*2)=189mm

		//create pdf object
		$pdf = new FPDF('P','mm','A4');
		
		//add new page
		$pdf->AddPage();

		//set font to arial, bold, 14pt
		$pdf->SetFont('Arial','B',20);

		//Cell(width , height , text , border , end line , [align] )
		 
		$pdf->Cell(0,10,'Sarita Tamang',0,1,"C");
		$pdf->Ln(5);

		//set font to arial, regular, 12pt
		$pdf->SetFont('Arial','',12);

		$pdf->Cell(25 ,5,'Email:',0,0);
		$pdf->Cell(34 ,5,'srtatmg@gmail.com',0,1);//end of line
		$pdf->Ln(4);

		$pdf->Cell(25 ,5,'Linkedin:',0,0);
		$pdf->Cell(34 ,5,'https://www.linkedin.com/in/sarita-tamang-159717163',0,1);//end of line
		$pdf->Ln(4);

		$pdf->Cell(25 ,5,'Phone:',0,0);
		$pdf->Cell(34 ,5,'+977 - 9843623120',0,1);//end of line
		$pdf->Ln(4);


		$pdf->Cell(25 ,5,'Address:',0,0);
		$pdf->Cell(34 ,5,'Tokha, Kathmandu, Nepal',0,1);//end of line
		$pdf->Ln( 4 );

		$pdf->SetLineWidth(1);
		$pdf->Line(10,75,200,75);

			//set font to arial, bold, 14pt
		$pdf->SetFont('Arial','B',15);

		//Cell(width , height , text , border , end line , [align] )
		$pdf->Cell(0,20,'Experience',0,1);

		//set font to arial, regular, 12pt
		$pdf->SetFont('Arial','B',12);

		$pdf->Cell(25 ,5,'IT Officer Assistant ',0,0);

		//set font to arial, regular, 12pt
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(35 ,20,'Samro Pvt. Ltd.',0,1);//end of line

		//set font to arial, bold, 14pt
		$pdf->SetFont('Arial','B',15);

		//Cell(width , height , text , border , end line , [align] )
		$pdf->Cell(0,20,'Skills',0,1);

		//set font to arial, regular, 12pt
		$pdf->SetFont('Arial','',12);

		$pdf->Cell(25 ,5,'',0,0);
		$pdf->Cell(35 ,5,'- PHP (Intermediate)',0,1);//end of line
		$pdf->Ln(4);

		$pdf->Cell(25 ,5,'',0,0);
		$pdf->Cell(35 ,5,'- HTML / CSS (Intermediate)',0,1);//end of line
		$pdf->Ln(4);

		$pdf->Cell(25 ,5,'',0,0);
		$pdf->Cell(35 ,5,'- MYSQL (Databases)',0,1);//end of line
		$pdf->Ln(4);

		$pdf->Cell(25 ,5,'',0,0);
		$pdf->Cell(35 ,5,'- LARAVEL / CI (Basic)',0,1);//end of line
		$pdf->Ln(4);

		$pdf->Cell(25 ,5,'',0,0);
		$pdf->Cell(35 ,5,'- BOOTSTRAP / JS (Basic)',0,1);//end of line
		$pdf->Ln(4);

		$pdf->SetLineWidth(1);
		$pdf->Line(10,115,200,115);

		//set font to arial, bold, 14pt
		$pdf->SetFont('Arial','B',15);

		//Cell(width , height , text , border , end line , [align] )
		$pdf->Cell(0,20,'Academic Background',0,1);

		//set font to arial, regular, 12pt
		$pdf->SetFont('Arial','B',12);

		$pdf->Cell(25 ,5,'School Leaving Certificate (2013)',0,0);

		//set font to arial, regular, 12pt
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(35 ,20,'Nepal Model School',0,1);//end of line


		$pdf->SetFont('Arial','B',12);

		$pdf->Cell(25 ,5,'High School (2013 - 2015)',0,0);

		//set font to arial, regular, 12pt
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(35 ,20,'Southwestern State College(+2 in science)',0,1);

		$pdf->SetFont('Arial','B',12);

		$pdf->Cell(25 ,5,'BSc. Hons in Computing & Business( 2015 - 2017) ',0,0);

		//set font to arial, regular, 12pt
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(35 ,20,'(L4DC & L5DC)  [Transferred to TBC for final Year]',0,1);

		$pdf->SetFont('Arial','B',12);

		$pdf->Cell(25 ,5,'BIT in Computing & Business.(Currently Studying)',0,0);

		//set font to arial, regular, 12pt
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(35 ,20,'The British College(TBC)',0,1);

		$pdf->SetLineWidth(1);
		$pdf->Line(10,180,200,180);
		
		//output the result
		$pdf->Output();



?>