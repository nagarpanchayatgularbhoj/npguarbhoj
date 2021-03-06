<header id="header">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="header_top">
        <div class="header_top_left">
          <ul class="top_nav">
            <li><a href="<?php echo base_url() ?>">होम </a></li>
            <li><a href="<?php echo base_url() ?>about">हमारे बारे मे </a></li>
            <li><a href="<?php echo base_url() ?>contact">हमसे संपर्क करें </a></li>
          </ul>
        </div>
        <div class="header_top_right">
          <p id="demo">
            <script>
              var d = new Date();
              var months = ["जनवरी ", "फरवरी ", "मार्च ", "अप्रेल ", "मई ", "जून ", "जुलाई ", "अगस्त ", "सितम्बर ", "ऑक्टोबर ", "नवंबर ", "दिसंबर "];
              var days = ["रविवार ", "सोमवार ", "मंगलवार ", "बुधवार ", "ब्रहस्पतिवार ", "शुक्रवार ", "शनिवार "];
              document.getElementById("demo").innerHTML = d.getDate() + ' - ' + months[d.getMonth()] + ' - ' + d.getFullYear() + ' : ' + days[d.getDay()];
            </script>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="header_bottom d-flex justify-content-around">
        <!-- <div class="logo_area"><a href="<?php echo base_url() ?>" class="logo">
            <h3 class=" text-primary">Nagar <strong class=" text-warning">Panchayat</strong> Gularbhoj</h3>
          </a>
        </div> -->
        <div class="logo_area "><a href="<?php echo base_url() ?>" class="logo"><img src="<?php echo base_url() ?>asset/नगर पंचायत गूलरभोज.png" alt=""></a></div>
      </div>
      <!-- <div class="add_banner"><a href="#"><img src="<?php echo base_url() ?>asset/images/addbanner_728x90_V1.jpg" alt=""></a></div> -->
    </div>
  </div>
</header>

<!-- nav bar -->


<section id="navArea">
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav main_nav">
        <li class="active"><a href="<?php echo base_url() ?>"><span class="fa fa-home desktop-home"></span><span class="mobile-show">होम</span></a></li>
        <li><a href="<?php echo base_url() ?>tender">निविदा</a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">सरकारी योजनाए</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url() ?>pmay">प्रधानमंत्री आवास योजना</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">वार्ड</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url() ?>pmay">वार्ड 01</a></li>
            <li><a href="<?php echo base_url() ?>pmay">वार्ड 02</a></li>
            <li><a href="<?php echo base_url() ?>pmay">वार्ड 03</a></li>
            <li><a href="<?php echo base_url() ?>pmay">वार्ड 04</a></li>
            <li><a href="<?php echo base_url() ?>pmay">वार्ड 05</a></li>
            <li><a href="<?php echo base_url() ?>pmay">वार्ड 06</a></li>
            <li><a href="<?php echo base_url() ?>pmay">वार्ड 07</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url() ?>">चेयरमेन कॉर्नर </a></li>
        <li><a href="<?php echo base_url() ?>">अधिशासी अधिकारी</a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">नागरिको के लिए</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url() ?>pmay">जन्म प्रमाण पत्र</a></li>
            <li><a href="<?php echo base_url() ?>pmay">मृत्यु प्रमाण पत्र</a></li>
            <li><a href="<?php echo base_url() ?>pmay">परिवार रजिस्टर नकल</a></li>
            <li><a href="<?php echo base_url() ?>pmay">सिवरेज टैंक</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url() ?>contact">Site Map</a></li>

      </ul>
    </div>
  </nav>
</section>