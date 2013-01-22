	</div>
	<div class="clear"></div>
	<aside class="bottombar">
		<section class="social-media">
			<div class="bar-content">
				<h4>关注实验室</h4>
				<ul>
					<li>
					<img src="wp-content/themes/labnew/images/toodaylab-qr.jpg">
					</li>
					<li><img src="wp-content/themes/labnew/images/toodaylab-weibo.png"></li>
					<li><img src="wp-content/themes/labnew/images/toodaylab-douban.png"></li>
					<li><img src="wp-content/themes/labnew/images/toodaylab-tencent.png"></li>
				</ul>
				<h4 class="clear">关于我们</h4>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;理想生活实验室是一个致力于解读设计价值, 激发生活灵感的互动分享平台. 
					我们将"设计"作为观察一切的出发点与切入点, 强调"有用"的设计, 尊重设计的价值, 坚持以常人的价值观审视设计, 鼓励对日常生活进行再发现并分享个人观点, 将设计与每一个普通人连接起来.</p>
				<p><a href="/about-us" class="btn about-us">了解更多 &gt;</a></p>
			</div>
		</section>
		<section class="friend-link">
			<div class="bar-content">
				<h4>友情连接</h4>
				<ul>
					<?php get_links('-1', '<li>', '</li>', '', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?>
				</ul>
			</div>
		</section>
	</aside>
	<footer id="footer">
		<div class="footer-content">
			&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
			&nbsp; | &nbsp; Wordpress
		</div>
	</footer>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
