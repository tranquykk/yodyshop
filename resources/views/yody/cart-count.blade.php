@php
    $totalQuantity = 0;
    $totalAll = 0;
@endphp
@if ($newCart != null)
    @foreach ($newCart as $key => $item)
        @php
            $totalQuantity += $item['quantity'];
        @endphp
    @endforeach
    {{$totalQuantity}}
@endif