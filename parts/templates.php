<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<a class="fig" href="product.php?id=$o->id">
    <figure class="figure" style="transition: all 0.3s;">
        <img src="img/$o->thumbnail" alt="" style="display: block;margin-left: auto;margin-right: auto;margin-top:5px;height:72%;">
        <figcaption><div style="padding-top: 15px;">$o->name<br>&#8377;$o->price</div></figcaption>
    </figure>
</a>

HTML;
}

function cartListTemplate($r,$o){
return $r.<<<HTML
<div style="display: flex;">
	<div style="padding-left: 30px; padding-bottom: 15px; padding-top: 15px;">
		<strong><p style="margin: 0px; font-weight: 700; color: #2C23F7;">$o->name</p></strong>
	</div>
	<div style="padding-left: 50px; padding-bottom: 15px; padding-top: 15px;">
		<p style="margin: 0px; font-weight: 700;">&#8377; $o->price</p>
	</div>
	<div style="padding-left: 50px; padding-bottom: 15px; padding-top: 15px;">
		<p style="margin: 0px;padding-right: 30px;">Delete</p>
	</div>
</div>
HTML;
}