// Tunggu sampai seluruh dokumen selesai dimuat
document.addEventListener('DOMContentLoaded', function() {

    // --- 1. HANDLING FORM HUBUNGI KAMI ---
    const contactForm = document.querySelector('#hubungi-kami form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah halaman refresh

            // Mengambil nilai dari input
            const nama = document.getElementById('inputNama1').value;
            const email = document.getElementById('inputEmail1').value;
            const pesan = document.getElementById('inputPesan1').value;

            // Validasi sederhana
            if (nama === "" || email === "" || pesan === "") {
                alert("Mohon lengkapi semua data.");
            } else {
                // Simulasi pengiriman pesan
                alert(`Terima kasih, Pak/Bu ${nama}! Pesan Anda telah kami terima. Kami akan menghubungi Anda melalui email: ${email}.`);
                
                // Reset form setelah berhasil
                contactForm.reset();
            }
        });
    }

    // --- 2. NAVBAR SCROLL EFFECT ---
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            // Menambahkan bayangan dan mengubah sedikit transparansi saat scroll
            navbar.classList.add('shadow-lg');
            navbar.style.opacity = "0.95";
            navbar.style.transition = "0.3s";
        } else {
            navbar.classList.remove('shadow-lg');
            navbar.style.opacity = "1";
        }
    });

    // --- 3. AUTO-CLOSE NAVBAR MOBILE ---
    // Menutup menu navbar otomatis setelah klik di HP (User Experience)
    const navLinks = document.querySelectorAll('.nav-link');
    const menuToggle = document.getElementById('navbarNav');
    const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle:false});
    
    navLinks.forEach((l) => {
        l.addEventListener('click', () => {
            if (window.innerWidth < 992) { // Hanya bekerja di layar kecil (mobile)
                bsCollapse.hide();
            }
        });
    });

});