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
        
        /* CUSTOM SCROLLBAR HARDCORE */
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

        /* GRID KOTAK-KOTAK ASLI (DIKEMBALIKAN FULL) */
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

        .spin-slow { 
            animation: spin 25s linear infinite; 
        }
        
        @keyframes spin { 
            100% { transform: rotate(360deg); } 
        }

        .slanted-edge { 
            clip-path: polygon(0 0, 100% 0, 100% calc(100% - 20px), calc(100% - 20px) 100%, 0 100%); 
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

        .outline-text { 
            color: transparent; 
            -webkit-text-stroke: 2px rgba(220, 38, 38, 0.15); 
        }
        
        /* BARCODE DAN WARNING STRIPES */
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

        /* AKSESORIS BACKGROUND BARU (SPARKS & CROSSHAIR) */
        .spark-container { 
            position: absolute; 
            width: 100%; 
            height: 100%; 
            top: 0; 
            left: 0; 
            pointer-events: none; 
            z-index: 2; 
            overflow: hidden; 
        }
        
        .spark {
            position: absolute; 
            bottom: -10px; 
            width: 2px; 
            height: 2px; 
            background: #ff0000; 
            border-radius: 50%;
            box-shadow: 0 0 8px 2px #ff0000; 
            animation: fly-up linear infinite;
        }
        
        @keyframes fly-up {
            0% { transform: translateY(0) translateX(0) scale(1); opacity: 1; }
            50% { transform: translateY(-50vh) translateX(20px) scale(1.5); opacity: 0.8; }
            100% { transform: translateY(-120vh) translateX(-20px) scale(0.5); opacity: 0; }
        }

        .cyber-crosshair {
            position: absolute; 
            width: 100px; 
            height: 100px; 
            border: 1px solid rgba(220,38,38,0.2);
            pointer-events: none; 
            z-index: 1; 
            display: flex; 
            justify-content: center; 
            align-items: center;
        }
        
        .cyber-crosshair::before, .cyber-crosshair::after { 
            content: ''; 
            position: absolute; 
            background: rgba(220,38,38,0.3); 
        }
        
        .cyber-crosshair::before { width: 100%; height: 1px; }
        .cyber-crosshair::after { width: 1px; height: 100%; }
        
        .ch-tl { top: 5%; left: 5%; border-right: none; border-bottom: none; }
        .ch-br { bottom: 5%; right: 5%; border-left: none; border-top: none; }
    </style>

    <!-- ======================================================= -->
    <!-- 2. CSS COVER DEPAN, POLICE LINE & TRANISI               -->
    <!-- ======================================================= -->
    <style>
        #horror-splash {
            position: fixed; 
            top: 0; 
            left: 0; 
            width: 100vw; 
            height: 100vh;
            z-index: 999999; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center;
            overflow: hidden; 
            pointer-events: auto;
        }

        /* HUJAN DARAH (BLOOD RAIN) */
        .blood-rain-container {
            position: absolute; 
            width: 100%; 
            height: 100%; 
            top: 0; 
            left: 0;
            overflow: hidden; 
            pointer-events: none; 
            z-index: 3; 
            opacity: 0.6;
        }
        
        .rain-drop {
            position: absolute; 
            top: -150px; 
            width: 2px; 
            height: 100px;
            background: linear-gradient(to bottom, transparent, #dc2626, #7f1d1d);
            animation: rain-fall linear infinite;
        }
        
        @keyframes rain-fall { 
            0% { transform: translateY(0); opacity: 1; } 
            100% { transform: translateY(120vh); opacity: 0; } 
        }

        /* POLICE LINE LURUS HORIZONTAL (DI BELAKANG TOMBOL) */
        .police-tape-horizontal {
            position: absolute; 
            left: 0; 
            width: 100vw; 
            height: 45px;
            background: repeating-linear-gradient(45deg, #050505 0, #050505 25px, #dc2626 25px, #dc2626 50px);
            border-top: 2px solid #ff0000; 
            border-bottom: 2px solid #ff0000;
            display: flex; 
            align-items: center; 
            z-index: 4; 
            overflow: hidden; 
            pointer-events: none;
            box-shadow: 0 0 20px rgba(220,38,38,0.5); 
            opacity: 0.9;
        }
        
        .tape-top { top: 12%; }
        .tape-bottom { bottom: 12%; }
        
        .tape-text-track { 
            display: flex; 
            white-space: nowrap; 
            animation: scroll-tape 25s linear infinite; 
        }
        
        .tape-text-track.reverse { 
            animation: scroll-tape-reverse 25s linear infinite; 
        }
        
        .tape-text {
            color: #fff; 
            font-family: Impact, sans-serif; 
            font-size: 1.2rem; 
            letter-spacing: 8px;
            font-weight: 900; 
            text-transform: uppercase; 
            padding-right: 40px; 
            text-shadow: 2px 2px 0px #000;
        }
        
        @keyframes scroll-tape { 
            0% { transform: translateX(0); } 
            100% { transform: translateX(-50%); } 
        }
        
        @keyframes scroll-tape-reverse { 
            0% { transform: translateX(-50%); } 
            100% { transform: translateX(0); } 
        }

        /* LOGO GLITCH MODERN (VERSI TERBAIK) */
        .blood-glitch-text {
            font-size: 6rem; 
            font-weight: 900; 
            text-transform: uppercase; 
            letter-spacing: 10px;
            color: #ff0000; 
            position: relative; 
            text-shadow: 0 0 20px rgba(220,38,38,0.8);
            margin-bottom: 2rem; 
            z-index: 20; 
            text-align: center; 
            line-height: 1; 
            pointer-events: none;
            animation: dead-lamp-flicker 2.5s infinite; 
            font-family: sans-serif;
        }
        
        @media (min-width: 768px) { 
            .blood-glitch-text { font-size: 11rem; } 
        }
        
        .blood-glitch-text::before, .blood-glitch-text::after {
            content: attr(data-text); 
            position: absolute; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
            background: transparent; 
            color: #ff0000;
        }
        
        .blood-glitch-text::before { 
            left: 4px; 
            text-shadow: -3px 0 #7f1d1d; 
            clip-path: polygon(0 0, 100% 0, 100% 35%, 0 35%); 
            animation: blood-glitch-anim 0.4s infinite linear alternate-reverse; 
        }
        
        .blood-glitch-text::after { 
            left: -4px; 
            text-shadow: 3px 0 #000; 
            clip-path: polygon(0 65%, 100% 65%, 100% 100%, 0 100%); 
            animation: blood-glitch-anim 0.3s infinite linear alternate-reverse; 
        }

        @keyframes dead-lamp-flicker {
            0%, 19.999%, 22%, 62.999%, 64%, 64.999%, 70%, 100% { 
                opacity: 1; 
                text-shadow: 0 0 30px #ff0000, 0 0 60px #8a0303; 
            }
            20%, 21.999%, 63%, 63.999%, 65%, 69.999% { 
                opacity: 0.3; 
                text-shadow: none; 
            }
        }
        
        @keyframes blood-glitch-anim {
            0% { clip-path: inset(20% 0 80% 0); transform: translateX(-3px); }
            100% { clip-path: inset(50% 0 30% 0); transform: translateX(3px); }
        }

        /* TOMBOL MASUK DENGAN Z-INDEX TERTINGGI */
        .horror-btn {
            background-color: #050505; 
            color: #dc2626; 
            font-size: 1.2rem; 
            font-weight: 900; 
            letter-spacing: 6px;
            padding: 1.2rem 3rem; 
            border: 2px solid #dc2626; 
            position: relative; 
            cursor: pointer; 
            z-index: 9999 !important; 
            pointer-events: auto !important;
            box-shadow: inset 0 0 15px rgba(220,38,38,0.2), 0 0 15px rgba(220,38,38,0.4);
            transition: all 0.2s; 
            clip-path: polygon(15px 0, 100% 0, 100% calc(100% - 15px), calc(100% - 15px) 100%, 0 100%, 0 15px);
        }
        
        .horror-btn:hover {
            animation: glitch-skew 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both infinite;
            background-color: #dc2626; 
            color: #000; 
            border-color: #ff0000; 
            box-shadow: 0 0 30px #ff0000;
        }

        .brutal-smash-anim { 
            animation: gore-smash 1s cubic-bezier(0.8, 0, 0.2, 1) forwards !important; 
            pointer-events: none; 
        }
        
        @keyframes gore-smash {
            0% { transform: scale(1); opacity: 1; filter: contrast(1); }
            30% { transform: scale(1.2) translate(-10px, 10px) skewX(20deg); background-color: #8a0303; filter: contrast(3); }
            100% { transform: scale(15); opacity: 0; display: none; }
        }

        /* LAYAR LOADING MODERN */
        #page-transition-overlay {
            position: fixed; 
            inset: 0; 
            z-index: 9999999; 
            background: rgba(0,0,0,0.95); 
            pointer-events: none;
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
            align-items: center;
            opacity: 0; 
            visibility: hidden; 
            transition: opacity 0.2s; 
            backdrop-filter: blur(10px);
        }
        
        #page-transition-overlay.active { 
            opacity: 1; 
            visibility: visible; 
            pointer-events: auto; 
        }
        
        .loading-glitch-text {
            color: #dc2626; 
            font-size: 2.5rem; 
            letter-spacing: 12px; 
            text-transform: uppercase; 
            font-family: Impact, sans-serif;
            margin-bottom: 20px; 
            text-shadow: 0 0 15px #dc2626; 
            animation: loading-flicker 0.1s infinite;
        }
        
        @keyframes loading-flicker { 
            0%, 100% { opacity: 1; transform: translateX(2px); } 
            50% { opacity: 0.7; transform: translateX(-2px); } 
        }

        .loading-bar-container { 
            width: 300px; 
            height: 4px; 
            background: #1a0505; 
            border: 1px solid #7f1d1d; 
            position: relative; 
            overflow: hidden; 
            box-shadow: 0 0 10px #dc2626; 
        }
        
        .loading-bar-fill { 
            height: 100%; 
            background: #ff0000; 
            width: 0%; 
            animation: fill-bar 0.8s cubic-bezier(0.8, 0, 0.2, 1) forwards; 
        }
        
        @keyframes fill-bar { 
            0% { width: 0%; } 
            40% { width: 60%; } 
            100% { width: 100%; } 
        }

        /* LIVE AUDIO EQUALIZER */
        .eq-container { 
            display: flex; 
            align-items: flex-end; 
            gap: 2px; 
            height: 10px; 
            margin-left: 5px; 
        }
        
        .eq-bar { 
            width: 3px; 
            background-color: #dc2626; 
            height: 2px; 
            transition: height 0.1s; 
        }
        
        .is-playing .eq-bar { 
            animation: eq-bounce 0.5s infinite alternate; 
        }
        
        .is-playing .eq-bar:nth-child(1) { animation-delay: 0.1s; }
        .is-playing .eq-bar:nth-child(2) { animation-delay: 0.3s; }
        .is-playing .eq-bar:nth-child(3) { animation-delay: 0.0s; }
        .is-playing .eq-bar:nth-child(4) { animation-delay: 0.2s; }
        
        @keyframes eq-bounce { 
            0% { height: 2px; } 
            100% { height: 10px; } 
        }

        /* MUSIC SLIDER */
        input[type=range].hc-slider { 
            -webkit-appearance: none; 
            width: 100%; 
            background: transparent; 
        }
        
        input[type=range].hc-slider::-webkit-slider-thumb { 
            -webkit-appearance: none; 
            height: 12px; 
            width: 6px; 
            background: #dc2626; 
            cursor: pointer; 
            border: 1px solid #000; 
            margin-top: -4px; 
        }
        
        input[type=range].hc-slider::-webkit-slider-runnable-track { 
            width: 100%; 
            height: 4px; 
            cursor: pointer; 
            background: #27272a; 
            border: 1px solid #000; 
        }
    </style>

    <!-- ======================================================= -->
    <!-- 3. SPLASH SCREEN (COVER DEPAN)                          -->
    <!-- ======================================================= -->
    <div id="horror-splash" class="dark-grunge-bg border-[10px] border-zinc-900">
        
        <!-- ELEMEN BACKGROUND FULL DIKEMBALIKAN (Z-INDEX 0) -->
        <div class="absolute inset-0 pointer-events-none z-0 overflow-hidden opacity-50">
            <div class="impact-font absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-[15rem] md:text-[25rem] font-black outline-text tracking-tighter whitespace-nowrap">
                LOUDER!
            </div>
            
            <div class="impact-font absolute top-1/2 right-0 transform translate-x-1/2 -translate-y-1/2 -rotate-90 text-zinc-900 font-black text-6xl md:text-9xl tracking-[0.2em] whitespace-nowrap">
                FEEDBACK
            </div>
            
            <div class="absolute -bottom-40 -left-40 opacity-20 spin-slow">
                <svg class="w-[40rem] h-[40rem] text-red-900" fill="none" stroke="currentColor" stroke-width="0.5" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="48" stroke-dasharray="2 4"></circle>
                    <circle cx="50" cy="50" r="40" stroke-width="1"></circle>
                    <circle cx="50" cy="50" r="38" stroke-dasharray="10 5"></circle>
                    <circle cx="50" cy="50" r="25" stroke-dasharray="1 3"></circle>
                    <path d="M50 0v100M0 50h100M15 15l70 70M15 85l70-70" opacity="0.3"></path>
                    <circle cx="50" cy="50" r="5" fill="currentColor"></circle>
                </svg>
            </div>
            
            <div class="absolute top-32 left-10 text-zinc-600 font-mono text-[9px] leading-tight flex flex-col items-end opacity-70">
                <span>0xFF19 0xAA2B 0x00FF</span>
                <span>0x1A2B 0xCC4D 0x19AA</span>
                <span class="text-red-700">DATA_STREAM_ACTIVE</span>
                <span>SYS_TEMP: 85°C [WARN]</span>
                <span class="w-24 h-[1px] bg-red-900 mt-2"></span>
            </div>
            
            <div class="absolute bottom-32 right-10 text-zinc-600 font-mono text-[9px] leading-tight flex flex-col items-start opacity-70">
                <span class="w-24 h-[1px] bg-red-900 mb-2"></span>
                <span>AUDIO_OUTPUT: OVERDRIVE</span>
                <span>BASS_LVL: MAX</span>
                <span>0x99BB 0x11FF 0xAA22</span>
            </div>
            
            <div class="absolute top-20 right-16 w-8 h-80 tech-barcode opacity-40 transform -skew-y-12"></div>
            <div class="absolute bottom-20 left-16 w-4 h-40 tech-barcode opacity-50"></div>
            <div class="absolute top-0 left-0 w-6 h-full warning-stripes border-r border-red-900/30"></div>
            <div class="absolute top-0 right-0 w-6 h-full warning-stripes border-l border-red-900/30"></div>
        </div>

        <div class="static-noise"></div>
        <div class="scanline"></div>

        <!-- Hujan Darah di Latar Belakang -->
        <div class="blood-rain-container">
            <div class="rain-drop" style="left: 10%; animation-duration: 0.5s; animation-delay: 0.1s;"></div>
            <div class="rain-drop" style="left: 20%; animation-duration: 0.8s; animation-delay: 0.4s; opacity: 0.6;"></div>
            <div class="rain-drop" style="left: 35%; animation-duration: 0.6s; animation-delay: 0.2s;"></div>
            <div class="rain-drop" style="left: 55%; animation-duration: 0.7s; animation-delay: 0.6s; opacity: 0.8;"></div>
            <div class="rain-drop" style="left: 70%; animation-duration: 0.5s; animation-delay: 0.8s;"></div>
            <div class="rain-drop" style="left: 85%; animation-duration: 0.9s; animation-delay: 0.3s; opacity: 0.5;"></div>
            <div class="rain-drop" style="left: 95%; animation-duration: 0.6s; animation-delay: 0.7s;"></div>
        </div>

        <!-- POLICE LINE LURUS DI ATAS DAN BAWAH -->
        <div class="police-tape-horizontal tape-top pointer-events-none">
            <div class="tape-text-track">
                <span class="tape-text">DO NOT CROSS // FATAL DISTORTION // SYSTEM FAILURE // SEVERE DANGER // </span>
                <span class="tape-text">DO NOT CROSS // FATAL DISTORTION // SYSTEM FAILURE // SEVERE DANGER // </span>
            </div>
        </div>
        
        <div class="police-tape-horizontal tape-bottom pointer-events-none">
            <div class="tape-text-track reverse">
                <span class="tape-text">OVERRIDE PROTOCOL // HARDCORE ACCESS // AUTHORIZED PERSONNEL ONLY // </span>
                <span class="tape-text">OVERRIDE PROTOCOL // HARDCORE ACCESS // AUTHORIZED PERSONNEL ONLY // </span>
            </div>
        </div>
        
        <!-- Teks Tengah dan Tombol -->
        <div style="position: relative; z-index: 20; display: flex; flex-direction: column; align-items: center; width: 100%;">
            <div class="impact-font pointer-events-none" style="color: #dc2626; font-size: 1rem; letter-spacing: 12px; background: rgba(0,0,0,0.8); padding: 5px 20px; border: 1px solid #dc2626; margin-bottom: 30px; box-shadow: 0 0 10px rgba(220,38,38,0.5);">
                [ SECURITY_BREACH ]
            </div>
            
            <h1 class="blood-glitch-text pointer-events-none" data-text="SACRIFICE">
                SACRIFICE
            </h1>
            
            <!-- TOMBOL KLIK AMAN -->
            <button id="enter-btn" class="horror-btn impact-font mt-4">
                BLEED THE SYSTEM
            </button>
        </div>
    </div>

    <!-- OVERLAY TRANSISI PINDAH HALAMAN -->
    <div id="page-transition-overlay">
        <div class="loading-glitch-text impact-font">SYSTEM_OVERRIDE</div>
        <div class="loading-bar-container">
            <div class="loading-bar-fill"></div>
        </div>
        <div class="impact-font" style="color: #ef4444; font-size: 10px; margin-top: 12px; letter-spacing: 6px; animation: pulse 0.5s infinite;">
            FETCHING_DATA_BLOCKS...
        </div>
    </div>

    <!-- ======================================================= -->
    <!-- 4. KODINGAN UTAMA KATALOG (PJAX CONTAINER AJAIB)        -->
    <!-- ======================================================= -->
    <div id="pjax-container">
        <div class="py-12 dark-grunge-bg min-h-screen relative overflow-hidden font-sans selection:bg-red-600 selection:text-white">
            
            <div class="static-noise"></div>
            <div class="scanline"></div>

            <!-- AKSESORIS BACKGROUND BARU (SPARKS & CROSSHAIR) -->
            <div class="cyber-crosshair ch-tl"></div>
            <div class="cyber-crosshair ch-br"></div>
            <div class="spark-container">
                <div class="spark" style="left: 15%; animation-duration: 4s; animation-delay: 0s;"></div>
                <div class="spark" style="left: 30%; animation-duration: 6s; animation-delay: 2s;"></div>
                <div class="spark" style="left: 50%; animation-duration: 5s; animation-delay: 1s;"></div>
                <div class="spark" style="left: 75%; animation-duration: 7s; animation-delay: 3s;"></div>
                <div class="spark" style="left: 90%; animation-duration: 4.5s; animation-delay: 0.5s;"></div>
            </div>

            <!-- Header Indikator Live -->
            <div class="fixed top-6 right-6 z-50 flex items-center bg-black/90 border border-red-600 px-3 py-1.5 font-mono text-[10px] text-red-500 uppercase tracking-widest shadow-[4px_4px_0_rgba(220,38,38,0.3)] pointer-events-none">
                <span class="w-2 h-2 bg-red-600 rounded-full mr-2 animate-ping"></span> REC • LIVE
            </div>

            <!-- ELEMEN BACKGROUND FULL (Z-INDEX 0) -->
            <div class="absolute inset-0 pointer-events-none z-0 overflow-hidden">
                <div class="impact-font absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-[15rem] md:text-[25rem] font-black outline-text tracking-tighter whitespace-nowrap opacity-50">
                    LOUDER!
                </div>
                
                <div class="impact-font absolute top-1/2 right-0 transform translate-x-1/2 -translate-y-1/2 -rotate-90 text-zinc-900 font-black text-6xl md:text-9xl tracking-[0.2em] whitespace-nowrap">
                    FEEDBACK
                </div>
                
                <div class="absolute -bottom-40 -left-40 opacity-10 spin-slow">
                    <svg class="w-[40rem] h-[40rem] text-red-900" fill="none" stroke="currentColor" stroke-width="0.5" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="48" stroke-dasharray="2 4"></circle>
                        <circle cx="50" cy="50" r="40" stroke-width="1"></circle>
                        <circle cx="50" cy="50" r="38" stroke-dasharray="10 5"></circle>
                        <circle cx="50" cy="50" r="25" stroke-dasharray="1 3"></circle>
                        <path d="M50 0v100M0 50h100M15 15l70 70M15 85l70-70" opacity="0.3"></path>
                        <circle cx="50" cy="50" r="5" fill="currentColor"></circle>
                    </svg>
                </div>
                
                <div class="absolute top-32 left-10 text-zinc-700 font-mono text-[9px] leading-tight flex flex-col items-end opacity-60">
                    <span>0xFF19 0xAA2B 0x00FF</span>
                    <span>0x1A2B 0xCC4D 0x19AA</span>
                    <span class="text-red-800">DATA_STREAM_ACTIVE</span>
                    <span>SYS_TEMP: 85°C [WARN]</span>
                    <span class="w-24 h-[1px] bg-red-900 mt-2"></span>
                </div>
                
                <div class="absolute bottom-32 right-10 text-zinc-700 font-mono text-[9px] leading-tight flex flex-col items-start opacity-60">
                    <span class="w-24 h-[1px] bg-red-900 mb-2"></span>
                    <span>AUDIO_OUTPUT: OVERDRIVE</span>
                    <span>BASS_LVL: MAX</span>
                    <span>0x99BB 0x11FF 0xAA22</span>
                </div>
                
                <div class="absolute top-20 right-16 w-8 h-80 tech-barcode opacity-30 transform -skew-y-12"></div>
                <div class="absolute bottom-20 left-16 w-4 h-40 tech-barcode opacity-40"></div>
                <div class="absolute top-0 left-0 w-6 h-full warning-stripes border-r border-red-900/30"></div>
                <div class="absolute top-0 right-0 w-6 h-full warning-stripes border-l border-red-900/30"></div>
            </div>

            <!-- Konten Utama Halaman -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-10">
                
                <!-- MENU AUTHENTICATION (LOGIN/REGISTER) -->
                <div class="flex justify-end gap-4 mb-8 relative z-50">
                    <?php if(auth()->guard()->guest()): ?>
                        <a href="<?php echo e(route('login')); ?>" class="slanted-button bg-black border border-red-600 text-red-600 px-8 py-2.5 font-black uppercase text-xs tracking-widest hover:bg-red-600 hover:text-black transition-colors shadow-[4px_4px_0_rgba(220,38,38,0.3)]">
                            LOGIN
                        </a>
                        <a href="<?php echo e(route('register')); ?>" class="slanted-button bg-red-600 text-black border border-red-600 px-8 py-2.5 font-black uppercase text-xs tracking-widest glitch-hover transition-colors shadow-[4px_4px_0_rgba(220,38,38,0.3)]">
                            CREATE_ACCOUNT
                        </a>
                    <?php endif; ?>
                    
                    <?php if(auth()->guard()->check()): ?>
                        <div class="flex items-center gap-4">
                            <div class="text-red-500 font-mono text-[10px] border border-red-900 px-5 py-2.5 bg-black/80 uppercase tracking-widest flex items-center gap-2 shadow-[4px_4px_0_rgba(220,38,38,0.2)]">
                                <span class="w-1.5 h-1.5 bg-red-500 rounded-full animate-pulse"></span>
                                USER: <?php echo e(Auth::user()->name); ?> 
                                <?php if(Auth::check() && Auth::user()->role == 'admin'): ?> 
                                    <span class="text-white ml-1">[ADMIN]</span> 
                                <?php endif; ?>
                            </div>
                            <form method="POST" action="<?php echo e(route('logout')); ?>" class="m-0">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="slanted-button bg-zinc-950 border border-zinc-800 text-zinc-500 px-6 py-2.5 font-black uppercase text-[10px] tracking-widest hover:bg-red-600 hover:text-black hover:border-red-600 transition-colors">
                                    DISCONNECT
                                </button>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- DASHBOARD HEADER -->
                <div class="flex flex-col md:flex-row justify-between items-end mb-10 border-b-2 border-zinc-800 pb-8 relative z-50">
                    <div class="absolute -top-2 -left-2 w-4 h-4 border-t-2 border-l-2 border-red-600 pointer-events-none"></div>
                    <div class="absolute -bottom-2 -right-2 w-4 h-4 border-b-2 border-r-2 border-red-600 pointer-events-none"></div>

                    <div class="relative pl-6">
                        <div class="absolute left-0 top-0 w-1.5 h-full bg-red-600 pointer-events-none"></div>
                        <div class="absolute left-2.5 top-0 w-0.5 h-full bg-red-600/50 pointer-events-none"></div>
                        
                        <div class="text-red-600 font-mono text-[10px] tracking-[0.4em] mb-2 flex items-center uppercase pointer-events-none">
                            AUDIO PROTOCOL // ENGAGED // DISTORTION: ON
                            <div class="ml-3 flex gap-0.5 opacity-70">
                                <div class="w-1 h-2 bg-red-600"></div>
                                <div class="w-1 h-3 bg-red-600"></div>
                                <div class="w-1 h-1 bg-red-600"></div>
                            </div>
                        </div>
                        
                        <h2 class="impact-font font-black text-6xl md:text-7xl text-white uppercase tracking-wide drop-shadow-[3px_3px_0px_rgba(220,38,38,0.8)] pointer-events-none">
                            THE UNDERGROUND
                        </h2>
                    </div>

                    <?php if(Auth::check() && Auth::user()->role == 'admin'): ?>
                    <a href="<?php echo e(route('albums.create')); ?>" class="hardcore-link mt-8 md:mt-0 slanted-button relative inline-flex items-center justify-center px-10 py-5 font-black text-white bg-zinc-950 border-2 border-red-600 uppercase tracking-widest transition-all glitch-hover group hover:scale-105 shadow-[6px_6px_0px_rgba(220,38,38,0.2)] hover:shadow-none">
                        <span class="absolute right-2 top-2 text-[8px] text-zinc-600 font-mono group-hover:text-black">REC_</span>
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="square" stroke-linejoin="miter" d="M12 4v16m8-8H4"></path>
                        </svg>
                        ADD NEW TRACK
                    </a>
                    <?php endif; ?>
                </div>

                <!-- MARQUEE INFO BAR -->
                <div class="mb-12 bg-black/80 backdrop-blur-md border border-zinc-800 p-3 flex flex-wrap items-center gap-4 slanted-edge relative shadow-[0_10px_30px_rgba(0,0,0,0.8)] z-30">
                    <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-red-600 via-red-900 to-transparent pointer-events-none"></div>
                    <div class="text-zinc-500 font-mono text-xs overflow-hidden whitespace-nowrap flex-1 px-4 pointer-events-none">
                        <marquee scrollamount="12" class="tracking-[0.2em] uppercase">
                            [ SYSTEM OVERRIDE ] WARNING: HIGH VOLUME LEVELS DETECTED... NOISE REDUCTION DISABLED... ANALYZING FREQUENCY... AMPLIFIER SET TO MAXIMUM... MOSH PIT PROTOCOL INITIATED...
                        </marquee>
                    </div>
                    <div class="text-right text-zinc-400 font-black text-xs uppercase tracking-widest border-l border-zinc-800 pl-6 flex items-center pointer-events-none">
                        ARCHIVED: 
                        <span class="text-white bg-red-600 px-3 py-1 text-sm ml-3 shadow-[0_0_10px_rgba(220,38,38,0.5)]">
                            <?php echo e($albums->count()); ?>

                        </span>
                    </div>
                </div>

                <!-- GRID KARTU ALBUM -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 relative z-50">
                    <?php $__empty_1 = true; $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="group relative bg-[#0a0a0a] border border-zinc-800 p-2 transition-all duration-300 hover:border-red-600 flex flex-col h-full slanted-edge hover:-translate-y-2 hover:shadow-[0_15px_30px_rgba(220,38,38,0.15)] hover:bg-[#0f0f0f]">
                        
                        <!-- Duct Tape Decor -->
                        <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-16 h-4 duct-tape rotate-2 z-30 opacity-90 transition-transform group-hover:-rotate-1 pointer-events-none"></div>
                        <div class="absolute -bottom-2 right-4 w-10 h-4 duct-tape -rotate-3 z-30 opacity-70 pointer-events-none"></div>

                        <div class="relative w-full h-60 mb-4 bg-black overflow-hidden slanted-edge border border-zinc-900 pointer-events-none">
                            <div class="absolute inset-0 bg-red-600 mix-blend-color-burn opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10"></div>
                            <img src="<?php echo e($album->cover_image); ?>" alt="Cover" class="w-full h-full object-cover filter contrast-125 grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-500">
                            
                            <div class="impact-font absolute top-2 right-0 z-20 bg-white text-black text-[10px] px-3 py-1.5 uppercase tracking-widest border border-black transform translate-x-1 group-hover:-translate-x-1 transition-transform shadow-[3px_3px_0px_rgba(220,38,38,1)]">
                                <?php echo e($album->genre); ?>

                            </div>
                        </div>

                        <div class="flex-grow flex flex-col px-3 pb-2 relative">
                            <div class="text-zinc-600 text-[8px] font-black mb-2 tracking-[0.2em] uppercase flex justify-between border-b border-zinc-800 pb-2 pointer-events-none">
                                <span>[TRK-<?php echo e(sprintf('%03d', $album->id)); ?>]</span>
                                <div class="flex gap-2 items-center">
                                    <span class="text-zinc-500">BPM: 120</span>
                                    <span class="text-red-700 font-mono flex items-center gap-1">
                                        <span class="w-1 h-1 bg-red-600 rounded-full animate-ping"></span>RAW
                                    </span>
                                </div>
                            </div>
                            
                            <h3 class="impact-font text-white text-xl uppercase leading-none mb-1.5 mt-1 tracking-wider drop-shadow-[1px_1px_0px_#dc2626] pointer-events-none">
                                <span class="text-zinc-700 font-mono text-xs mr-1">></span><?php echo e($album->title); ?>

                            </h3>
                            
                            <p class="text-zinc-400 text-xs mb-5 font-bold uppercase truncate tracking-wide pointer-events-none" title="<?php echo e($album->artist); ?>">
                                <?php echo e($album->artist); ?>

                            </p>
                            
                            <!-- Tombol Aksi di Kartu -->
                            <div class="mt-auto flex gap-2 w-full z-50">
                                <a href="<?php echo e(route('albums.show', $album->id)); ?>" class="hardcore-link flex-[2] text-center bg-transparent border border-zinc-700 text-zinc-300 py-3 font-black text-[10px] uppercase tracking-widest transition-all duration-200 glitch-hover slanted-button relative overflow-hidden group/btn">
                                    <span class="absolute top-0 left-0 w-full h-[1px] bg-white opacity-0 group-hover/btn:opacity-50 group-hover/btn:animate-[scan_1s_linear_infinite] pointer-events-none"></span>
                                    ACCESS
                                </a>
                                
                                <?php if(Auth::check() && Auth::user()->role == 'admin'): ?>
                                <a href="<?php echo e(route('albums.edit', $album->id)); ?>" class="hardcore-link flex-1 text-center bg-zinc-950 border border-zinc-800 text-zinc-500 py-3 px-4 font-black text-[10px] uppercase tracking-widest transition-all duration-200 hover:bg-zinc-800 hover:text-red-500 hover:border-red-900 slanted-button">
                                    EDIT
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <!-- Tampilan Jika Kosong -->
                    <div class="col-span-full py-24 flex flex-col items-center justify-center border-2 border-dashed border-zinc-800 bg-[#050505] z-20 slanted-edge relative shadow-xl pointer-events-none">
                        <svg class="w-20 h-20 text-red-600 mb-4 relative z-10 filter drop-shadow-[0_0_10px_rgba(220,38,38,0.3)]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="square" stroke-linejoin="miter" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                        <p class="impact-font text-zinc-300 text-4xl md:text-5xl uppercase tracking-widest mb-2 relative z-10">
                            ARCHIVE EMPTY
                        </p>
                        <p class="text-zinc-600 font-mono text-[10px] uppercase tracking-[0.3em] relative z-10">
                            NO AUDIO SIGNALS DETECTED.
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div> 
    <!-- END PJAX CONTAINER -->

    <!-- ======================================================= -->
    <!-- 5. COMPACT MUSIC PLAYER (DI LUAR PJAX - ANTI MATI)      -->
    <!-- ======================================================= -->
    <div id="hc-player" style="position: fixed; bottom: 24px; right: 24px; width: 240px; background-color: rgba(5, 5, 5, 0.95); backdrop-filter: blur(10px); border: 1px solid #dc2626; z-index: 9999; clip-path: polygon(0 0, 100% 0, 100% calc(100% - 15px), calc(100% - 15px) 100%, 0 100%); box-shadow: 4px 4px 0px rgba(220,38,38,0.2); display: flex; flex-direction: column; font-family: monospace;">
        
        <div style="height: 3px; width: 100%; background-image: repeating-linear-gradient(-45deg, transparent, transparent 10px, rgba(220, 38, 38, 0.5) 10px, rgba(220, 38, 38, 0.5) 20px);"></div>
        
        <div style="padding: 14px; position: relative;">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid #1f1f1f; padding-bottom: 6px;">
                <div style="display: flex; align-items: center; gap: 6px;">
                    <div id="status-dot" style="width: 5px; height: 5px; background-color: #dc2626; box-shadow: 0 0 5px #dc2626;"></div>
                    <span style="color: #dc2626; font-size: 8px; letter-spacing: 0.1em; font-weight: 900; text-transform: uppercase;">AUDIO.SYS</span>
                </div>
                
                <div id="eq-viz" class="eq-container">
                    <div class="eq-bar"></div>
                    <div class="eq-bar"></div>
                    <div class="eq-bar"></div>
                    <div class="eq-bar"></div>
                </div>
            </div>

            <div style="border-left: 2px solid #dc2626; padding-left: 8px; margin-bottom: 12px;">
                <div style="color: #71717a; font-size: 7px; margin-bottom: 2px; font-weight: bold; letter-spacing: 0.1em; text-transform: uppercase; display: flex; justify-content: space-between;">
                    <span>TRACK</span>
                    <span id="track-counter" style="color: #000; background-color: #dc2626; padding: 0 4px; font-weight: 900;">1/4</span>
                </div>
                <div id="track-title" class="impact-font" style="color: #fff; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                    [ STANDBY ]
                </div>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; gap: 6px; margin-bottom: 12px;">
                <button id="btn-prev" style="flex: 1; background-color: #111; border: 1px solid #333; color: #a1a1aa; padding: 6px 0; font-weight: 900; font-size: 9px; cursor: pointer; clip-path: polygon(8px 0, 100% 0, calc(100% - 8px) 100%, 0 100%); transition: 0.2s;">
                    &lt;&lt;
                </button>
                <button id="btn-play" style="flex: 2; background-color: #dc2626; color: #000; border: 1px solid #dc2626; padding: 6px 0; font-weight: 900; font-size: 10px; text-transform: uppercase; letter-spacing: 0.1em; cursor: pointer; box-shadow: 2px 2px 0px rgba(220,38,38,0.4); clip-path: polygon(8px 0, 100% 0, calc(100% - 8px) 100%, 0 100%); transition: 0.2s;">
                    PLAY
                </button>
                <button id="btn-next" style="flex: 1; background-color: #111; border: 1px solid #333; color: #a1a1aa; padding: 6px 0; font-weight: 900; font-size: 9px; cursor: pointer; clip-path: polygon(8px 0, 100% 0, calc(100% - 8px) 100%, 0 100%); transition: 0.2s;">
                    &gt;&gt;
                </button>
            </div>

            <div style="display: flex; align-items: center; gap: 6px; background-color: #050505; padding: 5px; border: 1px solid #1f1f1f; position: relative;">
                <div style="position: absolute; left: 0; top: 0; width: 3px; height: 100%; background-color: #dc2626;"></div>
                <span style="color: #71717a; font-size: 7px; font-weight: 900; letter-spacing: 0.1em; padding-left: 4px;">VOL</span>
                <input type="range" id="vol-slider" min="0" max="1" step="0.05" value="0.4" class="hc-slider" style="pointer-events: auto;">
            </div>
        </div>
    </div>

    <!-- ======================================================= -->
    <!-- 6. LOGIKA JAVASCRIPT & AJAX SEAMLESS MUSIC              -->
    <!-- ======================================================= -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            const splashScreen = document.getElementById("horror-splash");
            const btnEnter = document.getElementById("enter-btn");

            const playlist = [
                { title: "> BGM_TRK_01", file: "<?php echo e(asset('audio/lagu1.mp3')); ?>" },
                { title: "> BGM_TRK_02", file: "<?php echo e(asset('audio/lagu2.mp3')); ?>" },
                { title: "> BGM_TRK_03", file: "<?php echo e(asset('audio/lagu3.mp3')); ?>" },
                { title: "> BGM_TRK_04", file: "<?php echo e(asset('audio/lagu4.mp3')); ?>" }
            ];

            let currentTrackIndex = 0;
            let isPlaying = false;
            
            if(!window.hardcoreAudio) {
                window.hardcoreAudio = new Audio(playlist[currentTrackIndex].file);
                window.hardcoreAudio.volume = 0.4;
            }
            const audio = window.hardcoreAudio;

            const btnPlay = document.getElementById("btn-play");
            const btnPrev = document.getElementById("btn-prev");
            const btnNext = document.getElementById("btn-next");
            const volSlider = document.getElementById("vol-slider");
            const trackTitle = document.getElementById("track-title");
            const trackCounter = document.getElementById("track-counter");
            const statusDot = document.getElementById("status-dot");
            const eqViz = document.getElementById("eq-viz");

            // =================================================================
            // ANTI ZOMBIE SPLASH SCREEN (SESI MEMORY)
            // =================================================================
            if (sessionStorage.getItem('hardcoreSplashPassed') === 'true') {
                if (splashScreen) {
                    splashScreen.style.display = 'none'; 
                }
            } else {
                if(btnEnter) {
                    btnEnter.addEventListener("click", function() {
                        sessionStorage.setItem('hardcoreSplashPassed', 'true'); 
                        btnEnter.style.display = "none";
                        splashScreen.classList.add("brutal-smash-anim");
                        
                        setTimeout(() => { 
                            splashScreen.style.display = "none"; 
                        }, 1000);

                        if (audio.paused) {
                            audio.play();
                            isPlaying = true;
                            btnPlay.innerHTML = "STOP_";
                            btnPlay.style.backgroundColor = "transparent";
                            btnPlay.style.color = "#dc2626";
                            statusDot.style.animation = "dead-lamp-flicker 0.2s infinite";
                            eqViz.classList.add("is-playing");
                        }
                    });
                }
            }

            function updateTitle() {
                if(trackTitle) trackTitle.innerHTML = playlist[currentTrackIndex].title;
                if(trackCounter) trackCounter.innerHTML = `${currentTrackIndex + 1}/${playlist.length}`;
            }

            function loadTrack(index) {
                audio.src = playlist[index].file;
                updateTitle();
                if (isPlaying) { audio.play(); }
            }

            if(btnPlay) {
                btnPlay.addEventListener("click", function() {
                    if (audio.paused) {
                        audio.play();
                        isPlaying = true;
                        btnPlay.innerHTML = "STOP_";
                        btnPlay.style.backgroundColor = "transparent";
                        btnPlay.style.color = "#dc2626";
                        statusDot.style.animation = "dead-lamp-flicker 0.2s infinite";
                        eqViz.classList.add("is-playing");
                    } else {
                        audio.pause();
                        isPlaying = false;
                        btnPlay.innerHTML = "PLAY_";
                        btnPlay.style.backgroundColor = "#dc2626";
                        btnPlay.style.color = "#000";
                        statusDot.style.animation = "none";
                        eqViz.classList.remove("is-playing");
                    }
                });
            }

            if(btnNext) {
                btnNext.addEventListener("click", function() {
                    currentTrackIndex++;
                    if (currentTrackIndex > playlist.length - 1) currentTrackIndex = 0; 
                    loadTrack(currentTrackIndex);
                });
            }

            if(btnPrev) {
                btnPrev.addEventListener("click", function() {
                    currentTrackIndex--;
                    if (currentTrackIndex < 0) currentTrackIndex = playlist.length - 1; 
                    loadTrack(currentTrackIndex);
                });
            }

            if(volSlider) {
                volSlider.addEventListener("input", function() { 
                    audio.volume = this.value; 
                });
            }

            audio.addEventListener("ended", function() { 
                if(btnNext) btnNext.click(); 
            });

            if(!audio.paused) {
                isPlaying = true;
                if(btnPlay) { 
                    btnPlay.innerHTML = "STOP_"; 
                    btnPlay.style.backgroundColor = "transparent"; 
                    btnPlay.style.color = "#dc2626"; 
                }
                if(statusDot) statusDot.style.animation = "dead-lamp-flicker 0.2s infinite";
                if(eqViz) eqViz.classList.add("is-playing");
            }

            updateTitle();

            // =========================================================================
            // BULLETPROOF AJAX 
            // =========================================================================
            async function loadPage(url, isPopState = false) {
                const overlay = document.getElementById('page-transition-overlay');
                if(overlay) overlay.classList.add('active');
                
                try {
                    const response = await fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } });
                    if (!response.ok) throw new Error("Network error");
                    const html = await response.text();
                    
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');
                    
                    // FOKUS PADA PJAX CONTAINER SAJA
                    const newContent = doc.querySelector('#pjax-container'); 
                    const currentContent = document.querySelector('#pjax-container');
                    
                    if (newContent && currentContent) {
                        setTimeout(() => {
                            currentContent.innerHTML = newContent.innerHTML;
                            
                            if (!isPopState) { 
                                history.pushState(null, '', url); 
                            }
                            
                            if(overlay) overlay.classList.remove('active');
                            window.scrollTo(0, 0);
                        }, 600);
                    } else {
                        window.location.href = url;
                    }
                } catch (err) {
                    window.location.href = url;
                }
            }

            document.body.addEventListener('click', function(e) {
                const link = e.target.closest('a.hardcore-link');
                if (!link) return;
                if (link.host !== window.location.host || link.target === '_blank' || link.hasAttribute('download')) return;
                
                e.preventDefault();
                loadPage(link.href, false);
            });

            window.addEventListener('popstate', function() {
                loadPage(window.location.href, true);
            });
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\web-musik\resources\views/albums/index.blade.php ENDPATH**/ ?>