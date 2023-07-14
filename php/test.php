<!DOCTYPE html>
<html>
<head>
    <title>AJAX Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div id="message"></div>

<button id="showButton">Show Something</button>
<button id="hideButton">Hide Something</button>

<script>
$(document).ready(function() {
    // Hide the initial message
    $('#message').hide();

    // Show something when the "Show Something" button is clicked
    $('#showButton').click(function() {
        $('#message').text('Something appeared!').show();
    });

    // Hide something when the "Hide Something" button is clicked
    $('#hideButton').click(function() {
        $('#message').hide();
    });
});
</script>

</body>
</html>
