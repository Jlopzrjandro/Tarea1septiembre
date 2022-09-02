<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 20px;
            height: 20px;
        }
        th,
        td{
            text-align:center;
        }
    </style>
</head>
<body>
    <p>
        <h2>INGRESO DE DATOS DEL ESTUDIANTE</h2>
    </p>
    <form action="EstudianteController.php" method="post">
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </p>
        
        <p>
            <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        </p>
        
        <p>
            <label for="direccion">direccion</label>
            <input type="text" name="direccion">
        </p>
        
        <p>
            <label for="telefono">Telefono</label>
            <input type="number" name="telefono">
        </p>
        
        <p>
            <input type="submit" value="Guardar Registro">
        </p>
    </form>
    <hr>
    <h3>LISTADO DE ESTUDIANTES</h3>
    <hr>
    <table border="1">
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th colspan="2">OPERACIONES</th>

          <tr>
                <td>Victor</td>
                <td>Tejeda</td>
                <td>Zona 9</td>
                <td>64356897</td>
                <td><a href="editar.php"><img src="notas.png" alt="Editar" title="Editar"></a></td>
                <td><a href="eliminar.php"><img src="borrar.png" alt="Eliminar" title="Eliminar"></a></td>
          </tr>
          
          <tr>
                <td>Moises</td>
                <td>Natanael	</td>
                <td>Zona 8</td>
                <td>23423434</td>
                <td><a href="editar.php"><img src="notas.png" alt="Editar" title="Editar"></a></td>
                <td><a href="eliminar.php"><img src="borrar.png" alt="Eliminar" title="Eliminar"></a></td>
          </tr>
        
          <tr>
                <td>Idair</td>
                <td>villatoro</td>
                <td>Zona 3</td>
                <td>67425642</td>
                <td><a href="editar.php"><img src="notas.png" alt="Editar" title="Editar"></a></td>
                <td><a href="eliminar.php"><img src="borrar.png" alt="Eliminar" title="Eliminar"></a></td>
          </tr>

          <tr>
                <td>Marvin</td>
                <td>Ordoñez</td>
                <td>Zona 7</td>
                <td>9753345</td>
                <td><a href="editar.php"><img src="notas.png" alt="Editar" title="Editar"></a></td>
                <td><a href="eliminar.php"><img src="borrar.png" alt="Eliminar" title="Eliminar"></a></td>
          </tr>

    
    </table>
</body>
</html>