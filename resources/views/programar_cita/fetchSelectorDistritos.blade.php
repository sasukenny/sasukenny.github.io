<select id="filtro-distrito" name="filtro-distrito" class="dropDown btn-form" required>
    <option selected disabled value="">Distrito</option>
    @foreach($distritos as $distrito)
        <option id="dist_{{$distrito->dist_id}}" value="{{$distrito->dist_id}}">
            {{ $distrito->dist_name }}
        </option>
    @endforeach
</select>