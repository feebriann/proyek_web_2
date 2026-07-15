<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!-- ======================================================= -->
    <!-- 1. FONT & BASE CSS (HARDCORE MODERN)                    -->
    <!-- ======================================================= -->
    <style>
        .impact-font { 
            font-family: Impact, Haettenschweiler, 'Arial Black', sans-serif; 
        }
        
        ::-webkit-scrollbar { 
            width: 8px; 
        }
        ::-webkit-scrollbar-track { 
            background: #050505; 
            border-left: 1px solid #27272a; 
        }
        ::-webkit-scrollbar-thumb { 
            background: #dc2626; 
            border: 1px solid #000; 
            border-radius: 0; 
        }
        ::-webkit-scrollbar-thumb:hover { 
            background: #ff0000; 
        }

        .dark-grunge-bg {
            background-color: #050505 !important;
            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px) !important;
            background-size: 40px 40px !important;
            box-shadow: inset 0 0 150px rgba(0,0,0,0.9); 
        }
        
        .static-noise {
            position: absolute; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
            pointer-events: none; 
            z-index: 1; 
            mix-blend-mode: overlay;
        }

        .scanline {
            width: 100%; 
            height: 3px; 
            background-color: rgba(220, 38, 38, 0.5);
            position: absolute; 
            top: -10%; 
            box-shadow: 0 0 20px rgba(220, 38, 38, 1);
            animation: scan 6s linear infinite; 
            z-index: 50; 
            pointer-events: none; 
            opacity: 0.7;
        }
        
        @keyframes scan { 
            0% { top: -10%; } 
            100% { top: 110%; } 
        }

        .slanted-edge { 
            clip-path: polygon(0 0, 100% 0, 100% calc(100% - 25px), calc(100% - 25px) 100%, 0 100%); 
        }
        
        .slanted-button { 
            clip-path: polygon(15px 0, 100% 0, 100% calc(100% - 15px), calc(100% - 15px) 100%, 0 100%, 0 15px); 
        }

        .glitch-hover:hover {
            animation: glitch-skew 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both infinite;
            background-color: #dc2626; 
            color: #000 !important; 
            border-color: #dc2626 !important; 
            box-shadow: 6px 6px 0px rgba(220,38,38,0.4);
        }
        
        @keyframes glitch-skew {
            0% { transform: skew(0deg); }
            20% { transform: skew(-10deg) translate(-1px, 1px); }
            40% { transform: skew(10deg) translate(1px, -1px); }
            60% { transform: skew(-5deg) translate(-1px, 1px); }
            80% { transform: skew(5deg) translate(1px, -1px); }
            100% { transform: skew(0deg); }
        }

        .tech-barcode {
            background-image: repeating-linear-gradient(to bottom, #3f3f46 0, #3f3f46 2px, transparent 2px, transparent 4px, #3f3f46 4px, #3f3f46 5px, transparent 5px, transparent 8px, #3f3f46 8px, #3f3f46 12px, transparent 12px, transparent 14px);
        }
        
        .warning-stripes {
            background-image: repeating-linear-gradient(-45deg, transparent, transparent 10px, rgba(220, 38, 38, 0.1) 10px, rgba(220, 38, 38, 0.1) 20px);
        }

        .duct-tape {
            background-color: #1a1a1a; 
            background-image: linear-gradient(90deg, rgba(255,0,0,0.1) 10%, transparent 10%, transparent 90%, rgba(255,0,0,0.1) 90%);
            box-shadow: 0 4px 10px rgba(0,0,0,0.8); 
            border: 1px solid #333;
        }
    </style>

    <!-- KONTEN AJAX (HANYA INI YANG DIGANTI SAAT PINDAH HALAMAN) -->
    <div id="pjax-container">
        <div class="py-12 dark-grunge-bg min-h-screen relative overflow-hidden font-sans selection:bg-red-600 selection:text-white">
            
            <div class="static-noise"></div>
            <div class="scanline"></div>

            <!-- Header Indikator Akses -->
            <div class="fixed top-6 right-6 z-50 flex items-center bg-black/90 border border-green-600 px-3 py-1.5 font-mono text-[10px] text-green-500 uppercase tracking-widest shadow-[4px_4px_0_rgba(22,163,74,0.3)] pointer-events-none">
                <span class="w-2 h-2 bg-green-600 rounded-full mr-2 animate-pulse"></span> ACCESS_GRANTED
            </div>

            <!-- Teks Background Ornamen -->
            <div class="absolute inset-0 pointer-events-none z-0 overflow-hidden opacity-30">
                <div class="impact-font absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-[15rem] md:text-[25rem] font-black text-transparent outline-text tracking-tighter whitespace-nowrap opacity-20" style="-webkit-text-stroke: 2px rgba(255, 255, 255, 0.1);">
                    ACCESS
                </div>
                <div class="absolute top-20 right-16 w-8 h-80 tech-barcode opacity-30 transform -skew-y-12"></div>
                <div class="absolute bottom-20 left-16 w-4 h-40 tech-barcode opacity-40"></div>
            </div>

            <!-- Konten Utama Halaman Detail -->
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-4 pb-24">
                
                <!-- TOMBOL BACK -->
                <div class="flex justify-between items-center mb-8">
                    <a href="<?php echo e(route('albums.index')); ?>" class="hardcore-link inline-flex items-center text-zinc-500 hover:text-white font-black text-sm uppercase tracking-widest transition-all bg-black/80 px-6 py-3 border border-zinc-800 slanted-button hover:border-red-600 group">
                        <svg class="w-4 h-4 mr-3 text-red-600 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="square" stroke-linejoin="miter" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        RETURN TO BASE
                    </a>

                    <!-- Tombol Edit Cepat (Hanya Admin) -->
                    <?php if(Auth::check() && Auth::user()->role == 'admin'): ?>
                    <a href="<?php echo e(route('albums.edit', $album->id)); ?>" class="hardcore-link inline-flex items-center text-yellow-500 hover:text-black font-black text-sm uppercase tracking-widest transition-all bg-black/80 px-6 py-3 border border-yellow-500 slanted-button hover:bg-yellow-500">
                        OVERRIDE DATA
                    </a>
                    <?php endif; ?>
                </div>

                <!-- KARTU DETAIL ALBUM UTAMA -->
                <div class="bg-zinc-950/90 backdrop-blur-xl border-2 border-zinc-800 p-6 md:p-10 slanted-edge shadow-[0_30px_60px_rgba(0,0,0,0.9)] relative overflow-hidden">
                    
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-red-600 via-red-900 to-black"></div>
                    <div class="absolute top-1.5 left-0 w-full h-4 warning-stripes opacity-30"></div>

                    <div class="absolute -top-3 right-10 w-20 h-5 duct-tape rotate-3 z-30 opacity-90"></div>
                    <div class="absolute -bottom-3 left-10 w-16 h-5 duct-tape -rotate-2 z-30 opacity-70"></div>

                    <div class="flex flex-col md:flex-row gap-10 mt-6 relative z-20">
                        
                        <!-- BAGIAN KIRI: FOTO COVER -->
                        <div class="w-full md:w-1/3 flex-shrink-0">
                            <div class="relative w-full aspect-square bg-black p-2 border border-zinc-800 slanted-edge group">
                                <div class="absolute inset-0 bg-red-600 mix-blend-color-burn opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10 pointer-events-none"></div>
                                <img src="<?php echo e($album->cover_image); ?>" alt="Cover" class="w-full h-full object-cover filter contrast-125 grayscale group-hover:grayscale-0 transition-all duration-700">
                                
                                <div class="absolute top-0 left-0 w-4 h-4 border-t-2 border-l-2 border-red-600 z-20 m-4"></div>
                                <div class="absolute bottom-0 right-0 w-4 h-4 border-b-2 border-r-2 border-red-600 z-20 m-4"></div>
                            </div>
                        </div>

                        <!-- BAGIAN KANAN: DETAIL INFO & WIDGET SPOTIFY -->
                        <div class="w-full md:w-2/3 flex flex-col justify-center">
                            
                            <div class="flex flex-wrap items-center gap-3 mb-4">
                                <span class="bg-red-600 text-black impact-font px-3 py-1 text-sm tracking-widest uppercase shadow-[3px_3px_0_#450a0a]">
                                    <?php echo e($album->genre); ?>

                                </span>
                                <span class="text-zinc-500 font-mono text-[10px] tracking-[0.3em] uppercase">
                                    // TRK-<?php echo e(sprintf('%04d', $album->id)); ?>

                                </span>
                            </div>

                            <h1 class="impact-font text-5xl md:text-6xl lg:text-7xl text-white uppercase tracking-wide leading-none mb-2 drop-shadow-[4px_4px_0px_rgba(220,38,38,0.4)]">
                                <?php echo e($album->title); ?>

                            </h1>
                            <p class="text-2xl text-zinc-400 font-black uppercase tracking-widest border-l-4 border-red-600 pl-4 mb-8">
                                <?php echo e($album->artist); ?>

                            </p>

                            <div class="grid grid-cols-3 gap-2 mb-8 opacity-70">
                                <div class="bg-black border border-zinc-800 p-2 text-center">
                                    <p class="text-zinc-600 font-mono text-[8px] uppercase tracking-widest mb-1">BITRATE</p>
                                    <p class="text-red-500 font-black text-sm">320 KBPS</p>
                                </div>
                                <div class="bg-black border border-zinc-800 p-2 text-center">
                                    <p class="text-zinc-600 font-mono text-[8px] uppercase tracking-widest mb-1">FREQ</p>
                                    <p class="text-red-500 font-black text-sm">44.1 KHZ</p>
                                </div>
                                <div class="bg-black border border-zinc-800 p-2 text-center">
                                    <p class="text-zinc-600 font-mono text-[8px] uppercase tracking-widest mb-1">STATUS</p>
                                    <p class="text-green-500 font-black text-sm animate-pulse">ONLINE</p>
                                </div>
                            </div>

                            <!-- WIDGET SPOTIFY HARDCORE CONTAINER -->
                            <div class="mt-auto">
                                <label class="impact-font text-zinc-500 tracking-widest text-sm uppercase block mb-3">
                                    > INJECTED_AUDIO_STREAM_
                                </label>

                                <?php if($album->spotify_link): ?>
                                    <?php
                                        // LOGIKA BARU: REGEX BRUTAL UNTUK MENGHANCURKAN LINK APAPUN JADI EMBED
                                        $rawLink = $album->spotify_link;
                                        $embedLink = $rawLink; // Fallback jika gagal
                                        
                                        // Cek jika user mempaste link biasa dari Web/PC/HP
                                        // Ini akan mengambil Tipe (track/album) dan ID unik Spotify-nya
                                        if (preg_match('/(track|album|playlist)\/([a-zA-Z0-9]+)/', $rawLink, $matches)) {
                                            $type = $matches[1];
                                            $id = $matches[2];
                                            $embedLink = "https://open.spotify.com/embed/{$type}/{$id}?utm_source=generator&theme=0";
                                        } 
                                        // Jika user memang sudah paste format embed dari awal, biarkan saja
                                        elseif (strpos($rawLink, '/embed/') !== false) {
                                            $embedLink = $rawLink;
                                        }
                                    ?>

                                    <div class="relative bg-black border-2 border-zinc-800 p-2 slanted-edge group hover:border-red-600 transition-all duration-300 shadow-[0_0_20px_rgba(220,38,38,0.05)] hover:shadow-[0_0_20px_rgba(220,38,38,0.2)]">
                                        <div class="flex justify-between items-center px-4 py-2 border-b border-zinc-800 mb-2">
                                            <span class="text-red-600 font-mono text-[10px] tracking-widest uppercase flex items-center gap-2">
                                                <span class="w-1.5 h-1.5 bg-red-600 rounded-full animate-ping"></span> LIVE_FEED
                                            </span>
                                            <span class="text-zinc-600 font-mono text-[10px] uppercase">
                                                SOURCE: SPOTIFY.SYS
                                            </span>
                                        </div>

                                        <div class="relative w-full overflow-hidden">
                                            <iframe 
                                                style="border-radius:0; filter: contrast(110%);" 
                                                src="<?php echo e($embedLink); ?>" 
                                                width="100%" 
                                                height="152" 
                                                frameBorder="0" 
                                                allowfullscreen="" 
                                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
                                                loading="lazy">
                                            </iframe>
                                            <div class="absolute inset-0 pointer-events-none opacity-10" style="background-image: repeating-linear-gradient(to bottom, transparent, transparent 2px, #000 2px, #000 4px);"></div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="bg-[#050505] border-2 border-dashed border-red-900 p-6 text-center slanted-edge relative overflow-hidden">
                                        <div class="absolute inset-0 warning-stripes opacity-10"></div>
                                        <p class="impact-font text-red-600 text-xl uppercase tracking-widest animate-pulse relative z-10">AUDIO_NOT_FOUND</p>
                                        <p class="text-zinc-600 font-mono text-[10px] uppercase mt-1 relative z-10">No valid Spotify link provided for this track.</p>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ======================================================= -->
                <!-- SYSTEM BARU: USER FEEDBACK & RATING                     -->
                <!-- ======================================================= -->
                <div class="mt-12 bg-zinc-950/90 backdrop-blur-xl border-2 border-zinc-800 p-6 md:p-10 slanted-edge shadow-[0_30px_60px_rgba(0,0,0,0.9)] relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-red-600 via-red-900 to-black"></div>
                    
                    <div class="flex items-center gap-3 mb-8 border-b border-zinc-800 pb-4">
                        <span class="w-3 h-3 bg-red-600 animate-pulse"></span>
                        <h2 class="impact-font text-3xl text-white uppercase tracking-widest drop-shadow-[2px_2px_0px_rgba(220,38,38,0.5)]">USER_FEEDBACK</h2>
                    </div>

                    <!-- FORM TAMBAH RATING (HANYA MUNCUL JIKA SUDAH LOGIN) -->
                    <?php if(auth()->guard()->check()): ?>
                    <form action="<?php echo e(route('reviews.store', $album->id)); ?>" method="POST" class="mb-10 bg-black p-6 border border-zinc-800 slanted-edge relative group focus-within:border-red-600 transition-colors shadow-inner">
                        <?php echo csrf_field(); ?>
                        <div class="absolute top-0 right-0 w-8 h-8 tech-barcode opacity-30 pointer-events-none"></div>
                        <label class="block text-red-600 font-mono text-[10px] tracking-[0.2em] uppercase mb-4">> INITIATE_REVIEW_SEQUENCE</label>
                        
                        <div class="flex flex-col md:flex-row gap-4 mb-4">
                            <!-- Bintang Rating -->
                            <div class="w-full md:w-1/3">
                                <label class="block text-zinc-500 text-[10px] font-black mb-2 uppercase tracking-[0.2em]">RATING_LEVEL</label>
                                <select name="rating" class="w-full bg-zinc-900 border border-zinc-700 text-red-500 font-black p-3 text-sm uppercase focus:border-red-600 focus:ring-0 slanted-edge appearance-none cursor-pointer" required>
                                    <option value="5">⭐⭐⭐⭐⭐ - MASTERPIECE</option>
                                    <option value="4">⭐⭐⭐⭐ - BRUTAL</option>
                                    <option value="3">⭐⭐⭐ - AVERAGE</option>
                                    <option value="2">⭐⭐ - WEAK</option>
                                    <option value="1">⭐ - TRASH</option>
                                </select>
                            </div>
                            
                            <!-- Input Komentar -->
                            <div class="w-full md:w-2/3">
                                <label class="block text-zinc-500 text-[10px] font-black mb-2 uppercase tracking-[0.2em]">LOG_COMMENT</label>
                                <input type="text" name="comment" class="w-full bg-zinc-900 border border-zinc-700 text-white p-3 font-mono text-sm focus:border-red-600 focus:ring-0 slanted-edge placeholder-zinc-700" placeholder="Type your review data here..." required>
                            </div>
                        </div>
                        
                        <button type="submit" class="bg-red-600 text-black font-black py-3 px-8 text-sm uppercase tracking-widest slanted-button glitch-hover shadow-[4px_4px_0px_rgba(220,38,38,0.3)] hover:shadow-none transition-all">
                            SUBMIT_LOG
                        </button>
                    </form>
                    <?php else: ?>
                    <!-- Jika Belum Login -->
                    <div class="mb-10 bg-black p-4 border border-zinc-800 slanted-edge text-center">
                        <p class="text-zinc-500 font-mono text-[10px] uppercase tracking-widest">
                            >> YOU MUST <a href="<?php echo e(route('login')); ?>" class="text-red-500 hover:text-white underline">LOGIN</a> TO SUBMIT FEEDBACK <<
                        </p>
                    </div>
                    <?php endif; ?>

                    <!-- LIST RATING DARI DATABASE -->
                    <div class="space-y-4">
                        <?php $__empty_1 = true; $__currentLoopData = $album->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="bg-black border-l-2 border-zinc-800 hover:border-red-600 p-4 transition-colors relative group slanted-edge">
                            <div class="absolute top-0 right-0 w-2 h-full bg-gradient-to-b from-red-600 to-transparent opacity-0 group-hover:opacity-20 transition-opacity pointer-events-none"></div>
                            
                            <div class="flex justify-between items-start mb-2">
                                <div class="flex items-center gap-2">
                                    <span class="text-red-500 font-black text-sm uppercase drop-shadow-[1px_1px_0px_#450a0a]"><?php echo e($review->user->name); ?></span>
                                    <span class="text-zinc-600 font-mono text-[8px] uppercase tracking-widest"> // LOG_<?php echo e(sprintf('%04d', $review->id)); ?></span>
                                </div>
                                
                                <div class="flex items-center gap-4">
                                    <div class="text-yellow-500 text-xs tracking-widest">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <?php if($i <= $review->rating): ?> ★ <?php else: ?> <span class="text-zinc-800">★</span> <?php endif; ?>
                                        <?php endfor; ?>
                                    </div>

                                    <!-- TOMBOL DELETE (HANYA PEMILIK KOMENTAR ATAU ADMIN) -->
                                    <?php if(Auth::check() && (Auth::id() == $review->user_id || Auth::user()->role == 'admin')): ?>
                                    <form action="<?php echo e(route('reviews.destroy', $review->id)); ?>" method="POST" class="inline" onsubmit="return confirm('WARNING: PURGE THIS LOG DATA?');">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" title="Delete Log" class="text-zinc-600 hover:text-red-600 font-black text-[10px] uppercase transition-colors">
                                            [X]
                                        </button>
                                    </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <p class="text-zinc-300 font-mono text-sm leading-relaxed border-l border-zinc-800 pl-3 ml-1 mt-1">
                                > <?php echo e($review->comment); ?>

                            </p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="text-center py-8 border border-dashed border-zinc-800 slanted-edge bg-black">
                            <p class="text-zinc-600 font-mono text-[10px] uppercase tracking-[0.3em]">NO_DATA_FOUND // BE THE FIRST TO INJECT FEEDBACK.</p>
                        </div>
                        <?php endif; ?>
                    </div>

                </div>
                <!-- END RATING SECTION -->

            </div>
        </div>
    </div> <!-- END PJAX CONTAINER -->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\web-musik\resources\views/albums/show.blade.php ENDPATH**/ ?>