window.toggleLocker = function(num) {
    const door = document.getElementById(`lockerDoor${num}`);
    const container = document.getElementById("lockerContainer");
    const contents = document.getElementById(`lockerContents${num}`);
  
    door.classList.toggle("open");
  
    if (door.classList.contains("open")) {
      container.classList.add("zoomed");
      setTimeout(() => {
        contents.scrollTo({ top: 0, behavior: 'smooth' });
      }, 600);
    } else {
      container.classList.remove("zoomed");
      contents.scrollTo({ top: 0 });
    }
  };
  