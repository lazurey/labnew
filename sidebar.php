    <aside id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
    	<?php //wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
        <!--
    	<h2>Archives</h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>
        -->
        <h3>专题：从“闯黄灯”说开去，普通人眼中的城市规划设计问题</h3>
        <img src="http://files.toodaylab.com/topic/130114.jpg" width="180px" >
        <br />
        <ul>
            <li><a href="http://www.toodaylab.com/41480">从“闯黄灯”说开去，普通人眼中的城市规划设计问题（上）</a></li>
            <li><a href="http://www.toodaylab.com/41475">从“闯黄灯”说开去，普通人眼中的城市规划设计问题（下）</a></li>
        </ul>
        <br>
        <br>
        <h3>分类</h3>
        <ul>
    	   <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
        
    	<?php //wp_list_bookmarks(); ?>
        <br>
        <br>
        <h3>每日一图</h3>
        <ul>
            <li>
                <?php 
                    $args = array( 'numberposts' => '1',
                                    'category' => '2' );
                    $photo_today = wp_get_recent_posts($args);
                    // print_r($photo_today);
                    if (count($photo_today) > 0) {
                        $post = $photo_today[0];
                        echo "<h3>" . $post['post_title'] . $post['ID'] . "</h3>";
                        // $photo = get_post_meta($post['ID'], 'thumbnail', true);
                        // print_r($photo);
                        //print_r($post);
                        $image_args = array(
                            'numberposts' => 1,
                            'order' => 'DESC',
                            'post_mime_type' => 'image',
                            'post_parent' => $post['ID'],
                            'post_type' => 'attachment'
                            );
                        $get_children_array = get_children($image_args, ARRAY_A);
                        $rekeyed_array = array_values($get_children_array);
                        $child_image = $rekeyed_array[0];
                        echo "<a href='" . $post['guid'] . "'><img src='" . $child_image['guid'] . "' width=200 /></a>";
                    }
                ?>
            </li>
        </ul>
    	<br>
        <br>
    	<h3>订阅</h3>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
    	</ul>
	
	<?php endif; ?>

</aside>