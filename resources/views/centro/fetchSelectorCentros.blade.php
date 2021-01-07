<select id="filtro-centro" class="dropDown2" required>
    <option selected disabled value="">Centro de Salud</option>
        @foreach($centros as $centro)
            <option id="hos_{{$centro->hos_id}}" value="{{$centro->hos_id}}">
                {{ $centro->hos_name }}
            </option> 
        @endforeach
</select>