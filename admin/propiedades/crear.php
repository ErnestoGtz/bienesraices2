<?php
//base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();


  require '../../includes/funciones.php';
  incluirTemplate('header');
?>
    <main class="contenedor">
      <h1>Crear</h1>
      <a href="/bienesraices2/admin" class="boton boton-verde-inline">Volver</a>

      <form  class="formulario">
        <fieldset>
            <legend>Informacion General</legend>
            <label for="titulo">Titutlo</label>
            <input id="titulo" type="text" placeholder="Titulo Propiedad">
            <label for="precio">Precio</label>
            <input id="precio" type="number" placeholder="Precio Propiedad">
            <label for="imagen">Imagen</label>
            <input id="imagen" type="file" accept="image/jpeg, image/png">
            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion"></textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion Propiedad</legend>
            <label for="habitaciones">Habitaciones</label>
            <input id="habitaciones" type="number" placeholder="Ej: 3" min="1" max="9">
            <label for="wc">Baños</label>
            <input id="wc" type="number" placeholder="Ej: 3" min="1" max="9">
            <label for="estacionamiento">Estacionamiento</label>
            <input id="estacionamiento" type="number" placeholder="Ej: 3" min="1" max="9">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select>
                <option value="1">Edith</option>
                <option value="2">Victor</option>
            </select>
        </fieldset>
        <input type="submit" value="Crear Propiedad" class="boton boton-verder-inline">
      </form>
    </main>
<?php
    incluirTemplate('footer');
?>
