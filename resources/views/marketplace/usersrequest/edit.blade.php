@extends('guest/marketplace.layouts.marketplacedashboard')
@section('marketplacedashboardcontent')
<div class="bg-gray-200">
	<div class="bg-gray-200 p-4  text-2xl text-white">
			@include('massage.flashmassage')
			@include('massage.errormassage')
		<h3 class="font-bold pl-2 text-black">User Request</h3> </div>
</div>
<div class="flex flex-wrap">
	<div class="w-full  pl-0 lg:pl-2">
		<div class="leading-loose">
			<form class="p-10 bg-white rounded " action="{{url('/admin/marketplace/users/users-request/update',$item->id)}}" method="POST" enctype='multipart/form-data'>
			 @csrf
				<div class="mt-4">
					<label class="block text-xl text-gray-600" for="productname">User Name <span class="text-red-700">*</span></label>
					<input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="User Name" aria-label="name" value="{{$item->name ?? ''}}"> </div>
			
				<div class="mt-4">
					<label class="block text-xl text-gray-600" for="phone_no">Phone Number <span class="text-red-700">*</span></label>
					<input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="phone_no" name="phone_no" type="text" required="" placeholder="Phone Number" aria-label="phone_no" value="{{$item->phone_no ?? ''}}"> 
				</div>
				<div class="mt-4">
					<label class="block text-xl text-gray-600" for="nid_no">User NID Number</label>
					<input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="nid_no" name="nid_no" type="text" required="" placeholder="User NID Number" aria-label="nid_no" value="{{$item->nid_no ?? ''}}"> 
				</div>
				<div class="mt-4">
					<label class="block text-xl text-gray-600" for="address">Addres<span class="text-red-700">*</span></label>
					<input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="address" name="address" type="text" required="" placeholder="Addres" aria-label="address" value="{{$item->address ?? ''}}"> 
				</div>
				<div class="mt-4">
					<label class="block text-xl text-gray-600" for="address">Status<span class="text-red-700">*</span></label>
					<select name="status" id="" class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded">
						<option value="0"{{$item->status == 0 ? "Selected": ''}}>Pending</option>
						<option value="1"{{$item->status== 1 ? "Selected": ''}}>Approved</option>

					</select>
				</div>

				<div class="mt-10 p-4 w-20 flex gap-2">
					<a class="bg-green-500 w-40 h-10 w-26 px-4  text-white text-center" href="{{route('usersrequest')}}">Back</a>

					<button class=" px-2 py-1 te
					xt-white font-light tracking-wider text-white w-28 bg-blue-600 rounded" type="submit">Approved</button>
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



</script> 
@stop