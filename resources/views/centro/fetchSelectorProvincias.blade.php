<select id="filtro-provincia" class="dropDown2" required>
    <option selected value="">Provincia</option>
        @foreach($provincias as $provincia)
            <option id="prov_{{$provincia->prov_id}}" value="{{$provincia->prov_id}}">
                {{ $provincia->prov_name }}
            </option> 
        @endforeach
</select>