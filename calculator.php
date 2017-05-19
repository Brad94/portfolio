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
<h2>Apportionment Calculator</h2>

<h3>The Problem</h3>
<p>Originally, the solicitor had a very manual process of calculating apportionment, requiring time to be spent calculating four different charges and then double checking the figures to ensure 100% correct numbers, as these would be sent to clients for them to pay.
</p>

<h3>The Task</h3>
<p>Creating a calculator for use by a solicitor when calculating apportionment for service charges, ground rent, insurance and tenant rent, which then calculates the totals and displays them in a legal style document ready for printing.</p>
</div>

<div id="poweredby">
  <div class="content">
  <h4>Powered By</h4>
  <img srcset="images/CloudPlatform_128px_Retina.png 251w"
        sizes="(max-width: 420px) 30vw, (max-width: 900px) 25vw, 300px">
  </div>
</div>
<div class="content">
<h3>The Solution</h3>
<p>Listening and talking to the solicitor defining requirements, designing, developing and testing the application using wireframes for design, HTML5, CSS3 and JavaScript for development, and Jasmine for testing.</p>
<p>Using a pure client side solution, the problem above was successfully solved and the client was happy with the outcome which was a much quicker process for calculating apportionment which was always 100% accurate and produced a legal style document which didn’t need to be post edited in a word processor.</p>
<p>This was an independent project which I took on for free. Github was used for SCM, and the application was developed on Google Cloud Platform so it can scale safely with minimal hosting costs to me. No customer data is saved and it is only visible to the user at run time.</p>
<img srcset="images/aspire-SE-2560.png 2560w,
      images/aspire-SE-1280.png 1280w,
      images/aspire-SE-640.png  640w"
      sizes="80vw">
</div>





<?php

include 'footer.php';

?>