<a id="<?php print $btn_id ?>" href="<?php print $url; ?>" <?php if ($blank) {
    print ' target="_blank" ';
} ?> class="btn <?php print $style . ' ' . $size; ?>">
    <?php if($icon): ?>
        <span class="<?php print $icon; ?>"></span>
    <?php endif; ?>
    <?php print $text; ?>
</a>