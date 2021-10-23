<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado de cuentas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <form action="{{route('cuenta.index')}}" method="get">
          <div class="form-row">
            <div class="col-sm-4 my-1">
              <input type="text" class="form-control" name="texto" value="{{$texto}}">
            </div>
            <div class="col-auto my-1">
              <input type="submit" class="btn btn-primary">
            </div>
          </div>
        </form>
      </div>
      <div class="col-xl-12">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">DNI</th>
                <th scope="col">Plan</th>
                <th scope="col">P_Cuota</th>
                <th scope="col">N_Cuotas</th>
                <th scope="col">situacion</th>
              </tr>
            </thead>
            <tbody>
              @if(count($cuentas)<=0)
              <tr>
                <td colspan="6">NO HAY RESULTADO</td>
              </tr>
              @else
              @foreach($cuentas as $cuenta)
                <tr>
                  <th scope="row">{{$cuenta->id}}</th>
                  <td>{{$cuenta->DNI}}</td>
                  <td>{{$cuenta->Plan}}</td>
                  <td>{{$cuenta->P_Cuota}}</td>
                  <td>{{$cuenta->N_Cuotas}}</td>
                  <td>{{$cuenta->situacion}}</td>
                </tr>
              @endforeach
              @endif
            </tbody>
          </table>
          {{$cuentas->links()}}
        </div>
      </div>
    </div>
  </div>

</body>
</html>