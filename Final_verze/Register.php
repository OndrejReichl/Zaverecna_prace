<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hlavolamy & Deskovky</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style5 {font-size: 85%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: small;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style3 {font-size: small}
-->
</style>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style12 {font-size: small; font-weight: bold; }
.style13 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	font-weight: bold;
	color: #000000;
}
.style4 {font-size: small;
	font-weight: bold;
	color: #FFFFFF;
}
.style5 {color: #FFFFFF}
.style6 {color: #000000}
-->
</style>
 <style type="text/css">

.ds_box {
	background-color:#336633;
	border: 2px solid #666600;
	position: absolute;
	z-index: 32767;
}

.ds_tbl {
	background-color: #FFF;

}

.ds_head {
	background-color: #85A157;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #85A157;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color:#FFFFCC;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
	border: 1px solid #666600;
}

.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */

 </style>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>
<body>

<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>


<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						["minlen=1",
		"Prosím vyplňte jméno"
						  ],
						  ["alpha",
		"Prosím vyplňte validní jméno"
						  ]

                     ],
                   [//Address
						  ["minlen=1",
		"Prosím vyplňte adresu"
						  ]

                   ],
                   [//City
["minlen=1",
		"Prosím vyplňte město"
						  ]
                   ],
				   [//Email

						["minlen=1",
		"Prosím vyplňte email "
						  ],
						  ["email",
		"Prosím vyplňte validní email "
						  ]
                   ],
				   [//Mobile
						   ["num",
		"Prosím vyplňte validní číslo"
						  ],
						  ["minlen=9",
		"Prosím vyplňte validní číslo"
						  ],
						  ["maxlen=12",
		"Prosím vyplňte validní číslo"
						  ]
                   ]
				   ,
				   [//Gender

                   ],
				   

				   [//User
						  ["minlen=1",
		"Prosím vyplňte Uživatelské jméno "
						  ]


                   ],
				   [//Password
						["minlen=1",
		"Prosím vyplňte heslo "
						  ]


                   ]

            ];
</SCRIPT>
<body>
<div id="wrapper">

  <?php
  include "Header.php";
  ?>

  <div id="content">
      <div style="display: inline-flex;">

<div id="formRegister">
      <form action="insert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" name="form2" id="form2">
          <h2><span style="color:#003300">Registrace Nového Zákazníka</span></h2>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                  <td height="29">Jméno:</td>
                  <td><span id="sprytextfield6">
            <label>
            <input type="text" name="txtFirstName" id="txtFirstName" />
            </label>
          <span class="textfieldRequiredMsg">Hodnota je vyžadována.</span></span></td>
              </tr>
              <tr>
                  <td height="29">Příjmení:</td>
                  <td><span id="sprytextfield6">
            <label>
            <input type="text" name="txtLastName" id="txtLastName" />
            </label>
          <span class="textfieldRequiredMsg">Hodnota je vyžadována.</span></span></td>
              </tr>
              <tr>
                  <td height="69"><div align="left">Adresa:</div></td>
                  <td><span id="sprytextarea1">
            <label>
            <textarea name="txtAddress" id="txtAddress" ></textarea>
            </label>
          <span class="textareaRequiredMsg">Hodnota je vyžadována.</span></span></td>
              </tr>
              <tr>
                  <td height="37"><div align="left">Město:</div></td>
                  <td><span id="sprytextarea1">
            <label>
            <textarea name="cmbCity" id="cmbCity" style="max-width: 200px;"></textarea>
            </label>

                  </td>
              </tr>

              <tr>
                  <td height="27">PSČ:</td>
                  <td><span id="sprytextfield5">
            <label>
            <input type="text" name="txtPSC" id="txtPSC" />
            </label>
          <span class="textfieldRequiredMsg">Hodnota je vyžadována.</span></span></td>
              </tr>

              <tr>
                  <td height="29">Email:</td>
                  <td><span id="sprytextfield4">
            <label>
            <input type="text" name="txtEmail" id="txtEmail" />
            </label>
          <span class="textfieldRequiredMsg">Hodnota je vyžadována.</span></span></td>
              </tr>
              <tr>
                  <td height="27">Mobilní telefon:</td>
                  <td><span id="sprytextfield5">
            <label>
            <input type="text" name="txtMobil" id="txtMobil" />
            </label>
          <span class="textfieldRequiredMsg">Hodnota je vyžadována.</span></span></td>
              </tr>
              <tr>
                  <td height="29">Pohlaví:</td>
                  <td><label>
                          <select name="rdGender" id="rdGender">
                              <option>Muž</option>
                              <option>Žena</option>
                          </select>
                      </label></td>
              </tr>

              <tr>
                  <td height="30">Heslo:</td>
                  <td><span id="sprytextfield7">
            <label>
            <input type="text" name="txtHeslo" id="txtHeslo" />
            </label>
          <span class="textfieldRequiredMsg">Hodnota je vyžadována.</span></span></td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td><label>
                          <input type="submit" name="button2" id="button2" value="Registrovat" />
                      </label></td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
              </tr>
          </table>
      </form>
</div>
          <div id="formLogin">
      <form action="login.php" method="post" >
          <h2><span style="color:#003300">Přihlášení</span></h2>

          <table width="100%" border="0" cellspacing="0" cellpadding="0">


              <tr>
                  <td height="29">Email:</td>
                  <td><span id="sprytextfield4">
            <label>
            <input type="text" name="txtEmail" id="txtEmail" />
            </label>
          <span class="textfieldRequiredMsg">Hodnota je vyžadována.</span></span></td>
              </tr>
              <tr>
                  <td height="30">Heslo:</td>
                  <td><span id="sprytextfield7">
            <label>
            <input type="password" name="txtHeslo" id="txtHeslo" />
            </label>
          <span class="textfieldRequiredMsg">Hodnota je vyžadována.</span></span></td>
              </tr>
              <tr><td><label>
                          <input type="submit" name="button2" id="button2" value="Přihlásit" />
                      </label></td>
              </tr>
             </table>
      </form>
  </div>
      </div>
  </div>
  <?php
 include "Right.php";
 ?>
  <div style="clear:both;"></div>
   <?php
 include "Footer.php";
 ?>
</div>
<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
//-->
</script>
</body>

</html>
