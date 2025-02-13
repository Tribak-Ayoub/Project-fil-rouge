<div x-data="{ sidebarOpen: true, mobileMenuOpen: false }" class="flex h-screen">
    <!-- Sidebar -->
    <aside :class="{'w-16': !sidebarOpen, 'w-64': sidebarOpen}" class="bg-gray-800 text-white transition-all duration-300 h-screen flex flex-col overflow-hidden">
        <!-- Brand Logo -->
        <a href="" class="flex items-center space-x-2 p-4">
            <img src="/assets/images/soli-lms-logo.png" alt="SOLI lms Logo" class="w-12 h-12 rounded-full opacity-80">
            <span :class="{'hidden': !sidebarOpen}" class="text-xl font-light">SOLI lms</span>
        </a>

        <!-- Sidebar Menu -->
        <div class="flex-1 overflow-y-auto">
            <nav class="mt-2">
                <ul class="space-y-2">
                    <li class="group">
                        <a href="/admin/dashboard.php" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-700">
                            <i class="fas fa-tachometer-alt"></i>
                            <p :class="{'hidden': !sidebarOpen}" class="ml-2">Dashboard</p>
                        </a>
                    </li>
                    <li class="group">
                        <a href="/admin/Sanctions/index.php" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-700">
                            <i class="fas fa-th"></i>
                            <p :class="{'hidden': !sidebarOpen}" class="ml-2">Gérer les sanctions</p>
                        </a>
                    </li>
                    <li class="group">
                        <a href="#" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-700">
                            <i class="fas fa-th"></i>
                            <p :class="{'hidden': !sidebarOpen}" class="ml-2">Les règles de sanction</p>
                            <i class="fas fa-angle-left ml-auto"></i>
                        </a>
                        <ul class="space-y-2 ml-4 hidden group-hover:block">
                            <li>
                                <a href="/admin/Sanction Rules/create.php" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-700">
                                    <i class="far fa-circle"></i>
                                    <p :class="{'hidden': !sidebarOpen}" class="ml-2">Créer une règle</p>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/Sanction Rules/index.php" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-700">
                                    <i class="far fa-circle"></i>
                                    <p :class="{'hidden': !sidebarOpen}" class="ml-2">Liste des Règles</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col">
        <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
            <!-- Primary Navigation Menu -->
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
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                    this.closest('form').submit();">
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

                    <!-- Hamburger -->
                    <div class="-me-2 flex items-center sm:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>