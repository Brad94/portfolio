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
    </ul>
  </div>
</nav>
  </div>
  </header>

<div class="content">
<h2>RaspSec</h2>

<h3>The Problem</h3>
<p>Security solutions are expensive, to install and to maintain. Lots of CCTV systems depend on proprietary and dedicated hardware such as monitors and DVR's, which all add to the cost and complexity of maintenance.</p>

<h3>The Task</h3>
<p>The task was to develop a cheap, reliable and simple to use security system, which used as many open Web technologies, easy to buy and install parts and accessible from electronics already available in homes such as phones and laptops.</p>
</div>

<div id="poweredby">
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
</div>
<div class="content">
<h3>The Solution</h3>
<p>Developed a security application using purely Web technologies such as HTML5, CSS3, NodeJS, MQTT, Amazon Web Services (AWS) Internet of Things and AWS S3 for use with a Raspberry Pi Zero. The application is to be used in a home environment for a cost-effective way to maintain home security, future plans include a complete home security solution with the introduction of motion sensors and audible alarms. Open sourcing the project in the future is also a strong possibility.</p>

<img srcset="images/code-2325.png 2325w"
      sizes="80vw">
</div>
<?php

include 'footer.php';

?>