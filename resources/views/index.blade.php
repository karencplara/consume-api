<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Star Wars</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}"></script>

     

    </head>
    <body>
        <div class="container">
            <h1 class="h3-title-films">Films Star Wars</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Opening Crawl</th>
                        <th scope="col">Episode</th>
                        <th scope="col">Director</th>
                        <th scope="col">Producer</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data['results'] as $dt)
                    <tr>
                    <td> {{ $dt['title'] }} </td>
                    <td> {{ $dt['opening_crawl'] }} </td>
                    <td> {{ $dt['episode_id'] }} </td>
                    <td> {{ $dt['director'] }} </td>
                    <td> {{ $dt['producer'] }} </td>

                    </tr>
                @endforeach  
                    
                </tbody>
            </table>
        
     
        </div>
    </body>
</html>
