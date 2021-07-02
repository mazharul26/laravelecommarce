@extends('guest/marketplace.layouts.marketplacedashboard')

@section('css')
<link rel="stylesheet" href="{{asset('market/stylesheets/jquery.dataTables.min.css')}}">
@stop
@section('marketplacedashboardcontent')
<div class="bg-gray-200">
	<div class="bg-gray-200 p-4  text-2xl text-white ">
	   @include('massage.flashmassage')
		<div class="flex justify-between">
			<h3 class="font-bold pl-2 text-black">Product</h3> <a class="bg-green-400 rounded p-2 text-white" href="{{route('createproduct')}}"><h3 class="font-bold pl-2 ">Add</h3></a> </div>
	</div>
</div>
<div class="w-full p-2">
	<div class="  ">
		<table class="min-w-full  overflow-x" id="myTable">
			<thead class="text-black text-center">
				<tr>
					<th class=" text-sm">ID</th>
					<th class=" text-sm">Product Name</th>
					<th class=" text-sm">Product Category</th>
					<th class=" text-sm">Product Price</th>
					<th class=" text-sm">Previous Product Price</th>
					<th class=" text-sm">Product Available</th>
					<th class=" text-sm">Product Description</th>
					<th class=" text-sm">Action</th>
				</tr>
			</thead>
			<tbody class=" text-center">
			@php $i= 0; @endphp
			@foreach($items as $item)
				<tr class="">
					<td class=" border border-current">{{++$i}}</td>
					<td class=" border border-current">{{$item->product_name ?? ''}}</td>
					<td class=" border border-current">{{$item->category->product_category_name ?? ''}}</td>
					<td class=" border border-current">{{$item->product_price ?? ''}}</td>
					<td class=" border border-current">{{$item->previous_product_price ?? ''}}</td>
					<td class=" border border-current">{{$item->productavailable ?? ''}}</td>
					<td class="h-50 w-6 text-left  border border-current">{{$item->productdescription ?? ''}} </td>
					<td class="  border border-current">
					<div class="flex justiy-between gap-2">
					<a class="rounded bg-blue-600 text-white  h-6 w-full text-sm px-2" href="{{url('admin/marketplace/product/edit',$item->id)}}">Edit</a>
					 <a class="rounded bg-red-700 text-white  h-6 w-full text-sm px-2" href="#">Delete</a> 
					
					 </div>
					</td>
				</tr>
			@endforeach	
			</tbody>
		</table>
	</div>
</div>


 @endsection
 @section('js')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('market/javascripts/jquery.dataTables.min.js')}}"></script>
<script>
$(document).ready(function() {
	$('#myTable').DataTable();
});
</script>
 @stop