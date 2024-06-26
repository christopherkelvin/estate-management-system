<link rel="stylesheet" href="/cssfile/sell.css">
<x-navbar />
<div class="all">
    <div class="back">
        <div class="ribon">
        </div>
        <div class="main">
            <h2>
                House Details
            </h2>
            <form class="form1" action="/sell" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="left">

                    <label for="" class="label">
                        House Location
                    </label>
                    <input type="text" name="Location" value="{{old('Location')}}" class="input">
                    @error('Location')
                    <p class="error">{{ $message }}</p>
                     @enderror

                    <label for="" class="label">
                        Number of Beds
                    </label>
                    <input type="text" name="Number_of_Beds" value="{{old('Number_of_Beds')}}" class="input">
                    @error('Number_of_Beds')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <label for="" class="label">
                        Number of Bathrooms
                    </label>
                    <input type="text" name="Number_Of_Bathrooms" value="{{old('Number_Of_Bathrooms')}}"  class="input">
                    @error('Number_Of_Bathrooms')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <label for="" class="label">
                        Selling Price
                    </label>
                    <input type="text" name="price" class="input" value="{{old('price')}}">
                    @error('price')
                    <p class="error">{{ $message }}</p>

                    @enderror

                    <label for="" class="label">
                        Cartegory
                    </label>
                    <input type="text" class="input" name="cartegory" value="{{old('cartegory')}}">
                    @error('cartegory')
                    <p class="error">{{ $message }}</p>

                    @enderror
                    <label for="" class="label">
                        House Photo
                    </label>
                    <input type="file" class="input" name="photo" value="{{old('photo')}}">
                    @error('photo')
                    <p class="error">{{ $message }}</p>

                    @enderror
                     <Label class="label">
                        Status</Label>
                    <input type="text" class="input" name="status" value="{{old('status')}}">
                    @error('status')
                    <p class="error">{{ $message }}</p>

                    @enderror
                    <Label class="label">
                        Description
                    </Label>
                    <input type="text" class="input" name="Description" value="{{old('Description')}}">
                    @error('Description')

                         <p class="error">{{ $message }}</p>

                    @enderror

                    <Label class="label">
                        Area in squared meters</Label>
                    <input type="text" class="input" name="area" value="{{old('area')}}">
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
