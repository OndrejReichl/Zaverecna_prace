<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<?php
if(is_null($_SESSION["pocet"])){
    $_SESSION["pocet"] = 0;
}
if(is_null($_SESSION["cena"])){
    $_SESSION["cena"] = 0;
}
?>

 <div id="right-col" >
    <h2>Košík</h2>
    <div class="scroll">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="26">Počet předmětů: <?php echo $_SESSION["pocet"];?> ks</td>
          </tr>
          <tr>
            <td height="26">Cena: <?php echo $_SESSION["cena"];?>  ,-</td>
          </tr>


          <tr>
            <td><label>
              <div align="center">
                  <form>
                      <input type="button" value="Do košíku" onclick="window.location.href='basket.php'" />
                  </form>
              </div>
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>

      <h3>&nbsp;</h3>
  </div>
    <h2>&nbsp;</h2>
   <ul class="side">
    
    </ul>
</div>
 <script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
