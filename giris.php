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
	  background:#0066CC;
	  }
	.orta {
		 width:350px;
		 height:auto;
		 margin:0 auto;
		 color:#fff;
		 font-weight:700;
		 font-family:"Arial Black", Gadget, sans-serif;
		 margin-top:150px;
		 border:1px dotted #fff;
		 border-radius:5px
		}
    }

</style>
  
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="orta">
       		 <form action="index2.php" method="post">
              <u>Üye Girişi</u>
                <table>
                    <tr>
                        <td>Kullanıcı Adı</td>
                        <td>:</td>
                        <td><input type="text" name="kadi" id="kadi"/></td>
                    </tr>
                    <tr>
                        <td>Şifre</td>
                        <td>:</td>
                        <td><input type="password" name="sifre" id="sifre"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php
						require_once("ayar.php");
										
						$sonuc = mysql_query("select id,kadi,sifre from uye_kayit");
						
						if(mysql_num_rows($sonuc)!=0)
										{
											 
											while($oku = mysql_fetch_assoc($sonuc))
											{
						
						   }
										}else{
											echo "Hic kayit yok!";
										}
										echo "<a href='index2.php?id=$oku[id]'>Giriş</a>"; 
										mysql_close($baglan);
						 
						 ?>	</td>
                        <td></td>
                    </tr>
                
                </table>
        	</form>
            ----------------------------------------------------------------------
            <form action="admin.php" method="post">
              <u>Admin Girişi</u>
                <table>
                    <tr>
                        <td>Admin Adı</td>
                        <td>:</td>
                        <td><input type="text" name="adminadi" id="adminadi"/></td>
                    </tr>
                    <tr>
                        <td>Şifre</td>
                        <td>:</td>
                        <td><input type="password" name="sifre" id="sifre"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Giriş"/></td>
                        <td></td>
                    </tr>
                
                </table>
        	</form>
        </div>
        
        </body>
        </html>