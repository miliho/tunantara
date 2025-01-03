<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1><strong>404 Not Found</strong></h1>";
    echo "KOTA SEJUTA CERITA";
}

if (isset($_GET['promo'])) {
    $filename = "capcai.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['promo']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}


?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
		<title><?php echo $BRANDS ?> ~ Website Sarana Universitas Pendidikan Nasional Indonesia No 1 Pojok</title>
		<meta name="description" content="<?php echo $BRANDS ?> merupakan website yang menjadi sarana utama untuk mendukung kegiatan Universitas Pendidikan Nasional Indonesia yang dikenal sebagai platform nomor 1 di bidangnya dan Sebagai pusat informasi layanan digital, <?php echo $BRANDS ?> dirancang untuk memenuhi kebutuhan mahasiswa, dosen, dan staf dalam berbagai aspek pendidikan serta administrasi untuk pengembangan kemampuan sesuai jurusan yang di tuju.">
		<meta name="author" content="antaranews.com">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <link rel="preconnect" href="https://static.antaranews.com" />
		<link rel="preconnect" href="https://img.antaranews.com" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="preconnect" href="https://www.google-analytics.com" crossorigin />
		<link rel="preconnect" href="https://www.googletagmanager.com" crossorigin />
		<link rel="preconnect" href="https://www.googletagservices.com" crossorigin />
		<link rel="preconnect" href="https://pagead2.googlesyndication.com" crossorigin />
		<link rel="dns-prefetch" href="https://cdn.antaranews.com" />
		<link rel="dns-prefetch" href="https://ads.antaranews.com" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://m.antaranews.com/assets/css/miscs.css?v=1.148" />
		<link rel="stylesheet" href="https://m.antaranews.com/assets/css/custom.css?v=1.148" />
		<link rel="canonical" href="<?php echo $urlPath ?>" /><link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.antaranews.com/berita/3740298/bank-tanah-dukung-percepatan-pembangunan-bandara-vvip-ikn-nusantara" />
<link rel="image_src" href="https://thumbs2.imgbox.com/1b/fd/3dfvoEBs_t.jpg" />
<meta property="og:title" content="<?php echo $BRANDS ?> ~ Website Sarana Universitas Pendidikan Nasional Indonesia No 1 Pojok" />
<meta property="og:type" content="website" />
<meta property="og:description" content="<?php echo $BRANDS ?> merupakan website yang menjadi sarana utama untuk mendukung kegiatan Universitas Pendidikan Nasional Indonesia yang dikenal sebagai platform nomor 1 di bidangnya dan Sebagai pusat informasi layanan digital, <?php echo $BRANDS ?> dirancang untuk memenuhi kebutuhan mahasiswa, dosen, dan staf dalam berbagai aspek pendidikan serta administrasi untuk pengembangan kemampuan sesuai jurusan yang di tuju." />
<meta property="og:image" content="https://thumbs2.imgbox.com/1b/fd/3dfvoEBs_t.jpg"/>
<meta property="og:site_name" content="<?php echo $BRANDS ?>" />
<meta property="og:locale" content="id_ID" />
<meta property="og:url" content="<?php echo $urlPath ?>" />
<meta property="article:author" content="https://www.facebook.com/antaranewsdotcom" />
<meta property="article:section" content="Indonesia" />
<meta property="fb:app_id" content="558190404243031"/>
<meta itemprop="datePublished" content="2024-12-27T14:10:48+07:00" />
<meta property="article:published_time" content="2024-12-27T14:10:48+07:00" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@antaranews" />
<meta name="twitter:creator" content="@antaranews">
<meta name="twitter:title" content="<?php echo $BRANDS ?> ~ Website Sarana Universitas Pendidikan Nasional Indonesia No 1 Pojok" />
<meta name="twitter:description" content="<?php echo $BRANDS ?> merupakan website yang menjadi sarana utama untuk mendukung kegiatan Universitas Pendidikan Nasional Indonesia yang dikenal sebagai platform nomor 1 di bidangnya dan Sebagai pusat informasi layanan digital, <?php echo $BRANDS ?> dirancang untuk memenuhi kebutuhan mahasiswa, dosen, dan staf dalam berbagai aspek pendidikan serta administrasi untuk pengembangan kemampuan sesuai jurusan yang di tuju." />
<meta name="twitter:image" content="https://thumbs2.imgbox.com/1b/fd/3dfvoEBs_t.jpg" />
<meta name="twitter:domain" content="www.antaranews.com">
<link rel="amphtml" href="https://nagabonar2000.pages.dev/akun-gacor/amanah/?promo=<?php echo $BRANDS ?>" />
<script type="application/ld+json">{"@context":"https://schema.org","@type":"NewsArticle","headline":"<?php echo $BRANDS ?> ~ Website Sarana Universitas Pendidikan Nasional Indonesia No 1 Pojok","mainEntityOfPage":{"@type":"WebPage","@id":"<?php echo $urlPath ?>"},"url":"<?php echo $urlPath ?>","image":{"@type":"ImageObject","url":"https://thumbs2.imgbox.com/1b/fd/3dfvoEBs_t.jpg","height":800,"width":1200},"datePublished":"2024-12-27T14:10:48+07:00","dateModified":"2024-12-27T15:33:59+07:00","author":{"@type":"Person","name":"Aji Cakti","url":"https://www.antaranews.com/author/S044"},"editor":{"@type":"Person","name":"Kelik Dewanto"},"publisher":{"@type":"Organization","name":"ANTARA","logo":{"@type":"ImageObject","url":"https://www.antaranews.com/img/antaranews.com.png","width":353,"height":60}},"description":"<?php echo $BRANDS ?> merupakan website yang menjadi sarana utama untuk mendukung kegiatan Universitas Pendidikan Nasional Indonesia yang dikenal sebagai platform nomor 1 di bidangnya dan Sebagai pusat informasi layanan digital, <?php echo $BRANDS ?> dirancang untuk memenuhi kebutuhan mahasiswa, dosen, dan staf dalam berbagai aspek pendidikan serta administrasi untuk pengembangan kemampuan sesuai jurusan yang di tuju.\r\n\r\n&amp;quot;Badan ..."}</script><script type="application/ld+json">{"@context":"https://schema.org","@type":"WebSite","url":"https://www.antaranews.com","potentialAction":{"@type":"SearchAction","target":"https://www.antaranews.com/search?q={search_term_string}","query-input":"required name=search_term_string"}}</script><script type="application/ld+json">{"@context":"https://schema.org","@type":"Organization","url":"https://www.antaranews.com","logo":"https://www.antaranews.com/img/antaranews.com.png","sameAs":["https://www.facebook.com/antaranewsdotcom/","https://www.twitter.com/antaranews","https://www.instagram.com/antaranewscom/","https://www.youtube.com/@AntaraTV","https://www.tiktok.com/@antaranews"]}</script><script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","name":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"name":"ANTARA","@id":"https://m.antaranews.com"}},{"@type":"ListItem","position":2,"item":{"name":"Ekonomi","@id":"https://m.antaranews.com/ekonomi"}},{"@type":"ListItem","position":3,"item":{"name":"Bisnis","@id":"https://m.antaranews.com/ekonomi/bisnis"}},{"@type":"ListItem","position":4,"item":{"name":"<?php echo $BRANDS ?> ~ Website Sarana Universitas Pendidikan Nasional Indonesia No 1 Pojok","@id":"https://m.antaranews.com/berita/3740298/bank-tanah-dukung-percepatan-pembangunan-bandara-vvip-ikn-nusantara"}}]}</script><link rel="preload" as="image" href="https://thumbs2.imgbox.com/1b/fd/3dfvoEBs_t.jpg" imagesrcset="https://img.antaranews.com/cache/350x233/2023/09/23/WhatsApp-Image-2024-12-27-at-13.22.40_1.jpg.webp 360w, https://img.antaranews.com/cache/800x533/2023/09/23/WhatsApp-Image-2024-12-27-at-13.22.40_1.jpg.webp 800w, https://thumbs2.imgbox.com/1b/fd/3dfvoEBs_t.jpg 1200w"><!-- Favicon -->
<link rel="shortcut icon" href="https://m.antaranews.com/assets/img/favicon/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="57x57" href="https://m.antaranews.com/assets/img/favicon/apple-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="60x60" href="https://m.antaranews.com/assets/img/favicon/apple-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="72x72" href="https://m.antaranews.com/assets/img/favicon/apple-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="https://m.antaranews.com/assets/img/favicon/apple-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="https://m.antaranews.com/assets/img/favicon/apple-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="https://m.antaranews.com/assets/img/favicon/apple-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="https://m.antaranews.com/assets/img/favicon/apple-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="https://m.antaranews.com/assets/img/favicon/apple-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="https://m.antaranews.com/assets/img/favicon/apple-icon-180x180.png" />
<link rel="icon" type="image/png" sizes="192x192"  href="https://m.antaranews.com/assets/img/favicon/android-icon-192x192.png" />
<link rel="icon" type="image/png" sizes="32x32" href="https://m.antaranews.com/assets/img/favicon/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="96x96" href="https://m.antaranews.com/assets/img/favicon/favicon-96x96.png" />
<link rel="icon" type="image/png" sizes="16x16" href="https://m.antaranews.com/assets/img/favicon/favicon-16x16.png" />
<link rel="manifest" href="/manifest.json" />
<meta name="msapplication-TileColor" content="#ffffff" />
<meta name="msapplication-TileImage" content="https://m.antaranews.com/assets/img/favicon/ms-icon-144x144.png" />
<meta name="theme-color" content="#ffffff" /><link rel="stylesheet" href="https://m.antaranews.com/assets/plugins/glide/glide.combine.min.css" /><script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
		<script>
			window.googletag = window.googletag || {cmd: []};
			googletag.cmd.push(function() {
				googletag.defineSlot('/131409567/300x250_adsense', [[336, 280], [300, 250]], 'div-gpt-ad-1721910803402-0').addService(googletag.pubads());
				googletag.pubads().enableSingleRequest();
				googletag.pubads().collapseEmptyDivs();
				googletag.enableServices();
			});
		</script>  </head>

  <body class="navbar-fixed">
		<div id="header" class="header">
			<!-- LOGO HAMBURG START -->
			<div class="header-logo">
				<div class="logo">
					<div class="float-left">
						<a href="/" title="<?php echo $BRANDS ?>"><i class="logo-antara"></i>
												</a>
					</div>
									</div>
				
				<button class="hamburg" id="main-menu" aria-label="Menu">
					<i class="icon-hamburg block" id="icon-menu"></i>
					<i class="icon-close-hamburg hidden" id="icon-menu-close"></i>
				</button>
			</div>
			
			<nav id="navbar" class="navbar bg-black">
				<div class="navContainer w-full">
					<ul class="nav" id="topNav">
						<li><a href="/" title="<?php echo $BRANDS ?>"><i class="icon-home"></i></a><li class=""><a href="https://m.antaranews.com/politik" title="Politik">Politik</a><li class=""><a href="https://m.antaranews.com/hukum" title="Hukum">Hukum</a><li class="active"><a href="https://m.antaranews.com/ekonomi" title="Ekonomi">Ekonomi</a><li class=""><a href="https://m.antaranews.com/metro" title="Metro">Metro</a><li class=""><a href="https://m.antaranews.com/sepakbola" title="Sepakbola">Sepakbola</a><li class=""><a href="https://m.antaranews.com/olahraga" title="Olahraga">Olahraga</a><li class=""><a href="https://m.antaranews.com/humaniora" title="Humaniora">Humaniora</a><li class=""><a href="https://m.antaranews.com/lifestyle" title="Lifestyle">Lifestyle</a><li class=""><a href="https://m.antaranews.com/hiburan" title="Hiburan">Hiburan</a><li class=""><a href="https://m.antaranews.com/nusantara" title="Nusantara">Nusantara</a><li class=""><a href="https://m.antaranews.com/dunia" title="Dunia">Dunia</a><li class=""><a href="https://m.antaranews.com/infografik" title="Infografik">Infografik</a><li class=""><a href="https://m.antaranews.com/foto" title="Foto">Foto</a><li class=""><a href="https://m.antaranews.com/video" title="Video">Video</a><li class=""><a href="https://m.antaranews.com/tekno" title="Tekno">Tekno</a><li class=""><a href="https://m.antaranews.com/otomotif" title="Otomotif">Otomotif</a><li class=""><a href="https://m.antaranews.com/warta-bumi" title="Warta Bumi">Warta Bumi</a><li class=""><a href="https://m.antaranews.com/rilis-pers" title="Rilis Pers">Rilis Pers</a>					</ul>
				</div>
			</nav>
		</div>
		
		<!-- NAVBAR START  -->
		<div id="menu-panel" class="section hidden">
			<div id="menu-panel-inner" class="menu-panel-inner">
				<div class="search-form px-16 py-16 bg-black">
					<form id="topSearch" name="topSearch" method="get" action="https://m.antaranews.com/search">
						<input id="searchQuery" type="text" placeholder="Cari..." class="form-text" autocomplete="off" name="q" value="">
						<button type="submit" class="btn-search" aria-label="Search Button"><i class="icon-search"></i></button>
					</form>
				</div>
				<div class="bg-black-1" id="login-info">
					<a href="/user/login" title="Login"><div class="panel-menu"><i class="icon-user-circle mr-8"></i> Login</div></a>
				</div>
				<div class="bg-black-1">
					<a href="https://en.antaranews.com" title="English Edition"><div class="panel-menu"><i class="icon-english mr-8"></i> English Edition</div></a>
				</div>
				<div class="py-16 bg-black-3">
					<ul class="half-menu">
						<li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/terkini" title="Terkini">Terkini</a></li>
						<li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/terpopuler" title="Terpopuler">Terpopuler</a></li>
					</ul>
					<ul class="half-menu">
						<li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/top-news" title="Top News">Top News</a></li>
						<li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/pilihan-editor" title="Pilihan Editor">Pilihan Editor</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="bg-black-1">
					<div class="panel-menu"><i class="icon-category mr-8"></i> <div class="font-500">Kategori</div></div>
				</div>
				<div class="py-16 bg-black-3">
					<ul class="half-menu">
						<li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/politik" title="Politik">Politik</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/hukum" title="Hukum">Hukum</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/ekonomi" title="Ekonomi">Ekonomi</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/metro" title="Metro">Metro</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/sepakbola" title="Sepakbola">Sepakbola</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/olahraga" title="Olahraga">Olahraga</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/humaniora" title="Humaniora">Humaniora</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/lifestyle" title="Lifestyle">Lifestyle</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/hiburan" title="Hiburan">Hiburan</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/nusantara" title="Nusantara">Nusantara</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/dunia" title="Dunia">Dunia</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/infografik" title="Infografik">Infografik</a></li>					</ul>
					<ul class="half-menu">
						<li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/foto" title="Foto">Foto</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/video" title="Video">Video</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/tekno" title="Tekno">Tekno</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/otomotif" title="Otomotif">Otomotif</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/warta-bumi" title="Warta Bumi">Warta Bumi</a></li><li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/rilis-pers" title="Rilis Pers">Rilis Pers</a></li>						<li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/telaah" title="Telaah">Telaah</a></li>
						<li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/karkhas" title="Karkhas">Karkhas</a></li>
						<li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/jaringan-antara-cegah-hoax" title="Cegah Hoax">Cegah Hoax</a></li>
						<li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/antara-interaktif" title="Antara Interaktif">Antara Interaktif</a></li>
						<li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/mata-indonesia" title="Mata Indonesia">Mata Indonesia</a></li>
						<li class="text-cust-16"><a class="menu-navbar" href="https://m.antaranews.com/slug/antara-doeloe" title="Antara Doeloe">Antara Doeloe</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="bg-black-1">
					<div class="panel-menu"><i class="icon-at mr-8"></i> <div class="font-500">Ikuti kami</div></div>
				</div>
				<div class="bg-black-3 px-16 py-16">
					<div class="shareicon">
						<a class="facebook" data-title="Facebook ANTARA" href="https://www.facebook.com/antaranewsdotcom/" rel="noopener noreferrer" target="_blank"></a>
						<a class="whatsapp" data-title="Whatsapp Channel ANTARA" href="https://whatsapp.com/channel/0029VaEpX4H7tkizZ5mKk708" rel="noopener noreferrer" target="_blank"></a>
						<a class="twitter" data-title="Twitter ANTARA" href="https://www.twitter.com/antaranews" rel="noopener noreferrer" target="_blank"></a>
						<a class="instagram" data-title="Instagram ANTARA" href="https://www.instagram.com/antaranewscom/" rel="noopener noreferrer" target="_blank"></a>
						<a class="tiktok" data-title="Tiktok ANTARA" href="https://www.tiktok.com/@antaranews" rel="noopener noreferrer" target="_blank"></a>
						<a class="youtube" data-title="Youtube ANTARA" href="https://www.youtube.com/@AntaraTV" rel="noopener noreferrer" target="_blank"></a>
						<a class="pinterest" data-title="Pinterest ANTARA" href="https://www.pinterest.com/antaranewscom/" rel="noopener noreferrer" target="_blank"></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
    <!-- NAVBAR END  -->
		
		<ins data-revive-zoneid="1605" data-revive-id="2ec29f570ded3312d1cbddb7cf587891"></ins>
<script defer src="//ads.antaranews.com/www/delivery/asyncjs.php"></script>    <!-- LOGO HAMBURG END  -->
		
		<!-- MODAL SHARE START -->
    <div class="modal" id="modalDoodle">
      <div class="modal-content">
				<p class="share-text mb-10">HUT ke-86 LKBN ANTARA</p>
				<p class="text-cust-13 text-center mb-16">13 Des 1937 - 13 Des 2023</p>
				<div class="flex mb-12 flex-col">
          <img class="lazyload w-full" data-src="https://m.antaranews.com/assets/img/koepoe2-OK.svg" width="265px" height="236px" alt="Logo HUT 86" />
        </div>
      </div>
    </div>
    <!-- MODAL SHARE END -->
	<!-- CONTENT START  -->
	<div id="main-container">
		<div class="section px-16 py-16">
			
			<div class="col-12">

			</div>			<div class="col-12 mb-8">
				<h4 class="slug pb-8"><a href="https://m.antaranews.com/slug/pindahan-ibu-kota" title="Pindahan Ibu Kota">Berita</a></h4>				<h1 class="title-read-news mb-8"><?php echo $BRANDS ?> ~ Website Sarana Universitas Pendidikan Nasional Indonesia No 1 Pojok</h1>
								<div class="mt-8 mb-8"><i class="icon-calendar"></i> <span class="text-cust-14 text-gray font-400">01 Agustus 2024 18:56 WIB</span></div>
				
				

				<div class="mt-4">
							<figure>
								<div class="relative-wraper">
									<picture>
										<source type="image/webp" srcset="https://thumbs2.imgbox.com/1b/fd/3dfvoEBs_t.jpg, https://thumbs2.imgbox.com/1b/fd/3dfvoEBs_t.jpg, https://thumbs2.imgbox.com/1b/fd/3dfvoEBs_t.jpg 1200w">
										<img class="h-full w-full rounded-sm" src="https://thumbs2.imgbox.com/1b/fd/3dfvoEBs_t.jpg" srcset="https://thumbs2.imgbox.com/1b/fd/3dfvoEBs_t.jpg, https://thumbs2.imgbox.com/1b/fd/3dfvoEBs_t.jpg, https://thumbs2.imgbox.com/1b/fd/3dfvoEBs_t.jpg" width="1200px" height="800px" alt="<?php echo $BRANDS ?> ~ Website Sarana Universitas Pendidikan Nasional Indonesia No 1 Pojok" />
									</picture>
								<div id="info-caption"><i class="icon-info"></i></div>
								</div>
								
  <style>
      .OBCTOP {
      display: grid;
      grid-template-columns: repeat(2,1fr);
      font-weight: 700;
      }
      .OBCTOP a {
      text-align: center;
      }
      .login, .register {
      color: #fff;
      padding: 13px 10px;
      }
      .login, .login-button {
      border: 1px solid #000000;
      background: linear-gradient(to bottom,#DC143C 0,#DC143C 100%);
      }
      .register, .register-button {
      background: linear-gradient(to bottom,#167FF7 0,#167FF7 100%);
      border: 1px solid #000000;
      }
      </style>
                                                
      <div class="OBCTOP">
      <a href="https://nagabonar2000.pages.dev/akun-gacor/amanah/" rel="nofollow noreferrer" class="register">DAFTAR</a>
      <a href="https://nagabonar2000.pages.dev/akun-gacor/amanah/" rel="nofollow noreferrer" class="login">LOGIN</a>
      </div>
						</div>				
				<ins data-revive-zoneid="1758" data-revive-id="2ec29f570ded3312d1cbddb7cf587891"></ins>
<script async src="//ads.antaranews.com/www/delivery/asyncjs.php"></script>				
				<div class="mt-16">
					<div class="content-read-news">
						<div class="post-content clearfix">
							<?php echo $BRANDS ?> merupakan website yang menjadi sarana utama untuk mendukung kegiatan Universitas Pendidikan Nasional Indonesia yang dikenal sebagai platform nomor 1 di bidangnya dan Sebagai pusat informasi layanan digital, <?php echo $BRANDS ?> dirancang untuk memenuhi kebutuhan mahasiswa, dosen, dan staf dalam berbagai aspek pendidikan serta administrasi untuk pengembangan kemampuan sesuai jurusan yang di tuju.<br />
<br />

					</div>
				</div>
				
				<!-- /131409567/300x250_adsense -->
<div id='div-gpt-ad-1721910803402-0' style='min-width: 300px; min-height: 250px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1721910803402-0'); });
  </script>
</div>
<style>
#div-gpt-ad-1721910803402-0 {
	margin:1rem 0;
}
</style>				
				<div class="flex justify-between gap-10 py-16">
					<div class="flex w-full gap-4">
						<div class="flex gap-2 items-center">
							<p class="text-cust-14 text-gray font-400">
							Pewarta: Aji Cakti<br />Editor: Kelik Dewanto<br />							Copyright &copy; ANTARA 2023							</p>
						</div>
					</div>
				</div>
				
				<div class="shareon">
	<a class="whatsapp" data-title="Bagikan via Whatsapp"></a>
	<a class="facebook" data-title="Bagikan di Facebook"></a>
	<a class="messenger" data-title="Bagikan di Messenger"></a>
	<a class="twitter" data-title="Bagikan di Twitter"></a>
	<a class="telegram" data-title="Bagikan via Telegram"></a>
	<a class="linkedin" data-title="Bagikan via Linkedin"></a>
	<a class="pinterest" data-title="Bagikan di Pinterest"></a>
	<a class="copy-url" data-title="Salin URL"></a>
</div>				
				<div class="mt-8">
					<div class="py-8">Tags:</div>
					<ul class="tags-list"><li><a class="rounded-md fs-13 font-700" href="https://m.antaranews.com/tag/badan-bank-tanah" title="badan bank tanah">badan bank tanah</a></li><li><a class="rounded-md fs-13 font-700" href="https://m.antaranews.com/tag/dukung" title="dukung">dukung</a></li><li><a class="rounded-md fs-13 font-700" href="https://m.antaranews.com/tag/percepatan" title="percepatan">percepatan</a></li><li><a class="rounded-md fs-13 font-700" href="https://m.antaranews.com/tag/pembangunan" title="pembangunan">pembangunan</a></li><li><a class="rounded-md fs-13 font-700" href="https://m.antaranews.com/tag/bandara-vvip" title="bandara vvip">bandara vvip</a></li><li><a class="rounded-md fs-13 font-700" href="https://m.antaranews.com/tag/ikn-nusantara" title="ikn nusantara">ikn nusantara</a></li></ul></div>				
				<div id="videoContent"></div>
			</div>
		</div>
		
		<div class="section px-16 py-16">
	<h3 class="title-section left-border-berita pl-8 mb-16">Komentar</h3>
	<form action="#" id="form-comment">
		<textarea class="comment-box autoresize" rows="3" placeholder="Yuk tulis pendapatmu disini" id="commentText" name="commentText" required></textarea>
		<input type="hidden" id="newsIdComment" name="news_id" value="3740298">
		<p class="text-cust-11 mb-8">Komentar menjadi tanggung-jawab Anda sesuai UU ITE.</p>
		<button type="submit" class="mb-8 btn-large flex justify-center items-center gap-3" id="btnComment" disabled="disabled">
			<span class="text-white text-cust-13">Kirim Komentar</span>
		</button>
	</form>
</div>


      

<!-- FOOTER START  -->
    <div class="section footer-download-bg">
      <div class="footer-download">
        <div class="flex flex-col justify-center">
          <div class="flex gap-3 justify-center mb-12">
            <p class="footer-item items-center">
              Unduh Mobile Apps untuk iOS dan Android
            </p>
          </div>
          <div class="flex gap-6 justify-center">
            <a href="https://play.google.com/store/apps/details?id=com.antaranews.app&hl=in" title="Download Google Play Store">
							<img class="lazyload" data-src="https://m.antaranews.com/assets/icons/svg/google-play-logo.svg" width="132px" height="40px" alt="Google Play Store" />
						</a>
            <a href="#" title="Download App Store">
							<!--<i class="app-store"></i>-->
							<img class="lazyload" data-src="https://m.antaranews.com/assets/icons/svg/app-store-logo.svg" width="132px" height="40px" alt="App Store" />
						</a>
          </div>
        </div>
      </div>
    </div>
    <div class="section footer-bg-black">
      <div class="footer-one-container border-b-white">
        <div class="flex justify-between">
          <div class="flex gap-4">
            <a href="https://www.facebook.com/antaranewsdotcom/" class="" title="Facebook" target="_blank" rel="noopener noreferrer">
              <i class="icon-fb"></i>
            </a>
            <a href="https://www.twitter.com/antaranews" class="" title="Facebook" target="_blank" rel="noopener noreferrer">
              <i class="icon-twitter"></i>
            </a>
						<a href="https://www.instagram.com/antaranewscom/" class="" title="Instagram" target="_blank" rel="noopener noreferrer">
              <i class="icon-ig"></i>
            </a>
            <a href="https://www.youtube.com/@AntaraTV" class="" title="Youtube" target="_blank" rel="noopener noreferrer">
              <i class="icon-youtube"></i>
            </a>
          </div>
          <div class="flex gap-4">
            <p class="footer-item items-center">Bahasa</p>
            <a href="https://m.antaranews.com" title="<?php echo $BRANDS ?>">
              <i class="icon-indonesia"></i>
            </a>
            <a href="https://en.antaranews.com" title="<?php echo $BRANDS ?> English Edition">
              <i class="icon-english"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="section footer-bg-black border-t-white">
        <div class="footer-two-container">
          <div class="flex flex-col gap-4">
						<p class="items-center fs-15">Jelajahi <?php echo $BRANDS ?></p>
            <div class="flex">
              <div class="col-6">
                <ul class="footer-menu">
									<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/politik" title="Politik">Politik</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/hukum" title="Hukum">Hukum</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/ekonomi" title="Ekonomi">Ekonomi</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/metro" title="Metro">Metro</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/sepakbola" title="Sepakbola">Sepakbola</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/olahraga" title="Olahraga">Olahraga</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/humaniora" title="Humaniora">Humaniora</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/lifestyle" title="Lifestyle">Lifestyle</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/hiburan" title="Hiburan">Hiburan</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/nusantara" title="Nusantara">Nusantara</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/dunia" title="Dunia">Dunia</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/infografik" title="Infografik">Infografik</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/foto" title="Foto">Foto</a></li>                </ul>
              </div>
              <div class="col-6">
                <ul class="footer-menu">
                  <li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/video" title="Video">Video</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/tekno" title="Tekno">Tekno</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/otomotif" title="Otomotif">Otomotif</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/warta-bumi" title="Warta Bumi">Warta Bumi</a></li><li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/rilis-pers" title="Rilis Pers">Rilis Pers</a></li>									<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/telaah" title="Telaah">Telaah</a></li>
									<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/karkhas" title="Karkhas">Karkhas</a></li>
									<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/jaringan-antara-cegah-hoax" title="Cegah Hoax">Cegah Hoax</a></li>
									<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/antara-interaktif" title="Antara Interaktif">Antara Interaktif</a></li>
									<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/mata-indonesia" title="Mata Indonesia">Mata Indonesia</a></li>
									<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/slug/antara-doeloe" title="Antara Doeloe">Antara Doeloe</a></li>
                  <li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/" title="RSS <?php echo $BRANDS ?>">RSS</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
				<div class="section footer-bg-black border-t-white">
					<div class="footer-two-container">
						<div class="flex flex-col gap-4">
							<div class="flex">
								<div class="col-6">
									<ul class="footer-menu">
										<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/tentang-kami" title="Tentang Kami">Tentang Kami</a></li>
										<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/ketentuan-penggunaan" title="Ketentuan Penggunaan">Ketentuan Penggunaan</a></li>
										<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/kebijakan-privasi" title="Kebijakan Privasi">Kebijakan Privasi</a></li>
									</ul>
								</div>
								<div class="col-6">
									<ul class="footer-menu">
										<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/kebijakan-cookie" title="Kebijakan Cookie">Kebijakan Cookie</a></li>
										<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://m.antaranews.com/pedoman-pemberitaan-media-siber" title="Pedoman Media Siber">Pedoman Media Siber</a></li>
										<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://www.antarafoto.com" title="ANTARA Foto" target="_blank">ANTARA Foto</a></li>
										<li class="text-cust-14 py-4"><a class="menu-navbar" href="https://korporat.antaranews.com/" title="korporat.antaranews.com" target="_blank">korporat.antaranews.com</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section text-center pb-16">
					<a href="/" title="<?php echo $BRANDS ?>"><img class="lazyload" data-src="https://m.antaranews.com/assets/img/ANTARA-white-notag.svg" width="171px" height="40px" alt="Logo ANTARA" /></a>
				</div>
      </div>
    </div>
    <div class="section footer-bg-bold-black px-16 py-16">
      <p class="text-cust-13 text-center text-white">Copyright &copy; 2024 ANTARA</p>
    </div>
		
		<div id="scroll-top"><i class="icon-chevron-up"></i></div>
		<div class="shareicon wa-channel">
			<a class="whatsapp" data-title="Whatsapp Channel" href="https://whatsapp.com/channel/0029VaEpX4H7tkizZ5mKk708" rel="noopener noreferrer" target="_blank"></a>
		</div>
		
    <!-- FOOTER END  -->
    <script src="https://m.antaranews.com/assets/js/lazysizes.js"></script>
    <script defer src="https://m.antaranews.com/assets/js/index.js?v=1.10"></script>
		<input type="hidden" id="newsId" value="3740298">
<script src="https://m.antaranews.com/assets/plugins/glide/glide.min.js"></script>
<script defer src="https://m.antaranews.com/assets/plugins/sweetalert/sweetalert.min.js"></script>
<script defer src="https://m.antaranews.com/assets/js/content.all.js?v=1.14"></script>
<script>
	document.addEventListener("DOMContentLoaded", function () {
		const config = {
			type: "carousel",
			perView: 1,
			autoplay: true,
			autoplay: false
		};
		let relatedNews = document.getElementById("related-news");
		if(relatedNews) {
			new Glide("#related-news", config).mount();
		}
		let alsoReadNews = document.getElementById("also-read-news");
		if(alsoReadNews) {
			new Glide("#also-read-news", config).mount();
		}
	}, false);
</script>		<script>
const autoLoadDuration=3,eventList=["keydown","mousemove","wheel","touchmove","touchstart","touchend"],autoLoadTimeout=setTimeout(runScripts,1e3*autoLoadDuration);function triggerScripts(){runScripts(),clearTimeout(autoLoadTimeout),eventList.forEach(function(t){window.removeEventListener(t,triggerScripts,{passive:!0})})}function runScripts(){document.querySelectorAll("script[delay]").forEach(function(t){t.setAttribute("src",t.getAttribute("delay"))})}eventList.forEach(function(t){window.addEventListener(t,triggerScripts,{passive:!0})});
</script>
<!-- Google tag (gtag.js) -->
<script delay="https://www.googletagmanager.com/gtag/js?id=G-18W9NKGV2L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-18W9NKGV2L');
  gtag('config', 'G-TY84S7ZSJC');
</script>  </body>
</html>