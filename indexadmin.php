<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAL Rent</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="shortcut icon" href="images/icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
    <header class="main">
        <nav>
            <a href="indexadmin.php" class="logo">
                <img src="images/logo4.png"/>
            </a>

            <ul class="menu">
                <li><a href="indexadmin.php">Beranda</a></a></li>
                <li><a href="#features">Fitur</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="admin2.php">Edit</a></li>
                <a class="button" href="index.php">Logout</a>
            </ul>            
        </nav>
    </header>

    <section class="home" id = "home">
        <div class="main-heading">
            <h1>KAL Rental</h1>
            <p>Kami menyediakan jasa rental kendaraan yang lengkap untuk memenuhi berbagai kebutuhan pelanggan. Kami siap membantu Anda menemukan kendaraan yang tepat sesuai dengan preferensi dan keperluan Anda.</p>
            <a class="main-btn" href="https://chat.whatsapp.com/IPUJK5IVcTz26JIKtvLKOz">Kontak</a>
        </div>
    </section>

    <section class="features" id = "features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Murah</h4>
                    <p>Harga terjangkau dan ramah dikantong Anda.</p>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon2.png"/>
                </div>
                <div class="f-text">
                    <h4>Tidak Ribet</h4>
                    <p>Proses rental tidak ribet.</p>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon3.png"/>
                </div>
                <div class="f-text">
                    <h4>Banyak Tipe</h4>
                    <p>Tersedia banyak tipe mobil dan motor.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id = "about">
        <div class="about-img">
            <img src="images/about.png">
        </div>
        <div class="about-text">
            <h2>Cari Kendaraan Anda di KAL Rental</h2>
            <p>Disini menyediakan kendaraan mobil dan motor untuk anda rental, dengan proses yang mudah dan harga terjangkau.</p>
            <a class="pricelist-btn" href="pricelist.html">Cek Harga</a>
        </div>
    </section>

    <a href="" class="scrollUp">
        <i class="fa fa-chevron-up"></i></i>
    </a>

    <script
    src="https://cdns.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        const scrollUp = document.querySelector('.scrollUp');
        window.addEventListener('scroll', () => {
            if(window.pageYOffset > 100){
                scrollUp.classList.add("active");
            }else{
                scrollUp.classList.remove("active");
            }
        })
    </script>

</body>
</html>