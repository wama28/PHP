<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM tb_kegiatan";
$result = mysqli_query($koneksi, $query);

$no = 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio</title>
  <link rel="stylesheet" href="wama.css">
</head>
<body>
  <nav>
    <div class="navbar">
      <a href="#beranda">BERANDA</a>
      <a href="#tentang">Tentang Saya</a>
      <a href="#portofolio">Portofolio</a>
      <div class="dropdown">
        <a href="javascript:void(0)" onclick="toggleDropdown()">Lainnya ▾</a>
        <div class="dropdown-content" id="dropdown-menu">
          <a href="https://www.instagram.com/zann_285?igsh=Nm43eDc1MWV4NGd4" target="_blank">Instagram</a>
          <a href="https://www.facebook.com/share/16FQr4Gxp9/" target="_blank">Facebook</a>
          <a href="https://wa.me/qr/T4O6QE6SR2O4J1" target="_blank">WhatsApp</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <section id="beranda" class="profile">
      <img src="foto/foto 1.jpg" alt="Foto Profil" width="200">
      <div>
        <h2>Halo, saya firzan</h2>
        <p>Seorang Karir Impian</p>
      </div>
    </section>
    <p>
      <h2 class="tang" style="position: relative; left: 500px;">Tentang Saya</h2>
    </p>
    <section id="tentang" class="profile">
      <img src="foto/foto2.jpg" alt="Foto Profil" width="100" style="position: relative; left: 1000px;">
      <p style="position: relative; left: -100px;">saya seorang jungle di kelas TI A, jungle masa depan RRQ</p>
    </section><hr>

    <!-- porto -->
    <section class="porto">
      <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: black; }
        tr:nth-child(n) { background-color: black; }
        .btn { padding: 5px 10px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-danger { background-color: #f44336; color: white; border: none; }
        .btn-danger:hover { background-color: #d32f2f; }
        .btn-primary { background-color: #4CAF50; color: white; border: none; }
        .btn-primary:hover { background-color: #45a049; }
        .form-group { margin-bottom: 15px; }
        .form-control { width: 100%; padding: 8px; box-sizing: border-box; }
    </style>

          <h2>Data Mahasiswa</h2>
        <!-- Form Tambah Data -->
    <h3>Tambah Data Mahasiswa</h3>
    <form action="tambah.php" method="POST">
        <div class="form-group">
            <label>ID:</label>
            <input type="text" name="nim" class="form-control" required>
        </div>
        <div class="form-group">
            <label>NAMA KEGIATAN:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>WAKTU KEGIATAN:</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <!-- <div class="form-group">
            <label>Nomor HP:</label>
            <input type="text" name="nomerhp" class="form-control" required>
        </div> -->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <table>
        <tr>
            <th>NO</th>
            <th>NAMA KEGIATAN</th>
            <th>WAKTU KEGIATAN</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <!-- <td><?php echo $no++; ?></td> -->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama_kegiatan']; ?></td>
            <td><?php echo $row['waktu_kegiatan']; ?></td>
            <td>
                <a href="hapus.php?id=<?php echo $row['id']; ?>" 
                   class="btn btn-primary" 
                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                </a>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    
    </section><hr>

    <section class="opini-section">
      <h2 style="position: relative; left: 0px; background-color:darkslategrey;">opini</h2>
  
      <div class="berita">
        <a href="stylecss.html" class="card">
          <img src="foto/foto7.jpg" alt="Opini 1">
          <p>Awal Terbentuknya RRQ02</p>
        </a>
      
        <a href="opini2.html" class="card">
          <img src="foto/foto8.jpg" alt="Opini 2">
          <p>RRQ Masih Jadi Raja MPL ID S15 Sampai di Week 3</p>
        </a>
      
        <a href="opini3.html" class="card">
          <img src="foto/foto9.jpg" alt="Opini 3">
          <p>Perjalanan Sempurna RRQ Hoshi di Group Stage ESL Snapdragon Pro Series: Mobile Masters 2025</p>
        </a>
      
        <a href="opini4.html" class="card">
          <img src="foto/foto10.jpg" alt="Opini 4">
          <p>Nyaris Sempurna! RRQ Hoshi Kandas di Final ESL Snapdragon MLBB 2025</p>
      
        </a>
      
        <a href="opini5.html" class="card">
          <img src="foto/foto11.jpg" alt="Opini 5">
          <p>RRQ Hoshi Tampil Garang, Bungkam TLID 2-0 di MPL ID S15!</p>
        </a>
      
        <a href="opini6.html" class="card">
          <img src="foto/foto12.jpg" alt="Opini 6">
          <p>Toy di RRQ Hoshi: Bisa Jadi Andalan atau Masih Butuh Waktu? Apa Kata KB?</p>
        </a>
      </div>
      
    </section><hr>


  <section id="kontak" class="hub">
    <h2 class="saya" style="position: relative; left: 500px;">Hubungi Saya</h2>
    <div class="kontak-container">
      
      <!-- Form Kontak -->
      <form class="form-kontak">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Masukkan email Anda" />
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" id="nama" placeholder="Masukkan nama Anda" />
        </div>
        <div class="form-group">
          <label for="subjeck">subjeck</label>
          <input type="email" id="email" placeholder="Masukkan subjeck Anda" />
        </div>
        <div class="form-group">
          <label for="pesan">Pesan</label>
          <textarea id="pesan" placeholder="Tulis pesan Anda..."></textarea>
        </div>
        <button type="submit">Kirim</button>
      </form>
  
      <!-- Lokasi Peta -->
      <div class="map-box">
        <p><strong>Alamat:</strong> Q394+G28 Sumberharjo, Kabupaten Bojonegoro, Jawa Timur</p>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d319.60494136692813!2d112.05502355914196!3d-7.2313018457536105!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1745477492752!5m2!1sid!2sid"
          width="100%"
          height="300"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
    <footer>
      <p style="color: black;">&copy; copyrigth by wama</p>
    </footer>
    </div>
  </section><hr>
  
      
</body>
</html>
