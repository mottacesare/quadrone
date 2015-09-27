<?php

require_once("utils.php");
//
addHeader(basename(__FILE__));

echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
<script src=\"jquery-elastic-grid-master/js/modernizr.custom.js\"></script>
<script src=\"jquery-elastic-grid-master/js/classie.js\"></script>

<link rel=\"stylesheet\" type=\"text/css\" href=\"jquery-elastic-grid-master/css/elastic_grid.min.css\" />
<script type=\"text/javascript\" src=\"jquery-elastic-grid-master/js/elastic_grid.encode.js\"></script>


<div id=\"demo\"></div>

<script type=\"text/javascript\">
$(function(){
$(\"#demo\").elastic_grid({
'filterEffect': '<a href=\"http://www.jqueryscript.net/tags.php?/popup/\">popup</a>', // moveup, scaleup, fallperspective, fly, flip, helix , popup
'hoverDirection': true,
'hoverDelay': 0,
'hoverInverse': false,
'expandingSpeed': 500,
'expandingHeight': 500,
'items' :
[
{
'title' : 'Gallery 1',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/1.jpg', 'image/small/2.jpg', 'image/small/3.jpg', 'image/small/10.jpg', 'image/small/11.jpg'],
'large' : ['image/large/1.jpg', 'image/large/2.jpg', 'image/large/3.jpg', 'image/large/10.jpg', 'image/large/11.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
],
'tags'  : ['Portrait']
},
{
'title' : 'Swiss chard pumpkin',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/4.jpg', 'image/small/5.jpg', 'image/small/6.jpg', 'image/small/7.jpg'],
'large' : ['image/large/4.jpg', 'image/large/5.jpg', 'image/large/6.jpg', 'image/large/7.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
],
'tags'  : ['Landscape']
},
{
'title' : 'Spinach winter purslane',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/15.jpg','image/small/8.jpg', 'image/small/9.jpg', 'image/small/10.jpg'],
'large' : ['image/large/15.jpg','image/large/8.jpg', 'image/large/9.jpg', 'image/large/10.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
],
'tags'  : ['Portrait', 'Landscape']
},
{
'title' : 'Aubergine napa cabbage',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/12.jpg', 'image/small/13.jpg', 'image/small/14.jpg', 'image/small/15.jpg', 'image/small/16.jpg'],
'large' : ['image/large/12.jpg', 'image/large/13.jpg', 'image/large/14.jpg', 'image/large/15.jpg', 'image/large/16.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
],
'tags'  : ['Portrait']
},
{
'title' : 'Swiss chard pumpkin',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/17.jpg', 'image/small/18.jpg', 'image/small/19.jpg', 'image/small/20.jpg'],
'large' : ['image/large/17.jpg', 'image/large/18.jpg', 'image/large/19.jpg', 'image/large/20.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
],
'tags'  : ['Landscape']
},
{
'title' : 'Spinach winter purslane',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/13.jpg','image/small/15.jpg', 'image/small/11.jpg', 'image/small/10.jpg'],
'large' : ['image/large/13.jpg','image/large/15.jpg', 'image/large/11.jpg', 'image/large/10.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
],
'tags'  : ['Vintage']
},
{
'title' : 'Spinach winter purslane',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/7.jpg','image/small/8.jpg', 'image/small/9.jpg', 'image/small/10.jpg'],
'large' : ['image/large/7.jpg','image/large/8.jpg', 'image/large/9.jpg', 'image/large/10.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
],
'tags'  : ['Portrait']
},
{
'title' : 'Azuki bean',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/16.jpg', 'image/small/13.jpg', 'image/small/14.jpg', 'image/small/15.jpg', 'image/small/16.jpg'],
'large' : ['image/large/16.jpg', 'image/large/13.jpg', 'image/large/14.jpg', 'image/large/15.jpg', 'image/large/16.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
],
'tags'  : ['Vintage']
},
{
'title' : 'Swiss chard pumpkin',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/18.jpg', 'image/small/18.jpg', 'image/small/19.jpg', 'image/small/20.jpg'],
'large' : ['image/large/18.jpg', 'image/large/18.jpg', 'image/large/19.jpg', 'image/large/20.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
],
'tags'  : ['Landscape']
},
{
'title' : 'Winter purslane',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/11.jpg','image/small/15.jpg', 'image/small/11.jpg', 'image/small/10.jpg'],
'large' : ['image/large/11.jpg','image/large/15.jpg', 'image/large/11.jpg', 'image/large/10.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
],
'tags'  : ['Portrait']
},
{
'title' : 'Spinach winter purslane',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/3.jpg','image/small/15.jpg', 'image/small/11.jpg', 'image/small/10.jpg'],
'large' : ['image/large/3.jpg','image/large/15.jpg', 'image/large/11.jpg', 'image/large/10.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
],
'tags'  : ['Vintage']
},
{
'title' : 'Spinach winter purslane',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/5.jpg','image/small/8.jpg', 'image/small/9.jpg', 'image/small/10.jpg'],
'large' : ['image/large/5.jpg','image/large/8.jpg', 'image/large/9.jpg', 'image/large/10.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://#' },
{ 'title':'Download', 'url':'http://#'}
],
'tags'  : ['Portrait', 'Landscape']
},
{
'title' : 'Azuki bean',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/6.jpg', 'image/small/13.jpg', 'image/small/14.jpg', 'image/small/15.jpg', 'image/small/16.jpg'],
'large' : ['image/large/6.jpg', 'image/large/13.jpg', 'image/large/14.jpg', 'image/large/15.jpg', 'image/large/16.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://#' },
{ 'title':'Download', 'url':'http://#'}
],
'tags'  : ['Vintage']
},
{
'title' : 'Swiss chard pumpkin',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/8.jpg', 'image/small/18.jpg', 'image/small/19.jpg', 'image/small/20.jpg'],
'large' : ['image/large/8.jpg', 'image/large/18.jpg', 'image/large/19.jpg', 'image/large/20.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://#' },
{ 'title':'Download', 'url':'http://#'}
],
'tags'  : ['Landscape']
},
{
'title' : 'Spinach winter purslane',
'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
'thumbnail' : ['image/small/9.jpg','image/small/15.jpg', 'image/small/11.jpg', 'image/small/10.jpg'],
'large' : ['image/large/9.jpg','image/large/15.jpg', 'image/large/11.jpg', 'image/large/10.jpg'],
'button_list'   :
[
{ 'title':'Demo', 'url' : 'http://#' },
{ 'title':'Download', 'url':'http://#'}
],
'tags'  : ['Vintage', 'Landscape']
}

]
});
});
</script>
";



/*echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"gallery/css/default.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"gallery/css/component.css\" />
<script src=\"gallery/js/modernizr.custom.js\"></script>

<div style=\"\">
	<div style=\"\">
		<header class=\"clearfix\"></header>
		<div class=\"main\">
			<ul id=\"og-grid\" class=\"og-grid\">
				<li>
					<a href=\"http://cargocollective.com/jaimemartinez/\" data-largesrc=\"image/1.jpg\" data-title=\"Azuki bean\" data-description=\"Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.\">
						<img src=\"gallery/image/thumbs/1.jpg\" alt=\"img01\"/>
					</a>
				</li>
			</ul>
			<p>Filler text by <a href=\"http://veggieipsum.com/\">Veggie Ipsum</a></p>
			<a id=\"og-additems\" href=\"#\">add more</a>
		</div>
	</div><!-- /container -->
	<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
	<script src=\"gallery/js/grid.js\"></script>
	<script>
		$(function() {
			Grid.init();
		});
	</script>
</div>
";*/

addFooter();
?>
