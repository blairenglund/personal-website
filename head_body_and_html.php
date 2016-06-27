<!DOCTYPE html>
<?php $pageID="head, body, and html" ?>
<html>
<head>
	<title>head, body, and html</title>
	<?php include 'php/themeswitcher.php'; ?>
</head>
<body>
	<div class="flex-container">
		<?php include 'php/sidebar.php' ?>

		<div class="content">
			<h3>head, body, and html</h3>

			<h4>A quick and dirty guide to what html's &lt;html&gt;, &lt;head&gt;, and &lt;body&gt; tags do and why we use them.</h4>

			<h4 style="color: #ff9900">&lt;html&gt; - where it all goes</h4>
			<p>
				The html tags surround the rest of the html code that makes up the web page. This tag represents the "root" of the page, and tells the browser displaying the page that what it contains is indeed html. All tags are used inside the html tag with the exception of &lt;!DOCTYPE&gt; declaration, which much be the first line of a page and tells the browser what version of HTML is used in the document.
			</p>

			<h4 style="color: #ff9900">diving in &lt;head&gt;-first</h4>
			<p>
				The head of an html contains what is called "metadata". Metadata is data about the rest of the data on the page. The metadata on a page usually contains the title &lt;title&gt;, which sets the display name in the browser, and a number of other tags that don't actually appear on the page itself.<br><br>

				Other forms of metadata include &lt;style&gt;, which specifies how things should appear on the page. The &lt;link&gt; tag will define the page's relation to another source (most often a css document that defines the page's styles). The very generic &lt;meta&gt; element describes information about the page that will not be displayed. This includes descriptions for the page and keywords for search engines.
			</p>

			<h4 style="color: #ff9900">shake that &lt;body&gt; </h4>
			<p>
				Not unlike most humans, the &lt;body&gt; sits right below the &lt;head&gt; of an webpage. The body contains all the things we see on a page. Text, links, images, video, and all the rest get put here to be displayed on the page.
			</p>

			<h4 style="color: #ff9900">don't omit them!</h4>
			<p>
				It's true that a page might display correctly without the use of &lt;html&gt;, &lt;head&gt;, and 
			</p>

		</div>
	</div>

</body>
</html>