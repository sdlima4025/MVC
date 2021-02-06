<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>
<form method="POST" action="<?=$base;?>/novo"> <!--O $base representa a url base do projeto, exemplo:http://localhost/mvc/public/ -->
<label>
    NOME:<br/>
        <input type="text" name="name" >
</label><br><br>

<label>
    E-MAIL:<br/>
        <input type="email" name="email" >
</label><br><br>
        <input type="submit" name="Adicionar">   
</form>

<?php $render('footer'); ?>