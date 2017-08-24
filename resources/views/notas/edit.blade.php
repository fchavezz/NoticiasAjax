@if(isset($prueba))

    <form action="{{route('notas.update',$post->id)}}" role="form" autocomplete="off" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" class="hide" name="img" value="{{$->url}}">

        <div class="form-group">
            {!!Form::label('Nombre','Nombre:')!!}
            <input type="text" class="form-control" name="nombre" value="{{$prueba->namecat}}">
        </div>
        <div class="form-group">
            {!!Form::label('Fecha','Fecha:')!!}
            <input type="text" id="datepicker" name="datepicker" class="form-control" value="{{$prueba->created_at}}">
        </div>
        <div class="form-group">
            {!!Form::label('Lista numerica','Lista numerica:')!!}
            {!! Form::select('status',[0, 1, 2,3,4,5,6,7,8,9], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('Subir imagen','Subir imagen:')!!}
            {!!Form::file('imagen',['id'=>'imagen'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('Correo','Correo')!!}
            <input type="email" class="form-control" value="{{$prueba->email}}" name="email" required >
        </div>

        <div class="form-group">
            {!!Form::label('nota','Registra la nota')!!}
            {!!Form::textarea('blog',null,['class' => 'form-control'])!!}
        </div>
        {!!Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
    </form>
@endif