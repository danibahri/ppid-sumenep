@stack('scripts')
{{-- scroll top --}}
<script>
    // Ambil elemen tombol
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');

    // Fungsi untuk menangani scroll event
    window.onscroll = function() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            scrollToTopBtn.classList.remove('hidden');
        } else {
            scrollToTopBtn.classList.add('hidden');
        }
    };

    scrollToTopBtn.onclick = function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };
</script>
<script>
    window.onload = function() {
        // Setelah halaman selesai dimuat, sembunyikan loader dan tampilkan konten
        const loader = document.getElementById('loader');
        const content = document.getElementById('content');

        // Menyembunyikan loader dan menampilkan konten
        loader.style.display = 'none';
        content.classList.remove('hidden');
    };
</script>
