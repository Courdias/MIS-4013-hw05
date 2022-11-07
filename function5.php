<?php
  include "header.php";
?>
    <div class="container">
      <p id="spain"></p>
      <button class="btn" onclick='PrintImage()'>Surprise</button>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>  
<script>

function PrintImage() {
        document.getElementById('spain').innerHTML = "https://www.ru.nl/publish/pages/947657/flying_circus_meme.jpg";
      }
          </script>
        <img src onerror="this.onerror=null; this.src=getImagePath();">  

    </body>
</html>
