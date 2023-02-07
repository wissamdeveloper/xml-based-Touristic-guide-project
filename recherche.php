<?php
if ( isset( $_POST['search_action'] ) ) {
	$doc = new DOMDocument();
	$doc->load( 'villes.xml' );
	$xml = new DOMXPath( $doc );
	$query = '//pays';
		// GET CONTINENT FROM XPATH AND ADD IT TO QUERY IF EXISTS
		$co     = $xml->query( '//continent[starts-with(@nom,"' . $_POST['Continent'] . '")][1]/@no' )->item( 0 );
		$co     = ( $co ) ? $co->nodeValue : null;
		$query .= '[@no="' . $co . '"';
		$query .= ( empty( $_POST['Pays'] ) || ! isset( $_POST['Pays'] ) ) ? ']' : '';
		// GET PAYS FROM XPATH AND ADD IT TO QUERY IF EXISTS
		$separator = ( ! isset( $_POST['Continent'] ) || empty( $_POST['Continent'] ) ) ? '[' : ' and ';
		$query    .= $separator . 'starts-with(@nom,"' . $_POST['Pays'] . '")';
		$query    .= ']';
	// CONTINUE THE QUERY
	$query .= '/villes/ville';
		// ADD VILE TO QUERY IF EXISTS
		$query .= '[starts-with(@nom,"' . $_POST['Ville'] . '")]';
		// ADD SITE TO QUERY IF EXISTS
		$query .= '/sites/site[starts-with(@nom,"' . $_POST['Site'] . '")]/parent::*/parent::*';
	// GET NAME OF VILLE
	$query .= '/@nom';
		$villes = $xml->query( $query );
} else {
	$villes = array();
}
// //pays[@no="" and @nom=""]/villes/ville[@nom=""]/sites/site[@nom=""]/parent::*/parent::*/@nom