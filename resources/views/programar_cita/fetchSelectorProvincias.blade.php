<select id="filtro-provincia" name="filtro-provincia" class="dropDown btn-form" required>
    <option selected disabled value="">Provincia</option>
    @foreach($provincias as $provincia)
        <option id="prov_{{$provincia->prov_id}}" value="{{$provincia->prov_id}}">
            {{ $provincia->prov_name }}
        </option>
    @endforeach
</select>