<?php 
	/*
	 * Template Name: Portfolio
	 */
?>	
<?php get_header(); ?>
<div id="content">
<?php if(have_posts()): while (have_posts()): the_post(); ?>
<h2><?php the_title(); ?></h2>
		
<section>
	<div class="section-title">
		<h3>Websites</h3>
	</div><!-- section title -->
	<div class="section-content">
		<div class="col2">
			<a target="_blank" href="http://sound-soups.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb-soundsoups.jpg" class="thumb" alt="Sound Soups website"></a>
		</div><!-- col 2 - 1 -->
		<div class="col2 list">
			<h4><a class="visit" target="_blank" href="http://sound-soups.com/">Sound Soups</a></h4>
			<ul>
				<li>Designed and created a new website from legacy logo and color palette </li>
				<li>Created a fully responsive and mobile friendly website</li>
				<li>Utilized <a href="https://github.com/scottjehl/picturefill" target="_blank">picturefill</a> to deliver lower resolution images to smaller screens and mobile devices</li>
				<li>Employed my jQuery plugin <a href="#togglator">togglator</a> to display nutritional information</li>
			</ul>
			<!-- <p class="visit"><a target="_blank" href="#">View Process</a></p> -->
			<p class="visit"><a target="_blank" href="http://sound-soups.com/">Visit Site</a></p>
			<p class="visit">View code base on <a target="_blank" href="https://github.com/julie-edwards/sound-soups">GitHub</a></p>
		</div><!-- col 2 - 2 -->
	</div><!-- section content -->
	<div class="section-content">
		<div class="col2">
			<a target="_blank" href="http://surge.julie-edwards.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb-surge.jpg" class="thumb" alt="Surge Tools &amp; Hardware website"></a>
		</div><!-- col 2 - 1 -->
		<div class="col2 list">
			<h4><a class="visit" target="_blank" href="http://surge.julie-edwards.com/">Surge Tools &amp; Hardware &#40;Protosite&#41;</a></h4>
			<ul>
				<li>Created logo and branding</li>
				<li>Dynamically integrated product database using PHP and SQL</li>
				<li>Developed working product rating system displayed through jQuery star plugin</li>
				<li>Wrote SQL search algorithim for accurate results</li>
				<li>Designed highly usable e-commerce user interface</li>
				<li>Produced fully responsive and mobile compatible website</li>
			</ul>
			<!-- <p class="visit"><a target="_blank" href="#">View Process</a></p> -->
			<p class="visit"><a target="_blank" href="http://surge.julie-edwards.com/">Visit Site</a></p>
		</div><!-- col 2 - 2 -->
	</div><!-- section content -->
	<div class="section-content">
		<div class="col2">
			<a target="_blank" href="http://www.daileyguitars.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb-daileyguitars.jpg" class="thumb" alt="dailey guitars website"></a>
		</div><!-- col 2 - 1 -->
		<div class="col2 list">
			<h4><a target="_blank" href="http://www.daileyguitars.com/">Dailey Guitars</a></h4>
			<ul>
				<li>Designed and created a new website including logo and branding</li>
				<li>Developed a fully hand-coded custom WordPress theme using PHP and HTML5</li>
				<li>Hand-coded Javascript functions and a PHP postback form handler</li>
			</ul>
			<p class="visit"><a target="_blank" href="http://www.daileyguitars.com/">Visit Site</a></p>
		</div><!-- col 2 - 2 -->
	
	</div><!-- section content -->
</section>
<section>
	<div class="section-title">
		<h3>Code Samples</h3>
	</div><!-- section title -->
	
	<div class="section-content">
		<h4>Animated CSS Sprites</h4>
		<p><img alt="Social sprites background image" src="<?php echo get_template_directory_uri(); ?>/images/bg-social.png" class="alignright">CSS sprites are a great way to achieve faster page loads and consistent user experience, and animating them can produce a lot of unique effects.  The social link sprites in my header are the result of a neat CSS trick.  The background image looks like this. -&gt;</p>
		<div class="togglator-code togglator" title="View CSS">
		<pre class="code"><code data-language="css">
/* common sprite settings */
.social-sprites li{
    float:left;
    width:40px;
    height:40px;
    background-image:url('images/bg-social.png');
    margin-left:20px;
    -moz-transition:background-position .4s;
    -webkit-transition:background-position .4s;
    -o-transition:background-position .4s;
    transition:background-position .4s;
}
/* individual sprite settings */
#twitter-sprite{
    background-position:40px 0;
}
#twitter-sprite:hover,
#twitter-sprite:focus{
    background-position:40px 40px;
}
#linkedin-sprite{
    background-position:0 0;
}
#linkedin-sprite:hover,
#linkedin-sprite:focus{
    background-position:0 40px;
} 
		</code></pre>
	</div><!-- togglator-code -->
	<p class="visit"><a href="#top">See it in action</a> at the top of this page.</p>
	</div><!-- section content -->
	<div class="section-content">
		<h4 id="togglator">Togglator - jQuery Collapsible Panel Plugin</h4>
		<p>My collapsible panel plugin, togglator, is easy to use and has several customizable features. It is powering the code sample panels on this page.</p>
		<div class="togglator-code togglator" title="View Markup">
		<pre class="code"><code data-language="HTML">
<!-- Give the content object the class "togglator" and a title attribute -->
<div class="togglator" title="Title to Display">Content goes here</div>
		</code></pre>
	</div><!-- togglator-code -->
	<div class="togglator-code togglator" title="View CSS">
		<pre class="code"><code data-language="CSS">
.togglator{
    margin:20px 0;
}
.togglator-title{
    cursor:pointer;
    border:1px solid black;
    padding:4px;
}
.togglator-arrow{
    width:12px;
    height:10px;
    margin:4px;
    float:left;
    background:url('togglator-arrow.png') center center no-repeat;
}
.togglator-content{
    border:1px solid grey;
    padding:4px;
}
/* rotation angle, direction, and duration */
.open .rotate{   
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
}
.animate{
    -moz-transition:-moz-transform .4s;
    -webkit-transition:-webkit-transform .4s;
    -o-transition:-o-transform .4s;
    transition:transform .4s;
}
		</code></pre>
	</div><!-- togglator-code -->
	<div class="togglator-code togglator" title="View JavaScript">
<pre class="code"><code data-language="JavaScript">
<!--
(function($){
    $.fn.togglate = function(options){
        //default settings
        var settings = $.extend({
            hideInitial  : true,          //togglator content is hidden on page load
            animate      : true,          //show slide animation on open and close
            animateSpeed : 400,           //duration of toggle animation
            arrow        : true,          //show arrow (togglator-arrow.png)
            rotateArrow  : true,          //rotate arrow on toggle
            animateArrow : true,          //animate arrow rotation
            defaultTitle : "View Content" //default title if no title attribute is specified
        
        },options);
        
        return this.each(function(){
            var t = $(this),
                title = t.prop("title"),
                arrow = $('<div/>', {class: "togglator-arrow"}),
                titleDiv = $('<div/>', {class: "togglator-title"});
            
            //wrap content in a containing div 
            t.wrap('<div class="togglator" />');
            t.toggleClass('togglator-content togglator');
            //create a title div and add title
            t.before(titleDiv);
            if(!title){
                title = settings.defaultTitle;
            }
            titleDiv.append(title);
            //add arrow and apply arrow settings
            if(settings.arrow){
               titleDiv.append(arrow);
                if(settings.rotateArrow){
                    arrow.addClass('rotate');
                }
                if(settings.animateArrow){
                    arrow.addClass('animate');
                }
            }
            //start togglator open or closed
            if(settings.hideInitial){
                t.css("display","none");
            }
            else{
                titleDiv.addClass('open');
            }
            //bind function to click event
            titleDiv.click(togglateToggle);
        });
        //funtion called when title div is clicked
        function togglateToggle(){
            var titleDiv = $(this)
                t = titleDiv.next();
            titleDiv.toggleClass('open');
            if(settings.animate){
                t.slideToggle(settings.animateSpeed);
            }
            else{
                t.toggle();
            }                   
        }
    }
}(jQuery)); -->
</code></pre>
	</div><!-- togglator-code -->
	<div class="togglator-code togglator" title="View Usage">
<pre class="code"><code data-language="JavaScript">
$(document).ready(function(){
   $('.togglator').togglate({
   //optional settings
   });
})
</code></pre>
	</div><!-- togglator-code -->
	<p>See more examples of <a target="_blank" href="/togglator/">togglator settings</a><br />
	Fork this on <a href="https://github.com/julie-edwards/togglator" target="_blank">GitHub</a><br />
	<a href="<?php echo get_template_directory_uri(); ?>/togglator.zip">Download togglator &#40;.zip&#41;</a></p>
	</div><!-- section content -->
</section>
</div><!-- content -->
