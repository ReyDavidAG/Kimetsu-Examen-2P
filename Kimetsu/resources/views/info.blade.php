@extends('plantilla')
@section('content')

<main class="bg-black" style="flex: 1 0 auto; background-color: #F5F4F1;">
      
<container class="bg-black">

        <div class="row">
            <div class = "col-0 bg-black"></div><br><br>
                <div class="col-9 container bg-dark">
                    <br><br>
                    <div class ="row">
                        <div class = "col-5"></div>
                        <div class = "col-2"><h1 class ="text-white">Sinopsis</h1><br></div>
                        <div class = "col-5"></div>
                    </div>

                    <div class ="row">
                        <div class = "col-1"></div>
                        <div class = "col-10"><img src="img/info.webp" width = "100%" ><br><br></div>
                        <div class = "col-1"></div>
                    </div>
                    <div class = "row">
                    <div class = "col-1"></div>
                    <div class ="col-10">
                    <h4>
                    <p class ="text-white">
                    El protagonista de la historia es Kamado Tanjiro, un joven que tiene un gran corazón, pero que también presume sobrada inteligencia. Su historia resulta conmovedora porque se dedica a la venta de carbón para sobrevivir al lado de su familia. Sin embargo, la tragedia toca a su puerta cuando sus seres queridos son asesinatos. El culpable es Oni, un demonio sanguinario. Su hermana Nezuko, quien también sobrevivió al ataque, fue convertida en un peligroso ser que con características sobrenaturales. Así es como Tanjiro busca transformarse en un asesino de demonios, con la intención de vengar a su familia y recuperar a su hermana.
                    </p>
                    </h4>
                    <br>
                    <br>
                    <h1 class ="text-white">Trailer</h1><br>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/VQGCKyvzIM4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class = "col-1"></div>
                    </div><br><br><br>
                    
                    

                </div>    
        </div>
        <br><br><br>

</container>
    </main>

@endsection
