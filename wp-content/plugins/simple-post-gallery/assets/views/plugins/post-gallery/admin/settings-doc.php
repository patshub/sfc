<?php
/**
 * Settings documentation view/template.
 *
 * @author Alejandro Mostajo <http://about.me/amostajo>
 * @copyright 10Quality <http://www.10quality.com>
 * @package PostGallery
 * @version 2.1.0
 */ 
?>
<section id="documentation"
    <?php if ( $tab != 'docs' ) : ?>style="display: none;"<?php endif ?>
>
    <h1 id="top"><?php _e( 'Documentation', 'post-gallery' ) ?></h1>

    <div>
        <ol>
            <li>
                <a href="#" class="scroll-to" data-marker="#usage"><?php _e( 'Usage', 'post-gallery' ) ?></a>
                <ol>
                    <li>
                        <a href="#" class="scroll-to" data-marker="#the-gallery"><?php _e( 'The gallery', 'post-gallery' ) ?></a>
                    </li>
                    <li>
                        <a href="#" class="scroll-to" data-marker="#shortcode"><?php _e( 'Shortcode', 'post-gallery' ) ?></a>
                    </li>
                    <li>
                        <a href="#" class="scroll-to" data-marker="#in-templates"><?php _e( 'In templates', 'post-gallery' ) ?></a>
                    </li>
                    <li>
                        <a href="#" class="scroll-to" data-marker="#as-data"><?php _e( 'As data', 'post-gallery' ) ?></a>
                    </li>
                </ol>
            </li>
            <li>
                <a href="#" class="scroll-to" data-marker="#customization"><?php _e( 'Customization', 'post-gallery' ) ?></a>
                <ol>
                    <li>
                        <a href="#" class="scroll-to" data-marker="#templates"><?php _e( 'Templates', 'post-gallery' ) ?></a>
                    </li>
                    <li>
                        <a href="#" class="scroll-to" data-marker="#example"><?php _e( 'Example', 'post-gallery' ) ?></a>
                    </li>
                </ol>
            </li>
            <li>
                <a href="#" class="scroll-to" data-marker="#settings"><?php _e( 'Settings', 'post-gallery' ) ?></a>
            </li>
        </ol>
    </div>

    <div class="container">

        <div id="usage">
            <h2>
                <?php _e( 'Usage', 'post-gallery' ) ?>
                <?php $view->show( 'plugins.post-gallery.admin.settings-doc-backtotop' ) ?>
            </h2>

            <h3 id="the-gallery">
                <?php _e( 'The gallery', 'post-gallery' ) ?>
                <?php $view->show( 'plugins.post-gallery.admin.settings-doc-backtotop' ) ?>
            </h3>
            <p><?php _e( 'A gallery metabox will appear on each post, within the enabled post types (settings).', 'post-gallery' ) ?></p>
            <p>
                <img src="<?php echo assets_url( 'images/documentation/customization-gallery1.jpg', __FILE__ )?>" alt="gallery 2"/>
            </p>
            <p><?php _e( 'Click the "Add Image" button to selected and add images to the gallery.', 'post-gallery' ) ?></p>
            <p>
                <img src="<?php echo assets_url( 'images/documentation/customization-gallery2.jpg', __FILE__ )?>" alt="gallery 2"/>
            </p>
            <p><?php _e( 'Once added, you can drag-and-drop the images to sort their display order. Finally click the post\'s publish button to save changes.', 'post-gallery' ) ?></p>
            <p>
                <img src="<?php echo assets_url( 'images/documentation/customization-gallery3.jpg', __FILE__ )?>" alt="gallery 3"/>
            </p>

            <h3 id="shortcode">
                <?php _e( 'Shortcode', 'post-gallery' ) ?>
                <?php $view->show( 'plugins.post-gallery.admin.settings-doc-backtotop' ) ?>
            </h3>
            <p><?php _e( 'Add the following shortcode within the content of a post to display its gallery (the gallery should at least have 1 image):', 'post-gallery' ) ?></p>
            <pre>
                [post_gallery]
            </pre>

            <h3 id="in-templates">
                <?php _e( 'In templates', 'post-gallery' ) ?>
                <?php $view->show( 'plugins.post-gallery.admin.settings-doc-backtotop' ) ?>
            </h3>
            <p><?php _e( 'The following function can be used within your template to display the gallery of a post:', 'post-gallery' ) ?></p>
            <code>
                &lt;?php the_gallery( $post_id ) ?&gt;
            </code>
            <p><?php _e( 'Parameter <strong>$post_id</strong> is optional. If no ID is passed by, then the function will use the current post in display:', 'post-gallery' ) ?></p>
            <code>
                &lt;?php the_gallery() ?&gt;
            </code>

            <h3 id="as-data">
                <?php _e( 'As data', 'post-gallery' ) ?>
                <?php $view->show( 'plugins.post-gallery.admin.settings-doc-backtotop' ) ?>
            </h3>
            <p><?php _e( 'The following function can be used to get the gallery of a post:', 'post-gallery' ) ?></p>
            <code>
                &lt;?php $gallery = get_gallery( $post_id ) ?&gt;
            </code>
            <p><?php _e( 'Parameter <strong>$post_id</strong> is optional. If no ID is passed by, then the function will use the current post in display:', 'post-gallery' ) ?></p>
            <code>
                &lt;?php $gallery = get_gallery() ?&gt;
            </code>
            <p><?php _e( 'Use a foreach statement to loop within the gallery\'s attachments:', 'post-gallery' ) ?></p>
            <script src="https://gist.github.com/10quality-info/8a6fea2c09a4ccc6da7d03bd4e43dff6.js"></script>

            <h4 id="attachment-object">
                <?php _e( 'Attachment object', 'post-gallery' ) ?>
            </h4>
            <p><?php _e( '<strong>get_gallery()</strong> returns an array of attachment objects, each attachment has the following properties:', 'post-gallery' ) ?></p>
            <p>
                <ul>
                    <li>
                        <?php _e( '<strong>alt</strong>: Alternative text set for the image.', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>caption</strong>: Caption text set for the image.', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>url</strong>: Image original url.', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>edit_url</strong>: Image url with edit resolution (170x65).', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>thumb_url</strong>: Image url with thumbnail resolution (set at wordpress\' media settings).', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>medium_url</strong>: Image url with medium resolution (set at wordpress\' media settings).', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>large_url</strong>: Image url with large resolution (set at wordpress\' media settings).', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>path</strong>: Path to where the image is located.', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>is_video</strong>: Flag that indicates if attachment is a video.', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>embed</strong>: Video\'s embed iframe.', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>video_id</strong>: Video provider\'s ID.', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>video_url</strong>: Video url.', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>video_provider</strong>: Name of the video provider.', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>embed_size</strong>: Standard or any other custom size.', 'post-gallery' ) ?>
                    </li>
                    <li>
                        <?php _e( '<strong>get_res($width, $height, $crop)</strong>: Method to obtain a the image url at a specific resolution.', 'post-gallery' ) ?>
                    </li>
                </ul>
            </p>
        </div>

        <div id="customization">
            <h2>
                <?php _e( 'Customization', 'post-gallery' ) ?>
                <?php $view->show( 'plugins.post-gallery.admin.settings-doc-backtotop' ) ?>
            </h2>
            <p>
                <?php _e( '<strong>Post Gallery</strong> lets you customize all its templates (views) in a very friendly way.', 'post-gallery' ) ?> 
                <?php _e( 'Just copy a selected template (view) file from:', 'post-gallery' ) ?>
            </p>
            <p>
                <code>
                    wp-content/plugins/simple-post-gallery/assets/views
                </code>
            </p>
            <p>
                <?php _e( 'Into your theme\'s folder:', 'post-gallery' ) ?>
            </p>
            <p>
                <code>
                    wp-content/themes/[your-theme-name]/views
                </code>
            </p>

            <h3 id="templates">
                <?php _e( 'Templates', 'post-gallery' ) ?>
                <?php $view->show( 'plugins.post-gallery.admin.settings-doc-backtotop' ) ?>
            </h3>
            <p>
                <?php _e( 'Locate and copy the wanted files inside the plugin\'s folder:', 'post-gallery' ) ?>
            </p>
            <p>
                <img src="<?php echo assets_url( 'images/documentation/customization-example1.jpg', __FILE__ )?>" alt="example 1"/>
            </p>
            <p>
                <?php _e( 'Then we paste them over (with the same path structure) into our theme:', 'post-gallery' ) ?>
            </p>
            <p>
                <img src="<?php echo assets_url( 'images/documentation/customization-example2.jpg', __FILE__ )?>" alt="example 2"/>
            </p>

            <h3 id="example">
                <?php _e( 'Example', 'post-gallery' ) ?>
                <?php $view->show( 'plugins.post-gallery.admin.settings-doc-backtotop' ) ?>
            </h3>
            <p>
                <?php _e( 'In the following example, we want to customize the gallery displayed using the <strong>shortcode</strong> or <strong>the_gallery()</strong> function.', 'post-gallery' ) ?>
                <?php _e( 'Before customizing, is recommended to un-enqueue the default scripts and styles.', 'post-gallery' ) ?>
            </p>
            <p>
                <?php _e( 'The default template located at file <strong>gallery.php</strong> looks like:', 'post-gallery' ) ?>
            </p>
            <p>
                <script src="https://gist.github.com/10quality-info/0b904621a5a819a09e24c5a745861915.js"></script>
            </p>
            <p>
                <?php _e( 'A modified version, where lightbox is removed and medium image size resolution is used, would look like:', 'post-gallery' ) ?>
            </p>
            <p>
                <script src="https://gist.github.com/10quality-info/11838be4dd85f0d5608349b035287266.js"></script>
            </p>
            <p>
                <?php _e( 'This customization will take effect in your entire wordpress setup.', 'post-gallery' ) ?>
            </p>
        </div>

        <div id="settings">
            <h2>
                <?php _e( 'Settings', 'post-gallery' ) ?>
                <?php $view->show( 'plugins.post-gallery.admin.settings-doc-backtotop' ) ?>
            </h2>

            <h3 id="resolutions">
                <?php _e( 'Image resolutions', 'post-gallery' ) ?>
            </h3>
            <p>
                <?php echo sprintf(
                    __( 'Configure your image resolution (sizes) settings at <a href="%s">Settings > Media</a>. You can also use <strong>get_res()</strong> method on each attachment.', 'post-gallery' ),
                    admin_url( 'options-media.php' )
                )?>
            </p>
        </div>

    </div>

    <div class="credits text-center">
        <p><?php _e( 'Brought to you by', 'post-gallery' ) ?> </p>
        <a href="http://www.10quality.com">
            <img src="<?php echo assets_url( 'images/10quality-logo-x65.png', __FILE__ )?>"
                alt="10 Quality - Software Development Studio"
            />
        </a>
    </div>

</section>