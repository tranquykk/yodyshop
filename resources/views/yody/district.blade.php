<option value="">---</option>
@php
    // var_dump($arrDistricts);
@endphp
@foreach ($arrDistricts as $district)
    <option value="{{$district->district_id}}">{{$district->name}}</option>
@endforeach