import './bootstrap';

// Countdown Timer dengan realtime update
class CountdownTimer {
    constructor() {
        this.init();
    }
    
    init() {
        this.updateCountdown();
        setInterval(() => this.updateCountdown(), 1000);
    }
    
    async updateCountdown() {
        try {
            const response = await fetch('/api/countdown');
            const data = await response.json();
            
            if (data.expired) {
                this.displayExpired();
                return;
            }
            
            this.displayTime(data);
        } catch (error) {
            console.error('Error fetching countdown:', error);
        }
    }
    
    displayTime(data) {
        const elements = {
            days: document.getElementById('days'),
            hours: document.getElementById('hours'),
            minutes: document.getElementById('minutes')
        };
        
        Object.keys(elements).forEach(key => {
            if (elements[key]) {
                elements[key].textContent = String(data[key]).padStart(2, '0');
            }
        });
    }
    
    displayExpired() {
        ['days', 'hours', 'minutes'].forEach(id => {
            const element = document.getElementById(id);
            if (element) {
                element.textContent = '00';
            }
        });
    }
}

// Smooth scrolling dan animasi
class SmoothScrollManager {
    constructor() {
        this.init();
    }
    
    init() {
        this.setupIntersectionObserver();
        this.setupSmoothScroll();
        this.setupVideoHandler();
    }
    
    setupIntersectionObserver() {
        const options = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    this.handleSectionAnimation(entry.target);
                }
            });
        }, options);
        
        document.querySelectorAll('.section').forEach(section => {
            observer.observe(section);
        });
    }
    
    setupSmoothScroll() {
        // Custom smooth scroll untuk navigasi
        const container = document.querySelector('.main-container');
        if (container) {
            container.style.scrollBehavior = 'smooth';
        }
    }
    
    setupVideoHandler() {
        const videoPlaceholder = document.querySelector('.video-placeholder');
        if (videoPlaceholder) {
            videoPlaceholder.addEventListener('click', this.handleVideoClick.bind(this));
        }
    }
    
    handleVideoClick() {
        // Implementasi video player atau modal
        this.showVideoModal();
    }
    
    showVideoModal() {
        // Create modal for video
        const modal = document.createElement('div');
        modal.className = 'video-modal';
        modal.innerHTML = `
            <div class="modal-content">
                <span class="close-modal">&times;</span>
                <div class="video-embed">
                    <iframe width="800" height="450" 
                            src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                            frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>
        `;
        
        // Add modal styles
        modal.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        `;
        
        const modalContent = modal.querySelector('.modal-content');
        modalContent.style.cssText = `
            position: relative;
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 90%;
            max-height: 90%;
        `;
        
        const closeBtn = modal.querySelector('.close-modal');
        closeBtn.style.cssText = `
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            color: #333;
        `;
        
        document.body.appendChild(modal);
        
        // Close modal handlers
        closeBtn.addEventListener('click', () => {
            document.body.removeChild(modal);
        });
        
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                document.body.removeChild(modal);
            }
        });
    }
    
    handleSectionAnimation(section) {
        const sectionId = section.id;
        
        switch(sectionId) {
            case 'home':
                this.animateHomeSection(section);
                break;
            case 'video':
                this.animateVideoSection(section);
                break;
            case 'countdown':
                this.animateCountdownSection(section);
                break;
            case 'loker':
                this.animateLokerSection(section);
                break;
        }
    }
    
    animateHomeSection(section) {
        const lockers = section.querySelectorAll('.locker');
        lockers.forEach((locker, index) => {
            setTimeout(() => {
                locker.style.animation = 'lockerAppear 0.5s ease-out forwards';
            }, index * 100);
        });
        
        // Add CSS for locker animation
        if (!document.querySelector('#locker-animation-style')) {
            const style = document.createElement('style');
            style.id = 'locker-animation-style';
            style.textContent = `
                @keyframes lockerAppear {
                    from {
                        opacity: 0;
                        transform: scale(0.8) rotateY(90deg);
                    }
                    to {
                        opacity: 1;
                        transform: scale(1) rotateY(0deg);
                    }
                }
            `;
            document.head.appendChild(style);
        }
    }
    
    animateVideoSection(section) {
        const videoContainer = section.querySelector('.video-container');
        if (videoContainer) {
            setTimeout(() => {
                videoContainer.style.animation = 'slideInUp 0.8s ease-out forwards';
            }, 300);
        }
    }
    
    animateCountdownSection(section) {
        const timeBoxes = section.querySelectorAll('.time-box');
        timeBoxes.forEach((box, index) => {
            setTimeout(() => {
                box.style.animation = 'countdownPulse 0.6s ease-out forwards';
            }, index * 200);
        });
    }
    
    animateLokerSection(section) {
        const jobCards = section.querySelectorAll('.job-card');
        jobCards.forEach((card, index) => {
            setTimeout(() => {
                card.style.animation = 'cardSlideIn 0.5s ease-out forwards';
            }, index * 100);
        });
    }
}

// Particle System untuk efek visual
class ParticleSystem {
    constructor() {
        this.particles = [];
        this.canvas = null;
        this.ctx = null;
        this.init();
    }
    
    init() {
        this.createCanvas();
        this.createParticles();
        this.animate();
    }
    
    createCanvas() {
        this.canvas = document.createElement('canvas');
        this.canvas.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        `;
        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;
        this.ctx = this.canvas.getContext('2d');
        
        document.body.appendChild(this.canvas);
        
        window.addEventListener('resize', () => {
            this.canvas.width = window.innerWidth;
            this.canvas.height = window.innerHeight;
        });
    }
    
    createParticles() {
        for (let i = 0; i < 50; i++) {
            this.particles.push({
                x: Math.random() * this.canvas.width,
                y: Math.random() * this.canvas.height,
                vx: (Math.random() - 0.5) * 0.5,
                vy: (Math.random() - 0.5) * 0.5,
                size: Math.random() * 3 + 1,
                opacity: Math.random() * 0.5 + 0.1
            });
        }
    }
    
    animate() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        
        this.particles.forEach(particle => {
            particle.x += particle.vx;
            particle.y += particle.vy;
            
            if (particle.x < 0 || particle.x > this.canvas.width) particle.vx *= -1;
            if (particle.y < 0 || particle.y > this.canvas.height) particle.vy *= -1;
            
            this.ctx.beginPath();
            this.ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
            this.ctx.fillStyle = `rgba(74, 144, 226, ${particle.opacity})`;
            this.ctx.fill();
        });
        
        requestAnimationFrame(() => this.animate());
    }
}

// Keyboard Navigation
class KeyboardNavigation {
    constructor() {
        this.currentSection = 0;
        this.sections = document.querySelectorAll('.section');
        this.init();
    }
    
    init() {
        document.addEventListener('keydown', this.handleKeyPress.bind(this));
    }
    
    handleKeyPress(e) {
        switch(e.key) {
            case 'ArrowDown':
            case ' ':
                e.preventDefault();
                this.navigateToSection(this.currentSection + 1);
                break;
            case 'ArrowUp':
                e.preventDefault();
                this.navigateToSection(this.currentSection - 1);
                break;
            case 'Home':
                e.preventDefault();
                this.navigateToSection(0);
                break;
            case 'End':
                e.preventDefault();
                this.navigateToSection(this.sections.length - 1);
                break;
        }
    }
    
    navigateToSection(index) {
        if (index >= 0 && index < this.sections.length) {
            this.currentSection = index;
            this.sections[index].scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }
}

// Main Application Initialization
document.addEventListener('DOMContentLoaded', () => {
    // Initialize all components
    new CountdownTimer();
    new SmoothScrollManager();
    new ParticleSystem();
    new KeyboardNavigation();
    
    // Add additional CSS animations
    addAdditionalAnimations();
    
    // Setup loading screen
    setupLoadingScreen();
});

function addAdditionalAnimations() {
    if (!document.querySelector('#additional-animations')) {
        const style = document.createElement('style');
        style.id = 'additional-animations';
        style.textContent = `
            @keyframes slideInUp {
                from {
                    opacity: 0;
                    transform: translateY(50px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            @keyframes countdownPulse {
                0% {
                    opacity: 0;
                    transform: scale(0.8);
                }
                50% {
                    transform: scale(1.1);
                }
                100% {
                    opacity: 1;
                    transform: scale(1);
                }
            }
            
            @keyframes cardSlideIn {
                from {
                    opacity: 0;
                    transform: translateX(-30px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
            
            .video-modal {
                animation: modalFadeIn 0.3s ease-out;
            }
            
            @keyframes modalFadeIn {
                from {
                    opacity: 0;
                    transform: scale(0.9);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }
        `;
        document.head.appendChild(style);
    }
}

function setupLoadingScreen() {
    const loader = document.createElement('div');
    loader.className = 'loading-screen';
    loader.innerHTML = `
        <div class="loader-content">
            <div class="loader-logo">
                <i class="fas fa-atom"></i>
            </div>
            <h2>POSITRON 2025</h2>
            <div class="loader-bar">
                <div class="loader-progress"></div>
            </div>
        </div>
    `;
    
    loader.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        color: white;
        text-align: center;
    `;
    
    document.body.appendChild(loader);
    
    // Simulate loading
    let progress = 0;
    const progressBar = loader.querySelector('.loader-progress');
    const interval = setInterval(() => {
        progress += Math.random() * 15;
        if (progress >= 100) {
            progress = 100;
            clearInterval(interval);
            setTimeout(() => {
                loader.style.opacity = '0';
                loader.style.transition = 'opacity 0.5s ease-out';
                setTimeout(() => {
                    document.body.removeChild(loader);
                }, 500);
            }, 500);
        }
        progressBar.style.width = progress + '%';
    }, 100);
}