<div class="single">
    <main class="single-main">
        <section class="section work-single">
            <div class="container">
                <div class="work-single-ttl">
                    <h2>news</h2>
                </div>
                <div class="work-single-main">
                    <div class="work-single-img">
                        <?php echo get_the_post_thumbnail(); ?>
                    </div>
                    <div class="work-single-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="work-single-btn">
                        <?php
                        $url_title = get_post_type();
                        if (str_starts_with(strtolower($url_title), "new")) {
                            $link = home_url('/new');
                        } else {
                            $link = home_url('/faq');
                        }
                        ?>
                        <a href="<?php echo esc_url($link); ?>">
                            Go to <?php echo esc_html($url_title); ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>