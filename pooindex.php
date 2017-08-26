<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Menu en POO PHP jose perfecto figueroa sanchez </title> 
    
</head> 

<body background="fondo.jpg"> 
	<p><h1>Primer pagina php orientada a objetos</h1></p>
	<br>
<?php 
   class Menu
   {
    private $enlace=array();
    private $titulo=array();

    public function opcion($en,$ti)
    {
        $this->enlace[]=$en;
        $this->titulo[]=$ti;
    } 
    public function mostrarMenu(){
    	for ($i=0; $i < count($this->enlace); $i++) { 
    		echo '<a href="'.$this->enlace[$i].'">'.$this->titulo[$i].'</a>';
    		echo '-';
    	}
    } 

    public function mostrarMenuVertical(){
    	for ($i=0; $i < count($this->enlace); $i++) { 
    		echo '<a href="'.$this->enlace[$i].'"> '.$this->titulo[$i].'</a>';
    		echo '<br/>';
    	}
    } 

   }
   $miMenu = new Menu();
   $miMenu-> opcion("http://www.cinecalidad.com","Cinecalidad");
   $miMenu-> opcion("http://www.google.com","Google");
   $miMenu-> opcion("http://www.youtube.com","Youtube");
   $miMenu-> mostrarMenu();

   echo '<hr>';
   $miMenu2=new  menu();
   $miMenu2-> opcion("http://www.facebook.com", "Facebook");
   $miMenu2-> opcion("http://www.gmail.com", "Gmail");
   $miMenu2-> opcion("http://www.hotmail.com", "hotmail");
   $miMenu2-> mostrarMenuVertical();
 ?>
</body>  
</html>