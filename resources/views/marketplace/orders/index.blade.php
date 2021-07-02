@extends('guest/marketplace.layouts.marketplacedashboard')
@section('css')
<link rel="stylesheet" href="{{asset('market/stylesheets/jquery.dataTables.min.css')}}">
@stop
@section('marketplacedashboardcontent')

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="bg-gray-200">
	<div class="bg-gray-200 p-4 shadow text-2xl text-white">
		<h3 class="font-bold pl-2 text-black">Orders</h3> </div>
</div>

<div class="w-full p-2">
	<div class="  ">
		<table class="overflow-x" id="myTable">
			<thead class="text-black text-center">
				<tr>
					<th class=" text-sm">ID</th>
					<th class="  text-sm">User</th>
					<th class=" text-sm">Quantity</th>
					<th class=" text-sm">Total Amount</th>
					<th class=" text-sm">Date</th>
					<th class=" text-sm">Paid</th>
					<th class=" text-sm">Status</th>
					<th class=" text-sm">Action</th>
				</tr>
			</thead>
			<tbody class=" text-center">
			@php $i = 0; @endphp
			@foreach($items as $key => $item)
				<tr class="">
					<td class="border border-current">{{++ $i }}</td>
					<td class="border border-current">{{$item->customer->customer_name ?? ''}}</td>
					<td class="border border-current">{{$item->total_qty ?? ''}}</td>
					<td class="border border-current">{{$item->total_amount ?? ''}}</td>
					<td class="border border-current">{{$item->created_at ?? ''}}</td>
					<td class="border border-current">
						@if($item->status == 1)
						<p class="bg-green-400 text-white rounded">Yes</p>
						@else
						<p class="bg-red-600 text-white rounded">No</p>
						@endif
					</td>
					<td class="border border-current">
					@if($item->status == 0)
						<p class="bg-blue-700 text-white rounded-full">Approved</p>
					@else
						<p class="bg-yellow-700 text-white rounded-full">Pending</p>
					@endif
					</td>
					<td class="border  border-current">
						<div class="flex justiy-between gap-2"> <div x-data="{ showModal : false }">
        <!-- Button -->
        <button @click="showModal = !showModal" class="rounded bg-yellow-700 text-white  h-6 w-20 ">Details</button>

        <!-- Modal Background -->
        <div x-show="showModal" class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
            <!-- Modal -->
            <div x-show="showModal" class="bg-white rounded-xl shadow-2xl p-6 sm:w-8/12 mx-10" @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                <!-- Title -->
                <span class="font-bold block text-2xl mb-3"> </span>
                <!-- Some beer 🍺 -->
				<table class="min-w-full  overflow-x" id="myTable">
			<thead class="text-black text-center">
				<tr>
					<th class=" text-sm">Category Name</th>
					<th class=" text-sm">Action</th>
				</tr>
			</thead>
			<tbody class=" text-left text-2xl">
			
					<tr class="border-gray-500 ">
					<td class="border border-current">Customer name</td>
						<td class=" border border-current ">
							{{$item->customer->customer_name ?? ''}}
						</td>
					</tr>
				<tr class="border-gray-500 ">
					<td class="border border-current">Customer Email</td>
						<td class=" border border-current ">
							{{$item->customer->customer_email  ?? ''}}
						</td>
			    </tr>

				<tr class="border-gray-500 ">
					<td class="border border-current">Customer Phone</td>
						<td class=" border border-current ">
							{{$item->customer->customer_phone_number   ?? ''}}
						</td>
					</tr>

					<tr class="border-gray-500 ">
					<td class="border border-current">Customer Address</td>
						<td class=" border border-current ">
							{{$item->customer->customer_address   ?? ''}}
						</td>
					</tr>	

					<tr class="border-gray-500 ">
					<td class="border border-current">Product Quantity</td>
						<td class=" border border-current ">
							{{$item->total_qty   ?? ''}}
						</td>
					</tr>

					<tr class="border-gray-500 ">
					<td class="border border-current"> Product Total Amount</td>
						<td class=" border border-current ">
							{{$item->total_amount ?? ''}}
						</td>
					</tr>

			
			  
			</tbody>
		</table>
             

                <!-- Buttons -->
                <div class="text-right space-x-5 mt-5">
                    <button @click="showModal = !showModal" class="px-4 py-2 text-sm bg-red-600 rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-black focus:outline-none focus:ring-0 font-bold hover:bg-red-50 focus:bg-indigo-50 focus:text-indigo">Cancel</button>
                    
                </div>
            </div>
        </div>
    </div><a class="rounded bg-blue-600 text-white  h-6 w-full" href="#">Edit</a> </div>
					</td>
				</tr>
			
				@endforeach	
			</tbody>
		</table>
	</div>
</div>
 @endsection
  @section('js')
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{asset('market/javascripts/jquery.dataTables.min.js')}}"></script>
<script>
$(document).ready(function() {
	$('#myTable').DataTable();
});
</script>
 @stop