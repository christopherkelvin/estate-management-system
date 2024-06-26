<link rel="stylesheet" href="{{ asset('cssfile/buy.css') }}">
<x-navbar />
<h1 class="">REAL eSTATE</h1>
<div class="buy1">
    @if (count($estate)== 0)
    <p>
        No houses available for sell
    </p>

    @endif

    @foreach ($estate as $estate)
        <div class="buy2">
            <a href="/buy/{id}">
                <img src="{{ asset($estate->photo) }}"  class="img10">

                <div class="box">
                    <span class="bold">Tsh {{ number_format($estate->SellingPrice) }}</span>
                    <span class=" block ">{{$estate->NumberOfBeds}} beds | {{$estate->NumberOfBathrooms}} bathrooms</span>
                    <span class="block"> {{$estate->Area}} sq Meters</span>
                    <span class=" block">{{$estate->Location}}</span>
                    <span class=" block text">Cartegory  {{$estate->Cartegory}}</span>
                </div>
            </a>
        </div>
        @endforeach



</div>
<div>
    <div>

    </div>
</div>


</body>

</html>
