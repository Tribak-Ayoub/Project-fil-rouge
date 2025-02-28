<aside :class="{'w-16': !sidebarOpen, 'w-64': sidebarOpen}" class="bg-gray-800 text-white transition-all duration-300 h-screen w-64 fixed top-0 left-0 flex flex-col overflow-hidden">
    <!-- Brand Logo -->
    <a href="" class="flex items-center space-x-2 p-4">
        <img src="{{ asset('images/soli-lms-logo.png') }}" alt="SOLI lms Logo" class="w-12 h-12 rounded-full opacity-80">
        <span :class="{'hidden': !sidebarOpen}" class="text-xl font-light">SOLI lms</span>
    </a>

    <!-- Sidebar Menu -->
    <div class="flex-1 overflow-y-auto">
        <nav class="mt-2">
            <ul class="space-y-2">
                <li class="group">
                    <a href="{{route('dashboard')}}" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-700">
                        <i class="fas fa-tachometer-alt"></i>
                        <p :class="{'hidden': !sidebarOpen}" class="ml-2">Dashboard</p>
                    </a>
                </li>
                <li class="group">
                    <a href="" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-700">
                        <i class="fas fa-th"></i>
                        <p :class="{'hidden': !sidebarOpen}" class="ml-2">Gérer les sanctions</p>
                    </a>
                </li>
                <li class="group">
                    <a href="" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-700">
                        <i class="fas fa-th"></i>
                        <p :class="{'hidden': !sidebarOpen}" class="ml-2">Les règles de sanction</p>
                        <i class="fas fa-angle-left ml-auto"></i>
                    </a>
                    <ul class="space-y-2 ml-4 hidden group-hover:block">
                        <li>
                            <a href="" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-700">
                                <i class="far fa-circle"></i>
                                <p :class="{'hidden': !sidebarOpen}" class="ml-2">Créer une règle</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-700">
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
