<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{URL::asset('images/favicon.jpg')}}">
        <link rel="apple-touch-icon" href="{{URL::asset('images/favicon.jpg')}}">

        
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/layout.css')}}">

        {{-- Archivo css de cada pagina --}}
        @yield('cssParticular')
        
        <!-- Custom CSS -->
        <link href="{{URL::asset('css/full-slider.css')}}" rel="stylesheet">
        
        {{-- Font menu --}}
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        
        {{-- Facebook --}}
            <meta property="og:url"           content="http://www.estudiantesdlp.webscenario.com.ar" />
            <meta property="og:type"          content="website" />
            @if(isset($historia->titulo))
                <meta property="og:title"         content="{{$historia->titulo}} - Estudiantes de La Plata" />
            @else
                <meta property="og:title"         content="Estudiantes de La Plata" />
            @endif
            <meta property="og:description"   content="Historias del pincharrata" />
            <meta property="og:image"         content="{{URL::asset('images/index/EscudoEstudiantesImagenCentral.png')}}" />
            
        {{-- Twitter --}}
            <meta name="twitter:card" content="summary">
            @if(isset($historia->titulo))
                <meta name="twitter:title" content="{{$historia->titulo}} - Estudiantes de La Plata">
            @else
                <meta name="twitter:title" content="Estudiantes de La Plata">
            @endif
            <meta name="twitter:description" content="Historias del pincharrata">
            <meta name="twitter:image" content="{{URL::asset('images/index/EscudoEstudiantesImagenCentral.png')}}">

        {{-- Google plus --}}
            @if(isset($historia->titulo))
                <meta itemprop="name" content="{{$historia->titulo}} - Estudiantes de La Plata">
            @else
                <meta itemprop="name" content="Estudiantes de La Plata">
            @endif
            <meta itemprop="description" content="Historias del pincharrata">
            <meta itemprop="image" content="{{URL::asset('images/index/EscudoEstudiantesImagenCentral.png')}}">

        <!-- Archivos JS de bootstrap -->
        <script src="{{URL::asset('js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

        <title>@yield('titulo')</title>
    </head>

    <body itemscope itemtype="http://schema.org/Blog">
        <!-- Contenido principal -->
        @yield('contenido')

    @yield('scriptSlider')    
  </body>
</html>