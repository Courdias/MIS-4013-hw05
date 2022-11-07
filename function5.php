<?php
  include "header.php";
?>

	<div>
		<img id="image" src="" />
		      <button class="btn" onclick='Show()' id=btnID>Surprise</button>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	<script>
		function show() {

			/* Get image and change value
			of src attribute */
			let image = document.getElementById("image");

			image.src =
"https://www.ru.nl/publish/pages/947657/flying_circus_meme.jpg"
      
			document.getElementById("btnID")
					.style.display = "none";
		}
	</script>
    </body>
</html>
