
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
    <div class = "outer">
        <div class = "outer-container"> 
            <div class = "inner-container">
                <div class = header>
                    <h3>{{$data->city->name}}</h3>
                </div>
                <div class = main>
                    <div class = "inner-main">    
                        <div class = "inner-inner-main">
                        <img clas = "current-weather" src="http://openweathermap.org/img/w/{{$data->list[0]->weather[0]->icon}}.png"> 
                        <p class = "degrees-number">10<sup class = "sup"> &#8451; &#8457;</sup></p>
                        </div>
                        <div>
                            <p>Precipitation</p>
                            <p>Humidity</p>
                            <p>Wind</p>
                        </div> 
                    </div>    
                </div>
                <div class = "footer">
                @for($index = 0; $index < 40; $index+=8)     
                    <div class = "weather-box">
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
    </div>
        <script>
           
            document.getElementsByClassName('smh').each.
        .addEventListener('click', function (event) {
            alert("Hallo");
           
        });
            
        </script>
    </body>
</html>

