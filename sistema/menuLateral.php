<?php
    echo "<span id='menuAtivo' style='display:none;'>".$_SESSION['menuAtivo']."</span>";
?>
<ul type="none">
    <li class="itemMenuSistema" id="1">
        <i class="fa fa-flag" aria-hidden="true"></i>
        <span> Serviços </span>
    </li>
    <li class="itemMenuSistema" id="2">
        <i class="fa fa-briefcase" aria-hidden="true"></i>
        <span> Produtos </span>
    </li>
    <li class="itemMenuSistema" id="3">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        <span> Portifólio </span>
    </li>
    <li class="itemMenuSistema" id="4">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <span> Mensagens </span>
    </li>
    <li class="itemMenuSistema" id="5">
        <i class="fa fa-gears" aria-hidden="true"></i>
        <span> Conteúdo </span>
    </li>
    <li class="itemMenuSistema" id="6">
        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
        <span> Newsletter </span>
    </li>
    <a href="sair.php" style="text-decoration:none">
        <li class="itemMenuSistema" id="sair">
            <i class="fa fa-user-times" aria-hidden="true"></i>
            <span> Sair </span>
        </li>
    </a>
</ul>