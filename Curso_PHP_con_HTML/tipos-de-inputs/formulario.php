<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tipos de inputs</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="./server.php" method="post" enctype="multipart/form-data">
            <!-- Input simple -->
            <!-- <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            -->

            <!-- Arreglos -->
            <!--   <label>Persona</label>
              <input type="text" name="personas[]">
              <input type="text" name="personas[]">
              <input type="text" name="personas[]">
              -->

            <!-- Arreglos asociativos -->
            <!--<label>Nombre de la persona:</label>
            <input type="text" name="persona[nombre]">
            <label>Correo de la persona:</label>
            <input type="email" name="persona[email]">
            <label>Edad de la persona:</label>
            <input type="number" name="persona[edad]">
            -->

            <!-- Checkbox -->
            <!--   <input type="checkbox" name="list1">
               <input type="checkbox" name="list2" value="Este valor fue clicado">
               <input type="checkbox" name="list3">
               -->

            <!-- Radios -->
            <!--       <label for="España">España</label>
                   <input type="radio" name="pais" value="España" id="españa">
               <br><br>

                   <label for="Finlandia">Finlandia</label>
                   <input type="radio" name="pais" value="Finlandia" id="finlandia">
               <br><br>

                   <label for="Argentina">Argentina</label>
                   <input type="radio" name="pais" value="Argentina" id="argentina">
               <br><br>
                -->

            <!-- Múltiples archivos -->
            <label for="galeria">Carga tus imágenes</label>
            <input type="file" multiple name="galeria[]" id="galeria[]">



               <button type="submit">Mandar formulario</button>


      </form>
      </body>
      </html>