<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Interactive Lockers</title>
  @vite('resources/css/lockers.css')
</head>
<body>
  <div class="container" id="lockerContainer">
    @for ($i = 1; $i <= 3; $i++)
      <div class="locker" id="locker{{ $i }}">
        <div class="handle" onclick="toggleLocker('{{ $i }}')"></div>
        <div class="door" id="lockerDoor{{ $i }}" onclick="toggleLocker('{{ $i }}')"></div>
        <div class="locker-contents" id="lockerContents{{ $i }}">
          <div class="section"><div>📦 Top Shelf: Item {{ $i }}A</div></div>
          <div class="section"><div>📦 Middle Shelf: Item {{ $i }}B</div></div>
          <div class="section"><div>📦 Bottom Shelf: Item {{ $i }}C</div></div>
        </div>
      </div>
    @endfor
  </div>

  @vite('resources/js/lockers.js')
</body>
</html>
