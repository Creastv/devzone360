</div>
</main>
 <footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
        <div class="container">
            <div class="row-left row-flex left-right">
                <div class="col-2 left">
                    <div class="row-flex">
                        <div class="col-2">
                            <div class="wrap-footer-inf">
                                <?php do_action( 'before_sidebar' ); ?>
                                <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?><?php endif; ?>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="wrap-footer-inf">
                                <?php do_action( 'before_sidebar' ); ?>
                                <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?><?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 right">
                    <?php echo do_shortcode('[contact-form-7 id="14" title="Formularz 1"]'); ?> 
                </div>
            </div>
        </div>
</footer>
<span id="go-to-top" ></span>
<?php wp_footer(); ?>
</body>
</html>