<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold font-poppins text-lg leading-none text-gray-800">
            SEARCH
        </h2>
    </x-slot>
    <div class="fixed p-6">
        <a href="#" class="text-black font-custom font-medium no-underline">logo</a>
    </div>
    {{-- sidebar --}}
    <div class="w-screen h-[max-content] px-12 py-6">
    {{-- <div class="sidebar"> --}}
        <div class="slide_item">
            <p id="header" class="text-6xl absolute top-16 font-open_sans">坂上 seiji</p>
            <p class="text-xl absolute top-32">html css javascript</p>
        </div>
        <div class="text-xl absolute bottom-8 font-sans">
            <p>sakaue seiji</p>
            <p>Scroll Experience</p>
        </div>
    </div>

    <div class="slider">
        <div class="slider-wrapper">
            <div class="slide"><x-nav-link :href="route('post.create')" :active="request()->routeIs('post.create')"><img src="{{'/img/dragon_1.jpg'}}" alt="dragon1" /></x-nav-link></div>
            <div class="slide"><x-nav-link :href="route('post.create')" :active="request()->routeIs('post.create')"><img src="{{'/img/dragon_2.jpg'}}" alt="dragon2" /></x-nav-link></div>
            <div class="slide"><img src="{{'/img/dragon_3.jpg'}}" alt="dragon3" /></div>
            <div class="slide"><img src="{{'/img/dragon_4.jpg'}}" alt="dragon4" /></div>
            <div class="slide"><img src="{{'/img/dragon_5.jpg'}}" alt="dragon5" /></div>
            <div class="slide"><img src="{{'/img/dragon_6.jpg'}}" alt="dragon6" /></div>
            <div class="slide"><img src="{{'/img/dragon_7.jpg'}}" alt="dragon7" /></div>
            <div class="slide"><img src="{{'/img/dragon_8.jpg'}}" alt="dragon8" /></div>
            <div class="slide"><img src="{{'/img/dragon_9.jpg'}}" alt="dragon9" /></div>
            <div class="slide"><img src="{{'/img/dragon_10.jpg'}}" alt="dragon10" /></div>
            <div class="slide"><img src="{{'/img/dino_Brontosaurus.png'}}" alt="dragon11" /></div>
            <div class="slide"><img src="{{'/img/dino_Mosasaurus.png'}}" alt="dragon12" /></div>
            <div class="slide"><img src="{{'/img/dino_Pteranodon.png'}}" alt="dragon13" /></div>
            <div class="slide"><img src="{{'/img/dino_Sarcosuchus.png'}}" alt="dragon14" /></div>
            <div class="slide"><img src="{{'/img/dino_T-Rex.png'}}" alt="dragon15" /></div>
            <div class="slide"><img src="{{'/img/dino_Triceratops.png'}}" alt="dragon16" /></div>
            <div class="slide"><img src="{{'/img/dragon_7.jpg'}}" alt="dragon17" /></div>
            <div class="slide"><img src="{{'/img/dragon_8.jpg'}}" alt="dragon18" /></div>
            <div class="slide"><img src="{{'/img/dragon_9.jpg'}}" alt="dragon19" /></div>
            <div class="slide"><img src="{{'/img/dragon_10.jpg'}}" alt="dragon20" /></div>
        </div>
    </div>
</x-app-layout>