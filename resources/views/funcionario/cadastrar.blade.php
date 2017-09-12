<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Cadastrar Funcionario</h3>
        <p>{{$titulo}}</p>
        
        <form method="post">
            {{csrf_field()}}
            Nome:<br>
            <input type="text" name="nome">
            <br><br>
            Idade:<br>
            <input type="number" name="idade">
            <br><br>
            E-mail:<br>
            <input type="email" name="email">
            <br><br>
            Salário:<br>
            <input type="text" name="salario">
            <br><br>
            <input type="submit" value="CADASTRAR">
        </form>
        <p>{{$resp or ''}}</p>
        <br>
        <a href="{{route('buscar')}}">Buscar Funcionario</a>
    </body>
</html>
