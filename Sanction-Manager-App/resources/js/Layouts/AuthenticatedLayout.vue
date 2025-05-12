<!-- <script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav
                class="border-b border-gray-100 bg-white"
            >
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 justify-between">
                        <div class="flex">
                            <div class="flex shrink-0 items-center">
                                <Link :href="route('dashboard')">
                                    <ApplicationLogo
                                        class="block h-9 w-auto fill-current text-gray-800"
                                    />
                                </Link>
                            </div>

                            <div
                                class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex"
                            >
                                <NavLink
                                    :href="route('dashboard')"
                                    :active="route().current('dashboard')"
                                >
                                    Dashboard
                                </NavLink>
                            </div>
                        </div>

                        <div class="hidden sm:ms-6 sm:flex sm:items-center">
                            <div class="relative ms-3">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none"
                                            >
                                                {{ $page.props.auth.user.name }}

                                                <svg
                                                    class="-me-0.5 ms-2 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink
                                            :href="route('profile.edit')"
                                        >
                                            Profile
                                        </DropdownLink>
                                        <DropdownLink
                                            :href="route('logout')"
                                            method="post"
                                            as="button"
                                        >
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <div class="-me-2 flex items-center sm:hidden">
                            <button
                                @click="
                                    showingNavigationDropdown =
                                        !showingNavigationDropdown
                                "
                                class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none"
                            >
                                <svg
                                    class="h-6 w-6"
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex':
                                                !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex':
                                                showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    :class="{
                        block: showingNavigationDropdown,
                        hidden: !showingNavigationDropdown,
                    }"
                    class="sm:hidden"
                >
                    <div class="space-y-1 pb-3 pt-2">
                        <ResponsiveNavLink
                            :href="route('dashboard')"
                            :active="route().current('dashboard')"
                        >
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <div
                        class="border-t border-gray-200 pb-1 pt-4"
                    >
                        <div class="px-4">
                            <div
                                class="text-base font-medium text-gray-800"
                            >
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="text-sm font-medium text-gray-500">
                                {{ $page.props.auth.user.email }}
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('profile.edit')">
                                Profile
                            </ResponsiveNavLink>
                            <ResponsiveNavLink
                                :href="route('logout')"
                                method="post"
                                as="button"
                            >
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>

            <header
                class="bg-white shadow"
                v-if="$slots.header"
            >
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            
            <main>
                <slot />
            </main>
        </div>
    </div>
</template> -->


<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import {
    Menu,
    X,
    ChevronDown,
    Bell,
    Search,
    User,
    LogOut,
    Home,
    BarChart2,
    FileText,
    Settings,
    ChevronRight,
    ChevronLeft
} from 'lucide-vue-next';

import { usePage } from '@inertiajs/vue3';

console.log('Shared props:', usePage().props);

const showingNavigationDropdown = ref(false);
const sidebarOpen = ref(true);
const isMobile = ref(false);

const toggleSidebar = () => {
    sidebarOpen.value = !sidebarOpen.value;
};

const checkScreenSize = () => {
    isMobile.value = window.innerWidth < 1024;
    if (isMobile.value) {
        sidebarOpen.value = false;
    }
};

onMounted(() => {
    checkScreenSize();
    window.addEventListener('resize', checkScreenSize);
});

onUnmounted(() => {
    window.removeEventListener('resize', checkScreenSize);
});
</script>

<template>
    <div class="min-h-screen bg-gray-50">
        <!-- Top Navigation Bar -->
        <nav class="fixed z-10 w-full bg-white shadow-sm">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <!-- Left side - Logo and toggle -->
                    <div class="flex items-center">
                        <button @click="toggleSidebar"
                            class="mr-4 rounded-md p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-600 focus:outline-none">
                            <Menu v-if="!sidebarOpen || isMobile" class="h-6 w-6" />
                            <X v-else class="h-6 w-6" />
                        </button>

                        <Link :href="route('dashboard')" class="flex items-center">
                        <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
                        <span class="ml-3 text-xl font-semibold text-gray-800">Tableau de bord</span>
                        </Link>
                    </div>

                    <!-- Center - Search -->
                    <div class="hidden flex-1 px-8 lg:flex lg:max-w-md">
                        <div class="relative w-full">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <Search class="h-5 w-5 text-gray-400" />
                            </div>
                            <input type="text"
                                class="block w-full rounded-md border-0 py-1.5 pl-10 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6"
                                placeholder="Rechercher..." />
                        </div>
                    </div>

                    <!-- Right side - Notifications and Profile -->
                    <div class="flex items-center">
                        <button
                            class="mr-4 rounded-full p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-600 focus:outline-none">
                            <Bell class="h-6 w-6" />
                        </button>

                        <!-- Profile Dropdown -->
                        <Dropdown align="right" width="48">
                            <template #trigger>
                                <button
                                    class="flex items-center rounded-full border border-transparent bg-white p-1 text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none">
                                    <div class="mr-2 h-8 w-8 overflow-hidden rounded-full bg-gray-200">
                                        <User class="h-full w-full p-1 text-gray-600" />
                                    </div>
                                    <div class="hidden md:block">
                                        {{ $page.props.auth.user.name }}
                                    </div>
                                    <ChevronDown class="ml-1 h-4 w-4" />
                                </button>
                            </template>

                            <template #content>
                                <DropdownLink :href="route('profile.edit')">
                                    <div class="flex items-center">
                                        <User class="mr-2 h-4 w-4" />
                                        <span>Profil</span>
                                    </div>
                                </DropdownLink>
                                <DropdownLink :href="route('logout')" method="post" as="button">
                                    <div class="flex items-center">
                                        <LogOut class="mr-2 h-4 w-4" />
                                        <span>Se déconnecter</span>
                                    </div>
                                </DropdownLink>
                            </template>
                        </Dropdown>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Sidebar -->
        <aside :class="[
            sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0 lg:w-20',
            'fixed inset-y-0 z-20 flex w-64 flex-col bg-white shadow-lg transition-all duration-300 ease-in-out'
        ]">
            <!-- Sidebar header -->
            <div class="flex h-16 items-center justify-between border-b px-4">
                <Link :href="route('dashboard')" class="flex items-center" v-show="sidebarOpen">
                <ApplicationLogo class="block h-8 w-auto fill-current text-gray-800" />
                <span class="ml-3 text-lg font-semibold text-gray-800">Admin</span>
                </Link>
                <button @click="toggleSidebar"
                    class="lg:flex hidden rounded-md p-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-600 focus:outline-none">
                    <ChevronLeft v-if="sidebarOpen" class="h-5 w-5" />
                    <ChevronRight v-else class="h-5 w-5" />
                </button>
            </div>

            <!-- Sidebar content -->
            <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
                <nav class="mt-5 flex-1 space-y-1 px-2">
                    <!-- Dashboard -->
                    <Link :href="route('dashboard')" :class="[
                        route().current('dashboard') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900',
                        sidebarOpen ? 'justify-start' : 'justify-center',
                        'group flex items-center rounded-md px-2 py-2 text-sm font-medium'
                    ]">
                    <Home :class="[
                        route().current('dashboard') ? 'text-blue-600' : 'text-gray-500 group-hover:text-gray-500',
                        'mr-3 h-5 w-5 flex-shrink-0'
                    ]" />
                    <span v-if="sidebarOpen">Dashboard</span>
                    </Link>

                    <!-- Page 1 -->
                    <Link href="#page-1" :class="[
                        route().current('page-1') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900',
                        sidebarOpen ? 'justify-start' : 'justify-center',
                        'group flex items-center rounded-md px-2 py-2 text-sm font-medium'
                    ]">
                    <BarChart2 :class="[
                        route().current('page-1') ? 'text-blue-600' : 'text-gray-500 group-hover:text-gray-500',
                        'mr-3 h-5 w-5 flex-shrink-0'
                    ]" />
                    <span v-if="sidebarOpen">Page 1</span>
                    </Link>

                    <!-- Page 2 -->
                    <Link href="#page-2" :class="[
                        route().current('page-2') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900',
                        sidebarOpen ? 'justify-start' : 'justify-center',
                        'group flex items-center rounded-md px-2 py-2 text-sm font-medium'
                    ]">
                    <FileText :class="[
                        route().current('page-2') ? 'text-blue-600' : 'text-gray-500 group-hover:text-gray-500',
                        'mr-3 h-5 w-5 flex-shrink-0'
                    ]" />
                    <span v-if="sidebarOpen">Page 2</span>
                    </Link>

                    <!-- Page 3 -->
                    <Link href="#page-3" :class="[
                        route().current('page-3') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900',
                        sidebarOpen ? 'justify-start' : 'justify-center',
                        'group flex items-center rounded-md px-2 py-2 text-sm font-medium'
                    ]">
                    <Settings :class="[
                        route().current('page-3') ? 'text-blue-600' : 'text-gray-500 group-hover:text-gray-500',
                        'mr-3 h-5 w-5 flex-shrink-0'
                    ]" />
                    <span v-if="sidebarOpen">Page 3</span>
                    </Link>
                </nav>
            </div>

            <!-- Sidebar footer -->
            <div class="border-t border-gray-200 p-4" v-if="sidebarOpen">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center">
                            <User class="h-6 w-6 text-gray-600" />
                        </div>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700">{{ $page.props.auth.user.name }}</p>
                        <p class="text-xs text-gray-500 truncate">{{ $page.props.auth.user.email }}</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Overlay for mobile -->
        <div v-if="sidebarOpen && isMobile" @click="toggleSidebar"
            class="fixed inset-0 z-10 bg-gray-600 bg-opacity-50 transition-opacity"></div>

        <!-- Main content -->
        <div :class="[
            sidebarOpen ? 'lg:pl-64' : 'lg:pl-20',
            'flex flex-1 flex-col pt-16 transition-all duration-300 ease-in-out'
        ]">
            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="mx-auto px-4 py-6 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1">
                <slot />
            </main>
        </div>
    </div>
</template>