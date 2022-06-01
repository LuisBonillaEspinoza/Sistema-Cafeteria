<?php
header('Content-type: application/pdf');
require('fpdf/fpdf.php');
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logo.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(70,10,'Boleta Electronica',1,0,'C');
    // Salto de línea
    $this->Ln(40);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
include 'conexion.php';
$ultimoid= $con->query("SELECT MAX(pedido_cod_int)  FROM pedido");
$fila = mysqli_fetch_row($ultimoid);
$pdf->Cell(90,10,"Nombre del Cliente : ",0,0,'C',0);
$nombre = $con->query("select usuario.user_nombre_string from usuario inner join pedido on pedido.usuario_dni_string=usuario.user_dni_txt where pedido_cod_int='".$fila[0]."'");
while($row=$nombre->fetch_array()){
$pdf->Cell(90,10,$row[0],0,0,'C',0);
}
$pdf->Ln();
$pdf->Cell(90,10,"Producto : ",0,0,'C',0);
$pro = $con->query("select producto.produ_nombre_string from producto inner join detalle on producto.produ_codigo_int=detalle.produ_cod_int where pedido_cod_int ='".$fila[0]."'");
while($row1=$pro->fetch_array()){
    $pdf->Cell(90,10,$row1[0],0,0,'C',0);
    }
$pdf->Ln();
$pdf->Cell(90,10,"Fecha del Pedido : ",0,0,'C',0);
$fecha = $con->query("select pedido_fecha_date from pedido where pedido_cod_int='".$fila[0]."'");
while($row2=$fecha->fetch_array()){
    $pdf->Cell(90,10,$row2[0],0,0,'C',0);
    }
$pdf->Ln();
$pdf->Cell(90,10,"Cantidad del Producto : ",0,0,'C',0);
$cantidad = $con->query("select detalle.detalle_numcan_int from detalle inner join pedido on pedido.pedido_cod_int=detalle.pedido_cod_int where pedido.pedido_cod_int='".$fila[0]."'");
echo $con->error;
while($row3=$cantidad->fetch_array()){
    $pdf->Cell(90,10,$row3[0],0,0,'C',0);
    }
$pdf->Ln();
$pdf->Cell(90,10,"Importe Neto : ",0,0,'C',0);
$neto = $con->query("select pedido_importeNeto_int from pedido where pedido_cod_int='".$fila[0]."'");
while($row4=$neto->fetch_array()){
    $pdf->Cell(90,10,$row4[0],0,0,'C',0);
    }
$pdf->Ln();
$pdf->Cell(90,10,"Precio del Producto : ",0,0,'C',0);
$precio = $con->query("select producto.produ_precio_do from detalle inner join producto on producto.produ_codigo_int=detalle.produ_cod_int where detalle.pedido_cod_int='".$fila[0]."'");
echo $con->error;
while($row5=$precio->fetch_array()){
    $pdf->Cell(90,10,$row5[0],0,0,'C',0);
    }
$pdf->Output();
$documento = $pdf->Output("","S");

$correo = $con->query("select usuario.user_email_string from usuario inner join pedido on pedido.usuario_dni_string=usuario.user_dni_txt where pedido.pedido_cod_int='".$fila[0]."'");
echo $con->error;
try{
//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$mail->isSMTP();

$mail->From = "bluis9618@gmail.com"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ="bluis9618@gmail.com"; //nombre usuario
$mail->Password = 'meteorocet1'; //contraseña

//Agregar destinatario
while($row6=$correo->fetch_array()){
$mail->AddAddress($row6[0]);}
$mail->Subject='Boleta de Venta';
$mail->Body='Muestre al usuario la boleta para despachar su pedido';
$mail->addStringAttachment($documento,'doc.pdf','base64','application/pdf');
$mail->send();
echo'<script type="text/javascript">
alert("Enviado Correctamente");
</script>';

}
catch(Exception $e){
    echo "Erro en " . $e->getMessage();
}