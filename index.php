<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JSON</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready (
            function () {
                $("select[name='country']").bind("change", function () {
                    $("select[name='city']").empty(); //очищаем наш селект
                    $.get("countryCheck.php", {country1: $("select[name='country']").val()}, function (data) {
                        data = JSON.parse(data);//Получаем  из php

                        for(var id in data) {
                            $("select[name='city']").append($("<option vakue='" + id + "'>" + data[id] + "</option>"));
                        }
                    })
                });
            }
        );
    </script>
</head>
<body>
    <div class="wrapper">
        <label for="country">Укажите страну</label>
        <select class="country" name="country">
            <option value="0" selected></option>
            <option value="1">Франция &#9875;</option>
            <option value="2">Италия &#9749;</option>
            <option value="3">Германия &#9730;</option>
        </select>
        <label for="city">Города</label>
        <select class="city" name="city">
            <option value="0"></option>
        </select>
    </div>

</body>
</html>
