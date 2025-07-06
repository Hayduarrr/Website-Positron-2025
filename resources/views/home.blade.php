@extends('layouts.app')

@section('title', 'POSITRON 2025 - Electrical Unity')

@section('content')

    <section id="home" class="home-section">
        <div class="hero-content">
            <div class="block">
                <h1 class="hero-title back-to-school-font">POSITRON</h1>
                <h1 class="hero-title atlanta-font">2025</h1>
            </div>
            <div class="hero-logo"></div>
        </div>
    </section>
    <!-- Video Slider Section -->
    <section class="video-slider-section">
        <div class="video-slider-container">
            <div class="video-slider-wrapper">
                <!-- Navigation Arrows -->
                <button class="nav-arrow prev" onclick="previousVideo()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="nav-arrow next" onclick="nextVideo()">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <!-- Video Container -->
                <div class="video-container">
                    <video class="video-player" id="mainVideo" controls>
                        <source src="../videos/video1.mp4" type="video/mp4">
                        <div class="video-placeholder">
                            <i class="fas fa-play-circle" style="font-size: 64px; color: #718096;"></i>
                        </div>
                    </video>
                </div>
            </div>
        </div>
    </section>
    <section class="timer-section">
        <div class="timer-container">
            <h2 class="timer-title atlanta-font">Countdown to Event</h2>
            <div class="timer">
                <div class="timer-item">
                    <span class="timer-value atlanta-font" id="days">00</span>
                    <span class="timer-label atlanta-font">Days</span>
                </div>
                <div class="timer-separator">:</div>
                <div class="timer-item">
                    <span class="timer-value atlanta-font" id="hours">00</span>
                    <span class="timer-label atlanta-font">Hours</span>
                </div>
                <div class="timer-separator">:</div>
                <div class="timer-item">
                    <span class="timer-value atlanta-font" id="minutes">00</span>
                    <span class="timer-label atlanta-font">Minutes</span>
                </div>
            </div>
        </div>
    </section>
@endsection
