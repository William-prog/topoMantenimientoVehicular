<form action="{{ url('/registroReporteActividades') }}" method="post">
    @csrf
    @include('registroReporteActividades.form', ['modo'=>'Registrar']);
</form>
