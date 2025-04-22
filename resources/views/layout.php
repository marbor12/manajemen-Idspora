<div class="w-64 bg-white border-r border-gray-200 flex flex-col">
    <div class="p-4 flex items-center gap-3 border-b border-gray-100">
        <div class="w-10 h-10 rounded-md bg-lime-200 flex items-center justify-center">
            <span class="font-bold text-lime-800">Y</span>
        </div>
        <div>
            <h2 class="font-semibold">Design Yow</h2>
            <p class="text-xs text-gray-500">Professional Plan</p>
        </div>
    </div>

    <div class="p-4">
        <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-2.5 h-4 w-4 text-gray-400" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            <input type="text" placeholder="Search anything" class="pl-9 bg-gray-50 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background">
        </div>
    </div>

    <nav class="flex-1 overflow-y-auto p-2">
        <div class="space-y-1">
            <!-- Dashboard Nav Item -->
            <a href="{{ route('dashboard') }}" class="flex items-center gap-2 px-3 py-2 rounded-md text-sm {{ request()->routeIs('dashboard') ? 'bg-gray-100 font-medium' : 'text-gray-600 hover:bg-gray-50' }}">
                <div class="w-5 h-5 rounded bg-gray-900 flex items-center justify-center text-white text-xs">D</div>
                <span class="flex-1">Dashboard</span>
            </a>
            
            <!-- Tasks Nav Item -->
            <a href="{{ route('tasks') }}" class="flex items-center gap-2 px-3 py-2 rounded-md text-sm {{ request()->routeIs('tasks') ? 'bg-gray-100 font-medium' : 'text-gray-600 hover:bg-gray-50' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="m9 12 2 2 4-4"/></svg>
                <span class="flex-1">Tasks</span>
            </a>
            
            <!-- Projects Nav Item -->
            <div class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-gray-600 hover:bg-gray-50">
                <div class="w-5 h-5 rounded bg-gray-100 flex items-center justify-center text-gray-500 text-xs">P</div>
                <span class="flex-1">Projects</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </div>

            <div class="pl-9 space-y-1 mt-1">
                <!-- App Items -->
                <div class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-gray-600 hover:bg-gray-50">
                    <div class="w-5 h-5 rounded flex items-center justify-center bg-purple-100 text-purple-600">
                        <span class="text-xs">T</span>
                    </div>
                    <span>TaskWave</span>
                </div>
                
                <div class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-gray-600 hover:bg-gray-50">
                    <div class="w-5 h-5 rounded flex items-center justify-center bg-pink-100 text-pink-600">
                        <span class="text-xs">P</span>
                    </div>
                    <span>ProjectPulse</span>
                </div>
                
                <div class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-gray-600 hover:bg-gray-50">
                    <div class="w-5 h-5 rounded flex items-center justify-center bg-amber-100 text-amber-600">
                        <span class="text-xs">S</span>
                    </div>
                    <span>SprintHive</span>
                </div>
            </div>

            <!-- Events Nav Item -->
            <a href="{{ route('events') }}" class="flex items-center gap-2 px-3 py-2 rounded-md text-sm {{ request()->routeIs('events') ? 'bg-gray-100 font-medium' : 'text-gray-600 hover:bg-gray-50' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18"/><path d="M9 3v18"/></svg>
                <span class="flex-1">Events</span>
            </a>
            
            <!-- Finance Nav Item -->
            <a href="{{ route('finance') }}" class="flex items-center gap-2 px-3 py-2 rounded-md text-sm {{ request()->routeIs('finance') ? 'bg-gray-100 font-medium' : 'text-gray-600 hover:bg-gray-50' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                <span class="flex-1">Finance</span>
            </a>
            
            <!-- Settings Nav Item -->
            <div class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-gray-600 hover:bg-gray-50">
                <div class="w-5 h-5 rounded bg-gray-100 flex items-center justify-center text-gray-500 text-xs">S</div>
                <span class="flex-1">Settings</span>
            </div>
        </div>
    </nav>

    <div class="p-4 border-t border-gray-100">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span class="text-sm text-gray-600">Dark Mode</span>
            </div>
            <button class="w-10 h-5 rounded-full bg-gray-200 relative" onclick="toggleDarkMode()">
                <span class="absolute top-0.5 left-0.5 w-4 h-4 rounded-full bg-white transition-transform" id="darkModeToggle"></span>
            </button>
        </div>

        <div class="flex items-center gap-2">
            <div class="w-4 h-4 rounded-full flex items-center justify-center text-gray-500">
                <div class="w-4 h-4 rounded-full border border-gray-300 flex items-center justify-center">?</div>
            </div>
            <span class="text-sm text-gray-600">Help</span>
        </div>
    </div>

    <div class="p-4 bg-indigo-900 text-white rounded-lg mx-3 mb-3">
        <div class="flex items-center gap-3">
            <div class="h-10 w-10 rounded-full bg-indigo-700 border-2 border-indigo-700 flex items-center justify-center overflow-hidden">
                <span class="text-sm">CY</span>
            </div>
            <div>
                <p class="font-medium">Cecillia Yo</p>
                <p class="text-xs text-indigo-300">cecilliayo@gmail.com</p>
            </div>
        </div>
        <div class="flex mt-3 gap-2">
            <button class="h-8 w-8 rounded-full bg-indigo-800/50 flex items-center justify-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
            </button>
            <button class="h-8 w-8 rounded-full bg-indigo-800/50 flex items-center justify-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            </button>
        </div>
    </div>
</div>
