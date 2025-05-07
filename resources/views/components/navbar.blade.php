<nav class="bg-[#002349] border-b border-gray-600 shadow-lg">
    <div class="container mx-auto px-7">
        <div class="flex justify-between items-center py-3">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full overflow-hidden">
                    <img src="{{ asset('img/LOGO_UNEJ(1).png') }}" alt="Logo" class="w-full h-full object-contain">
                </div>
                <span class="text-xl text-white font-bold">Koperasi Jember</span>
            </div>            

            <div class="text-white hidden md:flex items-center space-x-6 ">
                <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" 
                   class="relative py-2 px-3 transition-all duration-300 rounded-2xl {{ request()->is('dashboard') ? 'bg-white/15' : 'hover:bg-white/40' }}">
                    Dashboard
                </a>

                <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}" 
                   class="relative py-2 px-4 text-blue  transition-all duration-300 rounded-2xl {{ request()->is('pengelolaan*') ? 'bg-white/15' : 'hover:bg-white/40' }}">
                    Pengelolaan
                </a>
 
                <a href="{{ route('profile', ['username' => request()->query('username')]) }}" 
                   class="relative py-2 px-4 transition-all duration-300 rounded-2xl {{ request()->is('profile') ? 'bg-white/15' : 'hover:bg-white/40' }}">
                    Profile
                </a>
            </div>
            
            <button class="md:hidden focus:outline-none" id="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <div class="text-white md:hidden py-2 relative border-t border-gray-600" id="mobile-menu">
            <div class="text-white md:hidden py-2">
                <div class="relative flex items-center px-4 py-2">
                    @if(request()->is('dashboard'))
                        <div class="absolute left-3 top-4 w-3 h-2.5 bg-black rounded-full"></div>
                    @endif
                    <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" class="pl-6 w-full hover:bg-white/20">Dashboard</a>
                </div>
        
                <div class="relative flex items-center px-4 py-2">
                    @if(request()->is('pengelolaan*'))
                        <div class="absolute left-3 top-4 w-3 h-2.5 bg-black rounded-full"></div>
                    @endif
                    <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}" class="pl-6 w-full hover:bg-white/20">Pengelolaan</a>
                </div>

                <div class="relative flex items-center px-4 py-2">
                    @if(request()->is('profile'))
                        <div class="absolute left-3 top-4 w-3 h-2.5 bg-black rounded-full"></div>
                    @endif
                    <a href="{{ route('profile', ['username' => request()->query('username')]) }}" class="pl-6 w-full hover:bg-white/20">Profile</a>
                </div>
            </div>
        </div>                         
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>