@extends('layouts.landing')

@section('title', 'Home')

@section('content')
    
    {{-- Hero Section     --}}
    <section class="flex items-center justify-center h-screen">
        <div class="container">
            <div class="flex items-center justify-between gap-4">
                {{-- 1 --}}
                <div class="flex flex-col w-2/5 gap-y-8">
                    <div class="flex flex-col gap-y-4">
                        <h1 class="text-5xl font-bold text-gray-700">Create stunning web experiences</h1>
                        <p class="text-base text-gray-500">Our landing page template works on all devices, so you only have to set it up once, and get beautiful results forever.</p>
                    </div>
                    <div>
                        <button class="px-8 py-3 text-white bg-blue-500 rounded-full">Browser Now</button>
                    </div>
                </div>
                {{-- 2 --}}
                <div class="w-1/2">
                    <img class="rounded-lg" src="{{url('https://images.unsplash.com/photo-1593789198777-f29bc259780e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- News in landing page --}}
    <section class="py-20">
        <div class="container">
            <div class="flex flex-col gap-y-8">
                <div class="flex flex-col items-center gap-y-4">
                    <h2 class="text-4xl font-bold text-center text-gray-700">Latest News</h2>
                    <p class="w-2/5 text-sm text-center text-gray-500">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <div class="grid grid-cols-3 gap-8">
                    <div class="flex flex-col gap-y-4">
                        <div>
                            <img class="rounded-lg" src="{{url('https://images.unsplash.com/photo-1727707185480-a50e6090b58c?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <div class="flex gap-x-2">
                                <p class="text-sm font-medium text-blue-400 uppercase">Tech</p>
                                <p class="text-sm font-medium text-indigo-400 uppercase">Room</p>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-700">5 Effective Brain Recharging Activities No One is Talking About</h3>
                            </div>
                            <div class="flex items-center gap-x-4">
                                <div class="flex items-center gap-x-2">
                                    <img class="w-6 h-6 rounded-full" src="{{url('https://images.unsplash.com/photo-1485893086445-ed75865251e0?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')}}" alt="">
                                    <p class="text-sm text-gray-500">Andrew Garfield</p>
                                </div>
                                <div class="w-1 h-1 bg-gray-500 rounded-full"></div>
                                <div>
                                    <p class="text-sm text-gray-500">Saturday 17, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-4">
                        <div>
                            <img class="rounded-lg" src="{{url('https://images.unsplash.com/photo-1727707185480-a50e6090b58c?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <div class="flex gap-x-2">
                                <p class="text-sm font-medium text-blue-400 uppercase">Tech</p>
                                <p class="text-sm font-medium text-indigo-400 uppercase">Room</p>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-700">5 Effective Brain Recharging Activities No One is Talking About</h3>
                            </div>
                            <div class="flex items-center gap-x-4">
                                <div class="flex items-center gap-x-2">
                                    <img class="w-6 h-6 rounded-full" src="{{url('https://images.unsplash.com/photo-1485893086445-ed75865251e0?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')}}" alt="">
                                    <p class="text-sm text-gray-500">Andrew Garfield</p>
                                </div>
                                <div class="w-1 h-1 bg-gray-500 rounded-full"></div>
                                <div>
                                    <p class="text-sm text-gray-500">Saturday 17, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-4">
                        <div>
                            <img class="rounded-lg" src="{{url('https://images.unsplash.com/photo-1727707185480-a50e6090b58c?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <div class="flex gap-x-2">
                                <p class="text-sm font-medium text-blue-400 uppercase">Tech</p>
                                <p class="text-sm font-medium text-indigo-400 uppercase">Room</p>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-700">5 Effective Brain Recharging Activities No One is Talking About</h3>
                            </div>
                            <div class="flex items-center gap-x-4">
                                <div class="flex items-center gap-x-2">
                                    <img class="w-6 h-6 rounded-full" src="{{url('https://images.unsplash.com/photo-1485893086445-ed75865251e0?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')}}" alt="">
                                    <p class="text-sm text-gray-500">Andrew Garfield</p>
                                </div>
                                <div class="w-1 h-1 bg-gray-500 rounded-full"></div>
                                <div>
                                    <p class="text-sm text-gray-500">Saturday 17, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection