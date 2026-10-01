<div class="h-full flex flex-col relative overflow-hidden">
    <!-- Marca de agua arquitectónica en el fondo del sidebar -->
    <div class="absolute bottom-0 left-0 right-0 pointer-events-none overflow-hidden" style="height: 250px; opacity: 0.03;">
        <svg viewBox="0 0 300 250" preserveAspectRatio="xMidYMax slice" class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <!-- Edificio principal -->
            <rect x="30" y="40" width="80" height="160" fill="#8B1E3F"/>
            <rect x="40" y="50" width="20" height="20" fill="#FFFFFF"/>
            <rect x="70" y="50" width="20" height="20" fill="#FFFFFF"/>
            <rect x="40" y="80" width="20" height="20" fill="#FFFFFF"/>
            <rect x="70" y="80" width="20" height="20" fill="#FFFFFF"/>
            <rect x="40" y="110" width="20" height="20" fill="#FFFFFF"/>
            <rect x="70" y="110" width="20" height="20" fill="#FFFFFF"/>
            <rect x="40" y="140" width="20" height="20" fill="#FFFFFF"/>
            <rect x="70" y="140" width="20" height="20" fill="#FFFFFF"/>
            <rect x="50" y="15" width="40" height="25" fill="#8B1E3F"/>
            
            <!-- Edificio secundario -->
            <rect x="130" y="60" width="60" height="140" fill="#8B1E3F"/>
            <rect x="140" y="70" width="15" height="15" fill="#FFFFFF"/>
            <rect x="165" y="70" width="15" height="15" fill="#FFFFFF"/>
            <rect x="140" y="95" width="15" height="15" fill="#FFFFFF"/>
            <rect x="165" y="95" width="15" height="15" fill="#FFFFFF"/>
            <rect x="140" y="120" width="15" height="15" fill="#FFFFFF"/>
            <rect x="165" y="120" width="15" height="15" fill="#FFFFFF"/>
            <rect x="140" y="145" width="15" height="15" fill="#FFFFFF"/>
            <rect x="165" y="145" width="15" height="15" fill="#FFFFFF"/>
            <polygon points="130,60 160,35 190,60" fill="#8B1E3F"/>
            
            <!-- Edificio moderno -->
            <rect x="210" y="50" width="60" height="150" fill="#8B1E3F"/>
            <rect x="220" y="60" width="12" height="12" fill="#FFFFFF"/>
            <rect x="248" y="60" width="12" height="12" fill="#FFFFFF"/>
            <rect x="220" y="82" width="12" height="12" fill="#FFFFFF"/>
            <rect x="248" y="82" width="12" height="12" fill="#FFFFFF"/>
            <rect x="220" y="104" width="12" height="12" fill="#FFFFFF"/>
            <rect x="248" y="104" width="12" height="12" fill="#FFFFFF"/>
            <rect x="220" y="126" width="12" height="12" fill="#FFFFFF"/>
            <rect x="248" y="126" width="12" height="12" fill="#FFFFFF"/>
            <rect x="220" y="148" width="12" height="12" fill="#FFFFFF"/>
            <rect x="248" y="148" width="12" height="12" fill="#FFFFFF"/>
            <rect x="220" y="170" width="12" height="12" fill="#FFFFFF"/>
            <rect x="248" y="170" width="12" height="12" fill="#FFFFFF"/>
        </svg>
    </div>

    <!-- Encabezado del sidebar con icono de universidad -->
    <div class="p-4 border-b border-border relative z-10" style="border-bottom: 1px solid #E4E7EC; background-color: #FFFFFF;">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #FFFFFF; border: 1px solid #E4E7EC;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#8B1E3F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 21h18"></path>
                    <path d="M5 21V7l8-4 8 4v14"></path>
                    <path d="M8 9h2"></path>
                    <path d="M14 9h2"></path>
                    <path d="M8 12h2"></path>
                    <path d="M14 12h2"></path>
                    <path d="M8 15h2"></path>
                    <path d="M14 15h2"></path>
                </svg>
            </div>
            <div>
                <div class="text-sm font-semibold" style="color: #1F2937; line-height: 1.2;">Sistema</div>
                <div class="text-sm font-semibold" style="color: #1F2937; line-height: 1.2;">Institucional</div>
            </div>
        </div>
    </div>

    <!-- Navegación -->
    <nav class="flex-1 p-4 relative z-10">
        <a href="/reglamento" class="flex items-center gap-3 px-4 py-2 rounded-lg transition-colors" :class="window.location.pathname === '/reglamento' ? 'text-white' : 'text-gray-700 hover:bg-gray-100'" :style="window.location.pathname === '/reglamento' ? 'background-color: #8B1E3F;' : ''">
            <i data-lucide="file-text" class="w-5 h-5"></i>
            <span>Reglamento</span>
        </a>
        <a href="/mas-frecuentes" class="flex items-center gap-3 px-4 py-2 rounded-lg transition-colors mt-1" :class="window.location.pathname === '/mas-frecuentes' ? 'text-white' : 'text-gray-700 hover:bg-gray-100'" :style="window.location.pathname === '/mas-frecuentes' ? 'background-color: #8B1E3F;' : ''">
            <i data-lucide="circle-help" class="w-5 h-5"></i>
            <span>Más Frecuentes</span>
        </a>
    </nav>

    <!-- Parte inferior del sidebar con información UTVT -->
    <div class="p-4 border-t border-border relative z-10" style="border-top: 1px solid #E4E7EC; background-color: #FFFFFF;">
        <div class="text-center mb-3">
            <div class="text-lg font-bold" style="color: #8B1E3F; letter-spacing: 0.05em;">UTVT</div>
            <div class="text-xs font-medium" style="color: #667085; line-height: 1.3;">Universidad Tecnológica</div>
            <div class="text-xs font-medium" style="color: #667085; line-height: 1.3;">del Valle de Toluca</div>
        </div>
        <div class="w-full h-0.5" style="background-color: #8B1E3F; opacity: 0.3;"></div>
    </div>
</div>
