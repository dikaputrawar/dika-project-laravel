<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sufiyandika Putra Riswardani - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        .button-hover {
            transition: all 0.3s ease;
        }

        .button-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .button-hover:active {
            transform: translateY(0);
            box-shadow: none;
        }

        .nav-link {
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .title-font {
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .card {
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-gray-900">
    <!-- Navigation -->
    <nav class="w-full py-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center justify-center space-y-4">
                <h1 class="text-4xl title-font text-yellow-400">Sufiyandika Putra Riswardani</h1>
                <div class="flex space-x-8">
                    <a href="#about" class="nav-link text-white hover:text-yellow-400">About</a>
                    <a href="#education" class="nav-link text-white hover:text-yellow-400">Education</a>
                    <a href="#projects" class="nav-link text-white hover:text-yellow-400">Projects</a>
                    <a href="#contact" class="nav-link text-white hover:text-yellow-400">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-5xl title-font text-white mb-4">Hello, I'm <span class="text-yellow-400">Dika</span></h2>
            <p class="text-xl text-white mb-8">A passionate Graphic Designer, UX/UI Designer, Programmer, and Writer.</p>
            <a href="#contact" class="button-hover inline-block bg-yellow-400 text-gray-900 px-8 py-3 rounded-lg font-medium">Hire Me</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl title-font text-yellow-400 text-center mb-8">About Me</h2>
            <p class="text-white text-center max-w-4xl mx-auto leading-relaxed">
                I'm a student at SMK Telkom Purwokerto majoring in Software Engineering. I specialize in Graphic Design, UX/UI Design, and Web Development. My passion is creating digital experiences that are both visually stunning and functionally effective. With skills in programming, writing, and design, I bring a unique approach to every project I work on.
            </p>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl title-font text-yellow-400 text-center mb-12">My Education</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- SMK Card -->
                <div class="card bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl text-yellow-400 mb-4 font-medium">SMK Telkom Purwokerto</h3>
                    <p class="text-gray-300 mb-2">Jurusan: Rekayasa Perangkat Lunak (Software Engineering)</p>
                    <p class="text-gray-300 mb-2">Tahun: 2023 - 2026</p>
                    <p class="text-gray-300">Kegiatan dan Prestasi: Aktif dalam organisasi siswa, saya juga memiliki minat yang besar dibidang desain grafis, dan pengembangan proyek aplikasi web.</p>
                </div>

                <!-- SMP Card -->
                <div class="card bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl text-yellow-400 mb-4 font-medium">SMP Negeri 1 Rawalo</h3>
                    <p class="text-gray-300 mb-2">Tahun: 2020 - 2023</p>
                    <p class="text-gray-300">Kegiatan dan Prestasi: Saya aktif dalam kelas, menjadi MC di acara perpisahan kelas 9 sewaktu kelas 8</p>
                </div>

                <!-- SD Card -->
                <div class="card bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl text-yellow-400 mb-4 font-medium">SD Negeri 1 Tambaknegara</h3>
                    <p class="text-gray-300 mb-2">Tahun: 2014 - 2020</p>
                    <p class="text-gray-300">Kegiatan dan Prestasi: Juara 1 lomba wirausaha tingkat kecamatan, anggota aktif Pramuka, dan peraih nilai UN tertinggi di sekolah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl title-font text-yellow-400 text-center mb-12">My Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="card bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl text-yellow-400 mb-4 font-medium">Web Development Portfolio</h3>
                    <p class="text-gray-300">A complete portfolio website showcasing my web development skills using HTML, CSS, and JavaScript.</p>
                </div>

                <!-- Project 2 -->
                <div class="card bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl text-yellow-400 mb-4 font-medium">Graphic Design Portfolio</h3>
                    <p class="text-gray-300">Collection of my graphic design projects including logos, posters, and web design mockups.</p>
                </div>

                <!-- Project 3 -->
                <div class="card bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl text-yellow-400 mb-4 font-medium">Mobile App UI/UX Design</h3>
                    <p class="text-gray-300">A mobile app design project focusing on UX/UI principles, featuring user-friendly and responsive interfaces.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl title-font text-yellow-400 text-center mb-4">Contact Me</h2>
            <p class="text-white text-center mb-8">If you have any questions or would like to collaborate, feel free to contact me.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="button-hover bg-pink-600 text-white px-6 py-3 rounded-lg flex items-center gap-2">
                    <i class="fab fa-instagram"></i>
                    Follow me on Instagram
                </a>
                <a href="#" class="button-hover bg-gray-800 text-white px-6 py-3 rounded-lg flex items-center gap-2">
                    <i class="fab fa-github"></i>
                    Check my GitHub
                </a>
                <a href="#" class="button-hover bg-blue-600 text-white px-6 py-3 rounded-lg flex items-center gap-2">
                    <i class="fas fa-envelope"></i>
                    Send a Message
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 py-6">
        <div class="container mx-auto px-4 flex justify-center items-center">
            <p class="text-white underline font-medium">© 2024 Dika. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>