<!--back-to-top button -->
    <button type="button" class="back-to-top button show-for-medium-up"></button>
    <!-- ./back-to-top butto -->

    <!-- landing -->
    <div class="landing" id="landing">
      <!-- orbit-wrapper -->
      <ul id="orbit-wrapper" class="example-orbit" data-orbit>

        <?php $isFirst = true ?>

        <?php foreach ($page->builder()->toStructure() as $image): ?>
          <li class="active orbit-slide-img">

            <?php if ($isFirst === true): ?>

              <?php snippet('sections/' . $image->_fieldset(), ['content' => $image])?>

              <div class="title-wrapper">
                <div class="title">
                  <h1><?php echo $page->headline() ?></h1>
                </div>
                <div class="sub-title">
                  <h2><?php echo $page->subheadline() ?></h2>
                </div>
              </div>

              <?php $isFirst = false ?>

            <?php else: ?>

              <?php snippet('sections/' . $image->_fieldset(), ['content' => $image])?>

          <?php endif ?>
          </li>
        <?php endforeach ?>
        
      </ul>
      <!-- ./orbit-wrapper -->
    </div>
    <!-- ./landing -->

<!-- disables till next semester starts -->
     <div class="row">
      <div class="medium-offset-2 medium-8 small-12 columns end">
        <a href="https://www.lsf.hs-weingarten.de/qisserver/servlet/de.his.servlet.RequestDispatcherServlet?state=wimma&stg=n&imma=einl&language=de" class="button-apply button round" target="_blank">Jetzt bewerben!</a>
      </div>
    </div>
