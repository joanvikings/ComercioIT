<?php
	if ( isset( $_GET["page"] ) ) {
		$page = $_GET["page"];
	} else {
		$page = "inicio";//PAGINA X DEFECTO (Pag de entrada)
	}
	require_once("functions.php");
	include("header.php");
?>
<section id="page">
	<?php CargarPagina( $page ); ?>
</section>
<?php include("footer.php"); ?>
