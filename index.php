<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- essential links-->
    <link rel="stylesheet" href="css\navbar.css">
    <link rel="stylesheet" href="css\Footer.css">
    <link rel="stylesheet" href="css\Home_Page.css">
</head>

<body>
    <?php require "navbar.php"; ?>

    <section class="welcome-section">
        <div class="welcome-content">
          <p id="wellcome">Welcome to ICPC Pharos!</p>
          <p id="massge">Unite in coding excellence. Explore, learn, thrive. Welcome aboard!</p>
        </div>
        <div class="home-logo">
            <!-- Placeholder for your logo -->
            <img src="img\ICPC Logo no background.png" alt="ICPC Pharos Logo">
        </div>
    </section>
    <section class="icpc-race-section">
      <div class="icpc-race-content">
          <p id="about-icpc-title">
            The ICPC Race
          </p>
          <p id="about-icpc-massge">The ICPC race stands as the pinnacle of competitive programming, inviting university teams worldwide to embark on a thrilling journey of intellect and innovation. This prestigious contest challenges participants to unravel intricate algorithmic problems within stringent timeframes, fostering an environment where teamwork, creativity, and logical prowess reign supreme. By uniting the brightest minds, the ICPC not only celebrates coding excellence but also cultivates the next generation of adept programmers and problem solvers, shaping the future landscape of technology and innovation.</p>
      </div>
      <div class="icpc-race-image">
          <!-- Placeholder for your image -->
          <img src="img\Comfighters.jpeg" alt="ICPC Race Image">
          <img src="img\khaled.jpg" alt="ICPC Race Image">
      </div>
  </section>
  <section class="unlocking-success-section">
    <div class="unlocking-success-image">
        <!-- Placeholder for your second image -->
        <img src="img\problem solving.jpg" alt="Unlocking Success Image">
    </div>
    <div class="unlocking-success-content">
        <p id="unlocking-success-title">
          Unlocking Success:<br>The Benefits of ICPC Participation
        </p>
        <p id="unlocking-success-massge">Participating in the International Collegiate Programming Contest (ICPC) presents a myriad of advantages transcending mere competition. It serves as a catalyst for refining problem-solving prowess, elevating coding acumen, and fostering collaborative excellence within student teams. Beyond the realm of coding, ICPC offers a global network, nurturing connections that fuel future collaborations and career prospects. Embodying resilience and adaptability, ICPC participants not only confront intricate challenges but also cultivate confidence and personal growth, laying the foundation for success in the ever-evolving tech landscape.</p>
    </div>
</section>
<section class="problem-solving-section">
  <div class="problem-solving-content">
      <p id="problem-solving-content-title">
       Empowering Minds: The Essence of Problem-Solving Training in a Community
      </p>
      <p id="problem-solving-content-massge">Within our close-knit community, problem-solving training stands as the cornerstone of collective growth and excellence. Through meticulously designed workshops, collaborative brainstorming, and immersive challenges, we forge an environment that nurtures the art of problem-solving. Together, we delve into intricacies, embracing diverse viewpoints to dissect complexities and craft innovative solutions. Rooted in practical application, these sessions not only sharpen problem-solving skills but also instill resilience, empowering individuals to approach challenges with confidence. This shared commitment not only elevates our problem-solving capabilities but also strengthens the bonds within our community, fostering a culture of perpetual learning and mutual achievement.</p>
      <button class="rounded-button">join us</button>
  </div>
  
</section>
  

    <?php require "Footer.php"; ?>
</body>

</html>