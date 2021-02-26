<style>
      @import url(https://fonts.googleapis.com/css?family=Roboto:700);
* {
	font-family: "Roboto", sans-serif;
	margin: 0;
	padding: 0;
	outline: none;
}

div {
	width: 360px;
	height: 72px;
	margin: auto;
	background: #ececec;
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	display: block;
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
	-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
	-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

a.add-to-cart {
	width: 216px;
	height: 48px;
	background: #ffab00;
	font-size: 18px;
	line-height: 48px;
	letter-spacing: 2px;
	color: rgb(255, 255, 255);
	text-transform: uppercase;
	-moz-border-radius: 24px;
	-webkit-border-radius: 24px;
	border-radius: 24px;
	text-decoration: none;
	text-align: center;
	left: 24px;
	position: absolute;
	top: 48px;
	display: block;
	box-shadow: 0 3px 6px rgba(255, 171, 0, 0.16), 0 3px 6px rgba(255, 171, 0, 0.23);
	-moz-box-shadow: 0 3px 6px rgba(255, 171, 0, 0.16), 0 3px 6px rgba(255, 171, 0, 0.23);
	-webkit-box-shadow: 0 3px 6px rgba(255, 171, 0, 0.16), 0 3px 6px rgba(255, 171, 0, 0.23);
}

a.add-to-cart.size {
	width: 48px;
	left: 108px;
	font-size: 0;
	color: #e7bb45;
	letter-spacing: 0;
	-webkit-transition: .2s linear;
	-moz-transition: .2s linear;
	-ms-transition: .2s linear;
	-o-transition: .2s linear;
	transition: .2s linear;
}

a.add-to-cart.hover {
	-webkit-transition: .2s linear;
	-moz-transition: .2s linear;
	-ms-transition: .2s linear;
	-o-transition: .2s linear;
	transition: .2s linear;
	-webkit-transform: rotate(180deg);
	-moz-transform: rotate(180deg);
	-ms-transform: rotate(180deg);
	-o-transform: rotate(180deg);
	transform: rotate(180deg);
	-webkit-transform-origin: 108px 24px;
	-moz-transform-origin: 108px 24px;
	-o-transform-origin: 108px 24px;
	-ms-transform-origin: 108px 24px;
	transform-origin: 108px 24px;
}

a.cart {
	width: 72px;
	height: 72px;
	-moz-border-radius: 36px;
	-webkit-border-radius: 36px;
	border-radius: 36px;
	font-size: 18px;
	text-align: center;
	color: #616161;
	text-decoration: none;
	position: absolute;
	right: 24px;
	top: 36px;
	display: block;
	background: #535558 url(http://images.vfl.ru/ii/1484930184/14435803/15757225.png
) center no-repeat;
	background-size: 36px;
	box-shadow: 0 3px 6px rgba(97, 97, 97 0.16), 0 3px 6px rgba(97, 97, 97 0.23);
	-moz-box-shadow: 0 3px 6px rgba(97, 97, 97 0.16), 0 3px 6px rgba(97, 97, 97 0.23);
	-webkit-box-shadow: 0 3px 6px rgba(97, 97, 97 0.16), 0 3px 6px rgba(97, 97, 97 0.23);
}

a.cart > span {
	width: 24px;
	height: 24px;
	font-size: 16px;
	color: #fff;
	line-height: 24px;
	position: absolute;
	-moz-border-radius: 12px;
	-webkit-border-radius: 12px;
	border-radius: 12px;
	display: block;
	transform: scale(0);
	-o-transform: scale(0);
	-ms-transform: scale(0);
	-moz-transform: scale(0);
	-webkit-transform: scale(0);
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	margin: auto;
	background: #ffab00;
	box-shadow: 0 3px 6px rgba(255, 171, 0, 0.16), 0 3px 6px rgba(255, 171, 0, 0.23);
	-moz-box-shadow: 0 3px 6px rgba(255, 171, 0, 0.16), 0 3px 6px rgba(255, 171, 0, 0.23);
	-webkit-box-shadow: 0 3px 6px rgba(255, 171, 0, 0.16), 0 3px 6px rgba(255, 171, 0, 0.23);
}

a.cart > span.counter {
	left: 48px;
	bottom: 48px;
	-webkit-transition: .2s linear;
	-moz-transition: .2s linear;
	-ms-transition: .2s linear;
	-o-transition: .2s linear;
	transition: .2s linear;
	transform: scale(1);
	-o-transform: scale(1);
	-ms-transform: scale(1);
	-moz-transform: scale(1);
	-webkit-transform: scale(1);
}

</style>	
      <a href="index.php?m_id=<?php echo $row_prd['m_id'];?>&act=add" class="btn btn-success btn-xs add-to-cart"> 
      <span class="glyphicon glyphicon-shopping-cart"></span>  สั่งซื้อ </a>

<script>
      $(document).ready(function() {
	var count = 0;
	$("a.add-to-cart").click(function(event) {
		count++;
		$("a.add-to-cart").addClass("size");
		setTimeout(function() {
			$("a.add-to-cart").addClass("hover");
		}, 200);
		setTimeout(function() {
			$("a.cart > span").addClass("counter");
			$("a.cart > span.counter").text(count);
		}, 400);
		setTimeout(function() {
			$("a.add-to-cart").removeClass("hover");
			$("a.add-to-cart").removeClass("size");
		}, 600);
		event.preventDefault();
	});
});
</script>