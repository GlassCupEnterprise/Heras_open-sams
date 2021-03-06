<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index">Asistencia Social</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li ><a href="../index">Inicio</a></li>
        <li ><a href="../activity">Actividad</a></li>
        <li class="active"><a href="../../volunteers">Voluntarios</a></li>
        <li><a href="../pantry">Despensa</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Áreas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Salud</a></li>
            <li><a href="#">Educación</a></li>
            <li><a href="#">Carcelario</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Voluntarios</h1>
    <p>Asistencia Social</p>
  </div>

  <div class="page-header">
    <h2>Ver voluntario/a</h2>
  </div>
  <div class="row">
    <div class="col-sm-6">
     
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ver voluntario/a</h3>
        </div>
        <div class="panel-body">
          
 
<?php foreach ($volunteer_item as $volunteer_data): ?>
<?php echo form_open('volunteers/edit_volunteer/'.$volunteer_data['idVolunteer'].''); ?>
    <input type="hidden" name="idVolunteer" value="<?php echo set_value('idVolunteer',$volunteer_data['idVolunteer']); ?>" />
    <?php echo "Creado el :".$volunteer_data['volunteer_creationdate'] ?><br />
    <?php echo "Modificado por última vez el ".$volunteer_data['volunteer_lastmodificationdate'] ?><br />
    <label for="volunteer_date_label">Fecha de nacimiento</label>
    <input type="input" name="volunteer_birthdate" value="<?php echo set_value('volunteer_birthdate',$volunteer_data['volunteer_birthdate']); ?>" readonly/><br />
    <label for="volunteer_firstname_label">Nombre</label>
    <input type="input" name="volunteer_firstname" value="<?php echo set_value('volunteer_firstname',$volunteer_data['volunteer_firstname']); ?>"  readonly readonly/><br />
    <label for="volunteer_name_label">Apellidos</label>
    <input type="input" name="volunteer_lastname"  value="<?php echo set_value('volunteer_lastname',$volunteer_data['volunteer_lastname']); ?>" /><br />
    <label for="volunteer_email_label">Email</label>
    <input type="input" name="volunteer_email" value="<?php echo set_value('volunteer_email',$volunteer_data['volunteer_email']); ?>" readonly/><br />
    <label for="volunteer_phone_label">Teléfono</label>
    <input type="input" name="volunteer_phone" value="<?php echo set_value('volunteer_phone',$volunteer_data['volunteer_phone']); ?>"  readonly/><br />
    <label for="volunteer_profession_label">Profesión</label>
    <input type="input" name="volunteer_profession" value="<?php echo set_value('volunteer_profession',$volunteer_data['volunteer_profession']); ?>"  readonly/><br />
    <label for="volunteer_occupation_label">Ocupación</label>
    <input type="input" name="volunteer_occupation" value="<?php echo set_value('volunteer_occupation',$volunteer_data['volunteer_occupation']); ?>"  readonly/><br />
    <label for="volunteer_availability_label">Disponibilidad</label>
    <input type="input" name="volunteer_availability" value="<?php echo set_value('volunteer_availability',$volunteer_data['volunteer_availability']); ?>"  readonly/><br />
    <label for="volunteer_occupation_label">Preferencias</label>
    <input type="input" name="volunteer_occupation"  readonly/><br />
    <label for="volunteer_experience_label">Experiencia</label>
    <textarea name="volunteer_experience" rows="10" cols="50"  readonly><?php echo set_value('volunteer_experience',$volunteer_data['volunteer_experience']); ?></textarea><br />

  <?php endforeach; ?>


    

</form>

        </div>
      </div>
    </div><!-- /.col-sm-4 -->
    


  


</div> <!-- /container -->

