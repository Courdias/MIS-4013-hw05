<?php
  include "header.php";
?>
<form>
                <label>Number 1: </label>
                <input type="text" name="a" placeholder="Number 1 here"/>
                <br/>

                <label>Number 2:  </label>
                <input type="text" name="b" placeholder="Number 2 here" />
                <br/>
</form>

<div class="container">
      <p id="math"></p>
      <button class="btn" onclick='PrintProduct()'>Multiply</button>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>  
        <script>
          var a = document.getElementById('a').value;
          var b = document.getElementById('b').value;
                function Multiply() {
                          document.getElementById("math").value = a * b;
                }
                function PrintProduct(){
                          return document.getElementById('math').innerHTML = Multiply()
                }
            
        </script>
    </body>
</html>
