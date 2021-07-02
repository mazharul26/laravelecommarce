@extends('guest/marketplace.layouts.marketplacedashboard')

@section('css')
<link rel="stylesheet" href="{{asset('market/stylesheets/jquery.dataTables.min.css')}}">
@stop
@section('marketplacedashboardcontent')
<div class="bg-gray-200">
	<div class="bg-gray-200 p-4  text-2xl text-white ">
	            <div class="">
				@include('massage.flashmassage')
				</div>
		<div class="flex justify-between"> 
			<h3 class="font-bold pl-2 text-black">Product Category</h3> <a class="bg-green-400 rounded p-2 text-white" href="{{route('createproductcategory')}}"><h3 class="font-bold pl-2 ">Add</h3></a> </div>
	</div>
</div>
<div class="w-full p-2">
	<div class="  ">
		<table class="min-w-full  overflow-x" id="myTable">
			<thead class="text-black text-center">
				<tr>
				
					<th class=" text-sm">Category Name</th>
					<th class=" text-sm">Action</th>
				</tr>
			</thead>
			<tbody class=" text-center">
				@foreach($items as $item)
					<tr class="border-2 border-gray-500 ">
					<td class="h-50 border border-current">{{$item->product_category_name ?? ''}} </td>
						<td class=" border border-current ">
							<div class="flex justiy-between gap-2 "> 
							<a class="rounded bg-blue-600 text-white w-1/2 h-6  text-sm px-2" href="{{url('admin/marketplace/productcategory/edit',$item->id)}}">Edit</a>
							<a  class="rounded bg-red-700 text-white w-1/2 h-6  text-sm px-2" title="Delete" onclick="if(confirm('Are you sure to delete')){
								event.preventDefault();
								document.getElementById('delete-form-{{ $item->id }}').submit();       
							}else {
								event.preventDefault();
							}">Delete</a>  
							<form action="{{ url('admin/marketplace/productcategory/delete',$item->id)}}" id="delete-form-{{ $item->id }}" method="POST">
													@csrf
													@method("DELETE")
							</form>  
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