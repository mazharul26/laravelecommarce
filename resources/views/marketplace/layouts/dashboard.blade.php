@extends('marketplace.layouts.masters')
@section('guestcontent')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    <h3 class="text-gray-700 text-3xl font-medium">Dashboard</h3>
    
                    <div class="mt-4">
                        <div class="flex flex-wrap -mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/4">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full bg-opacity-75">
                                        <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">8,282</h4>
                                        <div class="text-gray-500">Total Revenue</div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/4 sm:mt-0">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                                        <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">200,521</h4>
                                        <div class="text-gray-500">Total Users</div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/4 xl:mt-0">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full  bg-opacity-75">
                                        <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                                        <div class="text-gray-500">New Users</div>
                                    </div>
                                </div>
                            </div>


                            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/4 xl:mt-0">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full  bg-opacity-75">
                                        <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                                        <div class="text-gray-500"> Server Uptime</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
    
                   
                   
                </div>
            </main>
@endsection