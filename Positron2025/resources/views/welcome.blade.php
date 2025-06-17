<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Positron Lockers</title>
  <style>
    @font-face {
      font-family: 'CollegeJersey';
      src: url('/fonts/CollegeJersey.ttf') format('truetype');
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #FAEDCA, #DED2E0);
      overflow-x: hidden;
      transition: filter 0.4s ease;
    }

    header {
      position: fixed;
      top: 0;
      width: 100%;
      padding: 1.2rem 2rem;
      background-color: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(12px);
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 1000;
    }

    .logo {
      font-family: 'CollegeJersey', sans-serif;
      font-size: 2rem;
      color: #155E95;
      text-shadow: 1px 1px 2px #60B5FF;
    }

    nav {
      display: flex;
      gap: 2rem;
    }

    nav a {
      color: #155E95;
      text-decoration: none;
      font-weight: 600;
      font-size: 1.2rem;
    }

    .hero {
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      padding-top: 140px;
      background: linear-gradient(to bottom, #FAEDCA, #DED2E0);
    }

    .spacer {
      height: 80px;
    }

    .video-wrapper {
      position: relative;
      width: 90%;
      max-width: 1200px;
      height: 70vh;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 16px 32px rgba(0, 0, 0, 0.25);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(255,255,255,0.7);
      border: none;
      font-size: 2rem;
      padding: 0.5rem 1rem;
      cursor: pointer;
      z-index: 10;
      border-radius: 12px;
      transition: background 0.2s ease;
    }

    .arrow:hover {
      background-color: rgba(255,255,255,0.9);
    }

    .arrow.left {
      left: 10px;
    }

    .arrow.right {
      right: 10px;
    }

    iframe {
      width: 100%;
      height: 100%;
      border: none;
    }

    .countdown {
      text-align: center;
      margin-top: 2rem;
      font-family: 'Poppins', sans-serif;
      font-size: 1.5rem;
      color: #333;
      background-color: rgba(255,255,255,0.5);
      backdrop-filter: blur(8px);
      padding: 1rem 2rem;
      border-radius: 20px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.15);
    }

    .locker-section {
      width: 100%;
      min-height: 100vh;
      background: linear-gradient(to bottom, #DED2E0, #FAEDCA);
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 4rem 2rem;
      position: relative;
      z-index: 10;
    }

    .locker-container {
      display: flex;
      width: 100%;
      max-width: 1600px;
      justify-content: space-between;
      gap: 2rem;
      transition: filter 0.4s ease;
      position: relative;
      flex-wrap: wrap;
    }

    .locker {
      position: relative;
      flex: 1;
      height: 85vh;
      perspective: 1000px;
      transition: transform 0.6s ease, z-index 0.3s, filter 0.4s ease;
      transform-origin: center;
      z-index: 1;
      cursor: pointer;
    }

    .locker.zoomed {
      position: fixed;
      top: 55%;
      left: 50%;
      width: 600px;
      height: 800px;
      transform: translate(-50%, -50%) scale(1);
      z-index: 999;
      transition: transform 0.6s ease, z-index 0.3s;
    }

    .locker.blurred {
      filter: blur(6px);
      pointer-events: none;
    }

    .locker-door {
      width: 100%;
      height: 100%;
      border-radius: 8px;
      background: linear-gradient(145deg, #5D6FA4, #155E95);
      background-image: linear-gradient(
        145deg,
        rgba(93, 111, 164, 0.9),
        rgba(21, 94, 149, 0.95)
      ), 
      linear-gradient(
        to bottom,
        rgba(255,255,255,0.05) 0%,
        rgba(255,255,255,0.1) 40%,
        transparent 60%,
        rgba(0,0,0,0.08) 100%
      );
      background-blend-mode: overlay;
      box-shadow: inset -4px 0 10px rgba(0,0,0,0.3), 0 14px 30px rgba(0,0,0,0.3);
      transition: transform 1.2s ease;
      transform-origin: left center;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 2;
    }

    .locker-handle {
      position: absolute;
      width: 14px;
      height: 60px;
      right: 18px;
      top: 50%;
      transform: translateY(-50%);
      background: linear-gradient(180deg, #444, #111);
      border-radius: 3px;
      box-shadow: inset -1px 1px 2px rgba(255,255,255,0.2);
    }

    .locker.opened .locker-door {
      transform: rotateY(-175deg);
    }

    .locker-shelves {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      padding: 1rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      opacity: 0;
      pointer-events: none;
      transition: opacity 1s ease;
      z-index: 1;
      background: linear-gradient(to bottom right, #FAEDCA, #DED2E0);
      border-radius: 8px;
      box-shadow: inset 0 0 12px rgba(0, 0, 0, 0.08);
    }

    .locker.opened .locker-shelves {
      opacity: 1;
      pointer-events: auto;
    }

    .shelf {
      background: #ffffffcc;
      border: 2px solid #5D6FA4;
      border-radius: 10px;
      height: 28%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 1.1rem;
      color: #155E95;
      padding: 0.5rem;
      transition: transform 0.3s ease;
    }

    .shelf:hover {
      transform: scale(1.05);
    }

    @media (max-width: 992px) {
      .locker-container {
        flex-direction: column;
        align-items: center;
      }

      .locker {
        width: 80%;
        height: 300px;
      }

      .shelf {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">Positron</div>
    <nav>
      <a href="#">Home</a>
      <a href="#">Filosofi</a>
      <a href="#">Guide</a>
      <a href="#">Timeline</a>
      <a href="#">Group</a>
    </nav>
  </header>

  <section class="hero">
    <div class="spacer"></div>
    <div class="video-wrapper">
      <button class="arrow left" onclick="prevVideo()">‹</button>
      <iframe id="videoFrame" src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
      <button class="arrow right" onclick="nextVideo()">›</button>
    </div>
    <div class="countdown" id="countdown">Loading countdown...</div>
  </section>

  <section class="locker-section" id="lockerSection">
    <div class="locker-container" id="lockerContainer">
      <div class="locker" onclick="handleLockerClick(event, this)">
        <div class="locker-door"><div class="locker-handle"></div></div>
        <div class="locker-shelves"><div class="shelf">Forum Maba</div></div>
      </div>
      <div class="locker" onclick="handleLockerClick(event, this)">
        <div class="locker-door"><div class="locker-handle"></div></div>
        <div class="locker-shelves"><div class="shelf">LDK</div></div>
      </div>
      <div class="locker" onclick="handleLockerClick(event, this)">
        <div class="locker-door"><div class="locker-handle"></div></div>
        <div class="locker-shelves"><div class="shelf">IOH</div></div>
      </div>
      <div class="locker" onclick="handleLockerClick(event, this)">
        <div class="locker-door"><div class="locker-handle"></div></div>
        <div class="locker-shelves"><div class="shelf">Nako</div></div>
      </div>
    </div>
  </section>

  <script>
    const videos = [
      "https://www.youtube.com/embed/dQw4w9WgXcQ",
      "https://www.youtube.com/embed/tgbNymZ7vqY",
      "https://www.youtube.com/embed/9bZkp7q19f0"
    ];
    let currentIndex = 0;
    const iframe = document.getElementById("videoFrame");

    function showVideo(index) {
      currentIndex = (index + videos.length) % videos.length;
      iframe.src = videos[currentIndex];
    }

    function nextVideo() {
      showVideo(currentIndex + 1);
    }

    function prevVideo() {
      showVideo(currentIndex - 1);
    }

    setInterval(nextVideo, 6000);

    let currentLocker = null;

    function handleLockerClick(event, locker) {
      event.stopPropagation();
      const isOpened = locker.classList.contains('opened');
      const isZoomed = locker.classList.contains('zoomed');

      if (isOpened) {
        locker.classList.remove('opened', 'zoomed');
        clearAllBlur();
        currentLocker = null;
        return;
      }

      if (isZoomed) {
        locker.classList.add('opened');
        return;
      }

      closeAllLockers();
      locker.classList.add('zoomed');
      blurOtherLockers(locker);
      currentLocker = locker;
    }

    function blurOtherLockers(focusedLocker) {
      document.querySelectorAll('.locker').forEach(locker => {
        if (locker !== focusedLocker) {
          locker.classList.add('blurred');
        } else {
          locker.classList.remove('blurred');
        }
      });
    }

    function clearAllBlur() {
      document.querySelectorAll('.locker').forEach(locker => {
        locker.classList.remove('blurred');
      });
    }

    function closeAllLockers() {
      document.querySelectorAll('.locker').forEach(locker => {
        locker.classList.remove('zoomed', 'opened', 'blurred');
      });
      currentLocker = null;
    }

    window.addEventListener('click', function (e) {
      if (currentLocker && !e.target.closest('.locker')) {
        closeAllLockers();
      }
    });

    function updateCountdown() {
      const targetDate = new Date("2025-08-27T00:00:00+07:00");
      const now = new Date();
      const diff = targetDate - now;

      if (diff <= 0) {
        document.getElementById("countdown").textContent = "Forum Maba has started!";
        return;
      }

      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
      const minutes = Math.floor((diff / (1000 * 60)) % 60);
      const seconds = Math.floor((diff / 1000) % 60);

      document.getElementById("countdown").textContent =
        `Positron 2025 - Forum Maba : ${days}d ${hours}h ${minutes}m ${seconds}s`;
    }

    setInterval(updateCountdown, 1000);
    updateCountdown();
  </script>
</body>
</html>
