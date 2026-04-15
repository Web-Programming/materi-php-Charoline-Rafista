// 1. Ambil elemen form dan pesan sukses
const form = document.querySelector('form');
const pesanSukses = document.getElementById('pesanSukses');

// 2. Tambahkan event listener saat form dikirim (submit)
form.addEventListener('submit', function(e) {
    // Mencegah halaman refresh
    e.preventDefault();

    // 3. Ambil elemen input
    const inputNama = document.getElementById('inputNama1');
    const inputEmail = document.getElementById('inputEmail1');
    const inputPesan = document.getElementById('inputPesan1');

    // 4. Cek Validasi (apakah ada yang kosong?)
    if (inputNama.value === '' || inputEmail.value === '' || inputPesan.value === '') {
        alert('Maaf, semua kolom harus diisi ya!');
        
        // Beri warna merah pada yang kosong
        if(inputNama.value === '') inputNama.style.borderColor = 'red';
        if(inputEmail.value === '') inputEmail.style.borderColor = 'red';
        if(inputPesan.value === '') inputPesan.style.borderColor = 'red';

        // Kembalikan warna border setelah 3 detik
        setTimeout(() => {
            inputNama.style.borderColor = '';
            inputEmail.style.borderColor = '';
            inputPesan.style.borderColor = '';
        }, 3000);

    } else {
        // 5. Jika Berhasil
        pesanSukses.style.display = 'block';

        // Kosongkan form
        form.reset();

        // Sembunyikan lagi pesan sukses setelah 5 detik
        setTimeout(() => {
            pesanSukses.style.display = 'none';
        }, 5000);
    }
});