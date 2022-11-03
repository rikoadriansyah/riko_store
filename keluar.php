<?php

session_start();
if(session_destroy()){
    echo"
    <script>
        document.location.href = 'login.php'
    </script>
    ";
}

?>