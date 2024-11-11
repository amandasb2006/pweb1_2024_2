<?php
  include "./header.php";
?>

<?php
   if(!empty($POST)){
    echo "<div class='alert alert-success' role='alert'>
    <b>Registro salvo com sucesso!</b> <br>
    Nome: {$POST['nome']} Email: {$POST['email']}
    Mensagem: {$POST['mensagem']}
    </div>";
   }
?>

<div class="row">
    <div class="col">
        <h2>Contato</h2>

        <form action="contato.php" method="get">
        <div class="mb-3">
<label for="nome" class="form-label">Nome</label>
<input type="text" class="form-control" name="nome" placeholder="Nome">
</div>
        <div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Email</label>
<input type="email" class="form-control" name="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
<textarea class="form-control" name="exampleFormControlTextarea1" rows="3"></textarea>
</div>
    <button type="submit" class="btn btn-dark">Salvar</button>
        </form>
        </p>
    </div>
</div>

<?php
  include "./footer.php";
?>