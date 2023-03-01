<option value="">---</option>
@foreach ($arrWards as $ward)
    <option value="{{$ward->ward_id}}">{{$ward->name}}</option>
@endforeach