<select id="filtro-centro" name="filtro-centro" class="dropDown btn-form" required>
    <option selected disabled value="">Centro</option>
    @foreach($centros as $centro)
        <option id="hos_{{$centro->hos_id}}" value="{{$centro->hos_id}}">
            {{ $centro->hos_name }}
        </option>
    @endforeach
</select>