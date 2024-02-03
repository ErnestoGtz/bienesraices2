<?php
//base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    //Arreglo con mensajes de errores
    $errores = [];

    //Ejecutar el codigo despues de que el  usuario enviar el formulario
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorID = $_POST['vendedorID'];

        if(!$titulo){
            $errores[] = "Debes añadir un titulo";
        }

        if(!$precio){
            $errores[] = "El Precio es obligatorio";
        }

        if(strlen($descripcion) < 20 ){
            $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
        }

        if(!$habitaciones){
            $errores[] = "El numero de habitaciones es obligatorio";
        }

        if(!$wc){
            $errores[] = "El Numero de Baños es obligatorio";
        }
        
        if(!$vendedorID){
            $errores[] = "Elige un vendedor";
        }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        //Revisar que arreglo de errores este vacio
        if(empty($errores)){
            //insertar en la base de datos 
                $query = "INSERT INTO propiedades (titulo,precio,descripcion,habitaciones,wc,estacionamiento,vendedores_id) 
                VALUES('$titulo',$precio,'$descripcion',$habitaciones,$wc,$estacionamiento,'$vendedorID') ";

                //echo $query;
                $resultado = mysqli_query($db,$query);

                if($resultado){
                    echo "Insertado Correctamente";
                }
        }

        

    }

  require '../../includes/funciones.php';
  incluirTemplate('header');
?>
    <main class="contenedor">
      <h1>Crear</h1>
      <a href="/bienesraices2/admin" class="boton boton-verde-inline">Volver</a>
        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
            
        <?php endforeach; ?>

      <form  class="formulario" method="POST" action="/bienesraices2/admin/propiedades/crear.php">
        <fieldset>
            <legend>Informacion General</legend>
            <label for="titulo">Titutlo</label>
            <input id="titulo" name="titulo" type="text" placeholder="Titulo Propiedad">
            <label for="precio">Precio</label>
            <input id="precio" name="precio" type="number" placeholder="Precio Propiedad">
            <label for="imagen">Imagen</label>
            <input id="imagen" type="file" accept="image/jpeg, image/png">
            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion Propiedad</legend>
            <label for="habitaciones">Habitaciones</label>
            <input id="habitaciones" name="habitaciones" type="number" placeholder="Ej: 3" min="1" max="9">
            <label for="wc">Baños</label>
            <input id="wc" name="wc" type="number" placeholder="Ej: 3" min="1" max="9">
            <label for="estacionamiento">Estacionamiento</label>
            <input id="estacionamiento" name="estacionamiento" type="number" placeholder="Ej: 3" min="1" max="9">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedorID">
                <option value="">Selecciona Vendedor</option>
                <option value="1">Edith</option>
                <option value="2">Victor</option>
            </select>
        </fieldset>
        <input type="submit" value="Crear Propiedad" class="boton boton-verde-inline">
      </form>
    </main>
<?php
    incluirTemplate('footer');
?>
