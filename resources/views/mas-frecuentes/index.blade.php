@extends('layouts.dashboard')

@section('title', 'Más Frecuentes')

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

    <div class="relative px-8 py-8 max-w-6xl mx-auto">
        <div class="mb-8 flex items-center justify-between gap-6">
            <div class="flex-1">
                <h1 style="font-size: 28px; font-weight: 700; color: #8B1E3F; letter-spacing: 0.02em; margin-bottom: 4px;">MÁS FRECUENTES</h1>
                <h2 style="font-size: 18px; font-weight: 600; color: #1F2937;">Casos frecuentes en la universidad</h2>
            </div>
            <!-- Contenedor para imagen del campus -->
            <div class="flex-shrink-0 w-48 h-32 rounded-xl overflow-hidden relative" style="border: 1px solid #E4E7EC; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                <img src="{{ asset('images/campus-utvt.png') }}" alt="Campus UTVT" class="w-full h-full object-cover">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Tarjeta 1 -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 transition-all hover:shadow-md" style="border: 1px solid #E4E7EC;">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #F7E9ED;">
                        <span style="font-size: 24px;">🪪</span>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 700; color: #1F2937; line-height: 1.3;">INGRESO SIN CREDENCIAL</h3>
                </div>
                <p style="font-size: 14px; color: #667085; margin-bottom: 16px; line-height: 1.5;">Un alumno intenta ingresar utilizando una credencial que no le pertenece.</p>
                
                <div class="relative w-full aspect-video rounded-lg overflow-hidden mb-4">
                    <video controls class="w-full h-full object-cover">
                        <source src="{{ asset('videos/ingreso-sin-credencial.mov') }}" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
                
                <button class="w-full py-2.5 px-4 rounded-lg text-sm font-semibold transition-all hover:opacity-90" style="background-color: #8B1E3F; color: #FFFFFF;">
                    VER CASO →
                </button>
            </div>

            <!-- Tarjeta 2 -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 transition-all hover:shadow-md" style="border: 1px solid #E4E7EC;">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #F7E9ED;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#8B1E3F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                            <polyline points="10 17 15 12 10 7"></polyline>
                            <line x1="15" y1="12" x2="3" y2="12"></line>
                        </svg>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 700; color: #1F2937; line-height: 1.3;">ACCESO A LA ESCUELA DE UNA PERSONA AJENA</h3>
                </div>
                <p style="font-size: 14px; color: #667085; margin-bottom: 16px; line-height: 1.5;">Situación relacionada con el acceso a la escuela de una persona ajena a la universidad.</p>
                
                <div class="relative w-full aspect-video rounded-lg overflow-hidden mb-4">
                    <video controls class="w-full h-full object-cover">
                        <source src="{{ asset('videos/acceso-persona-ajena.mp4') }}" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
                
                <button class="w-full py-2.5 px-4 rounded-lg text-sm font-semibold transition-all hover:opacity-90" style="background-color: #8B1E3F; color: #FFFFFF;">
                    VER CASO →
                </button>
            </div>

            <!-- Tarjeta 3 -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 transition-all hover:shadow-md" style="border: 1px solid #E4E7EC;">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #F7E9ED;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#8B1E3F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                            <polyline points="10 17 15 12 10 7"></polyline>
                            <line x1="15" y1="12" x2="3" y2="12"></line>
                        </svg>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 700; color: #1F2937; line-height: 1.3;">ACCESO A LA ESCUELA DE UNA PERSONA AJENA</h3>
                </div>
                <p style="font-size: 14px; color: #667085; margin-bottom: 16px; line-height: 1.5;">Situación relacionada con el acceso a la escuela de una persona ajena a la universidad.</p>
                
                <div class="relative w-full aspect-video rounded-lg overflow-hidden mb-4">
                    <video controls class="w-full h-full object-cover">
                        <source src="{{ asset('videos/acceso-persona-ajena.mp4') }}" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
                
                <button class="w-full py-2.5 px-4 rounded-lg text-sm font-semibold transition-all hover:opacity-90" style="background-color: #8B1E3F; color: #FFFFFF;">
                    VER CASO →
                </button>
            </div>

            <!-- Tarjeta 4 -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 transition-all hover:shadow-md" style="border: 1px solid #E4E7EC;">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #F7E9ED;">
                        <span style="font-size: 24px;">🪪</span>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 700; color: #1F2937; line-height: 1.3;">INGRESO SIN CREDENCIAL</h3>
                </div>
                <p style="font-size: 14px; color: #667085; margin-bottom: 16px; line-height: 1.5;">Un alumno intenta ingresar utilizando una credencial que no le pertenece.</p>
                
                <div class="relative w-full aspect-video rounded-lg overflow-hidden mb-4">
                    <video controls class="w-full h-full object-cover">
                        <source src="{{ asset('videos/ingreso-sin-credencial.mov') }}" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
                
                <button class="w-full py-2.5 px-4 rounded-lg text-sm font-semibold transition-all hover:opacity-90" style="background-color: #8B1E3F; color: #FFFFFF;">
                    VER CASO →
                </button>
            </div>

            <!-- Tarjeta 5 -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 transition-all hover:shadow-md" style="border: 1px solid #E4E7EC;">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #F7E9ED;">
                        <span style="font-size: 24px;">🪪</span>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 700; color: #1F2937; line-height: 1.3;">INGRESO SIN CREDENCIAL</h3>
                </div>
                <p style="font-size: 14px; color: #667085; margin-bottom: 16px; line-height: 1.5;">Un alumno intenta ingresar utilizando una credencial que no le pertenece.</p>
                
                <div class="relative w-full aspect-video rounded-lg overflow-hidden mb-4">
                    <video controls class="w-full h-full object-cover">
                        <source src="{{ asset('videos/ingreso-sin-credencial.mov') }}" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
                
                <button class="w-full py-2.5 px-4 rounded-lg text-sm font-semibold transition-all hover:opacity-90" style="background-color: #8B1E3F; color: #FFFFFF;">
                    VER CASO →
                </button>
            </div>

            <!-- Tarjeta 6 -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 transition-all hover:shadow-md" style="border: 1px solid #E4E7EC;">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #F7E9ED;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#8B1E3F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                            <polyline points="10 17 15 12 10 7"></polyline>
                            <line x1="15" y1="12" x2="3" y2="12"></line>
                        </svg>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 700; color: #1F2937; line-height: 1.3;">ACCESO A LA ESCUELA DE UNA PERSONA AJENA</h3>
                </div>
                <p style="font-size: 14px; color: #667085; margin-bottom: 16px; line-height: 1.5;">Situación relacionada con el acceso a la escuela de una persona ajena a la universidad.</p>
                
                <div class="relative w-full aspect-video rounded-lg overflow-hidden mb-4">
                    <video controls class="w-full h-full object-cover">
                        <source src="{{ asset('videos/acceso-persona-ajena.mp4') }}" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
                
                <button class="w-full py-2.5 px-4 rounded-lg text-sm font-semibold transition-all hover:opacity-90" style="background-color: #8B1E3F; color: #FFFFFF;">
                    VER CASO →
                </button>
            </div>

            <!-- Tarjeta 7 -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 transition-all hover:shadow-md" style="border: 1px solid #E4E7EC;">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #F7E9ED;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#8B1E3F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                            <polyline points="10 17 15 12 10 7"></polyline>
                            <line x1="15" y1="12" x2="3" y2="12"></line>
                        </svg>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 700; color: #1F2937; line-height: 1.3;">ACCESO A LA ESCUELA DE UNA PERSONA AJENA</h3>
                </div>
                <p style="font-size: 14px; color: #667085; margin-bottom: 16px; line-height: 1.5;">Situación relacionada con el acceso a la escuela de una persona ajena a la universidad.</p>
                
                <div class="relative w-full aspect-video rounded-lg overflow-hidden mb-4">
                    <video controls class="w-full h-full object-cover">
                        <source src="{{ asset('videos/acceso-persona-ajena.mp4') }}" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
                
                <button class="w-full py-2.5 px-4 rounded-lg text-sm font-semibold transition-all hover:opacity-90" style="background-color: #8B1E3F; color: #FFFFFF;">
                    VER CASO →
                </button>
            </div>

            <!-- Tarjeta 8 -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 transition-all hover:shadow-md" style="border: 1px solid #E4E7EC;">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #F7E9ED;">
                        <span style="font-size: 24px;">🪪</span>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 700; color: #1F2937; line-height: 1.3;">INGRESO SIN CREDENCIAL</h3>
                </div>
                <p style="font-size: 14px; color: #667085; margin-bottom: 16px; line-height: 1.5;">Un alumno intenta ingresar utilizando una credencial que no le pertenece.</p>
                
                <div class="relative w-full aspect-video rounded-lg overflow-hidden mb-4">
                    <video controls class="w-full h-full object-cover">
                        <source src="{{ asset('videos/ingreso-sin-credencial.mov') }}" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
                
                <button class="w-full py-2.5 px-4 rounded-lg text-sm font-semibold transition-all hover:opacity-90" style="background-color: #8B1E3F; color: #FFFFFF;">
                    VER CASO →
                </button>
            </div>

            <!-- Tarjeta 9 -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 transition-all hover:shadow-md" style="border: 1px solid #E4E7EC;">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #F7E9ED;">
                        <span style="font-size: 24px;">🪪</span>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 700; color: #1F2937; line-height: 1.3;">INGRESO SIN CREDENCIAL</h3>
                </div>
                <p style="font-size: 14px; color: #667085; margin-bottom: 16px; line-height: 1.5;">Un alumno intenta ingresar utilizando una credencial que no le pertenece.</p>
                
                <div class="relative w-full aspect-video rounded-lg overflow-hidden mb-4">
                    <video controls class="w-full h-full object-cover">
                        <source src="{{ asset('videos/ingreso-sin-credencial.mov') }}" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
                
                <button class="w-full py-2.5 px-4 rounded-lg text-sm font-semibold transition-all hover:opacity-90" style="background-color: #8B1E3F; color: #FFFFFF;">
                    VER CASO →
                </button>
            </div>

            <!-- Tarjeta 10 -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 transition-all hover:shadow-md" style="border: 1px solid #E4E7EC;">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #F7E9ED;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#8B1E3F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                            <polyline points="10 17 15 12 10 7"></polyline>
                            <line x1="15" y1="12" x2="3" y2="12"></line>
                        </svg>
                    </div>
                    <h3 style="font-size: 17px; font-weight: 700; color: #1F2937; line-height: 1.3;">ACCESO A LA ESCUELA DE UNA PERSONA AJENA</h3>
                </div>
                <p style="font-size: 14px; color: #667085; margin-bottom: 16px; line-height: 1.5;">Situación relacionada con el acceso a la escuela de una persona ajena a la universidad.</p>
                
                <div class="relative w-full aspect-video rounded-lg overflow-hidden mb-4">
                    <video controls class="w-full h-full object-cover">
                        <source src="{{ asset('videos/acceso-persona-ajena.mp4') }}" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
                
                <button class="w-full py-2.5 px-4 rounded-lg text-sm font-semibold transition-all hover:opacity-90" style="background-color: #8B1E3F; color: #FFFFFF;">
                    VER CASO →
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
