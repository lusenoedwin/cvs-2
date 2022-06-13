<?php
	include 'includes/session.php';


	function generateRow($conn){
		$contents = '';

	 	
		$sql = "SELECT * FROM positions WHERE priority =1 ";
        $query = $conn->query($sql);

        while($row = $query->fetch_assoc()){
        	$id = $row['id'];
        	$contents = '
        		<tr>
        			<td colspan="2" align="center" style="font-size:15px;"><b>'.$row['description'].'</b></td>
        		</tr>
        		<tr>
        			<td width="80%"><b>Candidates</b></td>
        			<td width="20%"><b>Votes</b></td>
        		</tr>
        	';

        	$sql = "SELECT * FROM candidates WHERE position_id = '$id' ORDER BY lastname ASC";
    		$cquery = $conn->query($sql);
    		while($crow = $cquery->fetch_assoc()){
    			$sql = "SELECT * FROM votes WHERE candidate_id = '".$crow['id']."'";
      			$vquery = $conn->query($sql);
      			$votes = $vquery->num_rows;

      			$contents .= '
      				<tr>
      					<td>'.$crow['lastname'].", ".$crow['firstname'].'</td>
      					<td>'.$votes.'</td>
      				</tr>
      			';

    		}

        }

		return $contents;
	}

function generateRow1($conn){
    $contents1 = '';


    $sql = "SELECT * FROM positions WHERE priority=2";
    $query = $conn->query($sql);

    while($row = $query->fetch_assoc()){
        $id = $row['id'];
        $contents1 = '
        		<tr>
        			<td colspan="2" align="center" style="font-size:15px;"><b>'.$row['description'].'</b></td>
        		</tr>
        		<tr>
        			<td width="80%"><b>Candidates</b></td>
        			<td width="20%"><b>Votes</b></td>
        		</tr>
        	';

        $sql = "SELECT * FROM candidates WHERE position_id = '$id' ORDER BY lastname ASC";
        $cquery = $conn->query($sql);
        while($crow = $cquery->fetch_assoc()){
            $sql = "SELECT * FROM votes WHERE candidate_id = '".$crow['id']."'";
            $vquery = $conn->query($sql);
            $votes = $vquery->num_rows;

            $contents1 .= '
      				<tr>
      					<td>'.$crow['lastname'].", ".$crow['firstname'].'</td>
      					<td>'.$votes.'</td>
      				</tr>
      			';

        }

    }

    return $contents1;
}


function generateRow2($conn){
    $contents2 = '';


    $sql = "SELECT * FROM positions WHERE priority=3";
    $query = $conn->query($sql);

    while($row = $query->fetch_assoc()){
        $id = $row['id'];
        $contents2 = '
        		<tr>
        			<td colspan="2" align="center" style="font-size:15px;"><b>'.$row['description'].'</b></td>
        		</tr>
        		<tr>
        			<td width="80%"><b>Candidates</b></td>
        			<td width="20%"><b>Votes</b></td>
        		</tr>
        	';

        $sql = "SELECT * FROM candidates WHERE position_id = '$id' ORDER BY lastname ASC";
        $cquery = $conn->query($sql);
        while($crow = $cquery->fetch_assoc()){
            $sql = "SELECT * FROM votes WHERE candidate_id = '".$crow['id']."'";
            $vquery = $conn->query($sql);
            $votes = $vquery->num_rows;

            $contents2 .= '
      				<tr>
      					<td>'.$crow['lastname'].", ".$crow['firstname'].'</td>
      					<td>'.$votes.'</td>
      				</tr>
      			';

        }

    }

    return $contents2;
}


function generateRow3($conn){
    $contents3 = '';


    $sql = "SELECT * FROM positions WHERE priority=4";
    $query = $conn->query($sql);

    while($row = $query->fetch_assoc()){
        $id = $row['id'];
        $contents3 = '
        		<tr>
        			<td colspan="2" align="center" style="font-size:15px;"><b>'.$row['description'].'</b></td>
        		</tr>
        		<tr>
        			<td width="80%"><b>Candidates</b></td>
        			<td width="20%"><b>Votes</b></td>
        		</tr>
        	';

        $sql = "SELECT * FROM candidates WHERE position_id = '$id' ORDER BY lastname ASC";
        $cquery = $conn->query($sql);
        while($crow = $cquery->fetch_assoc()){
            $sql = "SELECT * FROM votes WHERE candidate_id = '".$crow['id']."'";
            $vquery = $conn->query($sql);
            $votes = $vquery->num_rows;

            $contents3 .= '
      				<tr>
      					<td>'.$crow['lastname'].", ".$crow['firstname'].'</td>
      					<td>'.$votes.'</td>
      				</tr>
      			';

        }

    }

    return $contents3;
}


function generateRow4($conn){
    $contents4 = '';


    $sql = "SELECT * FROM positions WHERE priority=5";
    $query = $conn->query($sql);

    while($row = $query->fetch_assoc()){
        $id = $row['id'];
        $contents4 = '
        		<tr>
        			<td colspan="2" align="center" style="font-size:15px;"><b>'.$row['description'].'</b></td>
        		</tr>
        		<tr>
        			<td width="80%"><b>Candidates</b></td>
        			<td width="20%"><b>Votes</b></td>
        		</tr>
        	';

        $sql = "SELECT * FROM candidates WHERE position_id = '$id' ORDER BY lastname ASC";
        $cquery = $conn->query($sql);
        while($crow = $cquery->fetch_assoc()){
            $sql = "SELECT * FROM votes WHERE candidate_id = '".$crow['id']."'";
            $vquery = $conn->query($sql);
            $votes = $vquery->num_rows;

            $contents4 .= '
      				<tr>
      					<td>'.$crow['lastname'].", ".$crow['firstname'].'</td>
      					<td>'.$votes.'</td>
      				</tr>
      			';

        }

    }

    return $contents4;
}

$parse = parse_ini_file('config.ini', FALSE, INI_SCANNER_RAW);
$title = $parse['election_title'];

require_once('../tcpdf/tcpdf.php');
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->Image('images/uoklogo.jpeg', 15, 140, 75, 113, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1);
    $pdf->SetTitle('Result: '.$title);  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();
    $space='';
    $space .= '
    <div>
    <br>
    <br>
</div>
    ';

    $signature="Signature & Stamp: ....................................................";
    $officialname="Name: ........................................................................";
    $logo='';
    $logo .='<div style="text-align: center;">
              <img src="images/uoklogo.jpeg" alt="uoklogo">
                              </div>';
//    print chairperson
    $content = '';  
    $content .= '
      	<h2 align="center">'.$title.'</h2>
      	<h4 align="center">Tally Result</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
      ';
   	$content .= generateRow($conn);  
    $content .= '</table>';
    $pdf->writeHTML($logo);
    $pdf->writeHTML($content);
//print vicechairperson
$content1 = '';
$content1 .= '
      	<table border="1" cellspacing="0" cellpadding="3">  
      ';
$content1 .= generateRow1($conn);
$content1 .= '</table>';
$pdf->writeHTML($content1);

//print
$content2 = '';
$content2 .= '
      	<table border="1" cellspacing="0" cellpadding="3">  
      ';
$content2 .= generateRow2($conn);
$content2 .= '</table>';
$pdf->writeHTML($content2);


//print vicechairperson
$content3 = '';
$content3 .= '
      	<table border="1" cellspacing="0" cellpadding="3">  
      ';
$content3 .= generateRow3($conn);
$content3 .= '</table>';
$pdf->writeHTML($content3);



//print vicechairperson
$content4 = '';
$content4 .= '
      	<table border="1" cellspacing="0" cellpadding="3">  
      ';
$content4 .= generateRow4($conn);
$content4 .= '</table>';
$pdf->writeHTML($content4);

$pdf->writeHTML($space);
$pdf->writeHTML($officialname);
$pdf->writeHTML($space);
$pdf->writeHTML($signature);


    $pdf->Output('SGC Election_results.pdf', 'I');



?>