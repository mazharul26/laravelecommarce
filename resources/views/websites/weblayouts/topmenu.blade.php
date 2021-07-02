<div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 border-b">
    <div x-data="{ open: false }" class="flex flex-col mx-auto md:items-center md:justify-between md:flex-row md:px-6">
        <div class="px-2 sm:px-4 flex flex-row items-center justify-between">
            <a href="#"><img src="{{asset('websites/img/da93313e-8d98-11eb-b7ca-02186d684e20.png')}}" alt="1mg" class="w-24"></a>
            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex md:flex flex-col md:flex-row flex-grow pb-4 md:pb-0 hidden justify-between md:ml-12 px-2">
            <ul class="w-full md:w-3/5 flex flex-col md:flex-row">
                <li><a class="tracking-tighter uppercase px-4 py-2 mt-2 text-base font-bold hover:text-red-400 transition duration-300 ease-in-out" href="#">Medicines</a></li>
                <li><a class="tracking-tighter uppercase px-4 py-2 mt-2 text-base font-bold hover:text-red-400 transition duration-300 ease-in-out" href="#">Lab Tests</a></li>
                <li><a class="tracking-tighter uppercase px-4 py-2 mt-2 text-base font-bold hover:text-red-400 transition duration-300 ease-in-out" href="#">Ask Doctor</a></li>
                <li><a class="tracking-tighter uppercase px-4 py-2 mt-2 text-base font-bold hover:text-red-400 transition duration-300 ease-in-out" href="#">COVID-19</a></li>
                <li><a class="tracking-tighter uppercase px-4 py-2 mt-2 text-base font-bold hover:text-red-400 transition duration-300 ease-in-out" href="#">Ayurveda</a></li>
            </ul>
            <ul class="w-full md:w-2/5 pt-3 md:pt-0 flex flex-col md:flex-row md:justify-end">
                <li>
                    <a class="pl-4 py-2 mt-2 text-xs font-semibold hover:text-red-400" href="#">Login | </a>
                    <a class="py-2 mt-2 text-xs font-semibold hover:text-red-400" href="#">Sign Up</a>
                </li>
                <li><a class="px-4 py-2 mt-2 text-xs font-semibold hover:text-red-400" href="#">Offers</a></li>
                <li><a class="px-4 py-2 mt-2 text-lg font-semibold hover:text-red-400" href="#"><i class="fas fa-shopping-cart"></i></a></li>
                <li><a class="px-4 py-2 mt-2 text-xs font-semibold hover:text-red-400" href="#">Need help?</a></li>
            </ul>
        </nav>
    </div>
</div>