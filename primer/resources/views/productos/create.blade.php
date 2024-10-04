Formulario de creacion de productos

<form action="{{ url('/productos')  }}"method="post" enctype="multipart/form-data">
@csrf
@include('productos.form');

</form>