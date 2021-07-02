<div class="bg-white">
    <div class="flex flex-wrap mx-2 sm:mx-10">
        <div class="flex justify-cender">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block p-2 focus:outline-none text-xs hover:text-red-600 transition duration-300 ease-in-out">
                    All Medicines<i class="fas fa-chevron-down text-xs ml-2"></i>
                </button>
                
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                
                <div x-show="dropdownOpen" class="absolute left-0py-2 w-64 shadow-xl z-20">
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                </div>
            </div>
        </div>
        <div class="flex justify-cender">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block p-2 focus:outline-none text-xs hover:text-red-600 transition duration-300 ease-in-out">
                    COVID Test & Prevention<i class="fas fa-chevron-down text-xs ml-2"></i>
                </button>
                
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                
                <div x-show="dropdownOpen" class="absolute left-0py-2 w-64 shadow-xl z-20">
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                </div>
            </div>
        </div>
        <div class="flex justify-cender">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block p-2 focus:outline-none text-xs hover:text-red-600 transition duration-300 ease-in-out">
                    Featured<i class="fas fa-chevron-down text-xs ml-2"></i>
                </button>
                
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                
                <div x-show="dropdownOpen" class="absolute left-0py-2 w-64 shadow-xl z-20">
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                </div>
            </div>
        </div>
        <div class="flex justify-cender">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block p-2 focus:outline-none text-xs hover:text-red-600 transition duration-300 ease-in-out">
                    Fitness & Supplements<i class="fas fa-chevron-down text-xs ml-2"></i>
                </button>
                
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                
                <div x-show="dropdownOpen" class="absolute left-0py-2 w-64 shadow-xl z-20">
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                </div>
            </div>
        </div>
        <div class="flex justify-cender">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block p-2 focus:outline-none text-xs hover:text-red-600 transition duration-300 ease-in-out">
                    Diabetes<i class="fas fa-chevron-down text-xs ml-2"></i>
                </button>
                
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                
                <div x-show="dropdownOpen" class="absolute left-0py-2 w-64 shadow-xl z-20">
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                </div>
            </div>
        </div>
        <div class="flex justify-cender">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block p-2 focus:outline-none text-xs hover:text-red-600 transition duration-300 ease-in-out">
                    Healthcare Devices<i class="fas fa-chevron-down text-xs ml-2"></i>
                </button>
                
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                
                <div x-show="dropdownOpen" class="absolute left-0py-2 w-64 shadow-xl z-20">
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                </div>
            </div>
        </div>
        <div class="flex justify-cender">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block p-2 focus:outline-none text-xs hover:text-red-600 transition duration-300 ease-in-out">
                    Personal Care<i class="fas fa-chevron-down text-xs ml-2"></i>
                </button>
                
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                
                <div x-show="dropdownOpen" class="absolute left-0py-2 w-64 shadow-xl z-20">
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                </div>
            </div>
        </div>
        <div class="flex justify-cender">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block p-2 focus:outline-none text-xs hover:text-red-600 transition duration-300 ease-in-out">
                    Health Conditions<i class="fas fa-chevron-down text-xs ml-2"></i>
                </button>
                
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                
                <div x-show="dropdownOpen" class="absolute left-0py-2 w-64 shadow-xl z-20">
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                </div>
            </div>
        </div>
        <div class="flex justify-cender">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block p-2 focus:outline-none text-xs hover:text-red-600 transition duration-300 ease-in-out">
                    Ayurveda Products<i class="fas fa-chevron-down text-xs ml-2"></i>
                </button>
                
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                
                <div x-show="dropdownOpen" class="absolute left-0py-2 w-64 shadow-xl z-20">
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                </div>
            </div>
        </div>
        <div class="flex justify-cender">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block p-2 focus:outline-none text-xs hover:text-red-600 transition duration-300 ease-in-out">
                    Homeopathy<i class="fas fa-chevron-down text-xs ml-2"></i>
                </button>
                
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                
                <div x-show="dropdownOpen" class="absolute left-0py-2 w-64 shadow-xl z-20">
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                    <a href="#" class="block px-4 py-2 text-xs capitalize text-gray-700 bg-white hover:text-white hover:text-red-600 transition duration-300 ease-in-out">Medicines by Therapeutic Class</a>
                </div>
            </div>
        </div>
    </div>
</div>