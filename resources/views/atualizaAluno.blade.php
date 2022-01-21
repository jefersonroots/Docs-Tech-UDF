<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil Aluno</title>

</head>
<body>
    <div id="teste" align='center'>
        <div id="teste" class="modal-dialog-modal  "
        style="-webkit-box-shadow: 0px 2px 5px 5px rgba(0,0,0,0.23);
        -moz-box-shadow: 0px 2px 5px 5px rgba(0,0,0,0.23);
        box-shadow: 0px 2px 5px 5px rgba(0,0,0,0.23);
        position: absolute;
        float: left;
        left: 50%;
        top: 35%;
        transform: translate(-50%, -50%);">
            <div class="modal-content " >
                <div class="modal-header ">
                    <h1 class="modal-title w-100 font-weight-bold">Perfil</h1>
                  </div>
              <div class="modal-header">

   @if (Session('sucess'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


   @if (Session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <form name="formAluno" class="form" role="search"  action="{!! url('Aluno/perfil') !!}"  method="post" >
               {{--  @method('PUT') --}}
                <input type="hidden" name="_token" value="{{csrf_token()}}"\>
                <div class="row">
                   <div class="form-group col-md-4">
                       <label for="nome">Nome:</label>
                       <input  type="text" name="nome" class="form-control" value="{{old('nome')}}">
                   </div>
                <div class="form-group col-md-4">
                       <label for="cpf">CPF:</label>
                       <input  type="text" name="cpf" class="form-control" id="cpf">
                   </div>
                 <div class="form-group col-md-4">
                       <label for="rgm">RGM:</label>
                       <input  type="text" name="rgm" class="form-control" id="rgm">
                   </div>
               </div>

               <div class="row">
                   <div class="form-group col-md-4">
                       <label for="email">Email:</label>
                       <input  type="email" name="email" class="form-control" id="email">
                   </div>

                   <div class="form-group col-md-4">
                        <label for="confEmail">Confirmar Email:</label>
                        <input  type="email" name="confEmail" class="form-control" id="confEmail">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="dtNascimento">Data de Nascimento:</label>
                    <input  type="date" name="dtNascimento" class="form-control" id="dtNascimento">
                </div>
               </div>

                   <div class="row">

                 <div class="form-group col-md-4">
                       <label for="usuario">Usuario:</label>
                       <input  name="usuario" class="form-control" id="usuario">
                   </div>

                 <div class="form-group col-md-4">
                    <label for="senha">Senha:</label>
                    <input  name="senha" class="form-control" id="senha">
                   </div>
                 <div class="form-group col-md-4">
                    <label for="confSenha">Confirmar Senha:</label>
                     <input  name="confSenha" class="form-control" id="confSenha">
                </div>


               </div>
               <div class="row">
             <div class="form-group col-md-3">
                <label for="telefone">Telefone:</label>
                <input  name="telefone" class="form-control" id="telefone">
                   </div>
                <div class="form-group col-md-5">
                    <label for="endereco">Endereço:</label>
                    <input  name="endereco" class="form-control" id="endereco">
                </div>

               <div class="form-group col-md-4">
                <label for="curso">Curso:</label>
                <select  name="curso" class="form-control" id="curso">
                <option>Selecione...</option>
                    <option  type="text" name="curso" value="sistemas"></option>
                </select>

                </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                  </div>

             </form>
              </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    html, body {
        background-color: #F2F2F2;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 90vh;
        margin: 4vh;


    };


</style>
<script type="javascript">
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
