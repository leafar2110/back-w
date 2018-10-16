<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right');?> <?php bloginfo('name');?></title>

	<?php wp_head();?>


</head>

<body>
	
	<div id="global-container">
		
		
		<header id="main-header">
			
			<h1 class="site-title"> <?php bloginfo('name');?></h1>
			<h2 class="site-description"> <?php bloginfo('description');?></h2>

		</header><!-- /#main-header -->
		
		
		<nav id="main-nav">

			<!-- 	//////////////////////////////////// For login / register /////////////////////// -->
			<div id="login-register-password">

				<?php global $user_ID, $user_identity; if (!$user_ID) { ?>
					<ul class="menu">
						<?php wp_list_pages('title_li=');?>

						<li class="active_login"><a id="i-sesion" href="#">Iniciar Sesion</a></li>
						<li><a id="r-user" href="#">Resgistrar</a></li>
						<!-- <li><a href="#tab3_login">Forgot?</a></li> -->
						<div class="tab_container_login">
							<div id="tab1_login" class="tab_content_login hidden-form">

								<?php $register = $_GET['register']; $reset = $_GET['reset']; if ($register == true) { ?>

									<p>Verifique la contraseña en su correo electrónico y luego vuelva a iniciar sesión.</p>

								<?php } elseif ($reset == true) { ?>

									<p>Revise su correo electrónico para restablecer su contraseña.</p>

								<?php } else { ?>

									<h3>Iniciar Sesion</h3>

								<?php } ?>

								<form method="post" action="<?php bloginfo('url') ?>/wp-login.php" class="wp-user-form">
									<div class="username">
										<label for="user_login"><?php _e('Username'); ?>: </label>
										<input type="text" name="log" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="20" id="user_login" tabindex="11" />
									</div>
									<div class="password">
										<label for="user_pass"><?php _e('Password'); ?>: </label>
										<input type="password" name="pwd" value="" size="20" id="user_pass" tabindex="12" />
									</div>
									<div class="login_fields">
										<div class="rememberme">
											<label for="rememberme">
												<input type="checkbox" name="rememberme" value="forever" checked="checked" id="rememberme" tabindex="13" /> Recordar
											</label>
										</div>
										<?php do_action('login_form'); ?>
										<input type="submit" name="user-submit" value="<?php _e('Acceder'); ?>" tabindex="14" class="user-submit" />
										<input type="hidden" name="redirect_to" value="<?php echo esc_attr($_SERVER['REQUEST_URI']); ?>" />
										<input type="hidden" name="user-cookie" value="1" />
									</div>
								</form>
							</div>


							<div id="registrar" class="tab_content_login hidden-form" >
								<h3>Regístrate ahora</h3>
								<form method="post" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" class="wp-user-form">
									<div class="username">
										<label for="user_login"><?php _e('nombre'); ?>: </label>
										<input type="text" name="user_login" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="20" id="user_login" tabindex="101" />
									</div>
									<div class="password">
										<label for="user_email"><?php _e('Correo electronico'); ?>: </label>
										<input type="text" name="user_email" value="<?php echo esc_attr(stripslashes($user_email)); ?>" size="25" id="user_email" tabindex="102" />
									</div>
									<div class="login_fields">
										<?php do_action('register_form'); ?>
										<input type="submit" name="user-submit" value="<?php _e('Regístrar'); ?>" class="user-submit" tabindex="103" />
										<?php $register = $_GET['register']; if($register == true) { echo '<p>Revise su correo electrónico para la contraseña!</p>'; } ?>
										<input type="hidden" name="redirect_to" value="<?php echo esc_attr($_SERVER['REQUEST_URI']); ?>?register=true" />
										<input type="hidden" name="user-cookie" value="1" />
									</div>
								</form>
							</div>


					<!-- 	<div id="tab3_login" class="tab_content_login" style="display:none;">
							<h3>Lose something?</h3>
							<p>Enter your username or email to reset your password.</p>
							<form method="post" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" class="wp-user-form">
								<div class="username">
									<label for="user_login" class="hide"><?php _e('Username or Email'); ?>: </label>
									<input type="text" name="user_login" value="" size="20" id="user_login" tabindex="1001" />
								</div>
								<div class="login_fields">
									<?php do_action('login_form', 'resetpass'); ?>
									<input type="submit" name="user-submit" value="<?php _e('Reset my password'); ?>" class="user-submit" tabindex="1002" />
									<?php $reset = $_GET['reset']; if($reset == true) { echo '<p>A message will be sent to your email address.</p>'; } ?>
									<input type="hidden" name="redirect_to" value="<?php echo esc_attr($_SERVER['REQUEST_URI']); ?>?reset=true" />
									<input type="hidden" name="user-cookie" value="1" />
								</div>
							</form>
						</div> -->
					</div>

				<?php } else { // is logged in ?>

					<div class="sidebox">
						<h3>Bienvenido, <?php echo $user_identity; ?></h3>
						<div class="usericon">
							<?php global $userdata; echo get_avatar($userdata->ID, 60); ?>

						</div>
						<div class="userinfo">
							<p>Has iniciado sesión como <strong><?php echo $user_identity; ?></strong></p>
							<p>
								<a href="<?php echo wp_logout_url('index.php'); ?>">Cerrar sesion</a> | 
								<?php if (current_user_can('manage_options')) { 
									echo '<a href="' . admin_url() . '">' . __('Admin') . '</a>'; } else { 
										echo '<a href="' . admin_url() . 'profile.php">' . __('Profile') . '</a>'; } ?>

									</p>
								</div>
							</div>

						<?php } ?>

					</div>
					<!-- 	//////////////////////////////////// End For login / register /////////////////////// -->

				</ul>
			</nav><!-- /#main-nav -->
