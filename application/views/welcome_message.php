<title>Sistema de Control de Cajas - SEMOVI</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/semovi.ico'); ?>"/>
<script src="<?php echo base_url('assets/js/jquery_v3.min.js'); ?>"></script>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">
<link href="<?php echo base_url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');?>">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/login.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">

    
        
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="logo-cdmx" class="img-responsive" src="<?php echo base_url('assets/img/semovi_logo_full_white.png')?>" />
            <p id="profile-name" class="profile-name-card">Sistema de Control de Cajas</p>
            <form id='formLogin' name='formLogin' method="POST" class="form-signin" action="<?php echo base_url(); ?>index.php/Controlcajas/autentifica" >
                <span id="reauth-email" class="reauth-email"></span>
                <div class="form-group">
                    <input type="text" id="inputUsuario" name="inputUsuario" style="/*text-transform: uppercase*/" class="form-control" placeholder="Ingrese Usuario" required autofocus>
                </div>
                <div class="form-group">
                    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Ingrese Contraseña" required>
                </div>
                <!--<div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> -->
                <?php
                    if(isset($mensaje)){

                        echo "<p id='profile-name' class='profile-name-card'><font color='red'>".$mensaje."</font></p>";
                    }
                ?>
				<br>
				<div class="row justify-content-center">
					<button class="btn btn-success btn-sm" type="submit">Entrar</button>
				</div>
               <!-- <button class="btn" type="submit">Entrar</button> -->
            </form><!-- /form -->
            <!-- <a href="#" class="forgot-password">
                Forgot the password?
            </a> -->
			<div class="card-footer">
				© 2020 Secretaría de Movilidad - DGRPT
			</div>
        </div><!-- /card-container -->
    </div><!-- /container -->
    <!-- Footer -->
<!-- Footer -->
