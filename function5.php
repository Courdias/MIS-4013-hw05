<?php
  include "header.php";
?>

	<div>
		<img id="image" src="" />
		      <button class="btn" onclick='Show()' id=btnID>Surprise</button>
	</div>
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
