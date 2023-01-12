<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>title</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet"></head>
<body>
    <div id="app">
        <v-app>
            <v-main>
                <v-container>
                    <welcome-component>

                    </welcome-component>
                </v-container>
            </v-main>
        </v-app>
    </div>
    <script  src="{{asset('js/app.js')}}"></script>
</body>
</html>
