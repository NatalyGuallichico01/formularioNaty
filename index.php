<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles.css">
    <title>FORMULARIO</title>
      
  </head>
  <body>
  <h1>
  FORMULARIO
  </h1>
  <form action="index.php" method="POST" enctype="multipart/form-data">
  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Nombres: </label>
  <div class="col-sm-10">
      <input type="text" name="nombres" class="form-control" id="Nombres">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Apellidos: </label>
  <div class="col-sm-10">
      <input type="text" name="apellidos" class="form-control" id="Apellidos">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Edad: </label>
  <div class="col-sm-10">
      <input type="edad" name="edad" class="form-control" id="Edad">
    <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="password">
    </div>
  </div>

       <div class="col-auto">
       <legend class="col-form-label col-sm-2 pt-0">Sexo: </legend>
    <label class="visually-hidden" 
    for="autoSizingSelect"
    <input type="checkbox" name="sexo" value="php">>Preference</label>
    <select class="form-select" id="autoSizingSelect">
      <option selected> </option>
      <option value="1">Hombre</option>
      <option value="2">Mujer</option>
      
    </select>
  </div>
    
  

</div>


  <fieldset class="row mb-3">

    <legend class="col-form-label col-sm-2 pt-0">Estudiante: </legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estudiante" id="gridRadios1" value="Nivelacion" checked>
        <label class="form-check-label" for="gridRadios1">
          Nivelacion
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estudiante" id="gridRadios2" value="Ingeniería">
        <label class="form-check-label" for="gridRadios2">
          Ingeniería
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estudiante" id="gridRadios3" value="Tecnología" >
        <label class="form-check-label" for="gridRadios3">
          Tecnología
        </label>
      </div>
    
  </fieldset>

  <div class="col-auto">
       <legend class="col-form-label col-sm-2 pt-0">Estado Civil: </legend>
    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
    <select class="form-select" id="autoSizingSelect" name="estadoCivil">
      <option selected> </option>
      <option value="Soltero">Soltero</option>
      <option value="Casado">Casado</option>
      <option value="Viudo">Viudo</option>
      <option value="Divorciado">Divorciado</option>
      <option value="Unión Libre">Unión Libre</option>
      
    </select>
  </div>
</div>

  <div class="input-group mb-3">
  <legend class="col-form-label col-sm-2 pt-0">Foto de perfil: </legend>
  <input type="file" class="form-control" id="inputGroupFile02" name="foto">

    </div>
  </div>
  <button type="Enviar" class="btn btn-primary">Enviar</button>
</form>






    <?php 
    //FORMULARIO
    //POST obtienes los datos pero no se reflejan en la url
    //$_REQUEST se usa cuando no se sabe si utilizar post o get

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $edad=$_REQUEST['edad'];
    $email=$_REQUEST['email'];
    $password=$_POST['password'];
    $sexo=$_REQUEST['sexo'];
    $estudiante=$_POST['estudiante'];
    $estadoCivil=$_REQUEST['estadoCivil'];
    $foto=$_FILES['foto'];

    $patch=$_SERVER['DOCUMENT_ROOT'].'/img/'.$foto['name'];
    move_uploaded_file($foto['tmp_name'],$patch);
    
    echo"<br>";
    echo "Nombres: $nombres <br>";
    echo "Apellidos: $apellidos <br>";
    echo "Edad: $edad <br>";
    echo "Sexo: $sexo <br>";
    echo "E-mail: $email <br>";
    echo "Estudiante de la carrera de: $estudiante <br>";
    echo "Estado Civil: $estadoCivil <br>";

    if($foto['name']!=""){
      $pathx="../img/";
      $file=$foto['name'];
      echo '<img src="'.$pathx.$file.'">';
    }


    ?> 
  </body>
</html>