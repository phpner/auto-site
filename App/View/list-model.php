<section class="section section_block-list">
    <div class="section__wrapper">
        <div class="section__content-no-top">
            <p class="section-title section-title_center">Cписок с моделями:</p>
            <div class="section__body">
                <?php
                if (!empty($models ))
                {
                    foreach ( $models  as $kye)
                    {
                        $link_model = preg_replace('/ {2,}( )/','$1',$kye);
                        ?>
                        <a href='<?php echo  $link_model.'.html';?>'><?php echo $kye?>,</a>
                    <?php }
                }
                ?>
            </div>
        </div>
    </div>
</section>