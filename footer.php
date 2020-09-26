					<footer id="footer" class="site-footer card shadow-sm border-0">
						<div>Theme <a href="https://github.com/solstice23/argon-theme"><strong>Argon</strong></a><?php if (get_option('argon_hide_footer_author') != 'true') {echo " By solstice23"; }?></div>
						<?php
							echo get_option('argon_footer_html');
						?>
						<?php if (get_option('argon_build_date') != '' && get_option('argon_build_time') != ''){ ?>
						<div><span id="timeDate">载入天数...</span><span id="times">载入时分秒...</span></div>
						<?php } ?>
					</footer>
				</main>
			</div>
		</div>
		<script src="<?php echo $GLOBALS['assets_path']; ?>/argontheme.js?v<?php echo $GLOBALS['theme_version']; ?>"></script>
		<?php if (get_option('argon_build_date') != '' && get_option('argon_build_time') != ''){ ?><script>// <![CDATA[
		var now=new Date();function createtime(){var grt=new Date("<?php echo get_option('argon_build_date');?> <?php echo get_option('argon_build_time');?>");now.setTime(now.getTime()+250);days=(now-grt)/1000/60/60/24;dnum=Math.floor(days);hours=(now-grt)/1000/60/60-(24*dnum);hnum=Math.floor(hours);if(String(hnum).length==1){hnum="0"+hnum}minutes=(now-grt)/1000/60-(24*60*dnum)-(60*hnum);mnum=Math.floor(minutes);if(String(mnum).length==1){mnum="0"+mnum}seconds=(now-grt)/1000-(24*60*60*dnum)-(60*60*hnum)-(60*mnum);snum=Math.round(seconds);if(String(snum).length==1){snum="0"+snum}document.getElementById("timeDate").innerHTML="本博客已运行 "+dnum+" days , ";document.getElementById("times").innerHTML=hnum+" h , "+mnum+" m , "+snum+" s"}setInterval("createtime()",250);
		// ]]></script><?php } ?>
		<?php if (get_option('argon_math_render') == 'mathjax3') { /*Mathjax V3*/?>
			<script>
				window.MathJax = {
					tex: {
						inlineMath: [["$", "$"], ["\\\\(", "\\\\)"]],
						displayMath: [['$$','$$']],
						processEscapes: true,
						packages: {'[+]': ['noerrors']}
					},
					options: {
						skipHtmlTags: ['script', 'noscript', 'style', 'textarea', 'pre', 'code'],
						ignoreHtmlClass: 'tex2jax_ignore',
						processHtmlClass: 'tex2jax_process'
					},
					loader: {
						load: ['[tex]/noerrors']
					}
				};
			</script>
			<script src="<?php echo get_option('argon_mathjax_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml-full.js' : get_option('argon_mathjax_cdn_url'); ?>" id="MathJax-script" async></script>
		<?php }?>
		<?php if (get_option('argon_math_render') == 'mathjax2') { /*Mathjax V2*/?>
			<script type="text/x-mathjax-config" id="mathjax_v2_script">
				MathJax.Hub.Config({
					messageStyle: "none",
					tex2jax: {
						inlineMath: [["$", "$"], ["\\\\(", "\\\\)"]],
						displayMath: [['$$','$$']],
						processEscapes: true,
						skipTags: ['script', 'noscript', 'style', 'textarea', 'pre', 'code']
					},
					menuSettings: {
						zoom: "Hover",
						zscale: "200%"
					},
					"HTML-CSS": {
						showMathMenu: "false"
					}
				});
			</script>
			<script src="<?php echo get_option('argon_mathjax_v2_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/mathjax@2.7.5/MathJax.js?config=TeX-AMS_HTML' : get_option('argon_mathjax_v2_cdn_url'); ?>"></script>
		<?php }?>
		<?php if (get_option('argon_math_render') == 'katex') { /*Katex*/?>
			<link rel="stylesheet" href="<?php echo get_option('argon_katex_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/katex@0.11.1/dist/' : get_option('argon_katex_cdn_url'); ?>katex.min.css">
			<script src="<?php echo get_option('argon_katex_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/katex@0.11.1/dist/' : get_option('argon_katex_cdn_url'); ?>katex.min.js"></script>
			<script src="<?php echo get_option('argon_katex_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/katex@0.11.1/dist/' : get_option('argon_katex_cdn_url'); ?>contrib/auto-render.min.js"></script>
			<script>
				document.addEventListener("DOMContentLoaded", function() {
					renderMathInElement(document.body,{
						delimiters: [
							{left: "$$", right: "$$", display: true},
							{left: "$", right: "$", display: false},
							{left: "\\(", right: "\\)", display: false}
						]
					});
				});
			</script>
		<?php }?>

		<?php if (get_option('argon_enable_code_highlight') == 'true') { /*Highlight.js*/?>
			<script>
				var argonEnableCodeHighlight = true;
			</script>
			<link rel="stylesheet" href="<?php echo $GLOBALS['assets_path']; ?>/assets/vendor/highlight/styles/<?php echo get_option('argon_code_theme') == '' ? 'vs2015' : get_option('argon_code_theme'); ?>.css">
		<?php }?>

	</div>
</div>
<?php 
	wp_enqueue_script("argonjs", $GLOBALS['assets_path'] . "/assets/js/argon.min.js", null, $GLOBALS['theme_version'], true);
?>
<?php wp_footer(); ?>
<noscript>
	<style>
		article img.lazyload[src^="data:image/svg+xml;base64,PCEtLUFyZ29uTG9hZGluZy0tPg"]{display: none;}
		.comment-item-text .comment-sticker.lazyload{display: none;}
	</style>
</noscript>
</body>

<?php echo get_option('argon_custom_html_foot'); ?>
<?php if (get_option('argon_aplayer') == 'true') { ?>
<link href="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.js"></script>
        <div class="aplayer-footer">
			<div class="ap-f" id="ap-f"></div>
            <script>
            $(function(){
                $.ajax({
                    url:"<?php echo get_option('argon_aplayer_playlist'); ?>",
                    success:function(e){
                        var a = new APlayer({
                            element:document.getElementById("ap-f"),
                            autoplay:<?php if(get_option('argon_aplayer_auto') == 'true') echo 'true'; else echo 'false'; ?>,
                            fixed:true,
                            loop:"<?php echo get_option('argon_aplayer_loop'); ?>",
                            order:"<?php echo get_option('argon_aplayer_order'); ?>",
                            listFolded:true,
                            showlrc:3,
                            theme:"#fb7299",
                            listmaxheight:"200px",
                            music:eval(e)
                        });
                        window.aplayers || (window.aplayers = []),
                        window.aplayers.push(a)
                    }
                })
            })
            </script>
        </div>
<?php } ?>

</html>
