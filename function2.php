<?php
  include "header.php";
?>
    <div class="container">
      <p id="placeholder"></p>
      <button class="btn" onclick='writeValue()'>Click me</button>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        const d = new Date();
        document.getElementById("demo").innerHTML = d;
        </script>
    </body>
</html>
