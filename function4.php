<?php
  include "header.php";
?>
    <div class="container">
      <p id="math"></p>
      <button class="btn" onclick='PrintProduct()'>Multiply 10*2</button>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>  
<script>
function Multiply(a, b) {
  return a * b;
}
  function PrintProduct(){
document.getElementById("math").innerHTML = Multiply(10, 2); //edit here to change numbers being multiplied
  }
        </script>
    </body>
</html>
