<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>BUSCAR FUNCIONÁRIO</h3>
        <form method="POST">
            NOME.:<br>
            <input type="text" name="nome">
            <br><br>
            <input type="submit" value="BUSCAR" class="btn btn-primary">
            {{csrf_field()}}
        </form>
        <br>
        <a href="{{route('home')}}" class="btn btn-link">Cadastrar</a>
        <hr>
        @if(isset($lista) && count($lista)>0)
        <table style="width: 100%; margin:0 auto; text-align: justify;border: 1px solid black;border-spacing: 0px;">
            <tr>
                <th style="border: 1px solid black;">NOME</th>
                <th style="border: 1px solid black;">SALARIO</th>
                <th style="border: 1px solid black;">EMAIL</th>
                <th style="border: 1px solid black;">IDADE</th>
            </tr>
            @foreach($lista as $f)
              <tr>
                 <td style="border: 1px solid black;">{{$f->nome}}</td>
                 <td style="border: 1px solid black;">{{$f->salario}}</td>
                 <td style="border: 1px solid black;">{{$f->email}}</td>
                 <td style="border: 1px solid black;">{{$f->idade}}</td>
              </tr>
            @endforeach
          </table>
        @endif
    </body>
</html>
