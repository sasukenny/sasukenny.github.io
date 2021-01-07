<select id="filtro-distrito" class="dropDown2" required>
    <option selected disabled value="">Distrito</option>
        @foreach($distritos as $distrito)
            <option id="dist_{{$distrito->dist_id}}" value="{{$distrito->dist_id}}">
                {{ $distrito->dist_name }}
            </option> 
        @endforeach
</select>