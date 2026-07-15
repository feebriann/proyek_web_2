<x-app-layout>
    <style>
        .dark-grunge-bg {
            background-color: #050505;
            background-image: 
                linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .static-noise {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 1;
        }
        .scanline {
            width: 100%; height: 3px; background-color: rgba(220, 38, 38, 0.4);
            position: absolute; top: -10%; box-shadow: 0 0 15px rgba(220, 38, 38, 0.8);
            animation: scan 8s linear infinite; z-index: 50; pointer-events: none;
        }
        @keyframes scan { 0% { top: -10%; } 100% { top: 110%; } }
        
        .slanted-edge { clip-path: polygon(0 0, 100% 0, 100% calc(100% - 25px), calc(100% - 25px) 100%, 0 100%); }
        .slanted-button { clip-path: polygon(20px 0, 100% 0, 100% calc(100% - 20px), calc(100% - 20px) 100%, 0 100%, 0 20px); }
        .glitch-hover:hover {
            animation: glitch-skew 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both infinite;
            background-color: #dc2626; color: white; border-color: white;
            box-shadow: 5px 5px 0px rgba(255,255,255,0.2);
        }
        @keyframes glitch-skew {
            0% { transform: skew(0deg); }
            20% { transform: skew(-15deg) translate(-2px, 2px); }
            40% { transform: skew(15deg) translate(2px, -2px); }
            60% { transform: skew(-5deg) translate(-1px, 1px); }
            80% { transform: skew(5deg) translate(1px, -1px); }
            100% { transform: skew(0deg); }
        }
        .tech-barcode { background-image: repeating-linear-gradient(to bottom, #52525b 0, #52525b 2px, transparent 2px, transparent 4px, #52525b 4px, #52525b 5px, transparent 5px, transparent 8px, #52525b 8px, #52525b 12px, transparent 12px, transparent 14px); }
    </style>

    <div class="py-12 dark-grunge-bg min-h-screen font-sans selection:bg-red-600 selection:text-white relative overflow-hidden">
        <div class="static-noise"></div>
        <div class="scanline"></div>

        <div class="fixed top-6 right-6 z-50 flex items-center bg-black/80 border border-yellow-500 px-3 py-1 font-mono text-[10px] text-yellow-500 uppercase tracking-widest backdrop-blur-sm">
            <span class="w-2 h-2 bg-yellow-500 rounded-full mr-2 animate-pulse"></span> OVERRIDE_MODE
        </div>

        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-4">
            <a href="{{ route('albums.index') }}" class="inline-flex items-center mb-8 text-zinc-500 hover:text-white font-black text-sm uppercase tracking-widest transition-all bg-zinc-900/80 px-4 py-2 border border-zinc-800 slanted-button">
                <svg class="w-4 h-4 mr-2 text-yellow-500" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                ABORT OVERRIDE
            </a>

            <div class="bg-zinc-950/80 backdrop-blur-md border-2 border-zinc-800 p-8 md:p-12 slanted-edge shadow-[0_20px_50px_rgba(0,0,0,0.8)] relative">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-yellow-500 via-red-900 to-transparent"></div>

                <h2 class="text-4xl md:text-5xl text-white font-black uppercase tracking-tighter mb-8 border-b border-zinc-800 pb-6 drop-shadow-[2px_2px_0px_#eab308]">
                    <span class="text-yellow-500 mr-2">>_</span>EDIT TRACK DATA
                </h2>

                <form action="{{ route('albums.update', $album->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-zinc-500 text-[10px] font-black mb-3 uppercase tracking-[0.2em]">Album Title</label>
                            <input type="text" name="title" value="{{ $album->title }}" class="w-full bg-black border-2 border-zinc-800 focus:border-yellow-500 text-white p-4 font-black uppercase transition-colors focus:ring-0 slanted-edge" required>
                        </div>
                        <div>
                            <label class="block text-zinc-500 text-[10px] font-black mb-3 uppercase tracking-[0.2em]">Artist / Band</label>
                            <input type="text" name="artist" value="{{ $album->artist }}" class="w-full bg-black border-2 border-zinc-800 focus:border-yellow-500 text-white p-4 font-black uppercase transition-colors focus:ring-0 slanted-edge" required>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-zinc-500 text-[10px] font-black mb-3 uppercase tracking-[0.2em]">Genre Class</label>
                        <input type="text" name="genre" value="{{ $album->genre }}" class="w-full bg-black border-2 border-zinc-800 focus:border-yellow-500 text-white p-4 font-black uppercase transition-colors focus:ring-0 slanted-edge" required>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-zinc-500 text-[10px] font-black mb-3 uppercase tracking-[0.2em]">Cover Image URL</label>
                        <input type="url" name="cover_image" value="{{ $album->cover_image }}" class="w-full bg-black border-2 border-zinc-800 focus:border-yellow-500 text-white p-4 font-mono transition-colors focus:ring-0 slanted-edge" required placeholder="https://...">
                    </div>

                    <!-- INPUT SPOTIFY LINK -->
                    <div class="mb-10 relative">
                        <label class="block text-red-600 text-[10px] font-black mb-3 uppercase tracking-[0.2em]">
                            > Spotify Track URL
                        </label>
                        <input type="url" name="spotify_link" value="{{ $album->spotify_link }}" class="w-full bg-black border-2 border-zinc-800 focus:border-red-600 text-red-500 p-4 font-mono transition-colors focus:ring-0 slanted-edge shadow-[inset_0_0_15px_rgba(220,38,38,0.15)]" required placeholder="https://open.spotify.com/track/...">
                        <p class="text-zinc-600 font-mono text-[9px] mt-2 uppercase">
                            * Paste link track dari Spotify (Klik tombol Share -> Copy Song Link)
                        </p>
                    </div>
                    
                    <button type="submit" class="w-full bg-yellow-600 text-black font-black py-5 text-xl uppercase tracking-widest slanted-button glitch-hover shadow-[6px_6px_0px_rgba(0,0,0,1)] hover:shadow-none border border-yellow-500 relative overflow-hidden group/btn">
                        <span class="absolute top-0 left-0 w-full h-[2px] bg-white opacity-0 group-hover/btn:opacity-50 group-hover/btn:animate-[scan_1s_linear_infinite]"></span>
                        OVERRIDE DATA
                    </button>
                </form>

                <!-- TOMBOL DELETE DATA (OPSIONAL TAPI KEREN) -->
                <form action="{{ route('albums.destroy', $album->id) }}" method="POST" class="mt-4" onsubmit="return confirm('WARNING: Are you sure you want to permanently delete this track?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full bg-transparent border-2 border-red-900 text-red-600 font-black py-3 text-xs uppercase tracking-widest slanted-button hover:bg-red-900 hover:text-white transition-colors">
                        [ DESTROY FILE ]
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>