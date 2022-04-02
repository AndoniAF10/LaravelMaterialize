@extends('plantillaMaterialize')
@section('contentMaterialize')

<div class="slider">
            <ul class="slides">
              <li>
                <img src="./images/Compras.jpg"> <!-- random image -->
                <div class="caption center-align">
                  <h3>Compra con nosotros</h3>
                  <h5 class="light black-text text-lighten-3">Asegura que tus envios no se pierdan en el camino</h5>
                </div>
              </li>
              <li>
                <img src="./images/Compra-en-linea-durante-el-Buen-Fin.jpg"> <!-- random image -->
                <div class="caption left-align">
                  <h3 class="black-text">Metodos de pago</h3>
                  <h5 class="light black-text">Paga con credito o debito para tener más seguridad en tus compras</h5>
                </div>
              </li>
              <li>
                <img src="./images/SHOP_ONLINE_shutterstock_526104310.jpg"> <!-- random image -->
                <div class="caption right-align">
                  <h3 class="black-text">Compra desde tu comodidad</h3>
                  <h5 class="light black-text text-lighten-3">No solo puedes comprar desde tu computadora, tambien
                      contamos con aplicacion movil y para IOS
                  </h5>
                </div>
              </li>
              <li>
                <img src="./images/hombre-barbudo-sonriente-camisa-mostrando-pulgar-arriba_171337-5020.webp"> <!-- random image -->
                <div class="caption center-align">
                  <h3 class="black-text">Cambia tu forma de comprar</h3>
                  <h5 class="light black-text text-lighten-3">Compra con confianza desde nuestra tienda para mejores comodidades</h5>
                </div>
              </li>
            </ul>
          </div>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
          <script>
            var options = {
              indicators: true,
             duration:100,
             interval:10000
            }
            document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, options);
  });
  
  // Or with jQuery
  
  $(document).ready(function(){
    $('.slider').slider();
  });
        </script>


        


        <div class="container ">
            <h1 class="center-align indigo-text darken-4" >La tienda en linea #1 en el mundo</h1>
            <br><br><br><br>
            
            </div>
          

            
            
          <div class="container">
           <section>
 
            <h3 class="indigo-text darken-4">Equipos de computo</h3>
            <div class="row">
            <div class="col l3 m6">
            <div class="card medium">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="./images/ZSJZZWLOZNBQ3FAJ3S6X4I5RAY.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Pc de escritorio<i class="material-icons right">more_vert</i></span>
                  <p>$4700.00</p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Pc de escritorio<i class="material-icons right">close</i></span>
                  <p>Pc de escritorio con 6gb de Ram, procesador intel core 13 4ta generacion con 500 Gb de almacenamiento.</p>
                </div>
              </div>
            </div>

            <div class="col l3 m6">
                <div class="card medium">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="./images/LAPTOP-GAMER.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Laptop gamer<i class="material-icons right">more_vert</i></span>
                      <p>$29899.00</p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Laptop gamer<i class="material-icons right">close</i></span>
                      <p>Laptop gamer con 16gb de Ram, procesador intel core 17 10th generacion con 1 tb de almacenamiento mas 256 gb ssd.</p>
                    </div>
                  </div>
                </div>


                <div class="col l3 m6">
                    <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="./images/Ruigor_RLIB39-1NSGM_HalfSideLeft_20180711-1.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator grey-text text-darken-4">Mochila para <br> laptop<i class="material-icons right">more_vert</i></span>
                          <p>$799.00</p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">Mochila para laptop<i class="material-icons right">close</i></span>
                          <p>mochila color gris con compartimiento para laptop</p>
                        </div>
                      </div>
                    </div>


                    <div class="col l3 m6">
                        <div class="card medium">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="./images/Acer-Aspire-5_A515-56-56G-56S-56T_with-FP-Backlit_Silver_modelmain.png">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">Laptop acer<i class="material-icons right">more_vert</i></span>
                              <p>$17990.00</p>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Laptop acer<i class="material-icons right">close</i></span>
                              <p>Laptop acer con 4gb de Ram, procesador intel inside con 1 tb de almacenamiento..</p>
                            </div>
                          </div>
                        </div>
                </div>
                     
           </section>


           <section>
              
            <h3 class="indigo-text darken-4">Articulos de limpieza</h3>
            <div class="row">
            <div class="col l3 m6">
            <div class="card medium">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="./images/Trapeador-microseda-azul-clielo.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Trapeador<i class="material-icons right">more_vert</i></span>
                  <p>$40.00</p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Trapeador<i class="material-icons right">close</i></span>
                  <p>Trapeador de tela sintetica con palo de madera </p>
                </div>
              </div>
            </div>

            <div class="col l3 m6">
                <div class="card medium">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="./images/7503007859648-00-CH1200Wx1200H.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Jabon liquido<i class="material-icons right">more_vert</i></span>
                      <p>$56.90</p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Jabon liquido<i class="material-icons right">close</i></span>
                      <p>jabon liquido para manos que permite realizar una buena limpieza</p>
                    </div>
                  </div>
                </div>


                <div class="col l3 m6">
                    <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="./images/D_NQ_NP_713698-MLM31368344937_072019-O.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator grey-text text-darken-4">fibra para lavar trastes<i class="material-icons right">more_vert</i></span>
                          <p>$29.90</p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">fibra para lavar trastes<i class="material-icons right">close</i></span>
                          <p>fibra exclusiva para lavar trastes color gris tamaño grande</p>
                        </div>
                      </div>
                    </div>


                    <div class="col l3 m6">
                        <div class="card medium">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="./images/LIMPIEZA-RENOVADORA-SHAMPOO.png">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">Shampoo<i class="material-icons right">more_vert</i></span>
                              <p>$75.50</p>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Shampoo<i class="material-icons right">close</i></span>
                              <p>shampoo de 1 litro</p>
                            </div>
                          </div>
                        </div>
                </div>
                     
           </section>


           <section>
              
            <h3 class="indigo-text darken-4">Electronica</h3>
            <div class="row">
            <div class="col l3 m6">
            <div class="card medium">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="./images/Leds-5-mm-difuso-V1.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">50 pack led<i class="material-icons right">more_vert</i></span>
                  <p>$25.00</p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">50 pack led<i class="material-icons right">close</i></span>
                  <p>Paquete de 50 leds amarillos, rojos, azules, verdes y ultrabrillantes.</p>
                </div>
              </div>
            </div>

            <div class="col l3 m6">
                <div class="card medium">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="./images/D_NQ_NP_802716-MLM43971230142_112020-O.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Circuito integrado NE 555<i class="material-icons right">more_vert</i></span>
                      <p>$35.50</p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Circuito integrado NE 555<i class="material-icons right">close</i></span>
                      <p>Circuito de 8 pines adaptado para tus practicas de electronica</p>
                    </div>
                  </div>
                </div>


                <div class="col l3 m6">
                    <div class="card medium">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="./images/p_6_8_6_686-40-Cables-30cm-Macho-Macho-jumper-dupont-254-arduino-protoboard.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator grey-text text-darken-4">Cables dupont <br> macho-macho<i class="material-icons right">more_vert</i></span>
                          <p>$69.90</p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">cables dupont macho-macho<i class="material-icons right">close</i></span>
                          <p>cables dupont macho-macho de 20 cm exclusivo para puentear en protoboards y arduino</p>
                        </div>
                      </div>
                    </div>


                    <div class="col l3 m6">
                        <div class="card medium">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="./images/sensor-de-humedad-en-suelo-yl-69.jpg">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">Sensor de humedad<i class="material-icons right">more_vert</i></span>
                              <p>$46.50</p>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Sensor de humedad<i class="material-icons right">close</i></span>
                              <p>sensor que te permite identificar la humedad dentro de una zona especifica</p>
                            </div>
                          </div>
                        </div>

                        

                  
                        <div class="col l3 m6 center-align">
                          <i class="material-icons large">security</i><p>Mantiene tus compras de forma segura</p>
                        </div>

                        <div class="col l3 m6 center-align">
                          <i class="material-icons large">add_shopping_cart</i><p>Agrega productos con un valor de $399 para envío gratis</p>
                        </div>

                        <div class="col l3 m6 center-align">
                          <i class="material-icons large">remove_shopping_cart</i><p>Puedes cancelar tu compra en caso de que te hayas arrepentido</p>
                        </div>

                        <div class="col l3 m6 center-align">
                          <i class="material-icons large">credit_card</i><p>Puedes realizar tu pago con tu tarjeta de credito</p>
                        </div>

                </div>
                  
                
           </section>
        </div>

@endsection