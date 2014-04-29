<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Mexico Inventa | Bienvenido...</title> 

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link href="css/social-buttons.css" rel="stylesheet" type="text/css" />
	<link href="fonts/css/fontello.css" rel="stylesheet" type="text/css" />
    <link href='css/calendar.css' rel='stylesheet' type='text/css'>
		
    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="assets/css/pages/blog.css">

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/blue.css" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!-- JS Global Compulsory -->  
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>  
     
<script src="js/modernizr.custom.28468.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
<script src="js/jquery.bpopup.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>  
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
<![endif]-->
    
    
    
    
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
            $('#imgInicio').click(function(){
            	
            		//Test
            		$(location).attr('href','http://www.mmdev.mx/mexicoinventa/');
            		//localhost
            		//$(location).attr('href','http://localhost:5050/mexicoinventa');
            		//production
            		//$(location).attr('href','http://www.mexicoinventa.com/mexicoinventa');
            	});
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
            		$(location).attr('href','http://www.mmdev.mx/mexicoinventa/');
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
  

<div class="wrapper">
    <!--=== Header ===-->    
    <div class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <!-- Topbar Navigation -->
                <ul class="loginbar pull-right">
                    <li class="topbar-devider"></li>   
                    <li><a href="page_faq.html">Ayuda</a></li>  
                    <li class="topbar-devider"></li>   
                    <li><a  id="btnLogin">Login/Registro</a></li>   
                </ul>
                <!-- End Topbar Navigation -->
            </div>
        </div>
        <!-- End Topbar -->
    
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img id="logo-header" src="img/logo.png" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li>
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" id="imgInicio">
                                Inicio
                            </a>
                           
                        </li>
                        <!-- End Home -->

                        <!-- Pages -->                        
                        <li>
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" id="imgIdeas">
                                Ideas
                            </a>
                                                         
                       </li>
                                <!-- Job Pages -->
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" id="imgInfluenciar">
                                Influenciar
                            	</a>
                                                                
                                </li>
                                <!-- End Job Pages -->

                                <!-- Email Tempaltes -->
                                <li>
                                     <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" id="imgComprar">
                                Comprar
                            </a>      
                                </li>

                        

                        <!-- Search Block -->
                        <li>
                            <i class="search fa fa-search search-btn"></i>
                            <div class="search-open">
                                <div class="input-group animated fadeInDown">
                                    <input type="text" class="form-control" placeholder="Buscar">
                                    <span class="input-group-btn">
                                        <button class="btn-u" type="button">Ir</button>
                                    </span>
                                </div>
                            </div>    
                        </li>
                        <li>
                        	  <!-- Social Links -->
                    <ul class="social-icons marginheader">
                        <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                        <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                        <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                    </ul>
                    <!-- End Social Links -->
                        	
                        </li>
                        <!-- End Search Block -->
                    </ul>
                </div><!--/navbar-collapse-->
            </div>    
        </div>            
        <!-- End Navbar -->
    </div>
    <!--=== End Header ===-->          
<div id="first">
		<div class="story">
    
			<div class="blog margin-bottom-40">
				 <div class="blog-img">
                <div class="carousel slide carousel-v1" id="myCarousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img alt="" src="assets/img/sliders/revolution/bg9.jpg">
                            <div class="carousel-caption">
                                <p>Haz realidad tus sueños, Inscribe tu proyecto en nuestra plataforma.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="" src="assets/img/sliders/revolution/bg10.jpg">
                            <div class="carousel-caption">
                                <p>Seguimiento en tiempo real, Mantente en contacto con nuestro especializado equipo de trabajo...</p>
                            </div>
                            </div>
                        <div class="item">
                            <img alt="" src="assets/img/sliders/revolution/bg11.jpg">
                            <div class="carousel-caption">
                                <p>Plataforma de fácil navegación, Comprueba lo fácil que es tener tu proyecto en línea.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="" src="assets/img/sliders/revolution/bg12.png">
                            <div class="carousel-caption">
                                <p>Tus ideas son valiosas, Inscribe tu proyecto...</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="carousel-arrow">
                        <a data-slide="prev" href="#myCarousel" class="left carousel-control">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a data-slide="next" href="#myCarousel" class="right carousel-control">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            	<div class="container">
	    		 <!-- static navbar -->
        
      <form class="form-2" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" 
    enctype="multipart/form-data" role="form">
    <ul class="nav nav-tabs" id="userbar">
	  <li class="active"> <button type="submit" name="op" value="perfil" id="btnPerfil" class="btnsnav tabsbar">Mi Perfil</button></li>
	  <li> <button type="submit" name="op" value="mensaje" id="btnMensajes" class="btnsnav tabsbar">Mensajes</button></li>
	   <ul class="nav navbar-nav navbar-right">
              <li>
					<img id="imgUsuario"/>
           	  </li>
           	  <li><input type="text"   class="btnsnav tabsbar" id="tabBienvenido" value="Bienvenido:" readonly="readonly"/></li>
          </ul>
	</ul>
	
     </form>
       
      </div>
    </div>
   </div>
    <?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'inc' . DS );


require_once APP_PATH . 'config' . DS .'config.php';
require_once APP_PATH . 'class' . DS .'mysql.php';

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
			
            $usuario = addslashes($_POST["usuario"]);
            $password = addslashes($_POST["password"]);
            $query = "  SELECT * FROM usuario 
                        WHERE (Nombre = '$usuario' or Email = '$usuario')
                        AND Password = '$password'";
            $usuarios = $mysql->consultaSeleccion($query);
            $mysql->desconectar();
            $total = count($usuarios);
           
            if($total){
                $_SESSION["autenticado"] = true;
                $_SESSION["username"] = $usuario;
				$_SESSION["idusuario"]= $usuarios[0]["ID"];
            }else{
                $msg = $CONFIG["autenticacion"]["invalida"];
				$_SESSION["autenticado"] = false;
            }
        }
		
		 if(isset($_SESSION["autenticado"]) AND $_SESSION["autenticado"]==true){
		    ?> <script type="text/javascript"> $('#userbar').css('display','block'); </script>
         <?php 
         }elseif(isset($_POST["op"]) AND $_POST["op"] == "perfil"){
			include(APP_PATH ."layout" . DS . "perfil.php");
		}elseif(isset($_GET["op"]) AND $_GET["op"] == "registrausuario"){
			?> <script type="text/javascript"> alert("si entro"); </script>
			<?php include(ROOT."index.php");
		}elseif(isset($_GET["op"]) AND $_GET["op"] == "main"){
			include("inc/layout/main.php");
		}else{
            include(APP_PATH ."layout" . DS . "main.php");
        }
		
?>
<?php
 /*
	use Doctrine\Common\ClassLoader,
        Doctrine\ORM\Configuration,
        Doctrine\ORM\EntityManager,
        Doctrine\DBAL\Types\Type,
        Doctrine\Common\Cache\ArrayCache,
        Doctrine\DBAL\Logging\EchoSqlLogger;
	// include the class loader directly
    require_once 'Doctrine/Common/ClassLoader.php';
	require_once ROOT.'Entities/User.php';
    $doctrineClassLoader = new ClassLoader('Doctrine');
    $doctrineClassLoader->register();

    // Set up caches
    $config = new Configuration;
    $cache = new ArrayCache;
    $config->setMetadataCacheImpl($cache);
    $config->setQueryCacheImpl($cache);

    // Metadata Driver
    $driverImpl = $config->newDefaultAnnotationDriver(array('/path/to/entities'));
    $config->setMetadataDriverImpl($driverImpl);

    // (5) Proxies
	$config->setProxyDir(__DIR__ . '/Proxies');
	$config->setProxyNamespace('Proxies');

   // (6) Conexión
$connectionOptions = array(
    'dbname' => $CONFIG["db"],
    'user' => $CONFIG["user"],
    'password' => $CONFIG["password"],
    'host' => $CONFIG["server"],
    'driver' => 'pdo_mysql'
);

 // (7) EntityManager
$em = \Doctrine\ORM\EntityManager::create($connectionOptions, $config);*/
?>	
            </div>
            <!-- End Content -->
        </div>          
    </div><!--/container-->		
    <!--=== End Content Part ===-->

        </div>
         
</div> <!--End Story-->
</div> <!--End First-->
            

    </div><!--/container-->		
    <!--=== End Content Part ===-->

    <!--=== Footer ===-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 md-margin-bottom-40">
                    <!-- About -->
                    <div class="headline"><h2>Acerca de...</h2></div>  
                    <p class="margin-bottom-25 md-margin-bottom-40">MéxicoInventa® es un corporativo, un conjunto de unidades de
  					 negocio orientadas a soluciones diversas para la industria,fundado
  					 en 1999 por un grupo de inversionistas mexicanos,con oficinas
  					 sede en Guadalajara, Reynosa, Monterrey y El Paso, Texas (EUA).
  					 Actualmente contamos con mayor presencia dentro del territorio
  					 nacional gracias a instalaciones en ciudades como México D.F,
  					 Puebla, Quéretaro y Ciudad Juárez.</p>    
                    <!-- End About -->

                    <!-- Monthly Newsletter -->
                    <div class="headline"><h2>Newsletter</h2></div> 
                    <p>Subscribete a nuestro newsletter y mantente informado de los nuevos proyectos e ideas!</p>
                    <form class="footer-subsribe">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email">                            
                            <span class="input-group-btn">
                                <button class="btn-u" type="button">Subscribirse</button>
                            </span>
                        </div>                  
                    </form>                         
                    <!-- End Monthly Newsletter -->
                </div><!--/col-md-4-->  
                
                <div class="col-md-4 md-margin-bottom-40">
                    <!-- Recent Blogs -->
                    <div class="posts">
                        <div class="headline"><h2>Proyectos agregados recientemente</h2></div>
                        <dl class="dl-horizontal">
                            <dt><a href="#"><img src="assets/img/sliders/elastislide/6.jpg" alt="" /></a></dt>
                            <dd>
                                <p><a href="#">Proyecto de prueba. Este es un proyecto de prueba</a></p> 
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                        <dt><a href="#"><img src="assets/img/sliders/elastislide/10.jpg" alt="" /></a></dt>
                            <dd>
                                <p><a href="#">Proyecto de prueba. Este es un proyecto de prueba</a></p> 
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                        <dt><a href="#"><img src="assets/img/sliders/elastislide/11.jpg" alt="" /></a></dt>
                            <dd>
                                <p><a href="#">Proyecto de prueba. Este es un proyecto de prueba</a></p> 
                            </dd>
                        </dl>
                    </div>
                    <!-- End Recent Blogs -->                    
                </div><!--/col-md-4-->

                <div class="col-md-4">
                    <!-- Contact Us -->
                    <div class="headline"><h2>Contacto</h2></div> 
                    <address class="md-margin-bottom-40">
                        25, Lorem Lis Street, Orange <br />
                        Guadalajara, Mex <br />
                        Phone: 800 123 3456 <br />
                        Fax: 800 123 3456 <br />
                        Email: <a href="mailto:mexicoinventa@hotmail.com" class="">mexicoinventa@hotmail.com</a>
                    </address>
                    <!-- End Contact Us -->

                    <!-- Social Links -->
                    <div class="headline"><h2>Siguenos en:</h2></div> 
                    <ul class="social-icons">
                        <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                        <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                        <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                    </ul>
                    <!-- End Social Links -->
                </div><!--/col-md-4-->
            </div>
        </div> 
    </div><!--/footer-->
    <!--=== End Footer ===-->

    <!--=== Copyright ===-->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">                     
                    <p>
                        2014 &copy; MexicoInventa. Todos los derechos reservados. 
                        <a href="#">Política de Privacidad</a> | <a href="#">Terminos de Servicio</a>
                    </p>
                </div>
               
            </div>
        </div> 
    </div><!--/copyright--> 
    <!--=== End Copyright ===-->
</div><!--/wrapper-->

<!-- Element to pop up -->
            <div id="element_to_pop_up" >
            	<!--Login Section-->
<div class="section" id="section1">
<div class="login-form">
	<span id='spnclose'><img src="img/close_button.png" class="btnclose"/></span>
  <h1 class="encabezado">Login/Sign Up</h1>
    <p>Tienes una cuenta?</p>
    <div>
      <form class="form-wrapper-01" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" 
    enctype="multipart/form-data" role="form">
              <input name="usuario" class="inputbox email validate[required,minSize[0]]" type="text" placeholder="Email" />
              <input name="password" class="inputbox password validate[required,minSize[3],maxSize[15]]" type="password" placeholder="Password" />
            <p><button type="submit" name="op" value="login" class="button">Login <i class="icon-paper-plane"></i></button></p>
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
    <div>
      <form class="form-wrapper-01" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" 
    enctype="multipart/form-data" role="form">
              <input name="Nombre" class="inputbox name" type="text" placeholder="Tu nombre" />
              <input name="ApellidoPaterno" class="inputbox name" type="text" placeholder="Apellido Paterno" />
              <input name="ApellidoMaterno" class="inputbox name" type="text" placeholder="Apellido Materno" />
              <input name="Direccion" class="inputbox name" type="text" placeholder="Direccion" />
              <input name='sel' class="inputbox name" type='text' onclick='dispCal()' size=100 readonly='readonly' name="birthdate" placeholder="Fecha Nacimiento" />
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
              <select name="Paises" class="inputbox name" placeholder="Pais">
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
						<select name="Estados" class="inputbox name">
						<?php
						$mysql = new basededatos($CONFIG["server"],$CONFIG["user"],
                                     $CONFIG["password"],$CONFIG["db"]);
			
						$query = "SELECT ID,Nombre FROM Estado";
						$estados = $mysql->consultaSeleccion($query);
						$mysql->desconectar();
						for($i=0;$i<count($estados);$i++){
							echo '<option value="'.$estados[$i]["ID"].'">'.$estados[$i]["Nombre"].'</option>';
						}
						?>
						</select>
						<select name="Estudios" class="inputbox name">
						<?php
						$mysql = new basededatos($CONFIG["server"],$CONFIG["user"],
                                     $CONFIG["password"],$CONFIG["db"]);
			
						$query = "SELECT ID,Nombre FROM gradoestudio";
						$estudios = $mysql->consultaSeleccion($query);
						$mysql->desconectar();
						for($i=0;$i<count($estados);$i++){
							echo '<option value="'.$estudios[$i]["ID"].'">'.$estudios[$i]["Nombre"].'</option>';
						}
						?>
						</select>
              <input name="Email" class="inputbox email" type="text" placeholder="Email" />
              <input name="CURP" class="inputbox name" type="text" placeholder="CURP" />
              <input name="RFC" class="inputbox name" type="text" placeholder="RFC" />
              <input name="Empresa" class="inputbox name" type="text" placeholder="Empresa" />
              <input name="Telefono" class="inputbox name" type="text" placeholder="Telefono" />
              <input name="Password" class="inputbox password" type="password" placeholder="Password" />
              <input name="Retype" class="inputbox password" type="password" placeholder="Confirmar Password" />
              <p><button type="submit" name="op" value="registrausuario" class="button">Crear mi cuenta <i class="icon-paper-plane"></i></button></p>
              <?php 
              
              if($_POST["op"] == "registrausuario"){
              	?> <script>alert('si entro'); </script>
              	<?php
              	 $mysql = new basededatos($CONFIG["server"],$CONFIG["user"],
                                     $CONFIG["password"],$CONFIG["db"]);
							$query = "INSERT INTO usuario (ID, Nombre, ApellidoPaterno, ApellidoMaterno, Email, Password, Activado, Direccion,FechaNacimiento,EstadoID,PaisID,GradoEstudioID,Biografia,CURP,RFC,FechaCreacion,UsuarioRedSocial,ImagenRedSocialURL,Empresa,Telefono) 
							values(0,'".strtoupper($_POST['Nombre'])."','".$_POST['ApellidoPaterno']."','".strtoupper($_POST['ApellidoMaterno'])."','".$_POST['Email']."','".strtoupper($_POST['Password'])."',0,'".strtoupper($_POST['Direccion'])."','"
							.strtoupper($_POST['FechaNacimiento'])."',".$_POST['Estados'].",".$_POST['Paises'].",".$_POST['Estudios'].",'','".strtoupper($_POST['CURP'])."','".strtoupper($_POST['RFC'])."','".date("Y-m-d")."','"
							.$_SESSION["usuarioredsocial"]."','".$_SESSION["imagenredsocial"]."','".strtoupper($_POST['Empresa'])."','".strtoupper($_POST['Telefono'])."')";
                            echo $query;
                            $totalrows = $mysql->consultaActualizacion($query); 
							$mysql->desconectar();
							
              }
              	/*if($_POST["op"] == "insertuser" ){
              		// (8) Código
					$user = new \Entities\User();
					
					$user->setNombre("Mauricio Eduardo");
					$user->setApellidoP("Alvarado");
					$user->setApellidoM("Valadez");
					$user->setEmail("mauricioeduardoa@gmail.com");
					$user->setPassword("smallville*07");
					$user->setActivado(1);
					$user->setTelefono("15248592");
					$user->setDireccion("Circ Laureles 124 Fracc Altus bosques");
					$user->setRFC("AAVM841008");
					$user->setFechaNacimiento("08/10/1984 10:30:00");
					$user->setEstadoID(1);
					$user->setPaisID(1);
					$user->setGradoEstudioID(1);
					$user->setUsuarioRedSocial("neodark08");
					$user->setImagenRedSocialURL("xxxx");
					$user->setEmpresa("intel");
					$user->setFechaCreacion(date("Y-m-d"));
					$em->persist($user);
					$em->flush();
					echo "hola mundo";
              	}*/
              
              ?>
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
<div class="login-form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" 
    enctype="multipart/form-data" role="form">
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