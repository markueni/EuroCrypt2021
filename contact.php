<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> contact information"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> contact information"/>

    <title>
      Contact for <?php echo $META['shortName'];?>
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Contact
      </h2>

      <!-- NOTE: below is standard placeholder text for when the page is under construction. please delete this entire <div class="row"> and all elements contained within it when ready to add other content -->
      <!-- <div class="row">
        <div class="col-12">
          <p>
            This information is not yet available. Thank you for your patience.
          </p>
        </div>
      </div> -->

      <h3 class="pageSubtitle text-center mt-4">
        General Chair
      </h3>

      <div class="row">
      <div class="col-12 text-center mb-5">
          <h4 class="subSubtitle">
            Colin Boyd
          </h4>
          <p class="text-center">
            Norwegian University of Science and Technology<br/>
            Norway
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:doNotEmailMe@fakeDomain.com">
            <img src="images/icons/email.svg" class="icon" />
          </a>&nbsp;
          eurocrypt2021@iacr.org
        </div>
      </div>

      <h3 class="pageSubtitle text-center mt-4">
        Program Co-Chairs
      </h3>

      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-sm-6 text-center mb-2">
          <h4 class="subSubtitle">
            Anne Canteaut
          </h4>
          <p class="text-center">
            INRIA Paris<br/>
            France
          </p>
        </aside>
        <aside class="col-12 col-sm-6 text-center mb-2">
          <h4 class="subSubtitle">
            François-Xavier Standaert
          </h4>
          <p class="text-center">
            Université catholique de Louvain<br/>
            Belgium
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <a href="mailto:reallyDoNotEmailMe@fakeDomain.com">
            <img src="images/icons/email.svg" class="icon" />
          </a>&nbsp;
          eurocrypt2021programchairs@iacr.org
        </div>
      </div>

    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
