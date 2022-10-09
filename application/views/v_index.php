<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()
    ?>assets/css/stylebuku.css">
</head>
<body>
<section>
        <h1><?php echo $judul ?></h1>
        <p align='justify'>Pada pengertian codeigniter di atas
tadi dijelaskan bahwa CodeIgniter menggunakan metode MVC. Apa itu MVC?
Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar CodeIgniter.</p>
    <p>MVC adalah teknik atau konse[ yang memisahkan
        komponen utama menjadi tiga komponen yaitu model, view dan controller.</p>

        <ol type="a">
        <li>Model</li>
<p align='justify'>Model adalah kelas yang merepresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi.
    Model juga dapat didefinisikan sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database.
    Seperti misalnya mengambil data dari database, menginput dan pengolahan database lainnya.
    Semua instruksi atau fungsi yang berhubungan dengan pengolahan database diletakkan di dalam model.
    Sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan objek
    lingkaran sebagai kelas model.</p>
<p align='justify'>Sebagai catatan, semua model harus disimpan di dalam folde application/models</p>
<li>View</li>
<p align='justify'>View merupakan bagian yang menangani halaman user interface
    atau halaman yang muncul pada user (pada browser). Tampilan dari user interface
    dikumpulkan pada view untuk memisahkannya dengan controller dan model sehingga
    memudahkan web designer dalam melakukan pengembangan tampilan halaman website.</p>
<li>Controller</li>       
<p align='justify'>Controller merupakan kumpulan instruksi aksi yang menghubungkan model dan view, jadi
    user tidak akan berhubungan dengan model secara langsung, intinya data yang tersimpan di database (model)
    diambil oleh controller dan kemudian controller pula yang menampilkan nya ke view. Jadi controller lah yang
    mengolah instruksi.</p>
<p align='justify'>Dari penjelasan tentang model view dan controller di atas dapat disimpulkan bahwa controller sebagai penghubungi view 
    dan model. Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep mvc, controller memanggil instruksi pada model 
    yang mengambil data pada database, kemudian controller yang meneruskannya pad view untuk ditampilkan. Jadi jelas sudah dan sangat mudah
    dalam pengembangan aplikasi dengan cara MVC ini karena Web Designer atau front-end developer tidak perlu lagi berhubungan dengan controller,
    dia hanya perlu berhubungan dengan view untuk mendesign tampilan aplikasi, karena back-end developer yang menangani bagian controller dan modelnya.
    Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan cepat dan terstruktur. </p> 
</section>
</ol>
</body>
</html>
