<?php
  include "header.php";
?>
    <div class="container">
      <p id="RNG"></p>
      <button class="btn" onclick='writeValue()'>Guess a Number 1-9</button>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>  
<script>
  function writeValue() {
        document.getElementById('RNG').innerHTML = Math.floor(Math.random() * 10);
        document.getElementById('RNG').innerHTML = 'Did you guess correctly?';
      }
        </script>
    </body>
</html>
