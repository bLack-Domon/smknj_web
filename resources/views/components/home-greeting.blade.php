<div class="container-xxl py-5">
    <div class="container">
        @foreach ($kepsek as $k)
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="foto_kepsek img-fluid position-absolute w-100 h-100" src="{{ asset ($k->foto) }}" alt="" style="object-fit: cover; border-radius: 25px">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Sambutan</h6>
                <h5 class="mb-4">Kepala Sekolah - {{ $k->nama }}</h5>
                <p class="mb-4">
                    Assalamu'alaikum warahmatullahi wabarakatuh,
                    <br>
                    Selamat datang di website resmi SMK Nurul Jadid!
                </p>
                <p class="mb-4">Kami dengan penuh sukacita menyambut semua siswa, guru, orang tua, dan pengunjung yang mulia. Di SMK Nurul Jadid, kami berkomitmen untuk memberikan pendidikan yang berkualitas dan membimbing siswa menuju kesuksesan dalam dunia akademik dan kehidupan.</p>
                <p class="mb-4">Kami percaya bahwa setiap siswa memiliki potensi unik yang perlu ditemukan dan dikembangkan. Melalui bimbingan dan lingkungan belajar yang kondusif, kami berupaya mempersiapkan setiap siswa untuk menghadapi tantangan masa depan dengan percaya diri dan keberanian.</p>
                <p class="mb-4">Mari bergabung bersama kami dalam perjalanan pendidikan yang penuh makna dan inspiratif. Bersama-sama, kita akan membentuk generasi yang berkualitas, berakhlak, dan berdaya saing tinggi. Terima kasih atas kunjungan Anda di website SMK Nurul Jadid. Semoga informasi yang tersedia di sini bermanfaat bagi Anda semua.</p>
                <p class="mb-4">
                    <span class="text-primary"><b>SMK Nurul Jadid Berinovasi Tiada Henti, Mengabdi Setulus Hati.</b></span>
                    <br>
                    Wassalamu'alaikum warahmatullahi wabarakatuh</p>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Tentang Kami</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
