<form action="{{ url('/registroReporteActividades/'.$registroReporteActividades->id ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('registroReporteActividades.form', ['modo'=>'Guardar cambios']);
</form>