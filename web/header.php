<script>
function ChangeColor() {
var label;
label = document.getElementById("a");
label.className  = "intro";

}
</script>

<style>
.intro { 
    background-color: yellow;
}
</style>

<div class="wrap">
			<!----start-header--->
			<div class="header">
				<!----start-logo--->
				<div class="logo">
					<a href="index.html"><img src="web/images/sun&sky.jpg" title="logo" /></a>
				</div>
				<!----End-logo--->
				<!----start-contactinfo--->
				<div class="contact-info">
				
					<p>
					<img src="web/images/c-icon.png" title="contact-info" />
					CALL NOW!
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Office Hours:9:00 AM To 5:00 PM
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+92)213-5303133 OR (+92)335-3109942
					</p>
				</div>
				<div class="clear"> </div>
				<!----End-contactinfo--->
								
				</div>
				</div>
	<!---start-top-nav---->
				<div class="top-nav" >
					<div class="wrap">
						<ul>
							<li class="active"><a class="intro" href="index.html" onclick="ChangeColor();">Home</a></li>
							<li ><a href="error.html" >About</a></li>
							<li ><a href="error.html" >Services</a></li>
							<li ><a href="error.html" >Packages</a></li>
							<li ><a href="contact.html" onclick="ChangeColor();" >Contact</a></li>
							
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
				<!---End-top-nav---->
