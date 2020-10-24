<section>
	<h1><?php echo $judul ?></h1>
	<p align='justify'>Pada Pengertian code igniter diatas tadi
	dijelaskan bahwa code igniter menggunakan metode MVC. Apa
	itu MVC? Kita juga harus mengetahui apa itu MVC sebelum
	masuk dan lebih jauh dalam belajar codeigniter.</p>

	<p>MVC adalah teknik atau konsep yang memisahkan komponen
	utama menjadi tiga komponen yaitu model, view, dan controller.</p>

	<li>Model</li>
	<p align='justify'> Model adalah kelas yang mempresentasikan
	atau memodelkan tipe data yang akan digunakan oleh aplikasi.
	Model juga dapat didefinisikan sebagai bagian penanganan yang
	berhubungan dengan pengolahan atau manipulasi database. Seperti
	misalnya mengambil data dari database, menginput dan pengolahan
	database lainnya. Semua instruksi atau fungsi yang berhubung
	dengan pengolahan database diletakkan didalam model. Sebagai
	contoh, jika ingin membuat aplikasi untuk menghitung luas dan
	keliling lingkaran, maka dapat memodelkan objek lingkaran sebagai
	kelas model.</p>
	<p align="justify">Sebagai catatan, semua model harus disimpan
	didalam folder application/models</p> <li>View</li>
	<p align="justify">View merupakan bagian yang menangani halaman
	user interface atau halaman yang muncul pada user(pada browser).
	Tampilan dari user interface dikumpulkan pada view untuk memisahkannya
	dengan controller dan model sehingga memudahkan web designer dalam
	melakukan pengembangan tampilan halaman website.</p> <li>Controller</li>
	<p align="justify">Controller merupakan kumpulan instruksi aksi
	yang menhubungkan model dan view, jadi user tidak akan berhubungan
	dengan model secara lansung, intinya data yang tersimpan didatabase
	(model) diambil alih oleh controller dan kemudian controller pula
	yang menampikannya ke view. Jadi controllerlah yang mengolah instruksi.</p>
	<p align="justify">Dari penjelasan tentang model view dan controller diatas
	dapat disimpulkan bahwa controller sebagai penghubung view dan model. Misalnya
	pada aplikasi yang menampilkan data dengan menggunakan metode konsep mvc,
	controller memanggil instruksi pada model yang mengambil data pada database,
	kemudian controller yang meneruskannya pada view untuk ditampilkan. Jadi jelas
	sudah dan sangat mudah dalam pengembangan aplikasi dengan cara mvc ini karena
	web designer atau front-end developer tidak perlu lagi berhubungan dengan
	controller, dia hanya perlu berhubungan dengan view untuk mendesign tampilan
	aplikasi, karena back-end developer yang menangani bagian controller dan
	modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi
	dapat dilakukan dengan cepat dan terstruktur.</p>
</section>