<x-navbar />
<link rel="stylesheet" href="{{ asset('cssfile/background.css') }}">
<main>
    <x-hero />
    <section class="sshow">
        <div class="head">
                <p>Available Rooms</p>
        </div>
        <hr>
        <div class="kid">
            <div class="full">
                @unless (count($estates) == 0)
                    @foreach ($estates as $estate)
                        <a href="buy/{{ $estate->id }}">
                            <div class="child">
                                <img src="{{ asset($estate->photo) }}" class="kidokezo" alt="">
                                <div class="overlay">
                                    <p class="location">Location: {{ $estate->Location }}</p>
                                    <p class="price">Price: Tsh{{ number_format($estate->SellingPrice) }}</p>
                                    <p class="area">Area: {{ $estate->Area }} sq Meters</p>
                                    <span class="bed">Beds: {{ $estate->NumberOfBeds }}</span>
                                    <span class="bed">Baths: {{ $estate->NumberOfBathrooms }}</span>
                                </div>
                            </div>

                        </a>
                    @endforeach
                @else
                    <p class="non">No house in the market currently</p>
                @endunless
                <div class="bar">
                    {{ $estates->links() }}
                </div>
            </div>
        </div>
        

    </section>
    <section class="pop-up">
        <div class="back-pop">

        </div>
    </section>
    <section class="search-options">
        <div class="option-list">
            <div class="option">
                <a href="#">
                    <img src="images/rent.png" alt="Option 1" />
                    <h3>Finance a Home</h3>
                    <p> Aims to promote a property for sale and attract potential buyers
                        by showcasing its unique features.</p>
                </a>
                <button class="botton">Finance Now</button>
            </div>
            <div class="option">
                <a href="#">
                    <img src="/images/brent.png" alt="Option 2" />
                    <h3>Rent a Home</h3>
                    <p> Aims to promote a property for sale and attract potential buyers
                        by showcasing its unique features.</p>
                </a>
                <button class="bot">Rent Now</button>
            </div>
            <div class="option">
                <a href="#">
                    <img src="/images/sell1.png" alt="Option 3" />
                    <h3>Sell a Home</h3>
                    <p> Aims to promote a property for sale and attract potential buyers
                        by showcasing its unique features.</p>
                </a>
                <button class="botton">Sell Now</button>
            </div>
        </div>
    </section>
</main>

<x-footer />

