<?php include('perch/runtime.php'); ?>
<?php echo '<'.'?xml version="1.0"?'.'>'; ?>
<rss version="2.0">
    <channel>
        <title>Example Co News</title>
        <link>http://forestvilleumc:8888/blog/</link>
        <description>News and information about Example Co</description>
		<?php
            $opts = array(
                    'page'=>'/blog.php',
                    'template'=>'_rss_item.html'
                );
            perch_content_custom($opts);
        ?>    
    </channel>
</rss>