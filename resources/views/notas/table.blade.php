<div class="panel-body table-responsive">
    <table class="table table-hover">
        @if(isset($notas))
            <thead>
            <th>Titulos</th>
            <th>Fecha</th>
            <th>Imagen</th>
            <th>Modificar</th>
            <th>Eliminar</th>
            </thead>
            <tbody>
            @foreach($pruebas as $p)
                <tr>
                    <td>{{$p->namecat}}</td>
                    <td>{{$p->created_at}}</td>
                    <td><img src="{{route('noticia.imagen',$p->url)}}" alt="Logo" class="img-responsive" width="100px" height="250px"></td>
                    <td><a href="prueba/{{$p->id}}/edit" class="btn btn-warning">Modificar</a></td>
                    <td>
                        <form action="{{route('prueba.destroy',$p->id)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" class="hide" name="img" value="{{$p->url}}">
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

        @endif
    </table>
</div>