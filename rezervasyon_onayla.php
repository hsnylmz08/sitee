<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/site.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/main.js"></script>
        
  <link rel="stylesheet" href="css/example.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

          
  <meta name="author" content="Nathan Searles">

  <!-- SlidesJS Required (if responsive): Sets the page width to the device width. -->
  <meta name="viewport" content="width=device-width">
  <!-- End SlidesJS Required -->

  <!-- CSS for slidesjs.com example -->
  <link rel="stylesheet" href="css/example.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- End CSS for slidesjs.com example -->

  <!-- SlidesJS Optional: If you'd like to use this design -->
  <style>
    body {
      -webkit-font-smoothing: antialiased;
      font: normal 15px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
      color: #232525;

    }

    #slides,
    #slides2,
    #slides3 {
      display: none;
      margin-bottom:50px;
    }

    .slidesjs-navigation {
      margin-top:3px;
    }

    .slidesjs-previous {
      margin-right: 5px;
      float: left;
    }

    .slidesjs-next {
      margin-right: 5px;
      float: left;
    }

    .slidesjs-pagination {
      margin: 6px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(img/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    a:link,
    a:visited {
      color: #333
    }

    a:hover,
    a:active {
      color: #9e2020
    }

    .navbar {
      overflow: hidden
    }
  </style>
  <!-- End SlidesJS Optional-->

  <!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
  <style>
    #slides {
      display: none
    }

    .container {
      margin: 0 auto
    }

    /* For tablets & smart phones */
    @media (max-width: 767px) {
      body {
        padding-left: 20px;
        padding-right: 20px;
      }
      .container {
        width: 525px
      }
    }

    /* For smartphones */
    @media (max-width: 480px) {
      .container {
        width: 525px
      }
    }

    /* For smaller displays like laptops */
    @media (min-width: 544px) and (max-width: 544px) {
      .container {
        width: 544px;
		height:325px;
      }
    }

    /* For larger displays */
    @media (min-width: 544px) {
      .container {
        width: 544px;
		height:325px;
      }
    }
  </style>
  
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="main_wrapper">
            <section id="main_header_bg" class="zi-0"></section>
            <section id="site">
                <article id="top_content">
                    <p class="fastMembership pd-0 mrg-0">
                        <img src="img/logo.png" width="190" height="114" style="float:left; padding:10px;"/>
                    </p>
                    <p class="membership pd-0 mrg-0">
                        
                    </p>
                </article>
                <article style="margin-top:30px; padding-top:20px;">
                	<div></div>
                </article>
                <article id="main_content" class="pd-8">
                    <div id="top_inner_content">
                        <?php 
						
						require_once("ayar.php");
						$admin = "admin";
						$sifre = "admin";
						echo "<center style='color:#fff'>Sayın "."<b style='color:gold'>".$admin."</b>"." Administrator Sayfanıza Hoşgeldiniz. | <a href='index.php' style='color:gold'>Çıkış</a><br><br>";
						
						?>
                     
                    </div>
                    
                    <div id="middle_content">
                        <sidebar id="sidebar_left" class="fl">
                            <article id="categories">
                                <img src="img/categories.png" width="208" height="37"/>
                                <ul id="categories_list">
                                    <li><a href="index.php"</a>> Ana Sayfa</a></li>
                                    <li><a href="index.php"</a>> Gelinlik</a></li>
                                    <li><a href="damatlik.php"</a>> Damatlık</a></li>
                                    <li>> Blog</li>
                                    <li>> İletişim</li>
                                </ul>
                            </article>
                            
                            <article id="live_support">
                                <img src="img/live_support.png" width="208" height="37"/>
                                <div class="support-content">
                                	<div style="margin:0 auto; position:relative; float:inherit; padding:26px;font-size:14px; font-family:Tahoma; font-weight:700; color:#fff;">
                                   *****
                                </div>
                                </div>
                            </article>
                            <article id="connections">
                                <img src="img/connections.png" width="202" height="27"/>
                                <div class="connections-content">
                                <div style="font-family:tahoma; font-size:14px; color:#000; padding:20px;">
                                Blog<br>
                                Facebook<br>
                                Twitter<br>
                                Hakkımızda<br>
                                İletişim<br>
                                </div>
                                </div>
                            </article>
                        </sidebar>
                        <div id="content" class="fl">
                            <div class="carousel">

 				 <div class="container" >
<?php 
include("ayar.php");

                    
	require_once("ayar.php");
		$durum="1";					
	$sonuc = mysql_query("select * from rezervasyon");
	
	
	if(mysql_num_rows($sonuc)!=0)
		{
		while($oku = mysql_fetch_assoc($sonuc))
		{
	?>
		<div class="product fl mrgt-10" style="margin-left:50px">
	<?php
		echo' <span align="center" class="product_content">';

		echo 'Ad : '.$oku["ad"]."<br>Soyad: ".$oku["soyad"]."<br>Telefon: ".$oku["telefon"]."<br>Kiralama:".$oku["kiralama"]."<br>Birakma:".$oku["birakma"]."<br>"."Açıklama:".$oku["aciklama"];
		echo "<br><a href='rezervasyon_onayla2.php' style='font-size:15px;'>Onayla</a>";
		
		//echo "<a href='gelinlik_detay.php?urun_id=$oku[urun_id]'>Onayla</a>";	
		
		echo" </span>";
		
		echo" </div>";
			}
			}else{
				echo "Hic kayit yok!";
			}

mysql_close($baglan);

?>


</div>
                            
                        </div>
                      
                    </div>

<?php
include("include/footer.php");


?>
