<?php
include 'include/header.php';
?>
<main class="page-width">
<h2>Scripts</h2>
<section>
	<div class="section-title">
		<h3>Togglator</h3>
	</div>
	<div class="section-content">
		<p>My JavaScript and jQuery collapsible panel plugin, togglator, is easy to use and has several customizable features. It is powering the code sample panels on this page.</p>
		<div class="togglator-code togglator" title="View Markup">
			<pre class="code">
				<code data-language="HTML">
<!-- Give the content object the class "togglator" and a title attribute -->
<div class="togglator" title="Title to Display">Content goes here</div>
				</code>
			</pre>
		</div>
		<div class="togglator-code togglator" title="View CSS">
			<pre class="code">
				<code data-language="CSS">
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
    transform: rotate(180deg);
}
.animate{
    -webkit-transition:-webkit-transform .4s;
    transition:transform .4s;
	}			</code>
			</pre>
		</div>
		<div class="togglator-code togglator" title="View JavaScript">
			<pre class="code">
				<code data-language="JavaScript">
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
				</code>
			</pre>
		</div><!-- togglator-code -->
		<div class="togglator-code togglator" title="View Usage">
			<pre class="code">
				<code data-language="JavaScript">
$(document).ready(function(){
   $('.togglator').togglate({
   //optional settings
   });
})
				</code>
			</pre>
		</div>
		<p>See more examples of <a target="_blank" href="/togglator/">togglator settings</a><br />
		Fork this on <a href="https://github.com/julie-edwards/togglator" target="_blank">GitHub</a><br />
	</div>
</section>
<section>
    <div class="section-title">
        <h3>Character Subset</h3>
    </div>
    
    <div class="section-content">
        <p>Subsetting webfonts can be a great way to optimize performance and decrease load times. This script finds unique characters in text and outputs them as a string and a URI encoded string for a font request link. Try subsetting some text below.</p>
        <textarea id="subsetInput"></textarea>
        <div id="subsetButton" class="button">Subset</div>
        <p>Character Set:</p><input type="text" id="subsetOutput">
        <p>URI encoded Set:</p><input type="text" id="subsetOutputUri">
        <p id="spCharUnknownOutput"></p>
        <div class="togglator-code togglator" title="View JavaScript">
            <pre class="code">
                <code data-language="JavaScript">
<!--
function makeSubset() {

    var subsetOutput = document.getElementById("subsetOutput");
    var subsetOutputUri = document.getElementById("subsetOutputUri");
    var myText = document.getElementById("subsetInput").value;
    var myCharacters = {};
    var mySubset = "";
    var mySubsetUri;

    //force all characters into AA to delete duplicates, then to string
    for (i=0; i<myText.length; i++){
        myCharacters[myText[i]] = true;
    }
    for (var key in myCharacters){
        mySubset += key;
    }

    //encode characters
    mySubsetUri = encodeURIComponent(mySubset); 

    //output subset strings
    subsetOutput.value = mySubset;
    subsetOutputUri.value = mySubsetUri;
}
-->         
                </code>
            </pre>
        </div>
    </div>
</section>
<section>
	<div class="section-title">
		<h3>Animated CSS Sprites</h3>
	</div>
	
	<div class="section-content">
		<p><img alt="Social sprites background image" src="images/bg-social.png" class="alignright">CSS sprites are a great way to achieve faster page loads and consistent user experience. I animated the social sprites in my header with a fun CSS trick. The background image looks like <span class="nowrap">this. &mdash;&gt;</span></p>
		<div class="togglator-code togglator" title="View CSS">
			<pre class="code">
				<code data-language="css">
/* common sprite settings */
.social-sprites li{
	float:left;
	width:40px;
	height:40px;
	list-style-type:none;
	margin-left:10px;
	background-image:url('../images/bg-social.png');
	background-position-y: 0px;
    -webkit-transition:background-position .4s;
    transition:background-position .4s;
}
.social-sprites a{
    padding:20px;
}
.social-sprites li:hover,
.social-sprites li:focus{
	background-position-y: 40px;
}
/* individual sprite settings */
.social-sprites li:nth-of-type(1){
	background-position-x:0px;
}
.social-sprites li:nth-of-type(2){
	background-position-x: 40px;
}				
				</code>
			</pre>
		</div>
		<p class="visit"><a href="#top">See it in action</a> at the top of this page.</p>
	</div>
</section>
</main>
<script>document.getElementById("subsetButton").addEventListener("click",makeSubset);</script>
<?php
include 'include/footer.php';
?>