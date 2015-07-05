<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quotes</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#get_all_button').on('click', function(){
                $.get('/quotes/index_json', function(result) {
                    var htmlStr = '';
                    for(var i = 0; i < result['quotes'].length; i++) {

                        htmlStr += '<div class="quote">';
                        htmlStr += '<h1>' + result.quotes[i].author + '</h1>';
                        htmlStr += '<p>' + result.quotes[i].quote + '</p>';
                        htmlStr += '</div>';
                    }

                    $('#quotes').html(htmlStr);

                }, 'json');

            });

        });

    </script>

</head>
<body>

    <h1>Quotsy</h1>
    <button id="get_all_button">Get All Quotes</button>

    <div id="quotes">

    </div>

</body>
</html>