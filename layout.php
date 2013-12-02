<?php
  include("koneksi.php");
  $kategori = $_GET['kategori'];

?>

<!DOCTYPE html>
<head>
	<title>Unique Silver</title>
	<link rel="stylesheet" type="text/css" href="style/css/stylesheet.css" />
	<link rel="stylesheet" type="text/css" href="style/css/grid.css" />
</head>
<body>
	<div class="container_24">
		<div class="grid_8">
			<a href="index.php"><img src="image/data/logo/logo.gif" title="Unique Silver Jewelry" alt="Unique Silver Jewelry" /></a>
		</div>
		<div class="grid_5 margin_top30 prefix_2">
			<img src="style/css/image/shipping.png"/>
		</div>
		<div class="grid_9 top_menu">
			<a href="keranjang.php" id="tab_cart">KERANJANG<div class="cart"></div></a>
			<a href="akun.php" id="tab_account">AKUN</a>
			<a href="daftar.php" id="tab_daftar">DAFTAR</a>
    	</div>
    	<div class="grid_7 prefix_2 search">
			<b>Cari :</b><input type="text" placeholder="Kata Kunci" id="filter_keyword"/>
			<a onclick="moduleSearch();" class="button"><span>OK</span></a>
    	</div>
    	<div class="clear"></div>
    	<div class="grid_22 prefix_2 navigasi">
    		<a href="index.php">BERANDA</a>
    		<a href="aboutus.php">TENTANG KAMI</a>
    		<a href="contactus.php">HUBUNGI KAMI</a>
    		<a href="order.php">INFO ORDER</a>
    		<a href="shipping.php">INFO PENGIRIMAN</a>
    	</div>
    	<div class="clear"></div>
    </div>
    <div class="header-background"></div>
    <div class="clear"></div>
    <div class="container_24 margin_top30">
    	<div id="column_left">
    		<table class="tabel_box">
    			<tr>
    				<td>
    					<table cellpadding="3" cellspacing="0" style="width: 100%;">
	    					<tr>
	    						<td align="center" colspan="2" class="top"><b>PRODUK</b></td>
	    					</tr>
	          				<tr>
				            	<td valign="top" width="1"><a href="layout.php?kategori=gelang"><img src="image/data/chace/gl.jpg" alt="Gelang" /></a></td>
				            	<td align="left"><a href="layout.php?kategori=gelang">Gelang</a>
	          				</tr>
				         	<tr>
				            	<td valign="top" width="1"><a href="layout.php?kategori=anting"><img src="image/data/chace/ant.jpg" alt="Anting" /></a></td>
				            	<td align="left"><a href="layout.php?kategori=anting">Anting</a>
				         	</tr>
			          		<tr>
			            		<td valign="top" width="1"><a href="layout.php?kategori=kalung"><img src="image/data/chace/kl.jpg" alt="Kalung" /></a></td>
			            		<td align="left"><a href="layout.php?kategori=kalung">Kalung</a>
			          		</tr>
			          		<tr>
				            	<td valign="top" width="1"><a href="layout.php?kategori=cincin"><img src="image/data/chace/cn.jpg" alt="cincin" /></a></td>
				            	<td align="left"><a href="layout.php?kategori=cincin">Cincin</a>
			          		</tr>
	          			</table>
	          		</td>
	          	</tr>
	        </table>
	        <table class="tabel_box">
    			<tr>
    				<td>
    					<table cellpadding="3" cellspacing="0" style="width: 100%;">
	    					<tr>
	    						<td align="center" class="top"><b>INFORMASI</b></td>
	    					</tr>
	    					<tr>
	    						<td>
						          <ul>
						            <li><a href="order.php">Cara Berbelanja</a></li>
						            <li><a href="syarat.php">Syarat &amp; Ketentuan</a></li>
						            <li><a href="faq.php">FAQ</a></li>
						            <li><a href="contactus.php">Hubungi Kami</a></li>
						            <li><a href="map.php">Peta Situs</a></li>
						          </ul>
      							</td>
      						</tr>
	          			</table>
	          		</td>
	          	</tr>
	        </table>
	        <table class="tabel_box">
	        	<tr>
    				<td>
    					<table cellpadding="3" cellspacing="0" style="width: 100%;">
    						<tr>
	    						<td colspan="2" align="center" class="top"><b>Customer Service</b></td>
	    					</tr>
	    					<tr>
	    						<td>						          
						            No Handphone :
						            +6281391192520
						        </td>
						    </tr>
						    <tr>
						        <td>
						            (Monday- Sunday)</br>
						            (9 am - 9 pm wib)				            						         
      							</td>
      						</tr>
	          			</table>
	          		</td>
	          	</tr>
	        </table>
	    </div>
		<div id="column_right">
				<table class="tabel_box">
    			<tr>
    				<td>
    					<table cellpadding="3" cellspacing="0" style="width: 100%;">
	    					<tr>
	    						<td align="center" colspan="2" class="top"><b><img src="style/css/image/cart.png"/>Keranjang</b></td>
	    					</tr>
	          			</table>
	          		</td>
	          	</tr>
	        </table>
	        <table class="tabel_box">
    			<tr>
    				<td>
    					<table cellpadding="3" cellspacing="0" style="width: 100%;">
	    					<tr>
	    						<td colspan="2" align="center" class="top"><b>PRODUK BARU</b></td>
	    					</tr>
	    					<tr>
              					<td valign="top" width="1"><a href="produk_detail.php?kode=AN0001"><img src="image/data/chace/AN0001.jpg"/></a></td>
              					<td valign="center"><a href="produk_detail.php?kode=AN0001"><span style="font-size: 11px;">Rectanglular Pave</span></a>
                    			<br />
                    			<span style="font-size: 11px; color: #900;">Rp.160,000.00</span>
                				</td>
            				</tr>
            				<tr>
              					<td valign="top" width="1"><a href="cn0001.php"><img src="image/data/chace/CN0001.jpg"/></a></td>
              					<td valign="center"><a href="cn0001.php"><span style="font-size: 11px;">Sterling Silver Huggie</span></a>
			                    <br />
			                    <span style="font-size: 11px; color: #900;">Rp.155,000.00</span>
              					</td>
					            </tr>
					            <tr>
					              <td valign="top" width="1"><a href="gl0001.php"><img src="image/data/chace/GL0001.jpg"/></a></td>
					              <td valign="center"><a href="gl0001.php"><span style="font-size: 11px;">Rope Link Bracelet</span></a>
					              <br />
					               <span style="font-size: 11px; color: #900;">Rp.135,000.00</span>
					              </td>
					            </tr>
					            <tr>
					              <td valign="top" width="1"><a href="cn0002.php"><img src="image/data/chace/CN0002.jpg"/></a></td>
					              <td valign="center"><a href="cn20001.php"><span style="font-size: 11px;">Cluster Cocktail Ring</span></a>
					              <br />
					              <span style="font-size: 11px; color: #900;">Rp.172,000.00</span>
					              </td>
					            </tr>
					            <tr>
					              <td valign="top" width="1"><a href="cn0003.php"><img src="image/data/chace/CN0003.jpg"/></a></td>
					              <td valign="center"><a href="cn20003.php"><span style="font-size: 11px;">Natural Amethyst Ring</span></a>
					              <br />
					              <span style="font-size: 11px; color: #900;">Rp.153,000.00</span>
					              </td>
					            </tr>
					            <tr>
					              <td valign="top" width="1"><a href="cn0004.php"><img src="image/data/chace/CN0004.jpg"/></a></td>
					              <td valign="center"><a href="cn20004.php"><span style="font-size: 11px;"> Blue Topaz Ring</span></a>
					              <br />
					              <span style="font-size: 11px; color: #900;">Rp.189,000.00</span>
					              </td>
					            </tr>
					            <tr>
					              <td valign="top" width="1"><a href="cn0005.php"><img src="image/data/chace/CN0005.jpg"/></a></td>
					              <td valign="center"><a href="cn20005.php"><span style="font-size: 11px;"> Silver Filigree Ring</span></a>
					              <br />
					              <span style="font-size: 11px; color: #900;">Rp.389,000.00</span>
					              </td>
					            </tr>
	          			</table>
	          		</td>
	          	</tr>
	        </table>
	        <table class="tabel_box">
	        	<tr>
    				<td>
    					<table cellpadding="2" cellspacing="0" style="width: 100%;">
    					 	<tr>
	    						<td colspan="2" align="center" class="top"><b>Favorit</b></td>
	    					</tr>
				            <tr>
				              <td valign="top" width="1"><a href="kl0002.php"><img src="image/data/chace/KL0002.jpg"/></a></td>
				              <td valign="center"><a href="kl0002.php"><span style="font-size: 11px;">Light of Om</span></a>
				                    <br />
				                    <span style="font-size: 11px; color: #900;">Rp.260,000.00</span>
				                </td>
				              </tr>
				            <tr>
				              <td valign="top" width="1"><a href="cn0006.php"><img src="image/data/chace/CN0006.jpg"/></a></td>
				              <td valign="center"><a href="cn0006.php"><span style="font-size: 11px;">Filigree Solitaire Ring</span></a>
				                    <br />
				                    <span style="font-size: 11px; color: #900;">Rp.205,000.00</span>
				              </td>
				            </tr>
				        </table>
	          		</td>
	          	</tr>
	        </table>
	    </div>
	    </div>
	</div>
	  <div id="content">
      <div class="top">
        <div class="left"></div>
        <div class="right"></div>
        <div class="center">
          <h1>
          <?php
            echo $kategori;
          ?>
          </h1>
          </div>
      </div>
      <div class="produk_tengah">

        <?php
          
          $query = mysql_query("SELECT * from produk where kategori = '$kategori'");
          $ketemu = mysql_num_rows($query);

          while($data = mysql_fetch_assoc($query)){
              echo "<div class='produk_'>";
              echo "<a href='produk_detail.php?kode=".$data['kode']."'>";
              echo "<img src='image/upload/".$data['gambar']."'/>";

              //<img src='image/upload/".$data['nama_gambar']."' title='Rectanglular Pave' alt='Rectanglular Pave''>";
             // echo "<img src='upload/".$data['nama_gambar']."' alt='ava'/>";
              echo "<a href='produk_detail.php?kode=".$data['kode']."'>".$data['nama']." </a><br/>";
              echo "<span style='color: #999; font-size: 11px;'>".$data['kode']."</span><br/>";
              echo "<span style='color: #900; font-weight: bold;'> Rp. ".$data['harga']."</span><br/>";
              echo "</div>";
          } 
        ?>


       
      </div>
    </div>
	<div id="footer">
      <div class="sosmed">
        <b>Follow Us :</b>
        <a href="https://twitter.com/uniquesilverj"><img src="style/css/image/twitter.png"/></a>
        <a href="https://www.facebook.com/unique.silver.5?fref=ts"><img src="style/css/image/facebook.png"/></a>
      </div>
      <div class="div1">
        <a href="faq.php">FAQ</a>
        <a href="map.php">SITE MAP</a>
        <a href="syarat.php">SYARAT &amp; KETENTUAN</a>
      </div>
  </div>
    </div>
    <div class="copy_right">
    Copyright &copy; 2013 <a href="index.php" target="_blank" alt="Unique Silver Jewelry" title="Unique Silver Jewelry">Unique Silver Jewelry</a><br />
</body>
</html> 