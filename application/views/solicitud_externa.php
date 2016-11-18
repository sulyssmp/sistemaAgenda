<!DOCTYPE html>
<html lang="en">
<head>
  <title>Solicitud Externa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
<div class="container-fluid">
  <div class="row">
  <div class="col-md-11"></div>  
    <div class="col-md-11">
  <fieldset enabled>
  
   <h3> Información sobre la institución organizadora</h3>
<label>Nombre de la institución</label>
  <input class="w3-input w3-border w3-round" name="nombre institucion" type="text"></p>
  <label>Nombre de la dependencia</label>
  <input class="w3-input w3-border w3-round" name="nombre institucion" type="text"></p>
  <div class="w3-row-padding">
  <div class="w3-third">
    <label>Nombre titular de la Dependencia</label>
    <input class="w3-input w3-border" >
  </div>
  <div class="w3-third">
      <label>Correo electronico</label>
    <input class="w3-input w3-border" >
  </div>
  <div class="w3-third">
      <label>Telefono/extensión</label>
    <input class="w3-input w3-border" >
  </div>
  </fieldset>
</div>



  <div class="container-fluid">
  <div class="row">
  <div class="col-md-11"></div>  
    <div class="col-md-11">
  <fieldset enabled>
  <h3> Información de fecha y hora del evento</h3>
  <h4>Ingrese los datos de su evento</h4>
  <p>
  <label>Nombre del evento</label>
  <input class="w3-input w3-border w3-round" name="nombre evento" type="text"></p>
  
  <div class="w3-row-padding">
  <div class="w3-third">
    <label>Coordinador del evento</label>
    <input class="w3-input w3-border" >
  </div>
  <div class="w3-third">
      <label>Correo electronico</label>
    <input class="w3-input w3-border" >
  </div>
  <div class="w3-third">
      <label>Telefono/extensión</label>
    <input class="w3-input w3-border" >
  </div>

  <div class="w3-quarter">
  <label>Tipo de evento :</label>
  <input class="w3-radio" type="radio" name="gender" value="privado">
  <label class="w3-validate">Privado</label>
    </div>

    <div class="w3-quarter">
  <input class="w3-radio" type="radio" name="gender" value="publico" >
  <label class="w3-validate">Abierto al publico en general</label>
  </div>
</div>

</fieldset>

<div class="container-fluid">
  <div class="row">
  <div class="col-md-14"></div>  
    <div class="col-md-14">

  <fieldset enabled>

   <h4>Seleccione la fecha de su evento</h4>
  <p>Fecha: <input type="text" id="datepicker"></p>

     <script>
       $( function() {
       $( "#datepicker" ).datepicker();
      } );
     </script> 
<!-- On rows -->
<div class="w3-container">
<div class="w3-responsive">
<table class="w3-table w3-striped w3-bordered w3-border table-bordered">
<tr>
  <th>Salas</th>
  <td>9</td>
  <td>10</td>
  <td>11</td>
  <td>12</td>
  <td>13</td>
  <td>14</td>
  <td>15</td>
  <td>16</td>
  <td>17</td>
  <td>18</td>
  <td>19</td>
  <td>20</td>
 <td>21</td>
</tr>

<tr>
  <td>USBI Xalapa 1</td>
   <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>USBI Xalapa 2</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>USBI Xalapa 3</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
</table>
</div>
</div>


 

<div class="container">
    <h4>Selecciona las regiones donde se llevará acabo el evento</h4>
  <form>
    <div class="checkbox">
      <label> <input type="checkbox" value="">Xalapa</label>
       <label for="enabledSelect"></label>
      <select name="id_asistentes_sala" id="id_asistentes_sala">
  </select>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Veracruz</label>
      <label for="enabledSelect"></label>
      <select name="id_asistentes_sala" id="id_asistentes_sala">
      </select>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Veracruz</label>
      <label for="enabledSelect"></label>
      <select >
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
    </div>
       <p>Se selecciono el día -------------- </p>
   <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>

<div class="w3-container">
<div class="w3-responsive">
<table class="w3-table w3-striped w3-bordered w3-border table-bordered">
<tr>
  <th>Fechas</th>
  <th>Horario</th>
  <th>Sedes</th>
  <td>      </td>
</tr>

<tr>
  <td>10/03/2017</td>
   <td>10am - 8pm</td>
  <td>Xalapa, Poza rica </td>
  <td></td>
 

</tr>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  

</tr>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>

</tr>
</table>
</div>
</div>
</fieldset>

<div class="container-fluid">
  <div class="row">
  <div class="col-md-14"></div>  
    <div class="col-md-14">

  <fieldset enabled>

 <h4>Requerimientos técnicos del evento</h4>
 <p>Los servicios adicionales que ofrece el departamento de videoconferencias 
  son los siguietes : - Streaming- se transmite en www.uv.mx/video/canalxalapa.</p>
<p>Grabación del evento en formato digital (el usuario debe proporcionar memoria USB antes del comienzo del evento, la cual sera entregada al responsable técnico en sala)</p>
<p> Seleccione los servicios </p>
<div class="checkbox">
      <label><input type="checkbox" value="">Transmisión a traves de internet</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Grabación en formato digital</label>
    </div>

  <div class="checkbox">
      <label><input type="checkbox" value="">Grabación en formato digital</label>
    </div>




<table class="w3-table w3-striped w3-bordered w3-border table-bordered">
  <tr>
  <td>
      <p>Si requiere enlace con una sede externa a la Universidad Veracruzana</p>
    
  <!-- Trigger the modal with a button -->
 <center> <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Agregar otra sede externa</button></center>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar otra sede</h4>
        </div>
        <div class="modal-body">
           <p>Indique el nombre de la institución y responsable</p>
           <label>Nombre de la institución externa</label>
  <input class="w3-input w3-border w3-round" name="nombre evento" type="text"></p>
  
  <div class="w3-row-padding">
  <div class="w3-third">
    <label>Nombre del responsable</label>
    <input class="w3-input w3-border" >
  </div>
  <div class="w3-third">
      <label>Correo electronico</label>
    <input class="w3-input w3-border" >
  </div>
  <div class="w3-third">
      <label>Telefono/extensión</label>
    <input class="w3-input w3-border" >
  </div>
        </div>
        <div class="modal-footer">
          
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-default" >Guardar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
        </div>
      </div>
    </div>
    <!-- modal-->
  </div>
  </td>
</tr>
</table>

<div class="container">
  <p> </p>
  <form>
    <div class="form-group">
      <label for="comment">Si existe algún comentario o dato importante acerca de su evento hagalo llegar por este medio</label>
      <textarea class="form-control" rows="6" id="comment"></textarea>
    </div>
  </form>
</div>
</fieldset>
<center><button type="submit" class="btn btn-success btn-lg">Enviar solicitud de evento</button></center>
   

 
</body>
</html>





















