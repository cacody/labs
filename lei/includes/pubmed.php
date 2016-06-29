<?php

/* PubMed PHP feed grab for UMSD Labs

/** This simple function grabs an rss feed from PubMed, parses it, and
 *  creates a lab-styled listing of the 100 most recent publications.
 *
 *  It has been specifically designed for use with U-M Dentistry's 
 *  breakout lab designs based on a Bootstrap 3, single page, tabbed content structure.
 *
 *  How to use this function:
 *
 *	1) Copy this pubmed.php file into an "includes/" directory 
 *	   in root of the site in which you intend to use it. 
 *	2) If that site uses an index.html, change it to index.php. 
 *	   This should not have any noticable effect at first. 
 *	3) Somewhere in the <head> of the index.php, add:  
 *         <?php include('includes/pubmed.php'); ?>
 *	4) Then, obtain the RSS feed for the PubMed search (see below).
 *	5) Lastly, in the content area where publications should appear,
 *         place this code (replacing the caps part with the RSS URL):
 *	   <?php get_pubmed("REPLACE-WITH-RSS-URL"); ?>    <- keep the quotes
 *	6) Save. Reload the page. And test.
 *  		
 *  How to obtain the PubMed RSS feed:  
 *
 *  	1) Go to the PubMed Advanced Search page: 
 * 	   http://www.ncbi.nlm.nih.gov/pubmed/advanced
 *  	2) Enter search parameters by selecting 
 *	   a field from the dropdown (ex: author) 
 *	   and entering a string in the field  (ex: "giannobile"). 
 *      	!! This might require some experimentation because
 *		   variations can create different result totals 
 *  	3) Click "Search." 
 *  	4) Near the top of the results page find the link 
 *	   to "Create RSS." Click it. 
 *  	5) You will have the option of choosing how many results 
 *	   you want in the RSS (these are fixed numbers for now). 
 *      6) After selecting number of results, 
 *	   you should see an XML link. Click it. 
 *	6) Copy the URL of the resulting RSS page and use it to replace 
 *	   the text REPLACE-WITH-RSS-URL in step 5 of the overview above.  
 */

function get_pubmed($url) { // Create a function that takes one argument - the rss url

$xml = simplexml_load_file($url); // Make the rss xml into a PHP object we can use iterate through

foreach($xml->channel->item as $Item) {  // Iterate through the object for <channel><item>'s  
    $title = $Item->title; // Each of the words after the "->" are an actual tag in the XML
    $link = $Item->link;
    $author = $Item->author;
    $publication = $Item->category;
    $pubmedid = $Item->guid;
    $description = $Item->description;

    echo "<div class=\"panel panel-default\">" . // Clunky build of the HTML. We'll improve it. 
     "<div class=\"panel-heading\">" .
     "<h3 class=\"panel-title\">" .
     "<a href=" . $link  .  "\"></a>" . $title  . "</h3></div>" .
     "<div class=\"panel-body\">" .
     $description .
     "<p style=\"text-align:right;\"><a type=\"button\" class=\"btn btn-primary\" href=\"" . $link  . "\">Digital Version</a></p></div></div>";
}
}
?>
