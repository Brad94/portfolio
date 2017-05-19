<?php

include 'header.php';

?>
  <nav class="navbar fixed-top navbar-toggleable-md navbar-light">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="main.php">Bradley Pollard</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home</a>
      </li>
      <li>
        <a class="nav-link" href="skills.php">Skills</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mini-projects</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="garage.php">Garage</a>
          <a class="dropdown-item" href="pokemon.php">Pok&eacutemon</a>
          <a class="dropdown-item" href="paragraph.php">Paragraph Changer</a>
          <a class="dropdown-item" href="ci.php">Continuous Integration</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</header>

<div class="content">
<h2>JavaScript Garage</h2>
<a href="garage-live.php" target="_blank">Project Link</a>
<h3>The Task</h3>
<p style="text-align: left">Create a virtual garage with the following functionality:</p>
<ul style="text-align: left">
  <li>Check in cars to the garage</li>
  <li>Check out cars</li>
  <li>Output the contents of the garage</li>
  <li>Calculate the bill for a car, dependant on its attributes</li>
</ul>
<script src="https://gist.github.com/Brad94/722c9879bfe82f121a2ceeb150a93cb9.js"></script>
</div>

<!-- <div id="poweredby">
  <div class="content">
  <h4>Powered By</h4>
  <img srcset="images/raspberry_pi_logo_text_rgb_77x85.png 85w,
               images/raspberry_pi_logo_text_rgb_113x125.png 125w,
               images/raspberry_pi_logo_text_rgb_180x200.png 200w"
        sizes="(max-width: 420px) 30vw, (max-width: 900px) 25vw, 200px"/>

  <img srcset="images/aws_logo_web_100px.png 100w,
               images/aws_logo_web_200px.png 200w,
               images/aws_logo_web_300px.png 300w"
        sizes="(max-width: 420px) 30vw, (max-width: 900px) 25vw, 300px">
  </div>
</div> -->
<?php

include 'footer.php';

?>