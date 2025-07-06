// Mobile Menu Toggle Functions
function toggleMenu() {
    const hamburger = document.querySelector('.hamburger');
    const mobileNav = document.querySelector('.mobile-nav');
    
    hamburger.classList.toggle('active');
    mobileNav.classList.toggle('active');
}

function closeMenu() {
    const hamburger = document.querySelector('.hamburger');
    const mobileNav = document.querySelector('.mobile-nav');
    
    hamburger.classList.remove('active');
    mobileNav.classList.remove('active');
}

// Close menu when clicking outside
document.addEventListener('click', function(event) {
    const hamburger = document.querySelector('.hamburger');
    const mobileNav = document.querySelector('.mobile-nav');
    const isClickInsideMenu = mobileNav.contains(event.target);
    const isClickOnHamburger = hamburger.contains(event.target);
    
    if (!isClickInsideMenu && !isClickOnHamburger) {
        closeMenu();
    }
});

// Close menu when window is resized to desktop view
window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
        closeMenu();
    }
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
        closeMenu(); // Close mobile menu after clicking
    });
});


// Video Slider JavaScript
// File: public/js/video-slider.js

let currentVideoIndex = 1;
const totalVideos = 5;

// Video sources - replace with your actual video paths
const videoSources = [
    "../videos/video1.mp4",
    "../videos/video2.mp4", 
    "../videos/video3.mp4",
    "../videos/video4.mp4",
    "../videos/video5.mp4"
];

/**
 * Navigate to specific video by index
 * @param {number} index - Video index (1-based)
 */
function currentVideo(index) {
    currentVideoIndex = index;
    updateVideo();
    updateDots();
}

/**
 * Navigate to next video
 */
function nextVideo() {
    currentVideoIndex = currentVideoIndex >= totalVideos ? 1 : currentVideoIndex + 1;
    updateVideo();
    updateDots();
}

/**
 * Navigate to previous video
 */
function previousVideo() {
    currentVideoIndex = currentVideoIndex <= 1 ? totalVideos : currentVideoIndex - 1;
    updateVideo();
    updateDots();
}

/**
 * Update video source and load new video
 */
function updateVideo() {
    const video = document.getElementById('mainVideo');
    const videoSource = videoSources[currentVideoIndex - 1];
    
    // Pause current video
    video.pause();
    
    // Update video source
    video.src = videoSource;
    
    // Load new video
    video.load();
    
    // Optional: Auto-play new video
    // video.play();
}

/**
 * Update active dot indicator
 */
function updateDots() {
    const dots = document.querySelectorAll('.video-dot');
    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentVideoIndex - 1);
    });
}

/**
 * Auto-play slideshow functionality
 */
function autoPlaySlideshow() {
    setInterval(() => {
        nextVideo();
    }, 10000); // Change video every 10 seconds
}

/**
 * Initialize video slider when DOM is loaded
 */
function initVideoSlider() {
    // Handle video end event
    const mainVideo = document.getElementById('mainVideo');
    if (mainVideo) {
        mainVideo.addEventListener('ended', function() {
            nextVideo(); // Automatically go to next video when current one ends
        });
    }
    
    // Uncomment the line below to enable auto-play slideshow
    // autoPlaySlideshow();
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', initVideoSlider);

// Export functions for global access (optional)
window.currentVideo = currentVideo;
window.nextVideo = nextVideo;
window.previousVideo = previousVideo;

// Timer JavaScript functionality
class CountdownTimer {
    constructor(targetDate) {
        this.targetDate = new Date(targetDate).getTime();
        this.timerContainer = document.querySelector('.timer');
        this.isUrgent = false;
        
        // Initialize timer
        this.init();
    }
    
    init() {
        // Update timer immediately
        this.updateTimer();
        
        // Update every second
        this.interval = setInterval(() => {
            this.updateTimer();
        }, 1000);
    }
    
    updateTimer() {
        const now = new Date().getTime();
        const distance = this.targetDate - now;
        
        if (distance < 0) {
            this.handleTimerExpired();
            return;
        }
        
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Determine display format based on remaining time
        if (days > 0) {
            this.displayFormat('days-hours-minutes', { days, hours, minutes });
        } else {
            this.displayFormat('hours-minutes-seconds', { hours, minutes, seconds });
            this.setUrgentMode(true);
        }
    }
    
    displayFormat(format, timeValues) {
        const timerHTML = this.generateTimerHTML(format, timeValues);
        this.timerContainer.innerHTML = timerHTML;
    }
    
    generateTimerHTML(format, { days, hours, minutes, seconds }) {
        let html = '';
        
        if (format === 'days-hours-minutes') {
            html = `
                <div class="timer-item">
                    <span class="timer-value atlanta-font">${this.padZero(days)}</span>
                    <span class="timer-label atlanta-font">Days</span>
                </div>
                <div class="timer-separator">:</div>
                <div class="timer-item">
                    <span class="timer-value atlanta-font">${this.padZero(hours)}</span>
                    <span class="timer-label atlanta-font">Hours</span>
                </div>
                <div class="timer-separator">:</div>
                <div class="timer-item">
                    <span class="timer-value atlanta-font">${this.padZero(minutes)}</span>
                    <span class="timer-label atlanta-font">Minutes</span>
                </div>
            `;
        } else if (format === 'hours-minutes-seconds') {
            html = `
                <div class="timer-item">
                    <span class="timer-value atlanta-font">${this.padZero(hours)}</span>
                    <span class="timer-label atlanta-font">Hours</span>
                </div>
                <div class="timer-separator">:</div>
                <div class="timer-item">
                    <span class="timer-value atlanta-font">${this.padZero(minutes)}</span>
                    <span class="timer-label atlanta-font">Minutes</span>
                </div>
                <div class="timer-separator">:</div>
                <div class="timer-item">
                    <span class="timer-value atlanta-font">${this.padZero(seconds)}</span>
                    <span class="timer-label atlanta-font">Seconds</span>
                </div>
            `;
        }
        
        return html;
    }
    
    setUrgentMode(urgent) {
        if (urgent && !this.isUrgent) {
            this.timerContainer.classList.add('urgent');
            this.isUrgent = true;
        } else if (!urgent && this.isUrgent) {
            this.timerContainer.classList.remove('urgent');
            this.isUrgent = false;
        }
    }
    
    padZero(num) {
        return num.toString().padStart(2, '0');
    }
    
    handleTimerExpired() {
        clearInterval(this.interval);
        this.timerContainer.innerHTML = `
            <div class="timer-item expired">
                <span class="timer-value">00</span>
                <span class="timer-label">Event Started!</span>
            </div>
        `;
        this.timerContainer.classList.add('expired');
    }
    
    // Method to update target date
    updateTargetDate(newDate) {
        this.targetDate = new Date(newDate).getTime();
    }
    
    // Method to destroy timer
    destroy() {
        if (this.interval) {
            clearInterval(this.interval);
        }
    }
}

// Initialize timer when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Set your target date here (YYYY-MM-DD HH:MM:SS format)
    const targetDate = '2025-12-31 23:59:59'; // Example: New Year's Eve
    
    // Create timer instance
    const timer = new CountdownTimer(targetDate);
    
    // Optional: Add event listeners for dynamic date changes
    window.updateTimerDate = function(newDate) {
        timer.updateTargetDate(newDate);
    };
    
    // Optional: Add method to destroy timer
    window.destroyTimer = function() {
        timer.destroy();
    };
});

// Additional utility functions
function createTimer(targetDate, containerId = '.timer') {
    const container = document.querySelector(containerId);
    if (!container) {
        console.error(`Timer container ${containerId} not found`);
        return null;
    }
    
    return new CountdownTimer(targetDate);
}

// Export for module use (if needed)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = CountdownTimer;
}