<!-- Sharingbutton Telegram -->
<a class="resp-sharing-button__link" href="https://telegram.me/share/url?text=<?php echo $description ?>&amp;url=<?php echo $url ?>" target="_blank" aria-label="<?php echo $title ?>">
  <div class="resp-sharing-button resp-sharing-button--telegram resp-sharing-button--<?php echo $size ?>"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--<?php echo $style ?>">
    <?php if ($style == 'solid'): ?>

    <?php elseif ($style == 'circle'): ?>

    <?php elseif ($style == 'solidcircle'): ?>

    <?php else: ?>

    <?php endif ?>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M.707 8.475C.275 8.64 0 9.508 0 9.508s.284.867.718 1.03l5.09 1.897 1.986 6.38a1.102 1.102 0 0 0 1.75.527l2.96-2.41a.405.405 0 0 1 .494-.013l5.34 3.87a1.1 1.1 0 0 0 1.046.135 1.1 1.1 0 0 0 .682-.803l3.91-18.795A1.102 1.102 0 0 0 22.5.075L.706 8.475z"/></svg>
    </div><?php echo $title ?>
  </div>
</a>