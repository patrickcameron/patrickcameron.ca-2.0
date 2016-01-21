<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<?php get_template_part( 'loop', 'index' );	?>

<?php get_footer(); ?>