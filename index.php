<form onsubmit="return doSubscribe();">
	<div class="container">
		<h2>Subscribe to our Newsletter</h2>
		<p>Lorem ipsum..</p>
	</div>

	<div class="container" style="background-color:white">
		<input type="email" name="email" id="subscriberEmail" placeholder="Subscribe to newsletter" required>
	</div>

	<div class="container">
		<input type="submit" value="Subscribe">
	</div>

	<p id="subscribe-message"></p>
</form>

<style type="text/css">
	/* Style the form element with a border around it */
	form {
		border: 4px solid #f1f1f1;
	}

	/* Add some padding and a grey background color to containers */
	.container {
		padding: 20px;
		background-color: #f1f1f1;
	}

	/* Style the input elements and the submit button */
	input[type=text], input[type=email], input[type=submit] {
		width: 100%;
		padding: 12px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}

	/* Add margins to the checkbox */
	input[type=checkbox] {
		margin-top: 16px;
	}

	/* Style the submit button */
	input[type=submit] {
		background-color: #4CAF50;
		color: white;
		border: none;
		cursor: pointer;
	}

	input[type=submit]:hover {
		opacity: 0.8;
	}
</style>

<script type="text/javascript">
	function doSubscribe() {
		var subscriberEmail = document.getElementById("subscriberEmail").value;
		
		var ajax = new XMLHttpRequest();
		ajax.open("POST", "subscribe-newsletter.php", true);
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		
		ajax.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("subscribe-message").innerHTML = "You have been subscribed to our newsletter.";
			}
		};

		ajax.send("subscriberEmail=" + subscriberEmail);
		return false;
	}
</script>