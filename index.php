
<?php require 'recherche.php'; 
require 'delete.php';
?>
<style>

  .tex{
    display: inline;
  justify-content: center;
  align-items: center;
  font-size: 60px;
  font-weight: bold;
  }
  .angry-grid {
   display: grid; 

   grid-template-rows: 1fr 100px 1fr;
   grid-template-columns: 400px 1fr 1fr;
   
   gap: 0px;
   height: 100%;
   
}
  
#item-0 {
  padding:40px;
  border: 1px solid #171717;

   grid-row-start: 1;
   grid-column-start: 1;

   grid-row-end: 4;
   grid-column-end: 2;
   
}
#item-1 {
  border: 1px solid #171717;

   grid-row-start: 1;
   grid-column-start: 2;

   grid-row-end: 2;
   grid-column-end: 4;
   
}
#item-2 {
  border: 1px solid #171717;
right:200px;
   grid-row-start: 2;
   grid-column-start: 2;

   grid-row-end: 4;
   grid-column-end: 4;
   
}
.imgph{
  width: 100%; /* or any custom size */
    height: 100%; 
    object-fit: contain;
}
.texim{
  position: absolute;
  top: 80px;
  left: 600px;
  color:#fff;

}
.texre{
  position: absolute;
  top: 220px;
  left: 770px;
  color:000;
  text-decoration:underline;
  font-size:30px;
}
hr{
  color:#2596be;
}
</style>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


  
<div class="angry-grid">
<?php 
  $xml = simplexml_load_file('config.xml');
  //  if ($xml->validate()) {
  //    echo "Ce document est valide !\n";
  //    }
  ?>
  <div id="item-0">
    nom : <?php 
      $nom=$xml->nav->nom;
      echo $nom;
      ?>
      <br>
      prenom : <?php 
      $prenom=$xml->nav->prenom;
      echo $prenom; ?>
      <br>
      specialite : <?php 
      $specialite=$xml->nav->specialite;
      echo $specialite; ?>
      <br>
      section : <?php 
      $section=$xml->nav->section;
      echo $section; ?>
      <br>
      groupe : <?php 
      $groupe=$xml->nav->groupe;
      echo $groupe; ?>
      <br>
      email : <?php 
      $email=$xml->nav->email;
      echo $email; ?>
      <br>
      <br>
      <br>
      <hr>
      <li><a href="formulaire.php" >ajouter ville</a>
  </div>
  <div id="item-1"> <img class="imgph" src="<?php 
      $chemine=$xml->header->chemin;
      echo $chemine;
      ?>" alt=""/> 
      <div class="tex texim"><?php 
      $data=$xml->header->titre;
      echo $data;
      ?></div>
    </div>
  <div id="item-2">
    <h2 class="texre" style="color:#2596be;">Recherche</h2>

    <form action=""  method="POST">
    <input type="hidden" value="true" name="search_action">
    <label class="label1" style="margin-left:70" for="fname">Continent</label>
    <input type="text" id="fname" style="margin-right:300; margin-bottom:10; margin-top:30;" name="Continent" placeholder="Continent">
    <label for="fname" style="margin-left:20">Pays</label>
    <input type="text" id="fname"   name="Pays" placeholder="Pays">
    <label for="fname" style="margin-left:70">Ville</label>
    <input type="text" style="margin-right:320" id="fname" name="Ville" placeholder="Ville">
    <label for="fname">Site</label>
    <input type="text" id="fname" name="Site" placeholder="Site">
    <input type="submit" style="margin-left:70; margin-top:10; float:right; margin-right:102;"  value="Submit">
   <br>
   <br>
   <br>

  <hr>
  </form>
  <div style="margin-left:30px">
  <div class="search_result_container">
                    <ul class="search_result">
                        - <?php foreach ( $villes as $ville ) : ?>
                        <li style="margin-bottom:10px;gap:10px;align-items:center">
                            <a href="<?php echo $ville->nodeValue; ?>.xml">
                                <?php echo $ville->nodeValue; ?>
                            </a>
                            <a href="?delete=1&id=<?php echo $ville->nodeValue; ?>">
                                <img style="width:20px;height:20px;margin-bottom:-5px;margin-left:10px"
                                    src="delete.png" alt="">
                            </a>
                            <a href="">
                                <img style="width:20px;height:20px;margin-bottom:-5px;margin-left:10px"
                                    src="modif.png" alt="">
                            </a>

                        </li>
                        <?php endforeach; ?> 
                    </ul>
                </div>

  </div>
  </div>
</div>

</body>
</html>


