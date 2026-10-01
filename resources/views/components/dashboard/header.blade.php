<div class="flex items-center justify-between px-4 h-full">
    <div class="flex items-center gap-4">
        <button @click="sidebarOpen = !sidebarOpen" class="p-2 rounded-lg transition-colors" style="hover: background-color: #F7E9ED;">
            <i data-lucide="menu" class="w-5 h-5" style="color: #344054;"></i>
        </button>
    </div>
    <div class="flex-1 text-center">
        <span class="font-bold" style="font-size: 24px; color: #8B1E3F;" x-text="window.location.pathname === '/reglamento' ? 'REGLAMENTO UTVT' : 'Más Frecuentes'"></span>
    </div>
    <div class="w-8 h-8 rounded-full" style="background-color: #F7E9ED;"></div>
</div>
