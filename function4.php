<?php
  include "header.php";
?>
<form>
                <label>Number 1: </label>
                <input type="text" name="n1" placeholder="Number 1 here"/>
                <br/>

                <label>Number 2:  </label>
                <input type="text" name="n2" placeholder="Number 2 here" />
                <br/>
</form>

<div class="container">
      <p id="math"></p>
      <button class="btn" onclick='PrintProduct()'>Multiply 10*2</button>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>  
        <script>
          var n1 = document.getElementById('n1').value;
          var n2 = document.getElementById('n2').value;
                function Multiply(a, b) {
                          return a * b;
                }
                function PrintProduct(){
                          document.getElementById("math").innerHTML = Multiply(n1, n2); //edit here to change numbers being multiplied
                }
        </script>
    </body>
</html>
