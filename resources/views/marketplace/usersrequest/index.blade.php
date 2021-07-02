@extends('guest/marketplace.layouts.marketplacedashboard')
@section('marketplacedashboardcontent')
<div class="bg-gray-200">
	<div class="bg-gray-200 p-4  text-2xl text-white">
		@include('massage.flashmassage')
		<h3 class="font-bold pl-2 text-black">Pending</h3> 
	</div>
</div>
<div class="w-full p-2">
	<div class="">
		<table class="min-w-full  overflow-x" id="myTable">
			<thead class="text-black text-center">
				<tr>
					<th class="border border-current  text-sm">User</th>
					<th class=" border border-current text-sm">Name</th>
					<th class="border border-current text-sm">Phone</th>
					<th class="border border-current text-sm">Address</th>
					<th class="border border-current text-sm">NID</th>
					<th class="border border-current text-sm">Request at</th>
					<th class="border border-current text-sm">Action</th>
				</tr>
			</thead>
			<tbody class="text-left ">
				@foreach ($items as $item)
				<tr class="">
					<td class=" border border-current">{{$item->user->name ?? ''}}</td>
					<td class=" border border-current">{{$item->name ?? ''}}</td>
					<td class=" border border-current">{{$item->phone_no ?? ''}}</td>
					<td class=" border border-current">{{$item->address ?? ''}}</td>
					<td class=" border border-current">{{$item->nid_no ?? ''}}</td>
					<td class=" border border-current">{{date_format($item->created_at,'Y-m-d')}}</td>
					<td class="  border border-current text-center ">
						<div class="flex justiy-between gap-2"> <a class="rounded bg-yellow-700 text-white  h-6 w-full" href="#">Details</a>
							 <a class="rounded bg-red-600 text-white  h-6 w-full" href="{{url('admin/marketplace/users/users-request/edit',$item->id)}}">Pending</a> </div>
					</td>
				</tr>
				<div id="modal"
    class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-blue-500 bg-opacity-50 transform scale-0 transition-transform duration-300">
    <!-- Modal content -->
    <div class="bg-white w-1/2 h-1/2 p-12"> 
        <!--Close modal button-->
        <button id="closebutton" type="button" class="focus:outline-none">
            <!-- Hero icon - close button -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
        <!-- Test content -->
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Minus placeat maiores repudiandae, error perferendis inventore 
            aspernatur voluptatum omnis sint debitis!
        </p>
    </div>
</div>
			  @endforeach
			</tbody>
		</table>
	</div>
</div>
<div class="bg-gray-200">
	<div class="bg-gray-200 p-4  text-2xl text-white">
		<h3 class="font-bold pl-2 text-black">Authorize</h3> </div>
</div>
<div class="w-full p-2">
	<div class="  ">
		<table class="min-w-full  " id="myTable">
			<thead class="text-black text-center">
				<tr>
					<th class=" border border-current  text-sm">User</th>
					<th class=" border border-current text-sm">Name</th>
					<th class=" border border-current text-sm">Phone</th>
					<th class=" border border-current text-sm">Address</th>
					<th class=" border border-current text-sm">NID</th>
					<th class=" border border-current text-sm">Request at</th>
					<th class=" border border-current text-sm">Action</th>
				</tr>
			</thead>
			<tbody class=" text-left ">
				@foreach ($userrequests as $userrequest)
				<tr class="">
					<td class=" border border-current">{{$userrequest->user->name ?? ''}}</td>
					<td class=" border border-current">{{$userrequest->name ?? ''}}</td>
					<td class=" border border-current">{{$userrequest->phone_no ?? ''}}</td>
					<td class=" border border-current">{{$userrequest->address ?? ''}}</td>
					<td class=" border border-current">{{$userrequest->nid_no ?? ''}}</td>
					<td class=" border border-current">{{date_format($userrequest->created_at,'Y-m-d')}}</td>
					<td class="  border border-current text-center ">
						<div class="flex justiy-between gap-2"> <a class="rounded bg-yellow-700 text-white  h-6 w-full" href="#">Details</a> <a class="rounded bg-green-700 text-white  h-6 w-full" href="{{url('admin/marketplace/users/users-request/edit',$userrequest->id)}}">Approved</a> </div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<script> 
    const button = document.getElementById('buttonmodal')
    const closebutton = document.getElementById('closebutton')
    const modal = document.getElementById('modal')

    button.addEventListener('click',()=>modal.classList.add('scale-100'))
    closebutton.addEventListener('click',()=>modal.classList.remove('scale-100'))
</script>
 @endsection 
