
@if($errors->any())
<div>
    <h2>Errores:</h2>
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif

<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ isset($productos->Nombre)? $productos->Nombre:'' }}" id="Nombre">
<br>

<label for="Descripcion"> Descripcion </label>
<input type="text" name="Descripcion" value="{{ isset ($productos->Descripcion)? $productos->Descripcion:'' }}"id="Descripcion">
<br>

<label for="Precio"> Precio </label>
<input type="text" name="Precio" value="{{ isset($productos->Precio)? $productos->Precio:''}}" id="Precio">
<br>

<label for="Cantidad"> Cantidad en Stock </label>
<input type="text" name="Cantidad" value="{{isset ($productos->Cantidad)? $productos->Cantidad:''}}" id="Cantidad">
<br>

<input type="submit" value="Guardar datos">

<a href="{{url('productos/')}}">Regresar</a>

<br>

