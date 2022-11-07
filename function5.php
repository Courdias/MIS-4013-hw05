<?php
  include "header.php";
?>

	<div>
		<h1>GeeksforGeeks</h1>
		<h3>Click on the button to see image</h3>

		<!-- img element without src attribute -->
		<img id="image" src="" />
	</div>

	<button type="button"
		onclick="show()" id="btnID">
		Show Image
	</button>

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
