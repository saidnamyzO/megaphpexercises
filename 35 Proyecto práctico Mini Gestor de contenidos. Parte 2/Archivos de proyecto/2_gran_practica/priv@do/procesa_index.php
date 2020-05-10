<?

include('../priv2467/configuracion.php');
include('SimpleImage.class.php');

if($_SESSION['level']=='1'){
	
	//Ruta donde se guardarán las imágenes
	$directorio = '../images/home/';
	
	
	//Recibo los datos de la imagen
	$nombre1 = 'move.jpg';
	$tipo = $_FILES['foto1']['type'];
	$tamano = $_FILES['foto1']['size'];
	
	if($tamano > 0){
		move_uploaded_file($_FILES['foto1']['tmp_name'],$directorio.$nombre1);
	}
	
	$obj_simpleimage = new SimpleImage();
	$obj_simpleimage->load($directorio.$nombre1);
	$var_nuevo_archivo = $nombre1;
	$obj_simpleimage->resize(214,413);
	$obj_simpleimage->save($directorio.$var_nuevo_archivo);
	
	header('Location: index3.php');
	
}else{
	header('Location:../index.php');
}

?>