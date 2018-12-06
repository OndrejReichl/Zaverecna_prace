<?php
if(!is_null($_SESSION['login_user'])){
    session_destroy();
    header("Refresh:0");
    echo 'Byli jste odhlaseni ze systemu.';


}
?><script>
    window.location.reload();
</script>