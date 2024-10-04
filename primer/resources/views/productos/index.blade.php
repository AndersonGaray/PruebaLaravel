Mostrar lista de productos :)
<a href="{{url('productos/create')}}">Registrar Nuevo Producto</a>
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $productos)
        <tr>
            <td>{{$productos->id }}</td>
            <td>{{$productos->Nombre }}</td>
            <td>{{$productos->Descripcion }}</td>
            <td>{{$productos->Precio }}</td>
            <td>{{$productos->Cantidad }}</td>
            <td>
                <a href={{ url('/productos/'.$productos->id.'/edit') }}> Editar 


                </a>
                
                <form action="{{url('/productos/'.$productos->id) }}"method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>