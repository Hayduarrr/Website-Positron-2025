@extends('layouts.app')

@section('title', 'POSITRON 2025 - Electrical Unity')

@section('content')
<div class="main-container">
    <!-- Section 1: Tampilan Home -->
    <section id="home" class="section home-section" style="background-image: url('{{ asset('images/backgrounds/home-bg.jpg') }}');">
        <div class="home-content">
            <div class="font-image-container">
                <img src="{{ asset('images/logo/positron-2025.png') }}" alt="Positron 2025" class="font-image">
            </div>
        </div>

        <div class="logo-container">
            <img src="{{ asset('images/logo/positron-logo.png') }}" alt="Positron Logo">
        </div>


        <!-- Scroll Down Animation -->
        <div class="scroll-down-indicator">
            <div class="scroll-down-arrow">
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="scroll-down-text">Scroll Down</div>
        </div>
    </section>

    <!-- Section 2: Tampilan Video -->
    <section id="video" class="section video-section" style="background-image: url('{{ asset('images/backgrounds/video-bg.jpg') }}');">
        <div class="section-overlay"></div>
        <!-- <div class="section-header">
            <span class="section-label">Tampilan video</span>
        </div> -->

        <div class="video-content">
            <div class="video-container">
                <div class="video-placeholder">
                    <i class="fas fa-play-circle"></i>
                    <p>Click to play video</p>
                    <!-- Opsi: Tambahkan thumbnail video -->
                    <!-- <img src="{{ asset('images/video-thumbnail.jpg') }}" alt="Video Thumbnail" class="video-thumbnail"> -->
                </div>
            </div>

            <div class="decorative-elements">
                <div class="camera-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <div class="electrical-unity-badge">
                    <span>ELECTRICAL UNITY</span>
                </div>
                <div class="btp-logo">
                    <!-- Tambahkan logo BTP jika ada -->
                    <!-- <img src="{{ asset('images/btp-logo.png') }}" alt="BTP Logo" class="btp-logo-img"> -->
                    BTP
                </div>
                <div class="university-logo">
                    <!-- Tambahkan logo universitas -->
                    <!-- <img src="{{ asset('images/stikom-logo.png') }}" alt="STIKOM Logo" class="university-logo-img"> -->
                    <i class="fas fa-graduation-cap"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Countdown Timer -->
    <section id="countdown" class="section countdown-section" style="background-image: url('{{ asset('images/backgrounds/countdown-bg.jpg') }}');">
        <div class="section-overlay"></div>
        <!-- <div class="section-header">
            <span class="section-label">countdown timer</span>
        </div> -->

        <div class="countdown-content">
            <div class="countdown-display">
                <div class="time-box">
                    <span id="days" class="time-number">00</span>
                    <span class="time-label">Days</span>
                </div>
                <div class="time-separator">:</div>
                <div class="time-box">
                    <span id="hours" class="time-number">00</span>
                    <span class="time-label">Hours</span>
                </div>
                <div class="time-separator">:</div>
                <div class="time-box">
                    <span id="minutes" class="time-number">00</span>
                    <span class="time-label">Minutes</span>
                </div>
            </div>

            <div class="countdown-decorative">
                <div class="camera-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <div class="electrical-unity-badge">
                    <span>ELECTRICAL UNITY</span>
                </div>
                <div class="btp-logo">
                    <!-- Logo BTP -->
                    <!-- <img src="{{ asset('images/btp-logo.png') }}" alt="BTP Logo" class="btp-logo-img"> -->
                    BTP
                </div>
                <div class="university-logo orange">
                    <!-- Logo STIKOM -->
                    <!-- <img src="{{ asset('images/stikom-logo.png') }}" alt="STIKOM Logo" class="university-logo-img"> -->
                    <span>STIKOM</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Tampilan Loker -->
    <section id="loker" class="section loker-section" style="background-image: url('{{ asset('images/backgrounds/loker-bg.jpg') }}');">
        <div class="section-overlay"></div>
        <!-- <div class="section-header">
            <span class="section-label">page 4 : tampilan loker</span>
        </div> -->

        <div class="loker-content">
            <div class="job-board">
                <div class="job-grid">
                    <div class="job-card">
                        <!-- Opsi: Tambahkan logo perusahaan -->
                        <!-- <img src="{{ asset('images/company-logos/tech-solution.png') }}" alt="PT Tech Solution" class="company-logo"> -->
                        <i class="fas fa-code"></i>
                        <h3>NAKO</h3>
                        <p>SERU SERUAN</p>
                        <span class="salary">28 </span>
                    </div>
                    <div class="job-card">
                        <!-- <img src="{{ asset('images/company-logos/digital-agency.png') }}" alt="Digital Agency" class="company-logo"> -->
                        <i class="fas fa-mobile-alt"></i>
                        <h3>Mobile Dev</h3>
                        <p>Digital Agency</p>
                        <span class="salary">7-10 jt</span>
                    </div>
                    <div class="job-card">
                        <!-- <img src="{{ asset('images/company-logos/bank-mandiri.png') }}" alt="Bank Mandiri" class="company-logo"> -->
                        <i class="fas fa-database"></i>
                        <h3>Database Admin</h3>
                        <p>Bank Mandiri</p>
                        <span class="salary">9-13 jt</span>
                    </div>
                    <div class="job-card">
                        <!-- <img src="{{ asset('images/company-logos/govt-agency.png') }}" alt="Government Agency" class="company-logo"> -->
                        <i class="fas fa-shield-alt"></i>
                        <h3>Cyber Security</h3>
                        <p>Govt Agency</p>
                        <span class="salary">10-15 jt</span>
                    </div>
                    <div class="job-card">
                        <!-- <img src="{{ asset('images/company-logos/startup-tech.png') }}" alt="Startup Tech" class="company-logo"> -->
                        <i class="fas fa-chart-line"></i>
                        <h3>Data Analyst</h3>
                        <p>Startup Tech</p>
                        <span class="salary">6-9 jt</span>
                    </div>
                    <div class="job-card">
                        <!-- <img src="{{ asset('images/company-logos/creative-studio.png') }}" alt="Creative Studio" class="company-logo"> -->
                        <i class="fas fa-paint-brush"></i>
                        <h3>UI/UX Designer</h3>
                        <p>Creative Studio</p>
                        <span class="salary">5-8 jt</span>
                    </div>
                </div>
            </div>

            <div class="loker-decorative">
                <div class="camera-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <div class="electrical-unity-badge">
                    <span>ELECTRICAL UNITY</span>
                </div>
                <div class="btp-logo">
                    <!-- <img src="{{ asset('images/btp-logo.png') }}" alt="BTP Logo" class="btp-logo-img"> -->
                    BTP
                </div>
                <div class="university-logo orange">
                    <!-- <img src="{{ asset('images/stikom-logo.png') }}" alt="STIKOM Logo" class="university-logo-img"> -->
                    <span>STIKOM</span>
                </div>
                <div class="heart-icon">
                    <i class="fas fa-heart"></i>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- CSS Styles untuk Background Images -->
<style>
    /* Reset lengkap untuk menghilangkan semua whitespace */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html,
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        overflow-x: hidden;
    }

    body {
        font-family: Arial, sans-serif;
    }

    .main-container {
        width: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .section {
        width: 100vw;
        min-height: 100vh;
        height: 100vh;
        margin: 0;
        padding: 0;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        /* Pastikan tidak ada gap antar section */
        border: none;
        outline: none;
    }

    /* Hilangkan gap antar section */
    .section+.section {
        margin-top: 0;
    }

    /* Pastikan background image selalu full tanpa gap */
    .section::before {
        content: '';
        position: absolute;
        top: -1px;
        /* Slight overlap untuk menghindari gap pixel */
        left: -1px;
        right: -1px;
        bottom: -1px;
        background-image: inherit;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: inherit;
        z-index: 0;
    }

    .section-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
    }

    .home-content,
    .video-content,
    .countdown-content,
    .loker-content {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Scroll Down Indicator Styles */
    .scroll-down-indicator {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        z-index: 3;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .scroll-down-indicator:hover {
        transform: translateX(-50%) translateY(-5px);
    }

    .scroll-down-arrow {
        width: 50px;
        height: 50px;
        border: 2px solid rgba(255, 255, 255, 0.8);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        animation: bounce 2s infinite;
    }

    .scroll-down-arrow i {
        font-size: 18px;
        color: white;
        animation: arrowMove 2s infinite;
    }

    .scroll-down-text {
        color: white;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        opacity: 0.9;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    /* Scroll Down Animations */
    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-10px);
        }

        60% {
            transform: translateY(-5px);
        }
    }

    @keyframes arrowMove {
        0% {
            transform: translateY(0);
            opacity: 1;
        }

        50% {
            transform: translateY(5px);
            opacity: 0.7;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Hide scroll indicator on scroll or when not on home section */
    .scroll-down-indicator.hidden {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    /* Responsive untuk scroll indicator */
    @media (max-width: 768px) {
        .scroll-down-indicator {
            bottom: 20px;
        }

        .scroll-down-arrow {
            width: 40px;
            height: 40px;
        }

        .scroll-down-arrow i {
            font-size: 14px;
        }

        .scroll-down-text {
            font-size: 10px;
        }
    }

    @media (max-width: 480px) {
        .scroll-down-indicator {
            bottom: 15px;
        }

        .scroll-down-arrow {
            width: 35px;
            height: 35px;
        }

        .scroll-down-arrow i {
            font-size: 12px;
        }
    }

    /* Responsive background attachment untuk mobile */
    @media (max-width: 768px) {
        .section {
            background-attachment: scroll;
            height: auto;
            min-height: 100vh;
            padding: 20px 0;
            width: 100vw;
            margin: 0;
        }

        .section::before {
            background-attachment: scroll;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
        }
    }

    @media (max-width: 480px) {
        .section {
            width: 100vw;
            margin: 0;
            padding: 15px 0;
        }

        .home-content,
        .video-content,
        .countdown-content,
        .loker-content {
            padding: 15px;
            margin: 0;
        }
    }

    /* Overlay colors untuk setiap section */
    .home-section .section-overlay {
        background: linear-gradient(135deg, rgba(0, 123, 255, 0.6), rgba(40, 167, 69, 0.6));
    }

    .video-section .section-overlay {
        background: linear-gradient(135deg, rgba(108, 117, 125, 0.7), rgba(52, 58, 64, 0.7));
    }

    .countdown-section .section-overlay {
        background: linear-gradient(135deg, rgba(255, 193, 7, 0.6), rgba(253, 126, 20, 0.6));
    }

    .loker-section .section-overlay {
        background: linear-gradient(135deg, rgba(220, 53, 69, 0.6), rgba(111, 66, 193, 0.6));
    }

    /* Animasi fade in untuk section yang terlihat */
    .section {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .section.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Styling untuk konten agar lebih terlihat */
    .home-content,
    .video-content,
    .countdown-content,
    .loker-content {
        text-align: center;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    /* Fallback jika gambar background tidak load */
    .home-section {
        background-color: #007bff;
    }

    .video-section {
        background-color: #6c757d;
    }

    .countdown-section {
        background-color: #ffc107;
    }

    .loker-section {
        background-color: #dc3545;
    }

    /* Force full width tanpa margin */
    @media screen {
        .section {
            left: 0;
            right: 0;
            margin-left: 0;
            margin-right: 0;
            width: 100vw !important;
        }
    }

    /* Hilangkan semua kemungkinan whitespace */
    .main-container::before,
    .main-container::after,
    .section::after {
        display: none;
    }
</style>

<script>
    // Countdown Timer
    function updateCountdown() {
        fetch('/api/countdown')
            .then(response => response.json())
            .then(data => {
                if (data.expired) {
                    document.getElementById('days').textContent = '00';
                    document.getElementById('hours').textContent = '00';
                    document.getElementById('minutes').textContent = '00';
                    return;
                }

                document.getElementById('days').textContent = String(data.days).padStart(2, '0');
                document.getElementById('hours').textContent = String(data.hours).padStart(2, '0');
                document.getElementById('minutes').textContent = String(data.minutes).padStart(2, '0');
            })
            .catch(error => console.error('Error:', error));
    }

    // Update every minute
    updateCountdown();
    setInterval(updateCountdown, 60000);

    // DOM Content Loaded
    document.addEventListener('DOMContentLoaded', function() {
        const sections = document.querySelectorAll('.section');
        const scrollDownIndicator = document.querySelector('.scroll-down-indicator');

        // Intersection Observer untuk animasi section
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');

                    // Hide scroll indicator when not on home section
                    if (entry.target.id !== 'home') {
                        scrollDownIndicator.classList.add('hidden');
                    } else {
                        scrollDownIndicator.classList.remove('hidden');
                    }
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        sections.forEach(section => {
            observer.observe(section);
        });

        // Scroll Down Indicator Click Handler
        if (scrollDownIndicator) {
            scrollDownIndicator.addEventListener('click', function() {
                const videoSection = document.getElementById('video');
                if (videoSection) {
                    videoSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        }

        // Hide scroll indicator on scroll
        let scrollTimeout;
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 100) {
                scrollDownIndicator.classList.add('hidden');
            } else {
                scrollDownIndicator.classList.remove('hidden');
            }

            // Clear timeout
            clearTimeout(scrollTimeout);

            // Set timeout to show indicator again if back to top
            scrollTimeout = setTimeout(() => {
                if (scrollTop <= 100) {
                    scrollDownIndicator.classList.remove('hidden');
                }
            }, 150);
        });

        // Video placeholder click handler
        const videoPlaceholder = document.querySelector('.video-placeholder');
        if (videoPlaceholder) {
            videoPlaceholder.addEventListener('click', function() {
                // Replace with actual video embed or modal
                alert('Video akan diputar di sini');
            });
        }

        // Parallax effect yang diperbaiki (opsional - bisa diaktifkan jika diinginkan)
        /*
        let ticking = false;
        
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const sections = document.querySelectorAll('.section');
            
            sections.forEach((section, index) => {
                const rate = scrolled * -0.3;
                const backgroundElement = section.querySelector('::before') || section;
                if (backgroundElement.style) {
                    backgroundElement.style.transform = `translate3d(0, ${rate}px, 0)`;
                }
            });
            
            ticking = false;
        }
        
        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', requestTick);
        */
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        // Re-trigger any size-dependent calculations if needed
        const sections = document.querySelectorAll('.section');
        sections.forEach(section => {
            // Force background recalculation
            const currentBg = section.style.backgroundImage;
            section.style.backgroundImage = '';
            section.offsetHeight; // Force reflow
            section.style.backgroundImage = currentBg;
        });
    });

    // Preload background images untuk performa yang lebih baik
    document.addEventListener('DOMContentLoaded', function() {
        const backgroundImages = [
            "{{ asset('images/backgrounds/home-bg.jpg') }}",
            "{{ asset('images/backgrounds/video-bg.jpg') }}",
            "{{ asset('images/backgrounds/countdown-bg.jpg') }}",
            "{{ asset('images/backgrounds/loker-bg.jpg') }}"
        ];

        backgroundImages.forEach(src => {
            const img = new Image();
            img.src = src;
        });
    });
</script>

@endsection