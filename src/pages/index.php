<?php
include 'connect.php';
?>

<div class="large reveal quote-request" id="projectPicker" data-reveal>
  <div class="row">
    <h1 class="column small-12">Need a quote for a project?</h1>
    <p class="column small-12">Choose a project type below</p>

    <form action="/connect.php" method="post">
      <input placeholder="Your name" type="text" name="input1" value="" tabindex="1" autofocus>
      <input type="submit" value="Send" name="input2" id="contact-submit" data-submit="...Sending">
    </form>

    <form action="" method="post">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">

          <fieldset class="large-6 cell project-picker">
            <label for="website" class="website">
              <input id="website" type="checkbox" tabindex="1" name="website">
              <span>
                <i></i>Website
              </span>
            </label>

            <label for="application" class="application">
              <input id="application" type="checkbox" tabindex="2" name="application">
              <span>
                <i></i>Application
              </span>
            </label>

            <label for="branding" class="branding">
              <input id="branding" type="checkbox" tabindex="3" name="branding">
              <span>
                <i></i>Branding
              </span>
            </label>

            <label for="other" class="other">
              <input id="other" type="checkbox" tabindex="4" name="other">
              <span>
                <i></i>Other
              </span>
            </label>
          </fieldset>
        </div>
      </div>
    </form>
  </div>
</div>
