<h1>Apalikasi sewa mobil</h1>
<span>Hak akses</span><br>
<ul>
    <li>Admin</li>
    <li>Pengguna</li>
</ul>
<h3>cara akses admin</h3>
<p>Login terlebih dahulu masukan akun yang dibawah, masukan ke parameter <code>https://localhost:8000/login</code>
</p>
<h3>Cara akses pengguna</h3>
<p>masukan ke parameter https://localhost:8000</p>
<h5>Akun admin</h5>
<p>email: admin@example.com<br>
   password: 123</p>
<h3>Note:</h3>
<p>Jangan lupa di .env sesuaikan nama database nya atau sama kan yang seperti saya <b>car_rental</b></p>
<p>Jika database tidak terdekteksi masukan perintah: <code>php artisan migrate:fresh --seed</code></p>
<p>karena gambar saya taro nya di storage maka masukan perintah di terminal: <code>php artisan storage:link</code> </p>
