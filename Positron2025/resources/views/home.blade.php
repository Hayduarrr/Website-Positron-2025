@extends('layouts.app')

@section('title', 'POSITRON 2025 - Electrical Unity')

@section('content')
<div class="main-container">
    <!-- Section 1: Tampilan Home -->
    <section id="home" class="section home-section" style="background-image: url('{{ asset('images/backgrounds/home-bg.jpg') }}');">
        <div class="home-content">  
            <!-- Main Logo Section dengan gambar -->
            <div class="main-logo">
                <!-- Logo POSITRON di sebelah kiri -->
                <div class="positron-logo-container">
                    <h1 class="positron-title">POSITRON</h1>
                    <h2 class="year-title">2025</h2>
                </div>
                
                <!-- Logo gambar di sebelah kanan -->
                <div class="brand-logo-container">
                    <img src="{{ asset('images/positron-logo.png') }}" alt="POSITRON Logo" class="positron-brand-logo">
                    <!-- Alternatif jika menggunakan path relatif: -->
                    <!-- <img src="/images/positron-logo.png" alt="POSITRON Logo" class="positron-brand-logo"> -->
                </div>
            </div>
            
            <div class="logo-symbol">
                <i class="fas fa-atom"></i>
            </div>
            <div class="unity-text">
                <span>ELECTRICAL UNITY</span>
            </div>
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
                        <h3>Web Developer</h3>
                        <p>PT. Tech Solution</p>
                        <span class="salary">8-12 jt</span>
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
.section {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    position: relative;
}

.section-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Dark overlay for better text readability */
    z-index: 1;
}

.home-content,
.video-content,
.countdown-content,
.loker-content {
    position: relative;
    z-index: 2; /* Ensure content appears above overlay */
}

/* Responsive background attachment */
@media (max-width: 768px) {
    .section {
        background-attachment: scroll; /* Better performance on mobile */
    }
}

/* Alternative: Different overlay colors for each section */
.home-section .section-overlay {
    background: linear-gradient(135deg, rgba(0, 123, 255, 0.7), rgba(40, 167, 69, 0.7));
}

.video-section .section-overlay {
    background: linear-gradient(135deg, rgba(108, 117, 125, 0.8), rgba(52, 58, 64, 0.8));
}

.countdown-section .section-overlay {
    background: linear-gradient(135deg, rgba(255, 193, 7, 0.7), rgba(253, 126, 20, 0.7));
}

.loker-section .section-overlay {
    background: linear-gradient(135deg, rgba(220, 53, 69, 0.7), rgba(111, 66, 193, 0.7));
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

// Smooth scroll behavior
document.addEventListener('DOMContentLoaded', function() {
    // Add smooth scrolling for any navigation links if needed
    const sections = document.querySelectorAll('.section');
    
    // Intersection Observer for section animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });
    
    sections.forEach(section => {
        observer.observe(section);
    });
    
    // Video placeholder click handler
    document.querySelector('.video-placeholder').addEventListener('click', function() {
        // Replace with actual video embed or modal
        alert('Video akan diputar di sini');
    });

    // Parallax effect for background images (optional)
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const sections = document.querySelectorAll('.section');
        
        sections.forEach(section => {
            const rate = scrolled * -0.5;
            section.style.transform = `translateY(${rate}px)`;
        });
    });
});
</script>

@endsection