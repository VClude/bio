<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-8 text-2xl">
                        Selamat datang Pendaftar
                        
                    </div>

                    <div class="mt-6 text-gray-500">
                    
                            @if($sudahdaftar)
                                Anda Sudah Mendaftar 
                                
                                <br> 

                                <a href="#"><button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                    Klik untuk Melihat
                                </button></a>
                                
                            @endif
                            @if(!$sudahdaftar)
                            Anda Sudah Mendaftar 
                                
                                <br> 

                                <a href="#"><button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                    Klik untuk Mendaftar
                                </button></a>
                            @endif

                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
