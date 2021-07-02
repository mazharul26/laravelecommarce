@extends('guest/marketplace.layouts.marketplacedashboard')
@section('marketplacedashboardcontent')
<div class="bg-gray-200">
	<div class="bg-gray-200 p-4 shadow text-2xl text-white">
		<h3 class="font-bold pl-2 text-black">Category Update</h3> </div>
</div>
<div class="bg-gray-200">
	<form action="{{url('admin/marketplace/productcategory/update',$item->id)}}" method="POST" enctype="multipart/form-data" class="book_form"> @csrf
		<div class="flex p-4">
			<label class="p-2">Category</label>
			<input class="w-full" type="text" name="product_category_name" 
			value="{{$item->product_category_name ?? ''}}"> 
		</div>
		<div class="p-4 flex gap-1">
			<a class="bg-green-500 w-40 h-10 ml-20 p-2 text-white-1000 text-center" href="{{route('getproductcategory')}}">Back</a>
			<button class="bg-black w-40 h-10  text-white" type="submit">Update Category</button>
		</div>
	</form>
</div>
 @endsection
