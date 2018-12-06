<script>
    function hideAddress(stav) {
        if (stav == 1) {
            var textField = document.getElementById("f_ulice");
            textField.disabled = false;
            var textField = document.getElementById("f_mesto");
            textField.disabled = false;
            var textField = document.getElementById("f_psc");
            textField.disabled = false;
        }
        else {
            var textField = document.getElementById("f_ulice");
            textField.disabled = true;
            var textField = document.getElementById("f_mesto");
            textField.disabled = true;
            var textField = document.getElementById("f_psc");
            textField.disabled = true;
        }
    }

    function hidePayment(stav) {
        if (stav == 0) {
            var textField = document.getElementById("Dobírkou");
            textField.disabled = false;

        }
        else {
            var textField = document.getElementById("Dobírkou");
            textField.disabled = true;
            if (textField.checked == true) {
                textField.checked = false;
                var textField = document.getElementById("Na poštu");
                textField.checked = true;
            }
        }
    }
</script>
<form method="post" action="createOrder.php">
    <ul>
        <li><input type="radio" name="adresa" value="0" checked="checked" onchange="hideAddress(0)">Doručit na místo
            bydliště.
        </li>
        <li><input type="radio" name="adresa" value="1" onchange="hideAddress(1)">Doručit na:</li>
        <li><input type="text" id="f_ulice" name="f_ulice" disabled="true">Ulice</li>
        <li><input type="text" id="f_mesto" name="f_mesto" disabled="true">Město</li>
        <li><input type="text" id="f_psc" name="f_psc" disabled="true">PSČ</li>
    </ul>
    <ul>
        <li><input type="radio" name="doprava" value="1" checked="checked" onchange="hidePayment(1)">Na poštu</li>
        <li><input type="radio" name="doprava" value="2" onchange="hidePayment(1)">Do ruky</li>
        <li><input type="radio" name="doprava" value="3" onchange="hidePayment(0)">Osobní odběr</li>
    </ul>
    <ul>
        <li><input type="radio" name="platba" value="1" id="Na poštu" checked="checked"><img
                    src="/class/Stránky/images/dobirka.png" style="width:40px;height:30px;"> Dobírkou
        </li>
        <li><input type="radio" name="platba" value="2" id="Dobírkou" disabled="true"><img
                    src="/class/Stránky/images/bill.png" style="width:30px;height:30px;">
            <p id="dobirka_label">Hotově/kartou (osobní odběr)</p></li>
        <li><input type="radio" name="platba" value="3"><img src="/class/Stránky/images/visa.png"
                                                             style="width:40px;height:30px;">Kartou online
        </li>
    </ul>
    <input type="submit" value="Potvrď">
</form>
<?php

?>
/**
* Created by PhpStorm.
* User: Andrew
* Date: 21. 5. 2018
* Time: 11:10
*/