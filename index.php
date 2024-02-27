<?php
include('masterhead.html')
?>

<div class="row p-4">
  <div class="col-lg-8 col-md-12 mb-5">

    <!--Info-->
    <div class="row w3-animate-left">
      <div class="col-lg-8 col-md-12 order-md-2 d-flex justify-content-start align-items-center mb-2 ">
        <div>
          <span class="titulo">Hi, I'm Andre!&#128075</span>
          <br>
          <span class="texto">Software Developer</span>
        </div>
      </div>

      <!--Picture-->
      <div class="img col-lg-3 col-md-12 order-md-1 picture text-center">
        <img src="img/eu.JPG" alt width="100%" class="img-eu img-fluid shadow w3-animate-zoom">
      </div>
    </div>

    <!--CONTACT MOBILE-->
    <div class="d-md-none mt-3 w3-animate-left">
      <div class="includedContent"></div>
    </div>

    <!--Experience-->
    <div class="mt-5 p-2 col-lg-11 col-md-12 experience w3-animate-left">
      <div class="w-100 w-md-75 mx-md-auto">
        <span class="subtitulo mb-3">Experience</span>
        <br>
        <span class="texto2">
          One year working as a Software Developer, in Intelnet
          Telecom.
          Where I participated in some projects that were of great benefit
          to the company.
        </span>
      </div>
    </div>

    <!--Tech-->
    <div class="mt-4 mb-5 p-2 col-lg-11 col-md-12 w3-animate-left">
      <span class="subtitulo mb-3">Technologies</span>

      <div class="tech row mt-3">
        <div class="col-auto mb-2">
          <img src="img/php.png" class="img-tech img-fluid" alt="php" srcset>
        </div>
        <div class="col-auto mb-2">
          <img src="img/html.svg" class="img-tech img-fluid" alt="html" srcset>
        </div>
        <div class="col-auto mb-2">
          <img src="img/css.svg" class="img-tech img-fluid" alt="css" srcset>
        </div>
        <div class="col-auto mb-2">
          <img src="img/js.png" class="img-tech img-fluid" alt="javascript" srcset>
        </div>
        <div class="col-auto mb-2">
          <img src="img/java.png" class="img-tech img-fluid" alt="java" srcset>
        </div>

        <div class="col-auto mb-2">
          <img src="img/react.png" class="img-tech img-fluid" alt="react" srcset>
        </div>

        <div class="col-auto mb-2">
          <img src="img/mysql.png" class="img-tech img-fluid" alt="react" srcset>
        </div>

        <div class="col-auto mb-2">
          <img src="img/postgres.svg" class="img-tech img-fluid" alt="react" srcset>
        </div>

      </div>

    </div>

    <!--PROJECTS-->
    <div class="projects mb-5 w3-animate-left">
      <span class="subtitulo mb-3">Main projects</span>
      <div class="row d-flex justify-content-around mt-3">

        <a href="boletos.php" class="col-lg-5 p-4 mb-2 contact-me text-center">Web system for cost reduction</a>
        <a href="os.php" class="col-lg-5 p-4 mb-2 contact-me text-center">Web system for service order management</a>
        <a href="mobileapp.php" class="col-lg-5 p-4 mb-2 contact-me text-center">Mobile App for Intelnet</a>
        <a href="vitrine.php" class="col-lg-5 p-4 mb-2 contact-me text-center">Digital Showcase (Academic Project)</a>

      </div>


    </div>
  </div>

  <!--Languages-->
  <div class="col-lg-4 col-md-12 mt-lg-5 order-md-3 w3-animate-right">
    <div class="mb-3">
      <span class="subtitulo">Languages</span>
    </div>

    <div class="d-flex justify-content-start mb-5">
      <div>
        <!--EN-->
        <img src="img/usa.png" class="img-fluid img-country" width="30px" alt="USA" srcset>
        <span class="texto2">EN Technical</span>

        <br>
        <!--PT-BR-->
        <img src="img/brasil.png" class="img-country text-start" width="30px" alt="Brazil" srcset>
        <span class="texto2">PT-BR Native Speaker</span>

      </div>
    </div>

    <!--Education-->
    <div class="education mb-5">
      <p class="subtitulo mb-3">Education</p>
      <div class="d-flex align-items-center">
        <h3>&#127891</h3>
        <span class="texto2">
          Technology in Systems Analysis and Development - Instituto
          Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte
        </span>
      </div>
    </div>

    <!--Contacts-->
    <div class="d-none d-md-block">
      <div class="includedContent"></div>
    </div>

  </div>
</div>




<?php
include('footer.php')
?>