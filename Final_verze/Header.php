<div id="title">
    <h1><span style="color: #008000;">Hlavolamy & Deskovky</span></h1>
  </div>
  <div id="header"><img src="img/pop.JPG" alt="header" width="770" height="200" /></div>
<div class="container">
    <ul id="navCircle">
      <li><a class="active" href="index.php">Home</a></li>

      <li><a href="Category.php">Kategorie</a></li>
      <li><a href="Reklamace.php">Reklamace</a></li>
        <?php
        if(!isset($_SESSION["role"])){
            $_SESSION["role"] = -1;
            }
        if($_SESSION["role"]==-1){
            echo "<li><a href=\"Register.php\">Registrace/Přihlášení</a></li>";
        }
        else{
            echo "<li><a href=\"Account.php\">Můj účet</a></li>";
        }
        ?>
	  <li><a href="Contact.php">Kontakty</a></li>
       <?php
       if(!isset($_SESSION["role"])){
           $_SESSION["role"] = -1;
       }
       if($_SESSION["role"]==2){
           echo "<li><a href=\"Sprava.php\">Správa</a></li>";
       }
           ?>
    </ul>
  </div>
