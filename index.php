<?php
require_once 'koneksi.php';

$profile = $pdo->query("SELECT * FROM profile LIMIT 1")->fetch();
$skills = $pdo->query("SELECT * FROM skills ORDER BY id ASC")->fetchAll();
$experiences = $pdo->query("SELECT * FROM experiences ORDER BY id ASC")->fetchAll();
$certificates = $pdo->query("SELECT * FROM certificates ORDER BY id ASC")->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Portfolio - <?= htmlspecialchars($profile['name']) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Portofolio</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#content">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#certificates">Certificates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" 
                                href="https://www.linkedin.com/in/hendri-zaidann-287869331/" 
                                target="_blank">
                                Profil
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="content" class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2>
                            Heyyy, I am
                            <span class="text-primary">
                                <?= htmlspecialchars($profile['name']) ?>
                            </span>
                        </h2>
                        <p><?= htmlspecialchars($profile['role']) ?></p>
                        <p><?= htmlspecialchars($profile['description']) ?></p>
                        <a href="https://www.linkedin.com/in/hendri-zaidann-287869331/" 
                            target="_blank" 
                            class="btn btn-primary">
                            Visit My Profile
                        </a>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <img src="img/profile.png" 
                            alt="Foto Profil <?= htmlspecialchars($profile['name']) ?>" 
                            class="img">
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="py-4">
            <div class="about-box">
                <div class="about-box p-4 p-lg-5">
                    <h2 class="section-title">About Me</h2>
                    <p class="text">
                        Saya adalah mahasiswa Sistem Informasi Universitas Mulawarman angkatan 2024 
                        yang memiliki minat menjadi seorang Full Stack Developer. 
                        Saya terbiasa mengembangkan aplikasi web dari sisi front-end dan back-end, 
                        termasuk perancangan database serta pembuatan sistem yang terstruktur, 
                        efisien, dan mudah dipelihara. Selain itu, saya juga aktif dalam organisasi 
                        untuk melatih soft skill dan menambah pengalaman.
                    </p>
                    <h3 class="fw-semibold mt-4">Skills</h3>
                    <?php foreach ($skills as $skill): ?>
                        <div class="mb-3">
                            <span><?= htmlspecialchars($skill['name']) ?></span>
                            <div class="progress custom-progress">
                                <div 
                                    class="progress-bar custom-bar"
                                    role="progressbar"
                                    style="width: <?= (int)$skill['level'] ?>%"
                                    aria-valuenow="<?= (int)$skill['level'] ?>"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    <?= (int)$skill['level'] ?>%
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <h3 class="fw-semibold mt-4">Experience</h3>
                    <ul class="list">
                        <?php foreach ($experiences as $exp): ?>
                            <li><?= htmlspecialchars($exp['description']) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>

        <section id="certificates" class="py-3">
            <h2 class="certificate-title">Certificate</h2>
            <div class="certificate-container">
                <?php foreach ($certificates as $cert): ?>
                    <div class="card">
                        <img src="<?= htmlspecialchars($cert['image']) ?>" 
                            alt="<?= htmlspecialchars($cert['title']) ?>">
                        <div class="card-body">
                            <h6><?= htmlspecialchars($cert['title']) ?></h6>
                            <p class="card-text">
                                <?= htmlspecialchars($cert['organization']) ?> - <?= htmlspecialchars($cert['year']) ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 My Personal Website</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>