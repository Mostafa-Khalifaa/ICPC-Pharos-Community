<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- essential links-->
    <link rel="stylesheet" href="css\navbar.css">
    <link rel="stylesheet" href="css\Footer.css">

    <title>About Us page</title>
    <link rel="stylesheet" href="css/About_Us_Page.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <?php require "navbar.php"; ?>

    <section id="about-section">
        <!-- about left  -->
        <div class="about-left">
            <img class="image-marg" src="img/ICPC Logo no background.png" alt="About Img" />
        </div>

        <!-- about right  -->
        <div class="about-right">
            <h4>My Story</h4><br>
            <h1>About Me</h1>
            <p>Welcome to the vibrant community of ICPC leaders! We are a dedicated group of computer science
                enthusiasts currently navigating our third year in the field. Comprising five individuals with a shared
                passion for technology and problem-solving, we have united under the banner of ICPC (International
                Collegiate Programming Contest) to not only hone our skills but also contribute to the collaborative
                spirit that defines our community. As aspiring leaders in the world of computer science, we strive to
                foster an environment that encourages learning, innovation, and camaraderie. Our journey in the realm of
                technology has not only equipped us with knowledge and expertise but has also instilled in us a
                commitment to excellence. Join us as we embark on this exciting adventure, where challenges become
                opportunities and where our collective passion for computer science propels us towards new horizons.
            </p>
            <div class="address">
                <ul>
                    <li>
                        <span class="address-logo">
                            <i class=" col fas fa-paper-plane"></i>
                        </span>
                        <p>Address</p>
                        <span class="saprater">:</span>
                        <p>pharos, ALEX</p>
                    </li>
                    <li>
                        <span class="address-logo">
                            <i class=" col fas fa-phone-alt"></i>
                        </span>
                        <p>Phone No</p>
                        <span class="saprater">:</span>
                        <p>+2012000000007</p>
                    </li>
                    <li>
                        <span class="address-logo">
                            <i class="col fas fa-envelope"></i>
                        </span>
                        <p>Email ID</p>
                        <span class="saprater">:</span>
                        <p>ICPC@gmail.com</p>
                    </li>
                </ul>
            </div>

    </section>
    <?php require "Footer.php" ?>

</body>

</html>