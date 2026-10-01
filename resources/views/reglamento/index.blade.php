@extends('layouts.dashboard')

@section('title', 'Reglamento')

@section('content')
<div class="relative min-h-full" style="background: linear-gradient(to bottom, #F6F7F9 0%, #FFFFFF 100%);">
    <!-- Marca de agua arquitectónica -->
    <div class="absolute bottom-0 left-0 right-0 pointer-events-none overflow-hidden" style="height: 300px; opacity: 0.04;">
        <svg viewBox="0 0 1200 300" preserveAspectRatio="xMidYMax slice" class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <!-- Edificio principal -->
            <rect x="100" y="50" width="200" height="250" fill="#8B1E3F"/>
            <rect x="120" y="70" width="40" height="40" fill="#FFFFFF"/>
            <rect x="180" y="70" width="40" height="40" fill="#FFFFFF"/>
            <rect x="240" y="70" width="40" height="40" fill="#FFFFFF"/>
            <rect x="120" y="130" width="40" height="40" fill="#FFFFFF"/>
            <rect x="180" y="130" width="40" height="40" fill="#FFFFFF"/>
            <rect x="240" y="130" width="40" height="40" fill="#FFFFFF"/>
            <rect x="120" y="190" width="40" height="40" fill="#FFFFFF"/>
            <rect x="180" y="190" width="40" height="40" fill="#FFFFFF"/>
            <rect x="240" y="190" width="40" height="40" fill="#FFFFFF"/>
            <rect x="150" y="20" width="100" height="30" fill="#8B1E3F"/>
            
            <!-- Edificio secundario -->
            <rect x="350" y="100" width="150" height="200" fill="#8B1E3F"/>
            <rect x="370" y="120" width="30" height="30" fill="#FFFFFF"/>
            <rect x="420" y="120" width="30" height="30" fill="#FFFFFF"/>
            <rect x="470" y="120" width="30" height="30" fill="#FFFFFF"/>
            <rect x="370" y="170" width="30" height="30" fill="#FFFFFF"/>
            <rect x="420" y="170" width="30" height="30" fill="#FFFFFF"/>
            <rect x="470" y="170" width="30" height="30" fill="#FFFFFF"/>
            <rect x="370" y="220" width="30" height="30" fill="#FFFFFF"/>
            <rect x="420" y="220" width="30" height="30" fill="#FFFFFF"/>
            <rect x="470" y="220" width="30" height="30" fill="#FFFFFF"/>
            <polygon points="350,100 425,60 500,100" fill="#8B1E3F"/>
            
            <!-- Edificio moderno -->
            <rect x="550" y="80" width="120" height="220" fill="#8B1E3F"/>
            <rect x="570" y="100" width="25" height="25" fill="#FFFFFF"/>
            <rect x="610" y="100" width="25" height="25" fill="#FFFFFF"/>
            <rect x="650" y="100" width="25" height="25" fill="#FFFFFF"/>
            <rect x="570" y="145" width="25" height="25" fill="#FFFFFF"/>
            <rect x="610" y="145" width="25" height="25" fill="#FFFFFF"/>
            <rect x="650" y="145" width="25" height="25" fill="#FFFFFF"/>
            <rect x="570" y="190" width="25" height="25" fill="#FFFFFF"/>
            <rect x="610" y="190" width="25" height="25" fill="#FFFFFF"/>
            <rect x="650" y="190" width="25" height="25" fill="#FFFFFF"/>
            <rect x="570" y="235" width="25" height="25" fill="#FFFFFF"/>
            <rect x="610" y="235" width="25" height="25" fill="#FFFFFF"/>
            <rect x="650" y="235" width="25" height="25" fill="#FFFFFF"/>
            
            <!-- Edificio con torre -->
            <rect x="720" y="60" width="180" height="240" fill="#8B1E3F"/>
            <rect x="790" y="20" width="40" height="40" fill="#8B1E3F"/>
            <rect x="740" y="80" width="35" height="35" fill="#FFFFFF"/>
            <rect x="790" y="80" width="35" height="35" fill="#FFFFFF"/>
            <rect x="840" y="80" width="35" height="35" fill="#FFFFFF"/>
            <rect x="740" y="135" width="35" height="35" fill="#FFFFFF"/>
            <rect x="790" y="135" width="35" height="35" fill="#FFFFFF"/>
            <rect x="840" y="135" width="35" height="35" fill="#FFFFFF"/>
            <rect x="740" y="190" width="35" height="35" fill="#FFFFFF"/>
            <rect x="790" y="190" width="35" height="35" fill="#FFFFFF"/>
            <rect x="840" y="190" width="35" height="35" fill="#FFFFFF"/>
            <rect x="740" y="245" width="35" height="35" fill="#FFFFFF"/>
            <rect x="790" y="245" width="35" height="35" fill="#FFFFFF"/>
            <rect x="840" y="245" width="35" height="35" fill="#FFFFFF"/>
            
            <!-- Edificio bajo -->
            <rect x="950" y="150" width="150" height="150" fill="#8B1E3F"/>
            <rect x="970" y="170" width="30" height="30" fill="#FFFFFF"/>
            <rect x="1010" y="170" width="30" height="30" fill="#FFFFFF"/>
            <rect x="1050" y="170" width="30" height="30" fill="#FFFFFF"/>
            <rect x="970" y="220" width="30" height="30" fill="#FFFFFF"/>
            <rect x="1010" y="220" width="30" height="30" fill="#FFFFFF"/>
            <rect x="1050" y="220" width="30" height="30" fill="#FFFFFF"/>
            
            <!-- Líneas decorativas -->
            <line x1="0" y1="280" x2="1200" y2="280" stroke="#8B1E3F" stroke-width="2"/>
            <line x1="0" y1="290" x2="1200" y2="290" stroke="#8B1E3F" stroke-width="1"/>
        </svg>
    </div>

    <div class="relative px-8 py-8 max-w-5xl mx-auto">
        <h1 style="font-size: 24px; font-weight: 700; color: #1F2937; margin-bottom: 8px;">Reglamento</h1>
        <p style="font-size: 15px; color: #667085; margin-bottom: 24px;">Consulta el Reglamento Interno de la Universidad Tecnológica del Valle de Toluca.</p>

        <!-- Tarjeta del documento -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 mb-8" style="border: 1px solid #E4E7EC; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0 w-12 h-12 rounded-lg flex items-center justify-center" style="background-color: #F7E9ED;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#8B1E3F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <line x1="10" y1="9" x2="8" y2="9"></line>
                    </svg>
                </div>
                <div class="flex-1">
                    <h3 style="font-size: 18px; font-weight: 700; color: #1F2937; margin-bottom: 4px;">Reglamento Interno UTVT</h3>
                    <p style="font-size: 14px; color: #667085; margin-bottom: 12px;">Consulta el documento oficial con las disposiciones y normas internas de la Universidad.</p>
                    <div class="flex items-center gap-4 mb-4">
                        <span class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs font-medium" style="background-color: #F6F7F9; color: #667085;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                            </svg>
                            Documento oficial
                        </span>
                        <span class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs font-medium" style="background-color: #F6F7F9; color: #667085;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                            </svg>
                            Formato PDF
                        </span>
                    </div>
                    <a href="{{ asset('documents/reglamento/Reglamento-Interno-UTVT.pdf') }}" download class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-semibold transition-opacity hover:opacity-90" style="background-color: #8B1E3F; color: #FFFFFF;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        Descargar PDF
                    </a>
                </div>
            </div>
        </div>

        <!-- Visor PDF -->
        <div class="reglamento-pdf-container" style="width: 100%; height: 900px; margin: 0 auto 24px; background: #ffffff; border: 1px solid #E4E7EC; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
            <iframe
                src="{{ asset('documents/reglamento/Reglamento-Interno-UTVT.pdf') }}"
                title="Reglamento Interno UTVT"
                style="width: 100%; height: 100%; border: none; display: block; margin: 0; padding: 0;"
            ></iframe>
        </div>

        <!-- Tarjeta informativa -->
        <div class="bg-white border border-gray-200 rounded-xl p-5" style="border: 1px solid #E4E7EC; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
            <div class="flex items-start gap-3">
                <div class="flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center" style="background-color: #F7E9ED;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#8B1E3F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                </div>
                <div>
                    <h4 style="font-size: 15px; font-weight: 600; color: #1F2937; margin-bottom: 2px;">Información importante</h4>
                    <p style="font-size: 13px; color: #667085;">Se recomienda consultar este documento para conocer las disposiciones y normas internas de la Universidad Tecnológica del Valle de Toluca.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
