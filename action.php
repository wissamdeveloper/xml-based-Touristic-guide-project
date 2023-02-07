<?php
    $xml_file_name = 'villes.xml';

$fContinent= $_POST['Continent'];
$fPays= $_POST['Pays'];
$fVille= $_POST['Ville'];
$fSite= $_POST['Site'];
$fDescriptif= $_POST['Descriptif'];
$fPhotos= $_POST['Photos'];
$fHotels= $_POST['Hotels'];
$fRestorants= $_POST['Restorants'];
$fGares= $_POST['Gares'];
$faeroports= $_POST['aeroports'];

$xml_ville_name = $fVille.'.xml';

if(file_exists($xml_file_name))
{
    
$doc = new DOMDocument();
  
$doc->encoding = 'utf-8';

$doc->xmlVersion = '1.0';

$doc->formatOutput = true;

    $doc->formatOutput = true;

        $doc->load($xml_file_name);
$root = $doc->documentElement;
$continents_node = $doc->createElement('continents');
$continent = $doc->createElement('continent');
$attr_continents_id = new DOMAttr('no', 'C1');
$continent->setAttributeNode($attr_continents_id);    
$attr_continents_nom = new DOMAttr('nom', $fContinent);
$continent->setAttributeNode($attr_continents_nom);
    $continents_node->appendChild($continent);
    $conti = $doc->createElement('continent');
    $attr_conti_nom = new DOMAttr('nom', $fContinent);
$conti->setAttributeNode($attr_conti_nom); 
    $pays = $doc->createElement('pays');
$attr_pays_id = new DOMAttr('no', 'C1');
$pays->setAttributeNode($attr_pays_id);    
$attr_pays_nom = new DOMAttr('nom', $fPays);

$pays->setAttributeNode($attr_pays_nom);
    $villes = $doc->createElement('villes');
    $ville = $doc->createElement('ville');
$attr_ville_nom = new DOMAttr('nom', $fVille);
$ville->setAttributeNode($attr_ville_nom); 
$sites = $doc->createElement('sites');
$site = $doc->createElement('site');
$attr_site_nom = new DOMAttr('nom', $fSite);
$site->setAttributeNode($attr_site_nom); 
$attr_site_photo = new DOMAttr('photo', 'site');
$site->setAttributeNode($attr_site_photo); 
$sites->appendChild($site);
$ville->appendChild($sites);
$villes->appendChild($ville);
$pays->appendChild($villes);
$conti->appendChild($pays);
$root->appendChild($continents_node);
$root->appendChild($conti);
$doc->appendChild($root);
$doc->save($xml_file_name);



}
else{
    
$dom = new DOMDocument();
  
$dom->encoding = 'utf-8';

$dom->xmlVersion = '1.0';

$dom->formatOutput = true;

    $rooot = $dom->createElement('recherche');
    $continents_node = $dom->createElement('continents');
$continent = $dom->createElement('continent');
$attr_continents_id = new DOMAttr('no', 'C1');
$continent->setAttributeNode($attr_continents_id);    
$attr_continents_nom = new DOMAttr('nom', $fContinent);
$continent->setAttributeNode($attr_continents_nom);
    $continents_node->appendChild($continent);
    $conti = $dom->createElement('continent');
    $attr_conti_nom = new DOMAttr('nom', $fContinent);
$conti->setAttributeNode($attr_conti_nom); 
    $pays = $dom->createElement('pays');
$attr_pays_id = new DOMAttr('no', 'C1');
$pays->setAttributeNode($attr_pays_id);    
$attr_pays_nom = new DOMAttr('nom', $fPays);

$pays->setAttributeNode($attr_pays_nom);
    $villes = $dom->createElement('villes');
    $ville = $dom->createElement('ville');
$attr_ville_nom = new DOMAttr('nom', $fVille);
$ville->setAttributeNode($attr_ville_nom); 
$sites = $dom->createElement('sites');
$site = $dom->createElement('site');
$attr_site_nom = new DOMAttr('nom', $fSite);
$site->setAttributeNode($attr_site_nom); 
$attr_site_photo = new DOMAttr('photo', 'site');
$site->setAttributeNode($attr_site_photo); 
$sites->appendChild($site);
$ville->appendChild($sites);
$villes->appendChild($ville);
$pays->appendChild($villes);
$conti->appendChild($pays);
$rooot->appendChild($continents_node);
$rooot->appendChild($conti);
$dom->appendChild($rooot);
$dom->save($xml_file_name);
}
if(!file_exists(`$fVille.xml`)){
    $dos = new DOMDocument();
  
$dos->encoding = 'utf-8';

$dos->xmlVersion = '1.0';

$dos->formatOutput = true;

    $vil = $dos->createElement('ville');
    $attr_vil_nom = new DOMAttr('nom', $fVille);
    $vil->setAttributeNode($attr_vil_nom); 
    $Descriptif = $dos->createElement('Descriptif', $fDescriptif);
    $sitees = $dos->createElement('sitees');
    $sitee = $dos->createElement('sitee');
    
    $sitees  ->appendChild($sitee);
    $attr_siite_photo = new DOMAttr('photo', $fPhotos);
    $site->setAttributeNode($attr_siite_photo); 
    $attr_siite_nom = new DOMAttr('nom', $fSite);
    $site->setAttributeNode($attr_siite_nom); 
    $hotels = $dos->createElement('hotels');
    $hotel = $dos->createElement('hotel',$fHotels);
    $hotels ->appendChild($hotel);
    $fPhotos= $_POST['Photos'];
    $fHotels= $_POST['Hotels'];
    $fRestorants= $_POST['Restorants'];
    $fGares= $_POST['Gares'];
    $faeroports= $_POST['aeroports'];
    
    $restaurants = $dos->createElement('restaurants');
    $restaurant = $dos->createElement('restaurant',$fRestorants);
    $restaurants->appendChild($restaurant);

    $gares = $dos->createElement('gares');
    $gare = $dos->createElement('gare',$fGares);
    $gares->appendChild($gare);

    $aeroports = $dos->createElement('aeroports');
    $aeroport = $dos->createElement('aeroport',$faeroports);
    $aeroports->appendChild( $aeroport );

    $vil->appendChild($aeroports);
    $vil->appendChild($gares);
    $vil->appendChild($restaurants);
    $vil->appendChild($hotels);
    $vil->appendChild($sitees);
    $vil->appendChild($Descriptif);
    $dos->appendChild($vil);
$dos->save($xml_ville_name);
}
header( 'Location:index.php' );
?>

