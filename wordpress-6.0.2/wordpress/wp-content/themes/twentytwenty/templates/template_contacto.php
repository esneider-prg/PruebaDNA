<?php
/**
 * Template Name: Contac Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */


get_header();
?>

<main id="site-content">

<?php
if ( isset($_GET['sent']) ){
	if ( $_GET['sent'] == '1'){
		echo "<p> ✔ Formulario enviado correctamente</p><br>";
	}
	else {
		echo "<p> Hubo un error al enviar</p><br>";
	}
}
?>

<form method="post" action="<?php echo admin_url( 'admin-post.php' ) ?>" >
	<label for="name">Nombre:</label>
	<input type="text" name="name" id="name" required>

	<br>
	<label for="email">Correo:</label>
	<input type="email" name="email" id="email" required>

	<br>
	<label for="message">Mensaje:</label>
	<textarea name="message" id="message" cols="30" rows="10" required></textarea>

	<br>
	<p><input type="checkbox" id="terms" name="terms" required> Acepto los <a href="#">Términos y Condiciones</a></p>

	<br>
	<input type="hidden" name="action" value="process_form">
	<input type="submit" name="submit" value="Enviar">
</form>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
