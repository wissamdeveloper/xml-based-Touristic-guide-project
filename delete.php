<?php
if ( isset( $_GET['delete'] ) && isset( $_GET['id'] ) ) {
	$xml                     = new DOMDocument();
	$xml->preserveWhiteSpace = false;
	$xml->load( 'villes.xml' );
	$items = $xml->getElementsByTagName( 'ville' );
	foreach ( $items as  $item ) {
		$nom_ville = $item->getAttribute( 'nom' );
		if ( $nom_ville == $_GET['id'] ) {
			$item->parentNode->removeChild( $item );
		}
	}
	$xml->saveXML();
	$xml->save( 'villes.xml' );
	header( 'Location:index.php' );
}