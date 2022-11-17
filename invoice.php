<?php
require('Config.php');
require('pdf/fpdf.php');
$sql = "SELECT * FROM `item` WHERE id='$_POST[id]'";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res)>0){
    foreach ($row as $key => $value) {
    $html = '<table>';
    $html.= '<tr><td>Book</td><td>Autor</td><td>Price</td></tr>';
    while($row = mysqli_fetch_assoc($res)) {
            $html.= '<tr><td>'.$row['bname'].'</td><td>'.$row['aname'].'</td><td>'.$row['price'].'</td></tr>';
        }
    }
    $html.= '</table>';
    echo $html;
}else {

}



// $pdf = new FPDF();
// $pdf->AddPage();
// $pdf->SetFont('Arial','B',16);
// $pdf->Cell(40,10,'Hello World!');
// $pdf->Output();
?>