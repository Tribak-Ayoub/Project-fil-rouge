<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-blue-500 text-white p-6 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-3xl font-bold">{{$countSanctionAbsence}}</h3>
                    <p class="text-lg">Sanctions</p>
                </div>
                <div class="text-4xl">
                    <i class="fas fa-gavel"></i>
                </div>
            </div>
            <a href="#" class="block mt-4 text-sm underline">Plus d'infos →</a>
        </div>
    
        <!-- Card 2 -->
        <div class="bg-green-500 text-white p-6 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-3xl font-bold">53</h3>
                    <p class="text-lg">Absences injustifiées</p>
                </div>
                <div class="text-4xl">
                    <i class="fas fa-chart-bar"></i>
                </div>
            </div>
            <a href="#" class="block mt-4 text-sm underline">Plus d'infos →</a>
        </div>
    
        <!-- Card 3 -->
        <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-3xl font-bold">{{$countApprenants}}</h3>
                    <p class="text-lg">Apprenants</p>
                </div>
                <div class="text-4xl">
                    <i class="fas fa-user-plus"></i>
                </div>
            </div>
            <a href="#" class="block mt-4 text-sm underline">Plus d'infos →</a>
        </div>
    </div>
    
    <!-- Charts Section -->
    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Sanctions Chart -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-4">Sanctions par type</h3>
            <div class="relative w-full h-64">
                <canvas id="sanctionsBarChart"></canvas>
            </div>
        </div>
    
        <!-- Absenteeism Chart -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-4">Absentéisme au fil du temps</h3>
            <div class="relative w-full h-64">
                <canvas id="absenteeismLineChart"></canvas>
            </div>
        </div>
    </div>         
</x-app-layout>
