@extends('layouts.main')

@section('title', 'Página principal')

@section('main')
<main>
    <section class="container-fluid px-0" id="banners">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="img/carrousel-1.jpg" class="d-block w-100" alt="El plantel de River campeón">
    <div id="bienvenida">
    <h1>Bienvenido al sitio de River Plate</h1>
    </div>
    </div>
    </div>
    </div>
    </section>

<section class="container" id="noticias-home">
<h2>Próximos Eventos</h2>
         <div class="row">    
             <article class="col-md-8">
             <h3>Los cambios que encontrarán los hinchas en el Monumental</h3>
                 <div>
                     <p>Este domingo, los hinchas de River se toparán con un Antonio Vespucio Liberti renovado en varios aspectos y con varias obras finalizadas en los últimos meses.</p>
                 </div>
                     <img src="img/monumental.jpg" alt="Estadio monumental"/>
             </article>
             <article class="col-md-4">
                 <div id="proxpartido">
                 <h3>Próximo partido</h3>
                 <img src="img/pelota24x24.png" alt="Pelota de futbol">
                 <p>River Plate Vs. Colón de Santa Fé</p>
                 <img src="img/calendario24x24.png" alt="Icono de calendario">
                 <p>Fecha: 15/12 Horario: 21:30</p>
                 <img src="img/estadio24x24.png" alt="Icono de Estadio">
                 <p>Estadio de Mendoza</p>
                 <img src="img/trofeo24x24.png" alt="Icono de Trofeo">
                 <p>Final Supercopa Argentina</p>
                 </div>

                 <div>
                 <h3 class="mb-4">Tabla de posiciones Liga Argentina</h3>
                 <table id="posiciones">
                     <tr>
                         <td>Equipo</td>
                         <td>Puntos</td>
                         <td>PJ</td>
                         <td>Goles</td>
                     </tr>
                     <tr>
                         <td>River Plate</td>
                         <td>38</td>
                         <td>24</td>
                         <td>28</td>
                     </tr>
                     <tr>
                         <td>Talleres</td>
                         <td>29</td>
                         <td>24</td>
                         <td>15</td>
                     </tr>
                     <tr>
                         <td>Lanus</td>
                         <td>26</td>
                         <td>24</td>
                         <td>18</td>
                     </tr>
                 </table>
                 </div>

             </article>
         </div>
     </section>

     <section class="container sponsors">
        <div class="titulo" style="margin-bottom: 80px;">
            <h2>Nuestros sponsors</h2>
        </div>
        
         <div class="row">
             <div class="col-3">
               <img src="img/adidas-250px.png" alt="logo de adidas">
             </div>
             <div class="col-3">
               <img src="img/turkish-250px.png" alt="logo de turkish airlines">
             </div>
             <div class="col-3">
               <img src="img/assits-250px.png" alt="logo de assists card">
             </div>
             <div class="col-3">
               <img src="img/axion-250px.png" alt="logo de axion energy">
             </div>
         </div>
     </section>

 </main>
@endsection