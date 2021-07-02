@extends('guest/marketplace.layouts.marketplacedashboard')
@section('marketplacedashboardcontent')
<div class="bg-gray-200">
	<div class="bg-gray-200 p-4  text-2xl text-white">
			@include('massage.errormassage')
		<h3 class="font-bold pl-2 text-black">Product</h3> </div>
</div>
<div class="flex flex-wrap">
	<div class="w-full  pl-0 lg:pl-2">
		<div class="leading-loose">
			<form class="p-10 bg-white rounded " action="{{url('admin/marketplace/createproduct')}}" method="POST" enctype='multipart/form-data'>
			 @csrf
				<div class="mt-4">
					<label class="block text-xl text-gray-600" for="productname">Product Name <span class="text-red-700">*</span></label>
					<input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="product_name" name="product_name" type="text" required="" placeholder="Product Name" aria-label="product_name" value="{{old('product_name')}}"> </div>
				<div class=" mt-4  ">
					<label class=" block text-xl text-gray-600" for="product_category_id">Product Category <span class="text-red-700">*</span></label>
					<select id="product_category" name="product_category_id" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" require>
					@foreach($categories as $categorie)
						<option value="{{$categorie->id ?? ''}}">{{$categorie->product_category_name ?? ''}}</option>
					@endforeach
					</select>
				</div>
				<div class="mt-4">
					<label class="block text-xl text-gray-600" for="product_price">Product Price <span class="text-red-700">*</span></label>
					<input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="product_price" name="product_price" type="number" required="" placeholder="Product Price" aria-label="product_price" value="{{old('product_price')}}"> 
				</div>
				<div class="mt-4">
					<label class="block text-xl text-gray-600" for="previous_product_price">Previous Product Price</label>
					<input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="previous_product_price" name="previous_product_price" type="number" required="" placeholder="Product Price" aria-label="previous_product_price" value="{{old('previous_product_price')}}"> 
				</div>
				<div class="mt-4">
					<label class="block text-xl text-gray-600" for="productavailable">Product Available <span class="text-red-700">*</span></label>
					<input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="productavailable" name="productavailable" type="text" required="" placeholder="Product Available" aria-label="productavailable" value="{{old('productavailable')}}"> </div>
				<div class="mt-4">
					<label class="block text-xl text-gray-600" for="productdescription">Product Description</label>
					<textarea name="productdescription" class="h-50 w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"></textarea>
				</div>

					<div class="inline-block mt-2 w-1/3 pr-1">
                        <label class=" block text-xl text-gray-600" for="productpicture">Product Images <span class="text-red-700">*</span></label>
						<span class="text-red-700">Image size 800*600</span> 
						<input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded " 
						id="product_images" name="product_images[]" multiple type="file" accept="image/*" onchange="loadFile(event)" required="" placeholder="" aria-label="product_images" value="{{old('product_images')}}"> 
						<img id="output" class="h-60 w-full" /> 
                    </div>
                   

				

				<div class="mt-10 p-4 w-20 flex gap-2">
					<a class="bg-green-500 w-40 h-10 w-20 px-4  text-white text-center" href="{{route('getproduct')}}">Back</a>

					<button class=" px-4 py-1 te
					xt-white font-light tracking-wider text-white w-20 bg-blue-600 rounded" type="submit">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
 @endsection
 @section('js')
<script>
var loadFile = function(event) {
	var reader = new FileReader();
	reader.onload = function() {
		var output = document.getElementById('output');
		output.src = reader.result;
	};
	reader.readAsDataURL(event.target.files[0]);
};

var loadFile2 = function(event) {
	var reader = new FileReader();
	reader.onload = function() {
		var output = document.getElementById('output2');
		output.src = reader.result;
	};
	reader.readAsDataURL(event.target.files[0]);
};
var loadFile3 = function(event) {
	var reader = new FileReader();
	reader.onload = function() {
		var output = document.getElementById('output3');
		output.src = reader.result;
	};
	reader.readAsDataURL(event.target.files[0]);
};
</script> 
@stop