<?php
$form = $data['form'];
?>
<?php if ( ! ARI_WP_LEGACY ) settings_errors(); ?>
<div class="ari-theme">
    <form method="post" action="options.php" class="settings-page">
        <?php
            $this->tabs->render();
        ?>

        <button type="submit" class="button button-primary"><?php _e( 'Save Changes', 'ari-fancy-lightbox' ); ?></button>
        <?php settings_fields( ARIFANCYLIGHTBOX_SETTINGS_GROUP ); ?>
    </form>
</div>