<!-- Single Blog Start -->
                                                <div id="blog-posts" class="blog post-item col-lg-6 col-md-6 col-sm-6 all <?php $hasComma = false; foreach((get_the_category()) as $category) { if ($hasComma){ echo " "; } echo ''.$category->slug.'';$hasComma = true;} ?><?php if ( $counter >= 4 ) { echo ' disable-item'; } ?> ">
                                                    <div class="blog-inner mb-20">
                                                        <div class="media"><a href="<?php echo get_the_permalink();?>" class="image"><?php the_post_thumbnail( 'post-archive-image' ); ?></a></div>
                                                        <div class="content">
                                                        <span class="post-date pb-2" style="text-transform:uppercase;font-size:13px;"><?php $hasComma = false; foreach((get_the_category()) as $category) { $category_link = get_category_link($category->cat_ID); if ($hasComma){ echo ", "; }echo '<a href="'.esc_url( $category_link ).'" title="'.esc_attr($category->name).'">'.$category->name.'</a>';$hasComma = true;} ?></span>
                                                            <h3 class="title"><a href="<?php echo get_the_permalink();?>"><?php echo get_the_title(); ?></a></h3>
                                                            <span class="post-date"><?php echo get_the_date('M j, Y');?></span>
                                                            <p>
                                                                <?php 
                                                                    $excerpt = get_the_excerpt();
                                                                    echo wp_trim_words( $excerpt , '45' ); 
                                                                ?>
                                                            </p>
                                                            <!-- <a class="readmore" href="blog-details.html">Read more</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Blog End -->