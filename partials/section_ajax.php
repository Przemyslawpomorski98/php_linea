<section id="ajax">
	<h4 class="ajax_h4">PHP + AJAX</h4>
	<h2>AJAX FROM DATABASE</h2>
	<div class="container">
		<form>
			<select name="showpost" onchange="showPost(this.value)">
				<option>Wybierz wpis</option>
				<option value="1">Wpis z indexem 1</option>
				<option value="5">Wpis z indexem 2</option>
				<option value="12">Wpis z indexem 3</option>
				<option value="22">Wpis z indexem 4</option>
			</select>
		</form>
		<div id="showpost_result">
			<h3><b>Po wybraniu wpisu zobaczysz tutaj jego informacje</b></h3>
		</div>
		<script>
			function showPost(post_info){
				console.log(post_info);
				if (window.XMLHttpRequest) {
					ajax_php = new XMLHttpRequest();
				}else{
					ajax_php = new ActiveXObject("Microsoft.XMLHTTP");
				}
				console.log(ajax_php);
				ajax_php.onreadystatechange = function(){
					if (this.readyState == 4 && this.status == 200) {
						console.log(this.status);
						document.getElementById("showpost_result").innerHTML = this.responseText;
					}
				}

				ajax_php.open("GET","/projekt_php/partials/section_ajax_request.php/?q="+post_info,true);
				ajax_php.send();
			}
		</script>
	</div>
</section>