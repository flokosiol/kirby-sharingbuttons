<!-- Sharingbutton Facebook -->
<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=<?php echo $url ?>" target="_blank" aria-label="<?php echo $title ?>">
  <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--<?php echo $size ?>">
    <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--<?php echo $style ?>">

      <?php if ($style == 'solid'): ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
      <?php elseif ($style == 'circle'): ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="11.5"/><path d="M15.84 9.5H13.5V8.48c0-.53.35-.65.6-.65h1.4v-2.3h-2.35c-2.3 0-2.65 1.7-2.65 2.8V9.5h-2v2h2v7h3v-7h2.1l.24-2z"/></svg>
      <?php elseif ($style == 'solidcircle'): ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0C5.38 0 0 5.38 0 12s5.38 12 12 12 12-5.38 12-12S18.62 0 12 0zm3.6 11.5h-2.1v7h-3v-7h-2v-2h2V8.34c0-1.1.35-2.82 2.65-2.82h2.35v2.3h-1.4c-.25 0-.6.13-.6.66V9.5h2.34l-.24 2z"/></svg>
      <?php else: ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.5H14.5V5.6c0-.9.6-1.1 1-1.1h3V.54L14.17.53C10.24.54 9.5 3.48 9.5 5.37V7.5h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
      <?php endif ?>

    </div><?php echo $title ?>
  </div>
</a>

