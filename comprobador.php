<!DOCTYPE html>
<html>

<head>

	<title></title>

</head>

<body>

 <?php 
//incluir datos
 require "Alumno.php";
 //Metemos los datos
 $mayorEdad=18;
 $cursoUno=1;
 $alumno=new alumno();
 $alumno->setedad($mayorEdad);
 $alumno->setcurso($cursoUno);


//Metemos datos que no superan el minimo de edad
$alumno->setedad(13);
$alumno->setcurso(4);

  ?>

</body>

</html>