<?php
  include "header.php";
?>
<form>
                <label>Number 1: </label>
                <input type="text" id="a" placeholder="Number 1 here"/>
                <br/>

                <label>Number 2:  </label>
                <input type="text" id="b" placeholder="Number 2 here" />
                <br/>
</form>

<div class="container">
      <input type="text" id="math" placeholder="Leave Blank"/>
      <button class="btn" onclick="Multiply();">Multiply</button>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>  
        <script>

                function Multiply() {
                          var a = parseInt(document.getElementById('a').value);
                          var b = parseInt(document.getElementById('b').value);
                          document.getElementById('math').value = a * b;
                }
            
        </script>
    </body>
</html>
