<select id="filtro-horario" name="filtro-horario" class="dropDown btn-form" required>
    <option selected disabled value="">Horario</option>
    @foreach($horarios as $horario)
        <option id="hor_{{$horario->hor_id}}" value="{{$horario->hor_id}}">
            {{ $horario->hor_ini }} - {{ $horario->hor_fin }}
        </option> 
    @endforeach
</select>