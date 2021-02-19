<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

    
    <title>Document</title>
</head>
<body>
    <h1 class="text-primary">Valkyrie</h1>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-10">
                    <h2>Gestión de sectores</h2>
                </div>

                <div class="col-sm-2">
                    <a href="{{route("create_gestion_sectores")}}">
                        <button type="button" class="btn btn-primary">Nuevo</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table">
                <thead>
                    <tr class="bg-primary">
                        <th scope="col"><center><h4 class="text-light">Nombre del sector</h4></center></th>
                        <th scope="col"><center><h4 class="text-light">Operaciones</h4></center></th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($search as $s)
                    <tr>
                        <td>
                            <center>
                                <h4>{{$s->nombre}}</h4>
                            </center>
                        </td>
                        
                        <td>
                            <center>
                            <a href="{{route('update_gestion_sectores',['id'=>$s->sector_id])}}">
                                <button type="button" class="btn btn-warning">Modificar</button>
                            </a>                                
                            <a href="#">
                                <button type="button" class="btn btn-info">Desactivar</button>
                            </a>    
                            </center>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

<script>
    $("#table").DataTable({
    "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ registros",
        "sZeroRecords":   "No se encontraron resultados",
        "sEmptyTable":    "Ningún dato disponible en esta tabla",
        "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
});
</script>
</body>
</html>