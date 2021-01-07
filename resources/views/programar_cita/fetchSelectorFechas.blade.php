<select id="filtro-fecha" name="filtro-fecha" class="dropDown btn-form" required>
    <option selected disabled value="">Fecha</option>
    @foreach($horarios as $horario)
        <option id="hor_{{$horario->hor_id}}" value="{{$horario->hor_fecha}}">
            {{ $horario->hor_fecha }}
        </option> 
    @endforeach
</select>