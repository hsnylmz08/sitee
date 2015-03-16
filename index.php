<?PHP include("include/top.php"); ?>
                            
                                  <div class="container">
                                    <div id="slides">
                                      <img src="img/example-slide-1.jpg">
                                      <img src="img/example-slide-2.jpg">
                                      <img src="img/example-slide-3.jpg">
                                      <img src="img/example-slide-4.jpg">
                                      <img src="img/example-slide-5.jpg">
                                      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left"></i></a>
                                      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right"></i></a>
                                    </div>
                                </div>
                            
                            </div>
                            <img src="img/products.png" width="560" height="37" id="products_title"/>
                            <section id="products">
                                                                <?php
											require_once("ayar.php");
										
										$sonuc = mysql_query("select urun_id,model,beden,fiyat,aciklama,gelinlik_resim from gelinlik_ekle");
							
									  
										if(mysql_num_rows($sonuc)!=0)
										{
											while($oku = mysql_fetch_assoc($sonuc))
											{
												?>
                                <div class="product fl mrgt-10" style="margin-left:10px">
                                <?php
                                   echo' <span align="center" class="product_content">';
                                    	
												echo '<img src="'.$oku["gelinlik_resim"].'" width="150" height="150"/></br></br></br>';
												echo 'Model : '.$oku["model"]."<br>Beden: ".$oku["beden"]."<br>Fiyat: ".$oku["fiyat"]." TL".'<br><br>';
						
									echo "<a href='gelinlik_detay.php?urun_id=$oku[urun_id]'>İncele</a>";	
										
										
                                   echo" </span>";
                                   	 
                               echo" </div>";
							   }
										}else{
											echo "Hic kayit yok!";
										}
										
										mysql_close($baglan);
								?>
                         
                            </section>
                        </div>
<?PHP include("include/footer.php"); ?>
