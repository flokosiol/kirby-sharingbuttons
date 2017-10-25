<!-- Sharingbutton XING -->
<a class="resp-sharing-button__link" href="https://www.xing.com/app/user?op=share;url=<?php echo $url ?>;title=<?php echo $description ?>" target="_blank" aria-label="<?php echo $title ?>">
  <div class="resp-sharing-button resp-sharing-button--xing resp-sharing-button--<?php echo $size ?>">
    <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--<?php echo $style ?>">

      <?php if ($style == 'solid'): ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.2 9.7l-3-5.4C7.2 4 7 4 6.8 4h-5c-.3 0-.4 0-.5.2v.5L4 10 .4 16v.5c0 .2.2.3.4.3h5c.3 0 .4 0 .5-.2l4-6.6v-.5zM24 .2l-.5-.2H18s-.2 0-.3.3l-8 14v.4l5.2 9c0 .2 0 .3.3.3h5.4s.3 0 .4-.2c.2-.2.2-.4 0-.5l-5-8.8L24 .7V.2z"/></svg>
      <?php elseif ($style == 'circle'): ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="11.5"/><path d="M8.4 8.5h-3L7 11.3l-2.2 3.2h3l2.3-3.2zm10-3h-3.2l-5 8.5 3.2 5.5h3.3l-3-5.5z"/></svg>
      <?php elseif ($style == 'solidcircle'): ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zM7.8 14.5h-3L7 11.3 5.3 8.5h3l1.8 2.8L8 14.5zm9 5h-3.4l-3-5.5L15 5.5h3.2L13.6 14l3 5.5z"/></svg>
      <?php else: ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.8 4.5h-5l3 5.5-4 6.5h5l4-6.5zm16.7-4H18l-8 14 5.3 9h5.4l-5.2-9z"/></svg>
      <?php endif ?>

    </div><?php echo $title ?>
  </div>
</a>