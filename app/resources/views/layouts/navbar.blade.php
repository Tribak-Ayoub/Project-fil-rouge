<nav x-data="{ open: false }" :class="{'left-64': sidebarOpen, 'left-16': !sidebarOpen}"  class="bg-white border-b border-gray-100 fixed top-0 right-0 z-50 h-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Settings Dropdown -->
            <div class="flex items-center ml-auto space-x-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-gray-500 bg-white hover:text-gray-700">
                            <div>{{ Auth::user()->name }}</div>
                            <svg class="fill-current h-4 w-4 ms-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>

                                        <!-- Notifications Dropdown -->
                                        <x-dropdown align="right" width="64">
                                            <x-slot name="trigger">
                                                <button class="text-gray-500 hover:text-gray-700 relative">
                                                    <i class="far fa-bell text-lg"></i>
                                                    <span class="absolute top-0 right-0 bg-yellow-400 text-white text-xs rounded-full px-1 py-0.5">15</span>
                                                </button>
                                            </x-slot>
                
                                            <x-slot name="content">
                                                <span class="block px-4 py-2 font-semibold text-gray-700">15 Notifications</span>
                                                <div class="border-t">
                                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                                                        <i class="fas fa-envelope mr-2"></i> 4 nouveaux messages
                                                        <span class="float-right text-sm text-gray-500">3 mins</span>
                                                    </a>
                                                    <div class="border-t">
                                                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                                                            <i class="fas fa-file mr-2"></i> 3 nouveaux rapports
                                                            <span class="float-right text-sm text-gray-500">2 jours</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a href="#" class="block text-center text-gray-800 hover:bg-gray-100 px-4 py-2">Voir toutes les notifications</a>
                                            </x-slot>
                                        </x-dropdown>
            </div>
        </div>
    </div>
</nav>
