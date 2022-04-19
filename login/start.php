<?php
session_start();
if(empty($_SESSION['id'])){
    $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
    header("Location:./home.php");  
}
?>

<script>
    function screenWidth(width) {
        if (width <= 575) {
            location.assign('../mobile/pages/home-dark.php');
            //document.writeln(width);
        } else {
            //document.writeln(width);
            location.assign('../desktop/pages/home-dark.php');
        };
    }
    
    screenWidth(screen.width);
</script>