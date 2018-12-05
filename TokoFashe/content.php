<?php
# Content Home
if (isset($_GET['pages'])){
	switch ($_GET['pages']){	
	    default		  : if(!file_exists ("pages/home/home.php")) die ("File Home tidak ada"); 
								include "pages/home/home.php"; break;

		case '' 	  : if(!file_exists ("pages/home/home.php")) die ("File Home tidak ada"); 
								include "pages/home/home.php"; break;

		case 'home'   : if(!file_exists ("pages/home/home.php")) die ("File Home tidak ada"); 
								include "pages/home/home.php"; break;

		case 'shop'   : if(!file_exists ("pages/shop/shop.php")) die ("File Shop tidak ada"); 
								include "pages/shop/shop.php"; break;

		case 'custom' : if(!file_exists ("pages/custom/custom.php")) die ("File Custom tidak ada");
								include "pages/custom/custom.php"; break;

		case 'about'  : if(!file_exists ("pages/about/about.php")) die ("File About tidak ada"); 
								include "pages/about/about.php"; break;

		case 'contact': if(!file_exists ("pages/contact/contact.php")) die ("File About tidak ada");
								include "pages/contact/contact.php"; break;

		case 'register'	: if(!file_exists ("register.php")) die ("File Register tidak ada");
								include "register.php"; break;

		case 'search-product'	: if(!file_exists ("pages/shop/search-product.php")) die ("File Search Produk tidak ada");
								include "pages/shop/search-product.php"; break;

		case 'product-detail'	: if(!file_exists ("pages/shop/detail-product.php")) die ("File Detail Produk tidak ada");
								include "pages/shop/detail-product.php"; break;

		case 'buy-product'	: if(!file_exists ("pages/shop/shop-buy-item.php")) die ("File Detail Produk tidak ada");
								include "pages/shop/shop-buy-item.php"; break;

		case 'cart-product'	: if(!file_exists ("pages/shop/cart-product.php")) die ("File Detail Produk tidak ada");
								include "pages/shop/cart-product.php"; break;
}						
}else{
	if(!file_exists ("pages/home/home.php")) die ("File Home tidak ada"); 
			include "pages/home/home.php"; 
}
?>