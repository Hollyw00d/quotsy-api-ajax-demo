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

    <form action="<?php echo base_url() . 'quotes/create'; ?>" method="post" id="add-quote">
        <p>
            <label>Author: </label>
            <input type="text" name="author"/>
        </p>

        <p>
            <label>Quote: </label>
            <input type="text" name="quote"/>
        </p>

        <p>
            <input type="submit" value="Add Quote"/>
        </p>
    </form>

    <p><button id="get_all_button">Show all Quotes</button></p>

    <div id="quotes">

    </div>

</body>
</html>