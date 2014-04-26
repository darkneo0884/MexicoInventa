<?php
    // android
/*$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
if(stripos($ua,'android') !== false) { // && stripos($ua,'mobile') !== false) {
   	  $_SESSION['parallaxactive'] ='js/jquery.parallax-1.1.3.js';
	  $_SESSION['parallaxnormal'] ='css/helpers.css';
  	  $_SESSION['parallaxmobile'] ='css/mobiles.css';
	  $_SESSION['windowlogin'] = 'width=100,height=50';
	  
  exit();
}*/


// ipad
$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');

// iphone/ipod
if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod'))
{
  $_SESSION['parallaxnormal'] ='css/parallaxnormal.css';
  $_SESSION['parallaxmobile'] ='css/parallaxmobile.css';
  $_SESSION['windowlogin'] = 'width=100,height=50';

}else{
	  $_SESSION['parallaxactive'] ='js/jquery.parallax-1.1.3.js';
	  $_SESSION['parallaxnormal'] ='css/helpers.css';
  	  $_SESSION['parallaxmobile'] ='css/mobiles.css';
	  $_SESSION['windowlogin'] = 'width=600,height=400';
	  
}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=0.7, user-scalable=yes"> 
         <title>::MEXICO INVENTA::</title>
        <meta name="description" content="" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="../mexicoinventa.ico"> 

<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- css -->
    <link href="<?php echo $_SESSION['parallaxnormal'];?>" rel="stylesheet" id="parallaxnormal"/>
    <link href="<?php echo $_SESSION['parallaxmobile'];?>" rel="stylesheet" type="text/css" media="screen and (max-width: 800px) and (min-width: 300px)" id="parallaxmobile"/>
    <link href="css/mediano.css" rel="stylesheet" type="text/css" media="screen (min-width: 1200px)"/>
    <link href="css/grande.css" rel="stylesheet" type="text/css" media="screen (min-width: 1600px)"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style2.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" type="text/css" />
    <link href="css/social-buttons.css" rel="stylesheet" type="text/css" />
	<link href="fonts/css/fontello.css" rel="stylesheet" type="text/css" />
    <link href='css/calendar.css' rel='stylesheet' type='text/css'>
<noscript>
			<link href="css/nojs.css" rel="stylesheet" type="text/css" />
		</noscript>
    
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- JavaScript -->
       	
       	
       	<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
       	<script src="js/jquery-ui.js" type="text/javascript"></script>
       	<script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
       	<!--<script src="js/modernizr-2.6.2.min.js" type="text/javascript"></script>-->
       	<script src="js/modernizr.custom.28468.js" type="text/javascript"></script>
       	<script src="<?php echo $_SESSION['parallaxactive'];?>" type="text/javascript" id="parallaxactive"></script>
       	<script src="js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
       	<script src="js/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
       	<script src="js/jquery.bpopup.min.js" type="text/javascript"></script>
       	<script src="js/jquery.cslider.js" type="text/javascript"></script>
       	
       	<script type="text/javascript">
       		 $(function () {
      
       // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('#btnLogin').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('#element_to_pop_up').bPopup();
                
            });
            
            $('#spnclose').click(function() {
		        $('#element_to_pop_up').bPopup().close();
		      });
            
            
            //Visualizar pagina de under
            	$('#imgIdeas').click(function(){
            	
            		//Test
            		$(location).attr('href','http://www.mmdev.mx/mexicoinventa/index.php?op=under');
            		//localhost
            		//$(location).attr('href','http://localhost:5050/mexicoinventa/index.php?op=under');
            		//production
            		//$(location).attr('href','http://www.mexicoinventa.com/mexicoinventa/index.php?op=under');
            	});
            	
            	$('#imgComprar').click(function(){
            	
            		//Test
            		$(location).attr('href','http://www.mmdev.mx/mexicoinventa/index.php?op=under');
            		//localhost
            		//$(location).attr('href','http://localhost:5050/mexicoinventa/index.php?op=under');
            		//production
            		//$(location).attr('href','http://www.mexicoinventa.com/mexicoinventa/index.php?op=under');
            	});
            	
            	$('#imgInfluenciar').click(function(){
            	
            		//Test
            		$(location).attr('href','http://www.mmdev.mx/mexicoinventa/index.php?op=under');
            		//localhost
            		//$(location).attr('href','http://localhost:5050/mexicoinventa/index.php?op=under');
            		//production
            		//$(location).attr('href','http://www.mexicoinventa.com/mexicoinventa/index.php?op=under');
            	});
            	
            $('#logo').click(function(){
            	
            		//Test
            		$(location).attr('href','http://www.mmdev.mx/mexicoinventa/index.php?op=under');
            		//localhost
            		//$(location).attr('href','http://localhost:5050/mexicoinventa/');
            		//production
            		//$(location).attr('href','http://www.mexicoinventa.com/mexicoinventa/index.php?op=under');
            	});
            
            
            //Opciones de Login,Registro y olvidar pass
            $('#btnRegistrate').click(function(){
            	
            	$('#section2').css('display','block');
            	$('#section1').css('display','none');
            });
            
            $('#btnRecuperar').click(function(){
            	
            	$('#section3').css('display','block');
            	$('#section1').css('display','none');
            });
            
            $('#btnRegresardereg').click(function(){
            	
            	$('#section2').css('display','none');
            	$('#section1').css('display','block');
            });
            
            $('#btnRegresardeolvido').click(function(){
            	
            	$('#section3').css('display','none');
            	$('#section1').css('display','block');
            });
            
            
            /***********Slider carousel*************/
		$('#da-slider').cslider();

      
    });
       		
       	</script>
<script type='text/javascript'>
//Calendario
            var getDatee = new Date();
            var monthe = getDatee.getMonth();
            var yeare = getDatee.getFullYear();
            var day = getDatee.getDate(); 
            function isEmpty(val){
               return (val === undefined || val == null || val.length <= 0) ? true : false;
            }
            
            function prev()
            {
            	monthe = monthe-1;
                if(monthe < 0)
        	{
        	    yeare = yeare-1;	
                    monthe = 11;
                }
                dispCal(monthe, yeare);
                return false;
            }
            
            function next()
            {
            	monthe = monthe+1;
                if(monthe > 11)
        	{
        	    yeare = yeare+1;	
                    monthe = 0;
                }
                dispCal(monthe, yeare);
                return false;
            }
            
            function daysInMonth(monthe, yeare)
            {
                return 32 - new Date(yeare, monthe, 32).getDate();
            }

            function getElementPosition(arrName,arrItem){
                for(var pos=0; pos<arrName.length; pos++ ){
                    if(arrName[pos]==arrItem){
                        return pos;
                    }
                }
            }
            
            function setVal(getDat){
                $('#sel').val(getDat);
                $('#calendar').hide();
            }
            
            function dispCal(mon,yea){
		var ar = new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
                var chkEmpty = isEmpty(mon);
                var n,days,calendar,startDate,newYea,setvale,i;
                if(chkEmpty != true){
                    mon = mon+1;
                    n = ar[mon-1];
                    n += " "+yea;
                    newYea = yea;
                    days = daysInMonth((mon-1),yea);
                    startDate = new Date(ar[mon-1]+" 1"+","+parseInt(yea));
                }else{
                    mon = getElementPosition(ar,ar[getDatee.getMonth()]);
                    n = ar[getDatee.getMonth()];
                    n += " "+yeare;
                    newYea = yeare;
                    days = daysInMonth(mon,yeare);
                    startDate = new Date(ar[mon]+" 1"+","+parseInt(yeare));
                }
                
                var startDay = startDate.getDay();
                var startDay1 = startDay;
                while(startDay> 0){
                   calendar += "<td></td>";  
                   startDay--;
                }                
                i = 1;
                while (i <= days){
                  if(startDay1 > 6){
                      startDay1 = 0;  
                      calendar += "</tr><tr>";  
                  }  
                  mon = monthe+1;
                  setvale = i+","+n;
		  if(i == day && newYea==yeare && mon==monthe){
		    calendar +="<td class='thisday' onclick='setVal(\""+i+"-"+mon+"-"+newYea+"\")'>"+i+"</td>";
                  }else{  
                    calendar +="<td class='thismon' onclick='setVal(\""+i+"-"+mon+"-"+newYea+"\")'>"+i+"</td>";   
                  }
		  startDay1++;  
                  i++;  
                }
		    calendar +="<td><a style='font-size: 9px; color: #efefef; font-family: arial; text-decoration: none;' href='http://www.hscripts.com'>&copy;h</a></td>";   
		
                $('#calendar').css('display','block');
                $('#month').html(n);
                var test = "<tr class='weekdays'><td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td></tr>";  
                test += calendar;
		$('#dispDays').html(test);
            }
        </script>

   
</head>
  <body>
		 <!-- static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header " >
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse ">
          <ul class="nav navbar-nav">
            <li><img src="img/logo.png" id="logo" ></li>
              <li><a href="#" id="imgIdeas" name>Ideas</a>
              </li>
              <li><a href="#" id="imgInfluenciar">Influenciar</a>
              </li>
              <li><a href="#" id="imgComprar">Comprar</a>
              </li>
              
            <li>
            <form class="navbar-form ">
            <input type="text" class="form-control" placeholder="buscar...">
          </form>
          </li>
          <li>
			 <!-- Button that triggers the popup -->
            <a href="#" id="btnLogin"> LogIn/Sign Up</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <p>Síguenos en:</p>
              <li>
					<div class="btn-group btn-group-sm marginheader">
					  <button class="btn btn-gplus"><i class="icon-facebook"></i> </button>
					  <button class="btn btn-gplus"><i class="icon-twitter"></i> </button>
					 <button class="btn btn-gplus"><i class="icon-gplus"></i> </button>
					</div>
           	  </li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
      <div id="first">
		<div class="story">
	    	
	    		<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2></h2>
					<p></p>

					<div class="da-img"></div>
				</div>
				<div class="da-slide">
					<h2></h2>
					<p></p>
					<div class="da-img"></div>
				</div>
				<div class="da-slide">
					<h2></h2>
					<p></p>
					<div class="da-img"></div>
				</div>
				<div class="da-slide">
					<h2></h2>
					<p></p>
					<div class="da-img"></div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
			
			<div class="barcontainer">
	    		 <!-- static navbar -->
    <div class="navbar " role="navigation">
      <div class="container-fluid">
        <div class="navbar-header " >
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse ">
      <form class="form-2" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" 
    enctype="multipart/form-data" role="form">
      <ul class="nav navbar-nav">
           
              <li><button type="submit" name="op" value="perfil">Mi Perfil</button></li>
              <li><a href="#" id="imgComprar"></a></li>
          </ul>
     </form>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'inc' . DS );


require_once APP_PATH . 'config' . DS .'config.php';
require_once APP_PATH . 'class' . DS .'mysql.php';
require_once APP_PATH . 'class' . DS .'RegisterUser.php';

        $msg = "";
		//Al cerrar sesion
        if(isset($_GET["op"]) AND $_GET["op"] == "salir"){
            $_SESSION["autenticado"] = "";
            $_SESSION["username"] = "";
			$_SESSION["datos"] = "";
            session_destroy();
            
        }
		
        if(isset($_POST["op"]) AND $_POST["op"] == "login"){
        	
			            $mysql = new basededatos($CONFIG["server"],$CONFIG["user"],
                                     $CONFIG["password"],$CONFIG["db"]);
			
            $usuario = addslashes($_POST["username"]);
            $password = addslashes($_POST["password"]);
            $query = "  SELECT * FROM tbl_users 
                        WHERE (us_Username = '$usuario' or us_email = '$usuario')
                        AND us_Password = '$password'";
            $usuarios = $mysql->consultaSeleccion($query);
            $mysql->desconectar();
            $total = count($usuarios);
           
            if($total){
                $_SESSION["autenticado"] = true;
                $_SESSION["username"] = $usuario;
				$_SESSION["idusuario"]= $usuarios[0]["us_Id"];
            }else{
                $msg = $CONFIG["autenticacion"]["invalida"];
				$_SESSION["autenticado"] = false;
            }
        }
		
        if(isset($_SESSION["autenticado"]) AND $_SESSION["autenticado"]==true){
		  include("inc/layout/Main.php");  
        }elseif(isset($_GET["op"]) AND $_GET["op"] == "under"){
			include(APP_PATH ."layout" . DS . "underconstruction.php");
		
		}elseif(isset($_POST["op"]) AND $_POST["op"] == "perfil"){
			include(APP_PATH ."layout" . DS . "perfil.php");
		}elseif(isset($_GET["op"]) AND $_GET["op"] == "newBook"){
			include("inc/layout/newBook.php");
		}elseif(isset($_GET["op"]) AND $_GET["op"] == "main"){
			include("inc/layout/Main.php");
		}else{
            include(APP_PATH ."layout" . DS . "main.php");
        }
		
?>
      	  		
	    </div> <!--.story-->
	    
	</div> <!--#first-->
    
  <div id="second">
 <div class="story">
 	<?php if($_SESSION["main"] == "1"){
 				
 	?>		
 		<div class="video-container">
 		<iframe src="https://www.youtube.com/embed/n6WxbVyqFZw" frameborder="0" width="600" height="400" wmode="transparent"></iframe>
 		</div>
 	<?php
 	}
 	?>
			<div class="footer">
		
		
					<img src="img/logo.png" class="imgfooter" >
				 <ul class="navbar-right marginfooter no-vinieta">
              <li>Siguenos en:</li>
              <li>              	
					<div class="btn-group btn-group-sm">	
					  <button class="btn btn-gplus"><i class="icon-facebook"></i> </button>
					  <button class="btn btn-gplus"><i class="icon-twitter"></i> </button>
					 <button class="btn btn-gplus"><i class="icon-gplus"></i> </button>
					</div>
           	  </li>
          </ul>
			
	</div>
      	
	    </div> <!--.story-->
	    
	</div> <!--#second-->  
    


 <!-- Element to pop up -->
            <div id="element_to_pop_up" >
            	<!--Login Section-->
<div class="section" id="section1">
<div class="login-form">
	<span id='spnclose'><img src="img/close_button.png" class="btnclose"/></span>
  <h1 class="encabezado">Login/Sign Up</h1>
    <p>Tienes una cuenta?</p>
    <div>
      <form class="form-wrapper-01">
              <input id="" class="inputbox email" type="text" placeholder="Email" />
              <input id="" class="inputbox password" type="password" placeholder="Password" />
            <p><a href="#" class="button">Login <i class="icon-paper-plane"></i></a></p>
        </form>
              <p>Olvidaste tu password?  </p>
              <p><a class="scroll" id="btnRecuperar">Recuperar  Aqui&raquo;</a></p>
    </div>
    <hr />
      <p>O te puedes loguear con:</p>
    <div class="social">
        <a href="login-facebook.php" class="facebook"><i class="icon-facebook"></i></a>
        <a href="login-twitter.php" class="twitter"><i class="icon-twitter"></i></a>
        <a href="#" class="google"><i class="icon-gplus"></i></a>
    </div>
    <p>No tienes una cuenta? <a class="scroll" id="btnRegistrate">Registrate! &raquo;</a></p>
</div>
</div>
<!--END: Login Section-->
 
<!--Signup Section-->
<div class="section" id="section2">
<div class="signup-form">
	<span id='spnclose'><img src="img/close_button.png" class="btnclose"/></span>
  <h1 class="encabezado">Registrate en segundos!</h1>
    <p>Registrate usando tu email</p>
    <div>
      <form class="form-wrapper-01">
              <input id="" class="inputbox name" type="text" placeholder="Tu nombre" />
              <input id="" class="inputbox name" type="text" placeholder="Apellido Paterno" />
              <input id="" class="inputbox name" type="text" placeholder="Apellido Materno" />
              <input id="" class="inputbox name" type="text" placeholder="Direccion" />
              <input id='sel' class="inputbox name" type='text' onclick='dispCal()' size=100 readonly='readonly' name="birthdate" placeholder="Fecha Nacimiento" />
						<table class='calendar' id='calendar' border=0 cellpadding=0 cellspacing=0>
						<tr class='monthdisp'>
						<td class='navigate' align='left'><img src='img/previous.png' onclick='return prev()' /></td>
						<td align='center' id='month'></td>
						<td class='navigate' align='right'><img src='img/next.png' onclick='return next()'/></td>
						</tr>
						<tr>
							<td colspan=3>
							<table id='dispDays'  cellpadding=4 cellspacing=4>                        
							</table>                    
						</td>
						</tr>
						</table>
              <select name="Paises" class="inputbox name validate[required]" placeholder="Pais">
						<?php
						$mysql = new basededatos($CONFIG["server"],$CONFIG["user"],
                                     $CONFIG["password"],$CONFIG["db"]);
			
						$query = "SELECT PAISID,NOMBRE FROM Paises";
						$countries = $mysql->consultaSeleccion($query);
						$mysql->desconectar();
						for($i=0;$i<count($countries);$i++){
							echo '<option value="'.$countries[$i]["PAISID"].'">'.$countries[$i]["NOMBRE"].'</option>';
						}
						?>
				</select>
						<select name="Estados" class="inputbox name validate[required]">
						<?php
						$mysql = new basededatos($CONFIG["server"],$CONFIG["user"],
                                     $CONFIG["password"],$CONFIG["db"]);
			
						$query = "SELECT ID,Nombre FROM estado";
						$estados = $mysql->consultaSeleccion($query);
						$mysql->desconectar();
						for($i=0;$i<count($estados);$i++){
							echo '<option value="'.$estados[$i]["ID"].'">'.$estados[$i]["Nombre"].'</option>';
						}
						?>
						</select>
              <input id="" class="inputbox email" type="text" placeholder="Email" />
              <input id="" class="inputbox password" type="password" placeholder="Password" />
              <input id="" class="inputbox password" type="password" placeholder="Confirmar Password" />
              <p><a href="#" class="button">Crear mi cuenta <i class="icon-paper-plane"></i></a></p>
              <!--<input id="" type="button" class="button" value="Sign up" />-->
        </form>
    </div>
    <hr />
      <p>O tu puedes registrarte con</p>
    <div class="social">
        <a href="login-facebook.php" class="facebook"><i class="icon-facebook"></i></a>
        <a href="#" class="twitter"><i class="icon-twitter"></i></a>
        <a href="#" class="google"><i class="icon-gplus"></i></a>
    </div>
    <p><a class="scroll" id="btnRegresardereg">&laquo; Regresar al Login</a></p>
</div>
<?php 
    if(isset($msg) AND $msg !=""){
      echo  "<script language='JavaScript'> 
                alert('".$msg."'); 
                </script>";
    }
    ?>
</div>
<!--END: Signup Section-->
 
<!--Forget Password Section-->
<div class="section" id="section3">
<div class="login-form">
	<span id='spnclose'><img src="img/close_button.png" class="btnclose"/></span>
  <h1 class="encabezado">Olvidaste tu password?</h1>
    <div>
      <form class="form-wrapper-01">
              <input id="" class="inputbox email" type="text" placeholder="Email" />
            <p><a href="#" class="button">Enviarme <i class="icon-paper-plane"></i></a></p>
        </form>
    </div>
    <hr />
      <p>Recordaste tu password? Brillante!</p>
    <p><a class="scroll" id="btnRegresardeolvido">&laquo; Regresar al Login</a></p>
</div>
</div>
<!--END: Forget Password Section-->
 

            </div>
	



</body>
</html>
 <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/bootstrap.js"></script>
        
        
        
