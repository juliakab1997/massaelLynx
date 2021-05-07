{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - just for test without really front design</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </head>
    <body> --}}

@extends('templates.app')
@section('title')
    Plus d'informations
@endsection
@section('content')
<section class="content">
    <div class="contanier-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                {{-- <div class="card">
                    <img src="{{ asset('pictures/insung-yoon-Dg6LIs204ZI-unsplash.jpg') }}" class="card-img-top" height="350px" alt="...">
                        <div class="card-body">
                            <center>
                                <h3>Soumettre</h3>
                            </center> --}}
                            
                            <form class="row g-3" method="POST" action="{{ route('form_reservation') }}">
                                @csrf
                                <div class="col-auto">
                                  <label for="staticPhone">numero de telephone</label>
                                  <input type="number" name="phone" value="{{ old('phone') }}" class="form-control-plaintext @error('phone') is-invalid @enderror" id="staticPhone">
                                </div>
                                <div class="col-auto">
                                  <label for="inputPassword2">Motif</label>
                                  <input type="text" name="description" class="form-control" placeholder="message">
                                </div>
                                <div class="col-auto">
                                    <br>
                                    <button type="submit" class="btn btn-success mb-3">Submit</button>
                                    <a href="{{ route('register') }}" class="btn btn-primary mb-3">Envoyer</a>
                                </div>
                              </form>
                              {{-- Entrez vos informations personnelles --}}
                        </div>
                      </div>
                    
                </div>
            </div>
        </div>

    </section>
    @endsection
    @section('content')
        
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
</html> --}}