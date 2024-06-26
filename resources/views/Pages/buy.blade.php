<link rel="stylesheet" href="{{ asset('cssfile/buy.css') }}">
<x-navbar />
<h1 class="">REAL eSTATE</h1>
<div class="form">
    <form action="/buy" method="GET">
        <div class="cont">
            <input class="input" id="input" type="text" placeholder="" oninput="checkInput()">
            <label for="input">Search Now</label>
            <input class="search" type="submit">
        </div>

    </form>
</div>
<div class="buy1">
    @if (count($estate) == 0)
        <p>
            No houses available for sell
        </p>
    @endif

    @foreach ($estate as $estate)
        <div class="buy2">
            <a href="buy/{{ $estate->id }}">
                <img src="{{ asset($estate->photo) }}" class="img10">

                <div class="overlay">
                    <span class=" block">Location: {{ $estate->Location }}</span>
                    <span class="bold">Price: Tsh{{ number_format($estate->SellingPrice) }}</span>
                    <span class=" block ">{{ $estate->NumberOfBeds }} beds | {{ $estate->NumberOfBathrooms }}
                        bathrooms</span>
                    <span class="block">Area: {{ $estate->Area }} sq Meters</span>
                    <span class=" block text">Cartegory: {{ $estate->Cartegory }}</span>
                </div>
            </a>
        </div>
    @endforeach



</div>
</body>
<script>
    function checkInput() {
        var input = document.getElementById("input");
        var search = document.getElementsByClassName("search")[0];

        if (input.value !== "") {
            search.classList.add("valid");
        } else {
            search.classList.remove("valid");
        }
    }
</script>

</html>
