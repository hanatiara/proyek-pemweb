<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parifun - Web Pariwisata</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.js">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>




<header>
	<a href="#" class="logo"><i class="fas fa-home"></i>Parifun</a>
	<nav class="navbar">
		<a href="#home">Home</a>
		<a href="#about">Populer</a>
		<a href="#menu">Menu</a>
		<a href="#ourteam">Our Team</a>
		<a href="#review">Komentar</a>
		<a href="#order">Order</a>
	</nav>
	<div class="icons">
		<i class="fas fa-bars" id="menu-bars"></i>
		<i class="fas fa-search" id="search-icon"></i>
		<i class="fas fa-envelope"></i>
		<i class="fab fa-facebook"></i>
		<i class="fab fa-whatsapp"></i>
		<i class="fas fa-heart"></i>
		<i class="fas fa-shopping-cart"></i>
	</div>
</header>
<form action="" id="search-form">
	<input type="search" placeholder="Pencarian disini.." name="" id="search-box">
	<label for="search-form" class="fas fa-search"></label>
	<i class="fas fa-times" id="close"></i>
</form>
<section id="home" class="home">
	<div class="swiper-container home-slider">
		<div class="swiper-wrapper wrapper">
			<div class="swiper-slide slide">
				<div class="content">
					<span>Tempat Fav</span>
					<h3>Bromo</h3>
					<p>Bromo adalah sebuah tempat wisata favorit di malang yang berupa Gunung dan ada beberapa destinasi yang Menarik
					</p>
					<a href="#" class="btn">Order Sekarang</a>
				</div>
				<div class="image">
					<img src="{{ url('/images/bromo.jpeg') }}" alt="">
				</div>
			</div>
			<div class="swiper-slide slide">
				<div class="content">
					<span>Tempat Fav</span>
					<h3>Bunaken</h3>
					<p>Bunaken merupakan sebuah pulau dengan luas 8,08 km² yang terletak di Teluk Manado, sebelah utara dari Pulau Sulawesi. Bunaken juga merupakan bagian dari kota administratif Manado.
					</p>
					<a href="#" class="btn">Order Sekarang</a>
				</div>
				<div class="image">
					<img src="{{ url('/images/bunaken.png') }}" alt="">
				</div>
			</div>
			<div class="swiper-slide slide">
				<div class="content">
					<span>Tempat Fav</span>
					<h3>Raja Ampat</h3>
					<p>Raja Ampat adalah kepulauan yang terdiri dari banyak sekali pulau karang dan tersebar luas di seluruh wilayahnya. Namun demikian, Raja Ampat memiliki 4 pulau utama yang paling besar, yaitu Pulau Waigeo, Pulau Batanta, Pulau Salawati, dan Pulau Misool.
					</p>
					<a href="#" class="btn">Order Sekarang</a>
				</div>
				<div class="image">
					<img src="{{ url('/images/rajaampat.png') }}" alt="">
				</div>
			</div>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</section>

<section class="dishes" id="dishes">
	<h3 class="sub-heading">Wisata International</h3>
	<h1 class="heading">Wisata Populer</h1>
	<div class="box-container">
		<div class="box">
			<a href="#" class="fas fa-heart"></a>
			<a href="#" class="fas fa-eye"></a>
			<img src="{{ url('/images/borobudur.jpeg') }}" alt="">
			<h3>Borobudur</h3>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</div>
			<span>IDR. -</span>
			<a href="#" class="btn">Masukan Keranjang</a>
		</div>
		<div class="box">
			<a href="#" class="fas fa-heart"></a>
			<a href="#" class="fas fa-eye"></a>
			<img src="{{ url('/images/disneyland.jpeg') }}" alt="">
			<h3>Disneyland</h3>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</div>
			<span>IDR. -</span>
			<a href="#" class="btn">Masukan Keranjang</a>
		</div>
		<div class="box">
			<a href="#" class="fas fa-heart"></a>
			<a href="#" class="fas fa-eye"></a>
			<img src="{{ url('/images/tajmahal.jpeg') }}" alt="">
			<h3>Taj Mahal</h3>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</div>
			<span>IDR. -</span>
			<a href="#" class="btn">Masukan Keranjang</a>
		</div>
		<div class="box">
			<a href="#" class="fas fa-heart"></a>
			<a href="#" class="fas fa-eye"></a>
			<img src="{{ url('/images/paris.jpeg') }}" alt="">
			<h3>Paris</h3>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</div>
			<span>IDR. -</span>
			<a href="#" class="btn">Masukan Keranjang</a>
		</div>
	</div>
</section>

<section class="about" id="about">
	<h3 class="sub-heading">Wisata Indonesia Terpopuler</h3>
	<h1 class="heading"></h1>
	<div class="row">
		<div class="image">
			<img src="{{ url('/images/bali1.png') }}" alt="">
			<div class="content">
				<h3>Hotel De Bali</h3>
				<p>Hotel De Bali adalah hotel yang paling sering dikunjungi dan di order.
					</p>
					<p>Disana dekat dengan banyak destinasi dan juga pelayanannya Bintang 5</p>
					<div class="icons-container">
						<div class="icons">
							<i class="fas fa-shipping-fast"></i>
							<span>Diskon Menarik</span>
						</div>
						<div class="icons">
							<i class="fas fa-dollar-sign"></i>
							<span>Uang Digital</span>
						</div>
						<div class="icons">
							<i class="fas fa-headset"></i>
							<span>Customer Service</span>
						</div>
					</div>
					<a href="#" class="btn">Hubungi Kami</a>
			</div>
		</div>
	</div>
</section>

<section class="menu" id="menu">
	<h3 class="sub-heading">Paket Special</h3>
	<h1 class="heading">Paket Special Tiap Hari</h1>
	<div class="box-container">
		<div class="box">
			<div class="image">
				<img src="{{ url('/images/nanjak.jpeg') }}" alt="">
				<a href="#" class="fas fa-heart"></a>
			</div>
			<div class="content">
				<div class="stars">
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
				</div>
				<h3>Paket Nanjak</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, aut!</p>
				<a href="#" class="btn">Beli</a>
				<span class="price">IDR.-</span>
			</div>
		</div>
		<div class="box">
			<div class="image">
				<img src="{{ url('/images/diving.jpeg') }}" alt="">
				<a href="#" class="fas fa-heart"></a>
			</div>
			<div class="content">
				<div class="stars">
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
				</div>
				<h3>Paket Diving</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, aut!</p>
				<a href="#" class="btn">Beli</a>
				<span class="price">IDR.-</span>
			</div>
		</div>
		<div class="box">
			<div class="image">
				<img src="{{ url('/images/climbing.jpeg') }}" alt="">
				<a href="#" class="fas fa-heart"></a>
			</div>
			<div class="content">
				<div class="stars">
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
				</div>
				<h3>Paket Climbing</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, aut!</p>
				<a href="#" class="btn">Beli</a>
				<span class="price">IDR.-</span>
			</div>
		</div>
		<div class="box">
			<div class="image">
				<img src="{{ url('/images/snorkling.jpeg') }}" alt="">
				<a href="#" class="fas fa-heart"></a>
			</div>
			<div class="content">
				<div class="stars">
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
				</div>
				<h3>Paket Snorkling</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, aut!</p>
				<a href="#" class="btn">Beli</a>
				<span class="price">IDR.-</span>
			</div>
		</div>
		<div class="box">
			<div class="image">
				<img src="{{ url('/images/kuliner.jpeg') }}" alt="">
				<a href="#" class="fas fa-heart"></a>
			</div>
			<div class="content">
				<div class="stars">
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
				</div>
				<h3>Paket Kuliner</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, aut!</p>
				<a href="#" class="btn">Beli</a>
				<span class="price">IDR.-</span>
			</div>
		</div>
		<div class="box">
			<div class="image">
				<img src="{{ url('/images/outbond.jpeg') }}" alt="">
				<a href="#" class="fas fa-heart"></a>
			</div>
			<div class="content">
				<div class="stars">
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
				</div>
				<h3>Outbond</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, aut!</p>
				<a href="#" class="btn">Beli</a>
				<span class="price">IDR.-</span>
			</div>
		</div>
		<div class="box">
			<div class="image">
				<img src="{{ url('/images/seru.jpeg') }}" alt="">
				<a href="#" class="fas fa-heart"></a>
			</div>
			<div class="content">
				<div class="stars">
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
				</div>
				<h3>Paket Seru</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, aut!</p>
				<a href="#" class="btn">Beli</a>
				<span class="price">IDR.-</span>
			</div>
		</div>
		<div class="box">
			<div class="image">
				<img src="{{ url('/images/hotel.jpeg') }}" alt="">
				<a href="#" class="fas fa-heart"></a>
			</div>
			<div class="content">
				<div class="stars">
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
				</div>
				<h3>Paket Hotel</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, aut!</p>
				<a href="#" class="btn">Beli</a>
				<span class="price">IDR.-</span>
			</div>
		</div>
		<div class="box">
			<div class="image">
				<img src="{{ url('/images/mantai.jpeg') }}" alt="">
				<a href="#" class="fas fa-heart"></a>
			</div>
			<div class="content">
				<div class="stars">
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>
					<i class="fas fa-start"></i>

				</div>
				<h3>Paket Mantai</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, aut!</p>
				<a href="#" class="btn">Beli</a>
				<span class="price">IDR.-</span>
			</div>
		</div>
	</div>

</section>

<section class="ourteam"id="ourteam">
	<h3 class="sub-heading">Our Team</h3>
	<h1 class="heading">Professional Team</h1>
	<div class="layar-dalam">
		<div class="tim">
			<div>
				<img src="{{ url('/images/demul.png') }}"/>
			</div>
			<div>
				<img src="{{ url('/images/shiddiq.png') }}"/>
			</div>
			<div>
				<img src="{{ url('/images/rizqi.png') }}"/>
			</div>
			<div>
				<img src="{{ url('/images/ivan.png') }}"/>
			</div>
		</div>
	</div>
</section>


<section class="review" id="review">
	<h3 class="sub-heading">Komentar Pelanggan</h3>
	<h1 class="heading">Silakan Komentar</h1>
	<div class="swiper-container review-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide slide">
				<i class="fas fa-quote-right"></i>
				<img src="{{ url('/images/Gambar 1.jpg') }}" alt="">
				<div class="user-info">
					<h3>Kamila</h3>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
			</div>
		</div>
		<p></p>
		<div class="swiper-slide slide">
			<i class="fas fa-quote-right"></i>
			<img src="{{ url('/images/Gambar 2.jpg') }}" alt="">
			<div class="user-info">
				<h3>Devina</h3>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</div>
		</div>
	</div>
	<p></p>
	<div class="swiper-slide slide">
		<i class="fas fa-quote-right"></i>
		<img src="{{ url('/images/Gambar 3.jpg') }}" alt="">
		<div class="user-info">
			<h3>Nasya</h3>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
		</div>
	</div>
</div>
<p></p>
	</div>

</section>


<section class="order" id="order">
<h3 class="sub-heading">
	Silakan Pesan
</h3>
<h1 class="heading">Masukan Data Anda</h1>
<form action="">
	<div class="inputBox">
		<div class="input">
			<span>Nama</span>
			<input type="text" placeholder="Masukan Nama Anda">
		</div>
		<div class="inputBox">
			<div class="input">
				<span>Orderan</span>
				<input type="text" placeholder="Masukan Nama Makanan">
			</div>
		<div class="inputBox">
			<div class="input">
				<span>Nomor Telepon</span>
				<input type="number" placeholder="Masukan Nomor HP Anda">
			</div>
		<div class="inputBox">
			<div class="input">
			<span>Jenis Paket</span>
			<input type="text" placeholder="Paket yang anda pesan">
			</div>
		<div class="inputBox">
			<div class="input">
			<span>Berapa banyak</span>
			<input type="number" placeholder="Jumlah Orderan">
			</div>
		<div class="inputBox">
			<div class="input">
			<span>Tanggal Pesan</span>
			<input type="datetime-local">
			</div>
		<div class="inputBox">
			<div class="input">
			<span>Alamat</span>
			<textarea name="" id="" cols="30" placeholder="Tulis Alamat" rows="10"></textarea>
			</div>
		<div class="inputBox">
			<div class="input">
			<span>Pesan Anda</span>
			<textarea name="" id="" cols="30" rows="10" placeholder="Tulis Pesan"></textarea>
			</div>
	</div>
	<input type="submit" value="order now" class="btn">
</form>
</section>

<section class="footer">
	<div class="box-container">
		<div class="box">
			<h3>LOKASI</h3>
			<a href="#">MALANG</a>
			<a href="#">JAKARTA</a>
			<a href="#">BANDUNG</a>
			<a href="#">BANTEN</a>
			<a href="#">SURABAYA</a>
			<a href="#">BEKASI</a>
		</div>
		<div class="box">
		<h3>Quick Link</h3>
		<a href="#">Home</a>
		<a href="#">Populer</a>
		<a href="#">Spesial</a>
		<a href="#">Komentar</a>
		<a href="#">Order</a>
	</div>
	<div class="box">
		<h3>Untuk Informasi</h3>
		<a href="#">+6287838829633</a>
		<a href="#">(021)87838829633</a>
		<a href="#">projectimk@gmail.com</a>
		<a href="#">@parifunindonesia</a>
		<a href="#">Malang, Jawa Timur</a>
	</div>
	<div class="box">
		<h3>Follow US</h3>
		<a href="">Whatsapp</a>
		<a href="">Email</a>
		<a href="">Line</a>
	</div>
	</div>
	<div class="akhir">Copyright @ 2021 by PARIFUN INDONESIA</div>
</section>


<script src="{{ url('/js/script.js') }}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>
