<?php 

//If you do not have or do not wish to set a Giphy API Key, leave this document as is.

//If you have a Giphy API Key, comment out the "Public Beta" line and uncomment the "Personal" line after editing $apikey value. 

$apikey = 'dc6zaTOxFJmzC'; // Public Beta API KEY

//$apikey = 'NOT SET'; //Personal API KEY

$randomapi = "http://api.giphy.com/v1/gifs/random?api_key=$apikey";
$searchapi = "http://api.giphy.com/v1/gifs/search?q=$query&api_key=$apikey";

?>
<script>
function getRedirect($redirect)
{
    return "$query";
}
</script>