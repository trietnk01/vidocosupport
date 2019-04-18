<?php
/*
Template name: Template giới thiệu
Template Post Type: post, page
*/
get_header(); 
?>
<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<?php include get_template_directory()."/block/block-category-menu-product.php"; ?>
			<?php include get_template_directory()."/block/block-support-online.php"; ?>			
		</div>
		<div class="col-lg-9">
			<div class="box-post" itemscope itemtype="http://schema.org/NewsArticle">
				<meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
				<div>
					<a href="javascript:void(0);">
						<figure>
							<div style="background-image: url('<?php echo wp_get_upload_dir()["url"]."/happy-work-woman-1426579308.jpg"; ?>');background-size: cover;background-repeat: no-repeat;padding-top: calc(100% / (845/300));"></div>	
						</figure>
					</a>					
				</div>
				<h1 class="post-title" itemprop="headline">Kỹ năng viết Mục tiêu nghề nghiệp nổi bật CV</h1>	
				<!-- begin schema -->	
				<p style="display: none;" itemprop="author" itemscope itemtype="https://schema.org/Person"> By <span itemprop="name">John Doe</span>
				</p>
				<p style="display: none;" itemprop="description">A most wonderful article</p>
				<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject" style="display: none;">
					<img src="https://google.com/thumbnail1.jpg"/>
					<meta itemprop="url" content="https://google.com/thumbnail1.jpg">
					<meta itemprop="width" content="800">
					<meta itemprop="height" content="800">
				</div>
				<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization" style="display: none;">
					<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
						<img src="https://google.com/logo.jpg"/>
						<meta itemprop="url" content="https://google.com/logo.jpg">
						<meta itemprop="width" content="600">
						<meta itemprop="height" content="60">
					</div>
					<meta itemprop="name" content="Google">
				</div>
				<meta itemprop="datePublished" content="2015-02-05T08:00:00+08:00" style="display: none;" />
				<meta itemprop="dateModified" content="2015-02-05T09:20:00+08:00" style="display: none;" />
				<!-- end schema -->
				<div class="rapidshare">                                            
					<div class="facebook_button">
						<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
					</div>       
					<div class="facebook_like_button">
						<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
					</div>
					<div class="category_twitter_sg"><a href="https://chonviec.vn" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
					<div class="category_linkedin_sg">
						<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
						<script type="IN/Share" data-url="https://chonviec.vn"></script>
					</div>					
					<div class="clr"></div>
				</div>  				
				<div class="post-exceprt">
					Mục tiêu nghề nghiệp là một phần không thể thiếu trong CV. Đây là một đoạn ngắn giới thiệu về bản thân cũng như tầm nhìn sự nghiệp trong tương lai của bạn. Từ đó nhà tuyển dụng cân nhắc sự phù hợp của bạn dành cho vị trí ứng tuyển.
				</div>		
				<div class="post-content">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

					The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
				</div>				
			</div>			
		</div>
	</div>
</div>
<?php
get_footer(); 
?>