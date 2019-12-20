<!DOCTYPE html>
<?PHP

$errores=[];
$nombre="";
$email="";
$userName="";
$password="";
$idUsuario=1;


if ($_POST)
{
  if (isset($_POST["name"]))
  {
    if(empty($_POST["name"]))
    {
      $errores["name"]="esta vacio";
    }
    elseif(empty($_POST["name"]) || strlen($_POST["name"])<=3)
    {
      $errores["name"]="le falta ";
    }
    else
    {
      $nombre=$_POST["name"];
    }
  }
  if (isset($_POST["email"]))
  {
    if(empty($_POST["email"]))
    {
      $errores["email"]="tenes que llenar este campo";
    }
    elseif (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
    {
      $errores["email"] = "Este no es un email valido";
    }
    elseif(!validarMailBBDD())
    {
      $errores["email"] = "Este email esta ocupado, intentar otro";
    }
    else
    {
      $email = $_POST["email"];
    }
  }
  if (isset($_POST["username"]))
  {
    if(empty($_POST["username"]))
    {
      $errores["username"]="esta vacio";
    }
    elseif(empty($_POST["username"]) || strlen($_POST["username"])<=3)
    {
      $errores["username"]="le falta ";
    }
    else
    {
      $userName=$_POST["username"];
    }
  }
  if (isset($_POST["password"]))
  {
  	if(empty($_POST["password"]))
  	{
  		$errores["password"]="esta vacio";
  	}
  	elseif(empty($_POST["password"]) || strlen($_POST["password"])<=6)
  	{
  		$errores["password"]="caracteres insuficientes";
  	}
  	elseif (!preg_match('`[a-z]`',$_POST["password"]))
  	{
  		$errores["password"] = "La clave debe tener al menos una letra minúscula";
  	}
  	elseif (!preg_match('`[A-Z]`',$_POST["password"]))
  	{
   		$errores["password"] = "La clave debe tener al menos una letra mayúscula";
   	}
    elseif (!preg_match('`[0-9]`',$_POST["password"]))
   	{
   		$errores["password"] = "La clave debe tener al menos un caracter numérico";
   	}
    else
  	{
  		$password=$_POST["password"];
  	}
  }
  if(count($errores)==0){

    crearUsuario($nombre,$userName,$email,$password);
    header("location:perfil.php?email=$email");
  }
}

function crearUsuario($nombre,$userName,$email,$password)
{

  $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
  $usuarioNuevo = [
		"nombre"=>trim($nombre),
		"userName"=>trim($userName),
    "email"=>$email,
    "password" => password_hash($password,PASSWORD_DEFAULT),
    "dirImagen" => "$userName.".$ext,
    "id"=>validarIdExist($idUsuario)
  ];
  guardarUsuario($usuarioNuevo);
}

function guardarUsuario($usuarioNuevo){
  $base = file_get_contents("json/usuarios.json");
  $datos = json_decode($base,true);
  $datos[] = $usuarioNuevo;
  $jsonFinal = json_encode($datos);
  guardarImagen($usuarioNuevo);
  file_put_contents("json/usuarios.json",$jsonFinal.PHP_EOL);

}

function guardarImagen($usuarioNuevo){
  $usuario = $usuarioNuevo["userName"];
  if ($_FILES)
  {
    if ($_FILES["avatar"]["error"]!=0) {
      echo "hubo un error al cargar el avatar";
    }
    else
    {
      $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
      if ($ext !="jpg" && $ext != "png" && $ext !="jpeg")
      {
        echo "no admitimos esa extension de archivo para el avatar";
      }
      else
      {
        move_uploaded_file($_FILES["avatar"]["tmp_name"],"imgUsuarios/$usuario.".$ext);
      }
    }
  }
}

function validarMailBBDD() {
    $base = file_get_contents("json/usuarios.json");
    $datos = json_decode($base,true);
    foreach ($datos as $usuario)
    {
      if (isset($usuario["email"]))
      {
        if ($usuario["email"]==$_POST["email"])
        {
          return false;
        }
        else
        {
          return true;
        }
    }
    else
    {
      return false;
    }
  }
  }

function validarIdExist($idUsuario)
{
    $base = file_get_contents("json/usuarios.json");
    $datos = json_decode($base,true);

}

?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='register.php' method='post' enctype="multipart/form-data">
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>
                <div class='short_explanation'>* campos requeridos</div>

                <div><span class='error'></span></div>

                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value="<?= $nombre ?>" maxlength="50"/><br/>
                    <small><?= (isset($errores['name'])) ? $errores['name'] : "" ?></small><br>
                    <span id='register_name_errorloc' class='error'></span>
                </div>

                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' maxlength="50"  value="<?= $email ?>" /><br/>
                    <small><?= (isset($errores['email'])) ? $errores['email'] : "" ?></small><br>
                    <span id='register_email_errorloc' class='error'></span>
                </div>

                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' maxlength="50"  value="<?= $userName ?>"/><br/>
                    <small><?= (isset($errores['username'])) ? $errores['username'] : "" ?></small><br>
                    <span id='register_username_errorloc' class='error'></span>
                </div>

                <div class="container">
                  <label for="">Avatar: </label>
                  <br>
                  <input type="file" name="avatar" value="">
                </div>


                <div class='container'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                    <small><?= (isset($errores['password'])) ? $errores['password'] : "" ?></small><br>
                </div>


                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
