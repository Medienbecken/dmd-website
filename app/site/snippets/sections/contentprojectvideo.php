

  <div class="col-sm-6 middle-col col-sm-offset-3">
    <video width="100%" src="<?php echo $content->video()->toFile()->url() ?>" controls>
      <span>Your browser does not support HTML5 video.</span>
    </video>
  </div>

  <div class="col-sm-3 caption">
    <p><?php echo $content->videocaption()->kirbytextRaw() ?></p>
  </div>