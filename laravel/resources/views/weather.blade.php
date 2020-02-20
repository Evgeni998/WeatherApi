
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
                <!--Get the city name, the day of the week and the current condition of the weather -->
                <div class = "header add">
                    <h2 id = "city">{{$data->city->name}}</h2>
                    <h4 id = "date">{{substr(date("l", strtotime($data->list[0]->dt_txt)), 0, 3)}}</h4>
                    <h4 id = "cond">{{$data->list[0]->weather[0]->main}}</h4>
                    <select name="" id="CountrySelect">
                        <option id ="one" value="1">Florida</option>
                        <option id = "two" value="2">Madrid</option>
                        <option value="3">Paris</option>
                        <option value="4">Rome</option>
                    </select> 
                </div>
              
                <div class = main>
                    <div class = "inner-main">
                        <!--The temperature for the current day in bigger format-->    
                        <div class = "inner-inner-main add">
                        <img clas = "current-weather" src="http://openweathermap.org/img/w/{{$data->list[0]->weather[0]->icon}}.png">    
                        <p class = "degrees-number">{{intval($data->list[0]->main->temp - 273.15)}}<sup class = "sup"> &#8451; &#8457;</sup></p>
                        </div>
                        
                        <div class = "add">
                            <!--Addition information about the current day -->
                            <p>Feels like: {{intval($data->list[0]->main->feels_like - 273.15)}}°</p>
                            <p>Humidity: {{$data->list[0]->main->humidity}}%</p>
                            <p>Wind: {{$data->list[0]->wind->speed * 1.6}} km/h</p>
                        </div> 

                    </div>    
                </div>
                <div class = "footer">
                @for($index = 0; $index < 40; $index+=8)     
                    <div class = "weather-box add">
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
        <p id = "smh">AAAAAAAAAAAAAAAA</p>
        <script>
            var ss = "";
           document.getElementById("CountrySelect").addEventListener('change',function(){
               if(document.getElementById(this).id()== 'two'){
                  ss+=
               }
           })
        </script>
    </body>
</html>
  
