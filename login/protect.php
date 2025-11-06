<?php
if(isset ($_SESSION)){
    session_start();
}
if (isset($_SESSION['id'])){
    die ("Voce não pode acessar esta pagina porque não está logado, <p>< a herf= \ index.php\ > Entar</a>/" );
}

?>