<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quotes</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script type="text/javascript">
        $(function() {
            // Get an HTML string to dump into the
            // #quotes DIV later
            $.get('/quotes/index_html', function(result) {

                $('#quotes').html(result);

            });

            // Submit form, add new quote and author into DB,
            // & add show new DB row without reloading page
            $('#add-quote').on('submit', function() {


                $.post('/quotes/create', $(this).serialize(), function(result) {

                });

            });

            // Prevents double-form submission
            // by removing all event handlers from
            // form#add-quote after the form is submitted
            $('#add-quote').off();

        });

    </script>

</head>
<body>

    <h1>Quotsy</h1>

    <p>Test Image to Ensure Page Doesn't Reload:<br />
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Soccerball1.png" alt="soccer ball test image"/>
    </p>

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


    <div id="quotes">

    </div>

</body>
</html>