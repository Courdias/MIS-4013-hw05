<?php
  include "header.php";
?>
    <div class="container">
      <p id="math"></p>
      <button class="btn" onclick='myFunction()'>Multiply</button>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>  
<script>
var x = myFunction(4, 3);
document.getElementById("math").innerHTML = x;

function myFunction(a, b) {
  return a * b;
}
        </script>
    </body>
</html>
