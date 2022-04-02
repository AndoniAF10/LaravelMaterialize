@extends('plantillaMaterialize')
@section('contentMaterialize')


<div class="container">
            <h1 class="center-align indigo-text darken-4" >¿Tienes alguna inquietud? Contacta con nosotros</h1>
            <br><br><br><br>
            
            </div>
          

        <div class="container">


          

          <div class="row">
            <form class="col l12 s12">
              <div class="row">
                <div class="input-field col l6 s6">
                  <input placeholder="Nombre completo" id="first_name" type="text" class="validate">
                  <label for="first_name">Nombre completo</label>
                </div>
                <div class="input-field col l6 s6">
                  <input placeholder="Apellidos" id="last_name" type="text" class="validate">
                  <label for="last_name">Apellidos</label>
                </div>

                <div class="input-field col l6 s6">
                  <input placeholder="email" id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>

                <div class="input-field col l6 s6">
                  <input placeholder="Asunto" id="first_name" type="text" class="validate">
                  <label for="first_name">Asunto</label>
                </div>
                <div class="input-field col l12 s6 center-align">
                  <input placeholder="Menciona tus comentarios" id="last_name" type="text" class="validate">
                  <label for="last_name">¿En que podemos ayudarme?</label>
                  <br><br><br>
                  <button class="btn waves-effect waves-light indigo darken-4 right-align" type="submit" name="action">Enviar
                    <i class="material-icons right">send</i>
                  </button>
                </div>
                
              
            </form>
          </div>
        </div> 
            
      </div>
@endsection