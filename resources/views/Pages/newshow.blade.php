<x-navbar />
<link rel="stylesheet" href="{{ asset('cssfile/newshow.css') }}">
<a href="/buy" class=""><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="margin">
    <div class=" in">
        <div class="out">
            <img class=" image" src="{{ asset($estate->photo) }}" alt="">
            <div class="content">
                <h3 class=" Hname">Location: {{ $estate->Location }}</h3>
                <div class="location">Beds: {{ $estate->NumberOfBeds }} Bathrooms: {{ $estate->NumberOfBathrooms }}</div>
                <div class=" company">Price: {{ number_format($estate->SellingPrice) }} Tsh</div>

            </div>
            <div class="disk">
                <h3 class="description">House Description</h3>
                <p class=" text">
                    {{ $estate->Description }}
                </p>
                <a href="/buy/{{ $estate->id }}/edit" class="buttons edit">EDIT</a>
                <a href="/buy/{{ $estate->id }}/delete" class="buttons delete">DELETE</a>
                <a href="/buy/{{ $estate->id }}/rent"class="buttons rent">RENT</a>

            </div>
        </div>

    </div>
</div>

</body>

</html>
