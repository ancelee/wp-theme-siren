<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Akina
 */

?>
    <article class="post post-list">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="post-entry">
        <div class="feature">
            <a href="<?php the_permalink();?>"><?php the_post_thumbnail(array(90,90));?></a>
        </div>
    <?php } else {?>
    <div class="post-con">
    <?php } ?>
        <div class="list-tags">
            <?php if ( has_tag() ) { echo '<i class="iconfont">&#xe68c;</i> '; the_tags('', ' ', ' ');}?>
        </div>
        <h1 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
        <div class="entry-extra">
             <span class="p-time">
                <?php if(is_sticky()) : ?>
                <i class="iconfont hotpost">&#xe758;</i>
                <?php endif ?>
                <i class="iconfont">&#xe65f;</i><?php echo poi_time_since(strtotime($post->post_date_gmt)); ?>
            </span>
             <span class="i-bl"><i class="iconfont">&#xe73d;</i><?php echo get_post_views(get_the_ID()); ?> 次阅读</span>
             <span class="i-bl"><i class="iconfont">&#xe731;</i><?php comments_popup_link('0', '1 条评论', '% 条评论'); ?></span>
        </div>
    </div>
    </article><!-- #post-## -->