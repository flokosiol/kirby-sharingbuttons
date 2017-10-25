<!-- Sharingbutton Hacker News -->
<a class="resp-sharing-button__link" href="https://news.ycombinator.com/submitlink?u=<?php echo $url ?>&amp;t=<?php echo $description ?>" target="_blank" aria-label="<?php echo $title ?>">
  <div class="resp-sharing-button resp-sharing-button--hackernews resp-sharing-button--<?php echo $size ?>"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--<?php echo $style ?>">
      <?php if ($style == 'solid'): ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140"><path fill-rule="evenodd" d="M60.94 82.314L17 0h20.08l25.85 52.093c.397.927.86 1.888 1.39 2.883.53.994.995 2.02 1.393 3.08.265.4.463.764.596 1.095.13.334.262.63.395.898.662 1.325 1.26 2.618 1.79 3.877.53 1.26.993 2.42 1.39 3.48 1.06-2.254 2.22-4.673 3.48-7.258 1.26-2.585 2.552-5.27 3.877-8.052L103.49 0h18.69L77.84 83.308v53.087h-16.9v-54.08z"></path></svg>
      <?php elseif ($style == 'circle'): ?>

      <?php elseif ($style == 'solidcircle'): ?>

      <?php else: ?>

      <?php endif ?>
    </div><?php echo $title ?>
  </div>
</a>