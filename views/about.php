<?php
    try{
        $title = "About";
        require("/views/partials/header.php");
    }catch(e){
        echo `Estamos com problemas em carregar o header | ERR | ${e}`;
    }
?>
<body>
    <?php
        try{
            require("/views/partials/menu.php");
        }catch(e){
            echo `Estamos com problemas em carregar o menu | ERR | ${e}`;
        }
    ?>
    <div class="container">
        <h1>Página sobre ainda em desenvolvimento, por vafor consulte o suporte para mais informações</h1>
    </div>
</body>
<?php
    try{
        require("/views/partials/footer.php");
    }catch(e){
        echo `Estamos com problemas em carregar o footer | ERR | ${e}`;
    }
?>