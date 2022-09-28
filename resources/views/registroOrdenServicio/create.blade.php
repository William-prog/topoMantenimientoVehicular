<form action="{{ url('/registroOrdenServicio') }}" method="post">
    @csrf
    @include('registroOrdenServicio.formNuevaOrden', ['modo'=>'Registrar']);
</form>
