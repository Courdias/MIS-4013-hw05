<?php
  include "header.php";
?>
    <div class="container">
      <p id="date"></p>
      <button class="btn" onclick='writeValue()'>Show the Time</button>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>  
<script>
  const d = new Date();
  function writeValue() {
        document.getElementById('date').innerHTML = 'd';
      }
        </script>
    </body>
</html>
