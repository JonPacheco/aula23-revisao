<?php
include "menusup.php";
?>

<div class="container">
<h1>Cadastro de Contatos</h1>
<hr>


<form method="POST">
   
    <div class="row">

        <div class="col">

            <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Nome</label>

                <input type="text" class="form-control" required name="nome" value=""><br>

             </div>      

        </div>

    <div class="col">

        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Email</label>

            <input type="email" class="form-control" required name="email" value=""><br>

        </div>

    </div>
    
    <div class="row">

        <div class="col">

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">CPF</label>

             <input type="number" class="form-control" required name="number" value=""><br>

               

        </div>

    </div>

    <div class="col">

        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Telefone</label>

            <input type="number" class="form-control" required name="number" value=""><br>

        </div>

    </div>

    <div class="col">

        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Curso</label>

            <input type="text" class="form-control" required name="text" value=""><br>

        </div>

    </div>

    <div class="col">

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Data de Inscrição</label>

             <input type="date" class="form-control" required name="dataadmissao" value=""><br>

             <input type="hidden"     name="idfunc"   value="">   
 

        </div>

    </div>    

    <div class="row">

      <div class="col">

        <div class="mb-3">        

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </div>


   

</form>    

    <div class="col">

      <div class="mb-3">

       <a href="index.php"  class="btn btn-outline-primary">volta</a>

    </div>   


</body>
</html>