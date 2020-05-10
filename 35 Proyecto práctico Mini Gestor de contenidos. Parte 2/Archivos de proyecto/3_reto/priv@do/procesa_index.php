<?

include('../priv2467/configuracion.php');
include('SimpleImage.class.php');

if($_SESSION['level']=='1'){
	
	//Ruta donde se guardarán las imágenes
	$directorio = '../images/home/';
	
	
	//Recibo los datos de la imagen
	$nombre1 = 'print.jpg';
	$tipo = $_FILES['foto1']['type'];
	$tamano = $_FILES['foto1']['size'];
	
	if($tamano > 0){
		move_uploaded_file($_FILES['foto1']['tmp_name'],$directorio.$nombre1);
		
	$obj_simpleimage = new SimpleImage();
	$obj_simpleimage->load($directorio.$nombre1);
	$var_nuevo_archivo = $nombre1;
	$obj_simpleimage->resize(214,413);
	$obj_simpleimage->save($directorio.$var_nuevo_archivo);
	}
	
	//Recibo los datos de la imagen 2
	$nombre2 = 'digital.jpg';
	$tipo2 = $_FILES['foto2']['type'];
	$tamano2 = $_FILES['foto2']['size'];
	
	if($tamano2 > 0){
		move_uploaded_file($_FILES['foto2']['tmp_name'],$directorio.$nombre2);
		
	$obj_simpleimage = new SimpleImage();
	$obj_simpleimage->load($directorio.$nombre2);
	$var_nuevo_archivo = $nombre2;
	$obj_simpleimage->resize(214,413);
	$obj_simpleimage->save($directorio.$var_nuevo_archivo);
	}
	
	//Recibo los datos de la imagen 2
	$nombre3 = 'move.jpg';
	$tipo3 = $_FILES['foto3']['type'];
	$tamano3 = $_FILES['foto3']['size'];
	
	if($tamano3 > 0){
		move_uploaded_file($_FILES['foto3']['tmp_name'],$directorio.$nombre3);
		
	$obj_simpleimage = new SimpleImage();
	$obj_simpleimage->load($directorio.$nombre3);
	$var_nuevo_archivo = $nombre3;
	$obj_simpleimage->resize(214,413);
	$obj_simpleimage->save($directorio.$var_nuevo_archivo);
	}
	
	
	
	header('Location: index3.php');
	
}else{
	header('Location:../index.php');
}

?>