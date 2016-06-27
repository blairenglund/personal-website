<?php $pageID="links and file structure" ?>
<?php $pageTitle = "links and file structure" ?>
<?php include "top.php" ?>

<h3>links and file structure</h3>

<h4>Organized file structures make for easy linking</h4>

<p>
Linking between files can become tricky when dealing with many pages in many folders. Links come in two varieties: relative and absolute. Relative links work only in the current site. When the viewer clicks that link, it will take them to another page in the same site. They do not require a full URL, just the file path and file name. If the file eric.php is in the folder "friends" and that folder is in another folder called "people" in the root directory, it's path will be "/people/friends/eric.php"
<br><br>

Absolute links contain the full address, including the domain, and link out from the current domain. Absolute links are how we move between different sites. These urls will generally include a file path of their own.
</p>

	<ul>
		<h4>Example links</h4>
		<li><strong>articles.php</strong> - looks in the current diresctory for a sibbling asset in the same directory. This is dependent on where you are linking from. This is a relative link.</li>

		<li><strong>/articles.php</strong> - a leading slash defaults to the root directory. It doesn't matter what page it links from, the slash tells the browser to go to the root directory instead of the local one. This is also a relative link.</li>

		<li><strong>../articles</strong> - the double dots before the slash tell the browser that the file we are linking to is in the previous directory. These can be stacked i.e: ../../2016/story.php. This is, once again, a relative link because it is finding the page in the parent directory.</li>

		<li><strong>http://site.com/articles</strong> - this is an absolute link. Instead of telling to browser to just look at the local directory or in other directories on the site, it will find the page on the web. This is necessary for linking to another domain.</li>
	</ul>

<?php include "bottom.php" ?>