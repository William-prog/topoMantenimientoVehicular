<form action="{{ url('/registroOrdenServicio/'.$registroOrdenServicio->id ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('registroOrdenServicio.formCerrarOrden', ['modo'=>'Guardar cambios']);
</form>