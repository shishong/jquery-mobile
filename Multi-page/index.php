<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Multi-page</title>

	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="css/jqm-demos.css" />

	<script src="js/jquery.js"></script>
	<script src="js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>

</head>
<body>

	<div data-role="page" id="one" data-url="one" tabindex="0" class="ui-page ui-page-theme-a ui-page-active" style="min-height: 925px;">

	<div data-role="header" role="banner" class="ui-header ui-bar-inherit">
		<h1 class="ui-title" role="heading" aria-level="1">Multi-page</h1>
	</div><!-- /header -->


	<div role="main" class="ui-content">
		<h2>One</h2>

		<p>I have an <code>id</code> of "one" on my page container. I'm first in the source order so I'm shown when the page loads.</p>

		<p>This is a multi-page boilerplate template that you can copy to build your first jQuery Mobile page. This template contains multiple "page" containers inside, unlike a single page template that has just one page within it.</p>
		<p>Just view the source and copy the code to get started. All the CSS and JS is linked to the jQuery CDN versions so this is super easy to set up. Remember to include a meta viewport tag in the head to set the zoom level.</p>
		<p>You link to internal pages by referring to the <code>id</code> of the page you want to show. For example, to <a href="#two" class="ui-link">link</a> to the page with an <code>id</code> of "two", my link would have a <code>href="#two"</code> in the code.</p>

		<h3>Show internal pages:</h3>


		<p><a href="#two" class="ui-btn ui-shadow ui-corner-all" data-transition="slide">Show page "two"</a></p>
		<p><a href="#popup" class="ui-btn ui-shadow ui-corner-all" data-rel="dialog" data-transition="pop">Show page "popup" (as a dialog)</a></p>


	</div><!-- /content -->


	<div data-role="footer" data-theme="a" role="contentinfo" class="ui-footer ui-bar-a">
		<h4 class="ui-title" role="heading" aria-level="1">Page Footer</h4>
	</div><!-- /footer -->
</div>
	


	<div data-role="page" id="two" data-theme="a" data-url="two">

		<div data-role="header">
			<h1>Two</h1>
		</div><!-- /header -->

		<div role="main" class="ui-content">
			<h2>Two</h2>
			<p>I have an id of "two" on my page container. I'm the second page container in this multi-page template.</p>
			<p>Notice that the theme is different for this page because we've added a few <code>data-theme</code> swatch assigments here to show off how flexible it is. You can add any content or widget to these pages, but we're keeping these simple.</p>
			<p><a href="#one" data-direction="reverse" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Back to page "one"</a></p>

		</div><!-- /content -->

		<div data-role="footer">
			<h4>Page Footer</h4>
		</div><!-- /footer -->
	</div>

	<div data-role="page" id="popup" data-url="popup">

		<div data-role="header" data-theme="b">
			<h1>Dialog</h1>
		</div><!-- /header -->

		<div role="main" class="ui-content">
			<h2>Popup</h2>
			<p>I have an id of "popup" on my page container and only look like a dialog because the link to me had a <code>data-rel="dialog"</code> attribute which gives me this inset look and a <code>data-transition="pop"</code> attribute to change the transition to pop. Without this, I'd be styled as a normal page.</p>
			<p><a href="#one" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-icon-back ui-btn-icon-left">Back to page "one"</a></p>
		</div><!-- /content -->

		<div data-role="footer">
			<h4>Page Footer</h4>
		</div><!-- /footer -->
	</div>

	<div class="ui-loader ui-corner-all ui-body-a ui-loader-default"><span class="ui-icon-loading"></span><h1>loading</h1></div>

</body>
</html>