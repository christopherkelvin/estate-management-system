<link rel="stylesheet" href="/cssfile/sell.css">
<x-navbar />
<div class="all">
    <div class="back">
        <div class="ribon">

        </div>
        <div class="main">
            <h2>
                Edit House Details
            </h2>
            <form action="/buy/{{$estate->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="left">

                    <label for="" class="label">
                        House Location
                    </label>
                    <input type="text" name="Location" value="{{$estate->Location}}" class="input">
                    @error('Location')
                    <p class="error">{{ $message }}</p>
                     @enderror

                    <label for="" class="label">
                        Number of Beds
                    </label>
                    <input type="text" name="Number_of_Beds" value="{{$estate->NumberOfBeds}}" class="input">
                    @error('Number_of_Beds')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <label for="" class="label">
                        Number of Bathrooms
                    </label>
                    <input type="text" name="Number_Of_Bathrooms" value="{{$estate->NumberOfBathrooms}}"  class="input">
                    @error('Number_Of_Bathrooms')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <label for="" class="label">
                        Selling Price
                    </label>
                    <input type="text" name="price" class="input" value="{{$estate->SellingPrice}}">
                    @error('price')
                    <p class="error">{{ $message }}</p>

                    @enderror

                    <label for="" class="label">
                        Cartegory
                    </label>
                    <input type="text" class="input" name="cartegory" value="{{$estate->Cartegory}}">
                    @error('cartegory')
                    <p class="error">{{ $message }}</p>

                    @enderror
                    <label for="" class="label">
                        House Photo
                    </label>
                    <input type="file" class="input" name="photo" value="{{$estate->photo}}">
                    <img src="{{ asset($estate->photo) }}" class="kidokezo" alt="">
                    @error('photo')
                    <p class="error">{{ $message }}</p>

                    @enderror
                     {{-- <Label class="label">
                        Status</Label>
                    <input type="text" class="input" name="status" value="{{$estate->}}">
                    @error('status')
                    <p class="error">{{ $message }}</p>

                    @enderror --}}


                    <Label class="label">
                        Description
                    </Label>
                    <input type="text" class="input" name="Description" value="{{$estate->Description}}">
                    @error('Description')

                         <p class="error">{{ $message }}</p>

                    @enderror

                    <Label class="label">
                        Area in squared meters</Label>
                    <input type="text" class="input" name="area" value="{{$estate->Area}}">
                    @error('area')
                    <p class="error">{{ $message }}</p>

                    @enderror
                </div>

                <input type="submit" class="button" value="Post">
            </form>
        </div>
    </div>

</div>

</div>
</body>

</html>
