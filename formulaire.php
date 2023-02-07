<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>


<div>
  <form action="action.php"  method="POST">
    <label for="fname">Ville</label>
    <input type="text" id="fname" name="Ville" placeholder="Ville">

    <label for="lname">Pays</label>
    <input type="text" id="lname" name="Pays" placeholder="Pays">

    <label for="lname">Continent</label>
    <input type="text" id="lname" name="Continent" placeholder="Continent">
   
    <label for="lname">Descriptif</label>
    <input type="text" id="lname" name="Descriptif" placeholder="Descriptif">
    
    <label for="lname">Sites</label>
    <input type="text" id="lname" name="Site" placeholder="Site">
    
    <label for="lname">Photos</label>
    <input type="text" id="lname" name="Photos" placeholder="Photos">
    
    <label for="lname">Hotels</label>
    <input type="text" id="lname" name="Hotels" placeholder="Hotels">
    
    <label for="lname">Restorants</label>
    <input type="text" id="lname" name="Restorants" placeholder="Restorants">
    
    <label for="lname">Gares</label>
    <input type="text" id="lname" name="Gares" placeholder="Gares">
    
    <label for="lname">aeroports</label>
    <input type="text" id="lname" name="aeroports" placeholder="aeroports">
    
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

