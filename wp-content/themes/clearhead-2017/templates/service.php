<?php
/*
Template Name: Service
*/

get_header(); ?>

<?php $slug =  $post->post_name; ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <section class="page-banner background" style="background-image: url('<?php echo $image[0]; ?>')">
      <div class="container container--large">
          <h1 class="lowercase"><?php the_title() ?></h1>
      </div>
  </section>
<?php endif; ?>
<section class="content-section content-section--basic">
    <div class="container container--large copy">
        <div class="content-cap content-cap--medium">
            <?php the_content() ?>
        </div>
    </div>
</section>

<section class="page-banner page-banner--split">
    <div class="container container--large">
        <?php if ($slug == "experience-design"): ?>
            <h2>Transform your business through design that solves real problems.</h2>
        <?php elseif ($slug == "research-analytics"): ?>
            <h2>Uncover the “what” and the “why” with Clearhead.</h2>
        <?php elseif ($slug == "experimentation-personalization"): ?>
            <h2>Experiment confidently with Clearhead.</h2>
        <?php elseif ($slug == "data-driven-consulting"): ?>
            <h2>Build a test-and-learn culture with Clearhead.</h2>
        <?php endif; ?>
    </div>
    <div class="frame background" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/competencies/<?php echo $slug ?>-split.jpg')"></div>
</section>

<section class="node-grid">
    <div class="container container--large copy copy--centered">
        <h2 class="lowercase">What We Do</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/competencies/<?php echo $slug ?>-node-grid.png" alt="">
        <div class="cta">
            <?php if ($slug == "experience-design"): ?>
                <p>Schedule a 30 minute call to learn more about our consulting capabilities.</p>
            <?php elseif ($slug == "research-analytics"): ?>
                <p>Schedule a 30 minute call to learn more about our full experimentation + personalization capabilities.</p>
            <?php elseif ($slug == "experimentation-personalization"): ?>
                <p>Schedule a 30 minute call to learn more about our full research + analytics capabilities.</p>
            <?php elseif ($slug == "data-driven-consulting"): ?>
                <p>Schedule a 30 minute call to learn more about our full design capabilities.</p>
            <?php endif; ?>

            <a class="button button--white contact-focus" href="#contact-form">Contact Us</a>
        </div>
    </div>
</section>

<section class="content-section content-section--basic">
    <div class="container container--large">

        <?php if ($slug == "research-analytics"): ?>
            <div class="logos-grid logos-grid--in-page">
                <h2 class="lowercase">Technology</h2>
                <ul>
                    <li><div><span><img style="max-width: 85%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/competencies/tools/dynamic-yield.svg" alt="Dynamic Yield"></span></div></li>
                    <li><div><span><img style="max-width: 45%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/competencies/tools/hotjar.svg" alt="Hotjar"></span></div></li>
                    <li><div><span><img style="max-width: 67%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/competencies/tools/optimal-workshop.svg" alt="Optimal Workshop"></span></div></li>
                    <li><div><span><img style="max-width: 77%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/competencies/tools/sessioncam.svg" alt="SessionCam"></span></div></li>
                    <li><div><span><img style="max-width: 71%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/competencies/tools/lookback.svg" alt="Lookback"></span></div></li>
                    <li><div><span><img style="max-width: 72%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/competencies/tools/python.svg" alt="Python"></span></div></li>
                    <li><div><span><img style="max-width: 67%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/competencies/tools/usertesting.svg" alt="UserTesting"></span></div></li>
                    <li><div><span><img style="max-width: 64%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/competencies/tools/ibm-digital-analytics.svg" alt="IBM Digital Analytics"></span></div></li>
                    <li><div><span><img style="max-width: 22%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/competencies/tools/r-project.svg" alt="R Project"></span></div></li>
                    <li><div><span><img style="max-width: 53%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/competencies/tools/adobe-analytics.svg" alt="Adobe Analytics"></span></div></li>
                </ul>
            </div>
        <?php endif; ?>

        <?php if ($slug == "experimentation-personalization"): ?>
            <div class="logos-grid logos-grid--small logos-grid--in-page">
                <h2 class="lowercase">Technology We Use</h2>
                <ul>
                    <li><div><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tools/optimizely.svg" alt="Optimizely"></span></div></li>
                    <li><div><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tools/monetate.svg" alt="Monetate"></span></div></li>
                    <li><div><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tools/google-analytics.svg" alt="Google Analytics"></span></div></li>
                    <li><div><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tools/maxymiser.svg" alt="Maxymiser"></span></div></li>
                    <li><div><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tools/tealium.svg" alt="Tealium"></span></div></li>
                    <li><div><span><img style="width: 8.5em;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tools/adobe-target.png" alt="Adobe Target"></span></div></li>
                </ul>
            </div>
        <?php endif; ?>


        <div class="summary-blocks">
            <?php if ($slug == "experience-design"): ?>
                <h2 class="lowercase">Our Top Design + Experience Blog&nbsp;Posts</h2>
                <ul>
                    <li>
                        <a href="http://clearhead.me/blog/vitamix-data-driven-experience-case-study/">
                            <figure>
                                <div class="photo" style="background-image: url('http://clearhead.me/wp-content/uploads/2017/04/Vitamix-Story-1.png')"></div>
                                <figcaption>
                                    <span class="title">To Redesign or Not? A Vitamix Experience Disruption Story</span>
                                    <span class="cta">See Blog Post</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="http://clearhead.me/blog/state-ecommerce-redesigns-2016/">
                            <figure>
                                <div class="photo" style="background-image: url('http://clearhead.me/wp-content/uploads/2016/07/Screen-Shot-2016-07-25-at-10.37.49-AM-800x344.png')"></div>
                                <figcaption>
                                    <span class="title">The State of Ecommerce Redesigns in 2016</span>
                                    <span class="cta">See Full Report</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="http://clearhead.me/blog/physics-of-roi/">
                            <figure>
                                <div class="photo" style="background-image: url('http://clearhead.me/wp-content/uploads/2017/02/The-Physics-of-ROI.png')"></div>
                                <figcaption>
                                    <span class="title">Stack the Chips in Your Favor with the Physics of ROI</span>
                                    <span class="cta">See Blog Post</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
            <?php elseif ($slug == "research-analytics"): ?>
                <h2 class="lowercase">Our Top Research + Analytics Blog&nbsp;Posts</h2>
                <ul>
                    <li>
                        <a href="http://clearhead.me/blog/three-reasons-combine-ab-ux-testing/">
                            <figure>
                                <div class="photo" style="background-image: url('http://clearhead.me/wp-content/uploads/2017/06/Combining-UX-and-AB-Testing-to-Evaluate-Design-3-800x350.png')"></div>
                                <figcaption>
                                    <span class="title">Three Reasons to Combine A/B and UX Testing</span>
                                    <span class="cta">See Blog Post</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="http://clearhead.me/blog/vitamix-data-driven-experience-case-study/">
                            <figure>
                                <div class="photo" style="background-image: url('http://clearhead.me/wp-content/uploads/2017/04/Vitamix-Story-1.png')"></div>
                                <figcaption>
                                    <span class="title">To Redesign or Not? A Vitamix Experience Disruption Story</span>
                                    <span class="cta">See Blog Post</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
            <?php elseif ($slug == "experimentation-personalization"): ?>
                <h2 class="lowercase">Our Top Experimentation + Personalization Blog&nbsp;Posts</h2>
                <ul>
                    <li>
                        <a href="http://clearhead.me/blog/test-learn-culture-experimentation/">
                            <figure>
                                <div class="photo" style="background-image: url('http://clearhead.me/wp-content/uploads/2016/11/test-and-learn-featured-image-2.png')"></div>
                                <figcaption>
                                    <span class="title">What Is “Test and Learn” (And Why Should I Care)?</span>
                                    <span class="cta">See Blog Post</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="http://clearhead.me/blog/adidas-case-study/">
                            <figure>
                                <div class="photo" style="background-image: url('http://clearhead.me/wp-content/uploads/2017/08/adidas-hero.jpg')"></div>
                                <figcaption>
                                    <span class="title">Data-Driven Approach Scores Big: Adidas Case Study</span>
                                    <span class="cta">See Blog Post</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="http://clearhead.me/blog/released-2016-digital-optimization-study-how-do-you-stack-up/">
                            <figure>
                                <div class="photo" style="background-image: url('http://clearhead.me/wp-content/uploads/2016/12/benchmarking_featured2.png')"></div>
                                <figcaption>
                                    <span class="title">Released: 2016 Digital Optimization Study. How do you stack up?</span>
                                    <span class="cta">See Blog Post</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
            <?php elseif ($slug == "data-driven-consulting"): ?>
                <h2 class="lowercase">Our Top Consulting Blog&nbsp;Posts</h2>
                <ul>
                    <li>
                        <a href="http://clearhead.me/blog/digital-transformation-hurts-bottom-line/">
                            <figure>
                                <div class="photo" style="background-image: url('http://clearhead.me/wp-content/uploads/2017/06/When-digital-transformation.png')"></div>
                                <figcaption>
                                    <span class="title">When “Digital Transformation” Can Hurt Your Bottom Line</span>
                                    <span class="cta">See Blog Post</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="http://clearhead.me/blog/driving-data-driven-announcing-clearhead-digital-maturity-journey/">
                            <figure>
                                <div class="photo" style="background-image: url('http://clearhead.me/wp-content/uploads/2016/12/Clearhead-Digital-Maturity-Journey-Framework-2-800x350.jpg')"></div>
                                <figcaption>
                                    <span class="title">Are You Driving to Data-Driven? Announcing the Clearhead Digital Maturity Journey</span>
                                    <span class="cta">See Blog Post</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="http://clearhead.me/blog/path-to-data-driven/">
                            <figure>
                                <div class="photo" style="background-image: url('http://clearhead.me/wp-content/uploads/2016/04/accelerator-hello.004-800x350.jpeg')"></div>
                                <figcaption>
                                    <span class="title">How to Chart a Brave Path to Data-Driven</span>
                                    <span class="cta">See Blog Post</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>



<?php
get_footer();
