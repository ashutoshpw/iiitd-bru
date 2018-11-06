<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Demo</title>
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
  <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.js"></script>
  <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
</head>
<body> 

<form action='' method='post'>
    <p><label>Country:</label><input type='text' name='country' value='' class='auto'/></p>
</form>
<script type="text/javascript">
$(document).ready(function(){
    var myjson;
    $( ".auto").focus(function() {
         $.getJSON("test.php",callbackFunction);
    });
    function callbackFunction(data)
    {
         myjson = data;
         $(".auto" ).autocomplete({source: myjson});
    }
    
    jQuery.curCSS = function(element, prop, val) {
            return jQuery(element).css(prop, val);
    };
});
</script>
</body>
</html>