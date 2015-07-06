<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quotes</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#get_all_button').on('click', function(){
                $.get('/quotes/index_html', function(result) {

                    $('#quotes').html(result);

                });

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