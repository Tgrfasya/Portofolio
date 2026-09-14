<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="Portfolio M. Tegar Bayu Al-Fasya - Informatics Engineering Student & Aspiring Web and Application Developer"
    >

    <title>M. Tegar Bayu Al-Fasya | Portfolio</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- ================= NAVBAR ================= -->
    <header class="navbar">
        <a href="#home" class="logo">
            Tegar<span>.</span>
        </a>

        <nav class="nav-menu">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#certificates">Certificates</a>
            <a href="#contact">Contact</a>
        </nav>

        <button
            id="themeToggle"
            class="theme-toggle"
            aria-label="Toggle dark mode"
        >
            🌙
        </button>
    </header>


    <main>

        <!-- ================= HERO ================= -->
        <section id="home" class="hero">

            <div class="hero-content">

                <p class="section-label">
                    INFORMATICS ENGINEERING STUDENT
                </p>

                <h1>
                    M. Tegar<br>
                    <span>Bayu Al-Fasya.</span>
                </h1>

                <h2>
                    Aspiring Web & Application Developer
                </h2>

                <p class="hero-description">
                    Mahasiswa S1 Teknik Informatika Universitas Lampung
                    dengan minat pada web development, application development,
                    database, UI/UX, dan IoT.
                </p>

                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">
                        View Projects
                    </a>

                    <a href="#contact" class="btn btn-secondary">
                        Contact Me
                    </a>
                </div>

                <div class="social-links">
                    <a
                        href="https://github.com/Tgrfasya"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        GitHub ↗
                    </a>

                    <a
                        href="https://tgrfasya.github.io/Portofolio/"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        Portfolio ↗
                    </a>
                </div>

            </div>


            <!-- FOTO PROFIL -->
            <div class="profile-container">

                <div class="profile-image">

                    <img
                        src="{{ asset('assets/foto-profil.png') }}"
                        alt="Foto M. Tegar Bayu Al-Fasya"
                        onerror="this.style.display='none'; document.getElementById('profilePlaceholder').style.display='flex';"
                    >

                    <div
                        id="profilePlaceholder"
                        class="image-placeholder profile-placeholder"
                    >
                        <span>foto-profil.jpg</span>
                    </div>

                </div>

            </div>

        </section>


        <!-- ================= ABOUT ================= -->
        <section id="about" class="section">

            <div class="section-heading">
                <p class="section-label">ABOUT ME</p>
                <h2>Profile</h2>
            </div>


            <div class="about-grid">

                <div class="about-text">

                    <p>
                        Mahasiswa S1 Teknik Informatika Universitas Lampung
                        dengan IPK <strong>3,54/4,00</strong>.
                        Memiliki kemampuan dasar dalam pemrograman,
                        pengembangan web, database, UI design, dan IoT.
                    </p>

                    <p>
                        Terbiasa menggunakan Figma untuk merancang antarmuka
                        serta memiliki pengalaman mengerjakan berbagai proyek
                        akademik berbasis website dan aplikasi.
                    </p>

                    <p>
                        Memiliki minat untuk mengembangkan kemampuan teknis
                        dan memperoleh pengalaman profesional di bidang
                        web dan application development.
                    </p>

                </div>


                <div class="info-card">

                    <div class="info-item">
                        <span>Education</span>
                        <strong>Universitas Lampung</strong>
                    </div>

                    <div class="info-item">
                        <span>Program</span>
                        <strong>S1 Teknik Informatika</strong>
                    </div>

                    <div class="info-item">
                        <span>Period</span>
                        <strong>2022 – Sekarang</strong>
                    </div>

                    <div class="info-item">
                        <span>GPA</span>
                        <strong>3.54 / 4.00</strong>
                    </div>

                    <div class="info-item">
                        <span>High School</span>
                        <strong>SMA Negeri 2 Bandar Lampung</strong>
                    </div>

                    <div class="info-item">
                        <span>High School Score</span>
                        <strong>89.99</strong>
                    </div>

                </div>

            </div>

        </section>


        <!-- ================= SKILLS ================= -->
        <section id="skills" class="section section-alt">

            <div class="section-heading">
                <p class="section-label">WHAT I USE</p>
                <h2>Technical Skills</h2>
            </div>


            <div class="skills-grid">

                <article class="skill-card">
                    <span class="skill-number">01</span>

                    <h3>Programming</h3>

                    <p>
                        C++, Python, PHP, HTML, CSS
                    </p>
                </article>


                <article class="skill-card">
                    <span class="skill-number">02</span>

                    <h3>Web Development</h3>

                    <p>
                        HTML, CSS, PHP, Laravel (Basic)
                    </p>
                </article>


                <article class="skill-card">
                    <span class="skill-number">03</span>

                    <h3>Database</h3>

                    <p>
                        MySQL, fundamental database design
                        & programming
                    </p>
                </article>


                <article class="skill-card">
                    <span class="skill-number">04</span>

                    <h3>UI/UX Design</h3>

                    <p>
                        Figma, wireframing, interface design
                    </p>
                </article>


                <article class="skill-card">
                    <span class="skill-number">05</span>

                    <h3>IoT & Hardware</h3>

                    <p>
                        Arduino, basic IoT development
                    </p>
                </article>


                <article class="skill-card">
                    <span class="skill-number">06</span>

                    <h3>Tools & Environment</h3>

                    <p>
                        Git, GitHub, Visual Studio Code,
                        Linux, Ubuntu, Debian
                    </p>
                </article>

            </div>


            <div class="additional-skills">

                <h3>Additional Skills</h3>

                <div class="skill-tags">
                    <span>Networking Fundamentals</span>
                    <span>Cisco Networking</span>
                    <span>Linux CLI</span>
                    <span>Backend Development</span>
                    <span>Database Integration</span>
                </div>

            </div>

        </section>


        <!-- ================= PROJECTS ================= -->
        <section id="projects" class="section">

            <div class="section-heading">

                <p class="section-label">SELECTED WORK</p>
                <h2>Projects</h2>

            </div>


            <div class="projects-grid">


                <!-- PROJECT 01 -->
                <article
                    class="project-card"
                    data-figma=""
                >

                    <div class="project-image">

                        <img
                            src="{{ asset('assets/project-portfolio.png') }}"
                            alt="Personal Portfolio"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        <span class="project-number">01</span>

                    </div>


                    <div class="project-content">

                        <div class="project-meta">
                            <span>Personal Project</span>
                            <span>2023 – Present</span>
                        </div>

                        <h3>Personal Portfolio</h3>

                        <p>
                            Website portofolio pribadi untuk menampilkan
                            profil, keterampilan, dan berbagai project
                            yang pernah dikerjakan.
                        </p>

                        <span class="project-link">
                            Open Figma ↗
                        </span>

                    </div>

                </article>


                <!-- PROJECT 02 -->
                <article
                    class="project-card"
                    data-figma="https://www.figma.com/proto/GR5XULLcnArPTv8xLD2LOS/SharGo?node-id=2-1173&p=f&t=PoNHslwsYOKsbcoF-1&scaling=contain&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=36%3A313"
                >

                    <div class="project-image">

                        <img
                            src="{{ asset('assets/project-shargo.png') }}"
                            alt="Shargo E-Commerce"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        <span class="project-number">02</span>

                    </div>

                    <div class="project-content">

                        <div class="project-meta">
                            <span>Academic Project</span>
                            <span>2023</span>
                        </div>

                        <h3>Shargo — E-Commerce</h3>

                        <p>
                            Perancangan antarmuka website pemesanan
                            akomodasi dengan fitur pencarian,
                            informasi kamar, dan pemesanan.
                        </p>

                        <span class="project-link">
                            Open Figma ↗
                        </span>

                    </div>

                </article>


                <!-- PROJECT 03 -->
                <article
                    class="project-card"
                    data-figma="https://www.figma.com/proto/F3UKe9fleMimdyPny3zuEv/SobatNgombe?node-id=706-3452&p=f&t=MKJ5fRYdXwt46oLf-1&scaling=scale-down&content-scaling=fixed&page-id=706%3A3451"
                >

                    <div class="project-image">

                        <img
                            src="{{ asset('assets/project-sobat-ngombe.png') }}"
                            alt="Sobat Ngombe"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        <span class="project-number">03</span>

                    </div>

                    <div class="project-content">

                        <div class="project-meta">
                            <span>Academic Project</span>
                            <span>2023</span>
                        </div>

                        <h3>Sobat Ngombe</h3>

                        <p>
                            Perancangan aplikasi untuk memantau kualitas
                            air sumur berdasarkan parameter seperti pH,
                            bakteri, dan kandungan zat lainnya.
                        </p>

                        <span class="project-link">
                            Open Figma ↗
                        </span>

                    </div>

                </article>


                <!-- PROJECT 04 -->
                <article
                    class="project-card"
                    data-figma="https://www.figma.com/proto/QPqXojZkbheqvpoAszwZzx/DESAIN-KASAR?node-id=11-3&p=f&t=uSv8yVxoxmvNCSTW-1&scaling=contain&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=110%3A125"
                >

                    <div class="project-image">

                        <img
                            src="{{ asset('assets/project-cafe.png') }}"
                            alt="Website Profil Café"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        <span class="project-number">04</span>

                    </div>

                    <div class="project-content">

                        <div class="project-meta">
                            <span>Academic Project</span>
                            <span>2023</span>
                        </div>

                        <h3>Website Profil Café</h3>

                        <p>
                            Website profil café dengan informasi café,
                            menu, lokasi, serta struktur navigasi
                            yang sederhana dan informatif.
                        </p>

                        <span class="project-link">
                            Open Figma ↗
                        </span>

                    </div>

                </article>


                <!-- PROJECT 05 -->
                <article
                    class="project-card"
                    data-figma=""
                >

                    <div class="project-image">

                        <img
                            src="{{ asset('assets/project-bioskop.png') }}"
                            alt="E-Commerce Tiket Bioskop"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        <div class="image-placeholder">
                            Foto tidak tersedia
                        </div>

                        <span class="project-number">05</span>

                    </div>

                    <div class="project-content">

                        <div class="project-meta">
                            <span>Academic Project</span>
                            <span>2024</span>
                        </div>

                        <h3>E-Commerce Tiket Bioskop</h3>

                        <p>
                            Perancangan website pemesanan tiket bioskop
                            dengan informasi film, jadwal tayang,
                            dan alur pemesanan tiket.
                        </p>

                        <span class="project-link">
                            Open Figma ↗
                        </span>

                    </div>

                </article>


                <!-- PROJECT 06 -->
                <article
                    class="project-card"
                    data-figma="https://www.figma.com/proto/biQegh9rihtKviXHDTfvF6/HIFI-CSIRT?node-id=135-322&p=f&t=Uf93N13kvR9OjFtX-1&scaling=scale-down-width&content-scaling=fixed&page-id=10%3A1078"
                >

                    <div class="project-image">

                        <img
                            src="{{ asset('assets/project-csirt.png') }}"
                            alt="CSIRT Universitas Lampung"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        <span class="project-number">06</span>

                    </div>

                    <div class="project-content">

                        <div class="project-meta">
                            <span>Collaborative Project</span>
                            <span>2025</span>
                        </div>

                        <h3>CSIRT Universitas Lampung</h3>

                        <p>
                            Website untuk mendukung pelaporan dan
                            pemantauan insiden teknologi informasi
                            di lingkungan universitas.
                        </p>

                        <span class="project-link">
                            Open Figma ↗
                        </span>

                    </div>

                </article>


                <!-- PROJECT 07 -->
                <article
                    class="project-card"
                    data-figma="https://www.figma.com/proto/llaWNbezETNaStCSZ8Tka6/Design-UI?node-id=3-4&t=uverOyFwRfrNWD8J-1&scaling=contain&content-scaling=fixed&page-id=0%3A1"
                >

                    <div class="project-image">

                        <img
                            src="{{ asset('assets/project-baruku.png') }}"
                            alt="Baruku Edukasi E-Waste"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        <span class="project-number">07</span>

                    </div>

                    <div class="project-content">

                        <div class="project-meta">
                            <span>Collaborative Project</span>
                            <span>2025</span>
                        </div>

                        <h3>Baruku — Edukasi E-Waste</h3>

                        <p>
                            Perancangan antarmuka website edukasi
                            pengelolaan sampah elektronik serta
                            konsep forum diskusi dan informasi mitra.
                        </p>

                        <span class="project-link">
                            Open Figma ↗
                        </span>

                    </div>

                </article>


                <!-- PROJECT 08 -->
                <article
                    class="project-card"
                    data-figma="https://www.figma.com/design/uguoHvn8FyasCnxcXfOgcD/SKPL-Smart-Farming?node-id=4-4&t=aQyNoqYx0IlP1Laq-1"
                >

                    <div class="project-image">

                        <img
                            src="{{ asset('assets/project-smart-farming.png') }}"
                            alt="Smart Farming"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        <span class="project-number">08</span>

                    </div>

                    <div class="project-content">

                        <div class="project-meta">
                            <span>Academic Project</span>
                            <span>2025</span>
                        </div>

                        <h3>Smart Farming</h3>

                        <p>
                            Perancangan aplikasi Android untuk memantau
                            kondisi tanaman berdasarkan data sensor
                            dan konsep fitur penyiraman tanaman.
                        </p>

                        <span class="project-link">
                            Open Figma ↗
                        </span>

                    </div>

                </article>

            </div>

        </section>


        <!-- ================= CERTIFICATES ================= -->
        <section id="certificates" class="section section-alt">

            <div class="section-heading">

                <p class="section-label">
                    ACHIEVEMENTS
                </p>

                <h2>
                    Courses & Certifications
                </h2>

            </div>


            <div class="certificates-grid">


                <!-- CERTIFICATE 01 -->
                <article
                    class="certificate-card"
                    data-drive=""
                >

                    <div class="certificate-image">

                        <img
                            src="{{ asset('assets/cert-oracle.png') }}"
                            alt="Oracle Database Certificate"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        <div class="image-placeholder">
                            Foto tidak tersedia
                        </div>

                    </div>

                    <div class="certificate-content">

                        <span class="certificate-year">
                            2023
                        </span>

                        <h3>
                            Oracle Database Design and
                            Database Programming
                        </h3>

                        <span class="certificate-link">
                            View Certificate ↗
                        </span>

                    </div>

                </article>


                <!-- CERTIFICATE 02 -->
                <article
                    class="certificate-card"
                    data-drive="https://drive.google.com/file/d/1hIz3wXfAHsO6gDO2D3WHMDWifb2nwKG0/view?usp=sharing"
                >

                    <div class="certificate-image">

                        <img
                            src="{{ asset('assets/cert-ccna-introduction.png') }}"
                            alt="CCNA Introduction to Networks Certificate"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                    </div>

                    <div class="certificate-content">

                        <span class="certificate-year">
                            2024
                        </span>

                        <h3>
                            Cisco Networking Academy —
                            CCNA: Introduction to Networks
                        </h3>

                        <span class="certificate-link">
                            View Certificate ↗
                        </span>

                    </div>

                </article>


                <!-- CERTIFICATE 03 -->
                <article
                    class="certificate-card"
                    data-drive=""
                >

                    <div class="certificate-image">

                        <img
                            src="{{ asset('assets/cert-ccna-enterprise.png') }}"
                            alt="CCNA Enterprise Networking Certificate"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        <div class="image-placeholder">
                            Foto tidak tersedia
                        </div>

                    </div>

                    <div class="certificate-content">

                        <span class="certificate-year">
                            2024
                        </span>

                        <h3>
                            Cisco Networking Academy —
                            CCNA: Enterprise Networking,
                            Security, and Automation
                        </h3>

                        <span class="certificate-link">
                            View Certificate ↗
                        </span>

                    </div>

                </article>

            </div>

        </section>


        <!-- ================= CONTACT ================= -->
        <section id="contact" class="section contact-section">

            <div class="contact-content">

                <p class="section-label">
                    GET IN TOUCH
                </p>

                <h2>
                    Let's work<br>
                    <span>together.</span>
                </h2>

            </div>


            <div class="contact-info">

                <!-- EMAIL -->
                <a
                    href="mailto:mtegaraja2003@gmail.com?subject=Hello%20Tegar%20-%20Portfolio"
                >
                    mtegaraja2003@gmail.com
                </a>


                <!-- WHATSAPP -->
                <a
                    href="https://wa.me/628994263431"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    08994263431
                </a>


                <!-- INSTAGRAM -->
                <a
                    href="https://www.instagram.com/Tgrfasyaa/"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    @Tgrfasyaa
                </a>


                <!-- FACEBOOK -->
                <a
                    href="https://www.facebook.com/"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Tegar Bayu
                </a>


                <!-- LOCATION -->
                <span>
                    Bandar Lampung, Lampung, Indonesia
                </span>

            </div>

        </section>

    </main>


    <!-- ================= FOOTER ================= -->
    <footer>

        <p>
            © 2026 M. Tegar Bayu Al-Fasya.
            Built with HTML & CSS.
        </p>

    </footer>
    
   <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>