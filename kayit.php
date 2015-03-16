<?PHP include("include/top.php"); ?>
                            
                                 <div class="formm">
                            
                           <span class="form_content">Üyelik formunu eksiksizce doldurarak üyelik hizmetlerinden hemen yararlanmaya başlayabilirsiniz.</span><br><br><br>
                           <form action="kayit2.php" method="post">
                            	<table class="form_register">
                                    <tr>
                                        <td>Ad</td><td>:</td><td><input type="text" name="ad" id="ad" required/></td>
                                    </tr>    
                                    <tr>
                                        <td>Soyadı</td> <td>:</td> <td><input type="text" name="soyad" id="soyad" required/></td>
                                    </tr>
                                    <tr>
                                        <td>Kullanıcı Adı</td> <td>:</td>  <td><input type="text" name="kadi" id="kadi" required/></td>
                                    </tr>
                                    <tr>
                                        <td>E-Mail</td> <td>:</td> <td><input type="text" name="email" id="email" required/></td>
                                    </tr>
                                    <tr>    
                                        <td>Şifre</td> <td>:</td> <td><input type="password" name="sifre" id="sifre" required/></td>
                                    </tr>
                                    <tr>    
                                        <td>Şifre Tekrar</td> <td>:</td> <td><input type="password" name="sifret" id="sifret" required/></td>
                                    </tr>
                                    <tr>    
                                        <td>Telefon</td> <td>:</td> <td><input type="text" name="tel" id="tel" required/></td>
                                    </tr>       
                                    <tr>
                                        <td>Ülke</td>  <td>:</td>  <td><input type="text" name="ulke" id="ulke" required/></td>
                                    </tr>
                                    <tr>
                                        <td>Şehir</td>  <td>:</td>  <td><input type="text" name="sehir" id="sehir" required/></td>
                                    </tr>
                                    <tr>
                                        <td>Doğum Tarihi</td>  <td>:</td>  <td>
                                        	<input type="date" name="dogum_tarihi" id="dogum_tarihi" required/>

                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Doğum Yeri</td>  <td>:</td>  <td><input type="text" name="dogum_yeri" id="dogum_yeri" required/></td>
                                    </tr>
                                    <tr>
                                        <td>Cinsiyet</td>  <td>:</td>  <td><select name="cinsiyet" id="select"><option>Seçiniz</option><option>Erkek</option><option>Kadın</option></select> </td>
                                    </tr><tr><td></td><td></td><td></td></tr>
                                    <tr>
                                        <td></td> <td><input type="submit" value="Üye Ol"/></td> <td><input type="reset" value="Formu Temizle"/><br></td>
                                    </tr>
                           	 </table>
                            </form>
                           
                            </div>
                            
                            </div>
                           
                        </div>
<?PHP include("include/footer.php"); ?>
