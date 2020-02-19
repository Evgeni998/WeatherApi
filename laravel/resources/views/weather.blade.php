
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">
        <!-- Styles -->
        <style>
          
        </style>
    </head>
    
       <body>
           
        <h2>{{$data->city->name}} Weather Status</h2>
        <div class = "main">
            <div class = "outer-container">
                <div class = "inner-container">
                @for($index = 0; $index < 40; $index+=8)     
                    <div class = "smh">
                    <!-- Get the current date and transforms it into the day of the week(only the first 3 letters) -->
                    <h4 id = "date">{{substr(date("l", strtotime($data->list[$index]->dt_txt)), 0, 3)}}</h4>
                    <!-- Get the icon for the current state of the weather -->
                    <img src="http://openweathermap.org/img/w/{{$data->list[$index]->weather[0]->icon}}.png">
                    <div class = "degrees">
                    <!-- Get the min and max temperature and casts it from kelvin to celsius -->
                    <p id = "d1">{{intval($data->list[$index]->main->temp_max - 273.15)}}° </p>
                    <p id = "d2">{{intval($data->list[$index]->main->temp_min - 273.15)}}°</p>
                    </div>
                    
                    
                    </div>
                @endfor
                </div>
            </div>
        </div>
        <script>
           
            document.getElementsByClassName('smh')[0]
        .addEventListener('click', function (event) {
            alert("Hallo");
           
        });
            
        </script>
    </body>
</html>

