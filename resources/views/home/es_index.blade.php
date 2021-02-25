@extends('layouts.es_app')
@section('content')
    <div class="hero-wrap bg_back" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-md-8  d-flex align-items-end">
                    <div class="text w-100">
                        <h1 class="mb-4">Una nueva forma de ver</h1>
                        <h2 class="mb-4">Necesidades insatisfechas del cliente.</h2>
                        <p>
                            <a href="{{route('es_contact')}}" class="btn btn-primary py-3 px-4">Contactenos</a> 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-intro">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex">
                    <div class="intro aside-stretch d-lg-flex w-100">
                        <div class="icon"> <img src="{{ asset('assets/images/mark1.webp') }}" width="50"> </div>
                        <div class="text">
                            <h2>Inteligencia del mercado digital</h2>
                            <p>Descubrimos no solo lo que están haciendo los clientes, sino también por qué.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-1 d-lg-flex w-100">
                        <div class="icon"> <img src="{{ asset('assets/images/mark2.webp') }}" width="55"> </div>
                        <div class="text">
                            <h2>Inteligencia de la competencia</h2>
                            <p>Podemos dejar de reinventarnos con la inteligencia de la competencia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-2 d-lg-flex w-100">
                        <div class="icon"> <img src="{{ asset('assets/images/mark3.webp') }}" width="45"> </div>
                        <div class="text">
                            <h2>Costo compartido de procesamiento de pagos</h2>
                            <p>Podemos optimizar cada paso de la cadena de valor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center ">
                    <span class="subheading">Servicios</span>
                    <h2>Inteligencia de mercado digital y costos compartidos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex align-items-stretch ">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
                            <div class="icon d-flex align-items-center justify-content-center"> <img src="{{ asset('assets/images/market_ai.webp') }}" width="100"> </div>
                        </div>
                        <h2>Inteligencia digital de mercado</h2>
                        <p>Nuestros expertos en inteligencia empresarial colaboran con usted en cada paso del camino para que diseñe e implemente programas basados en datos para generar clientes potenciales, darle valor de por vida y lograr la fidelización de los clientes.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch ">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
                            <div class="icon d-flex align-items-center justify-content-center"> <img src="{{ asset('assets/images/com_ai.png') }}" width="100"> </div>
                        </div>
                        <h2>Inteligencia de la competencia</h2>
                        <p>Los competidores no son simplemente obstáculos para lograr el éxito. También pueden proporcionar lecciones valiosas. Y la búsqueda para determinar exactamente lo que hacen los rivales depende de un supuesto clave: ¡Que ellos mismos lo entiendan!</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch ">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
                            <div class="icon d-flex align-items-center justify-content-center"> <img src="{{ asset('assets/images/cost_share.png') }}" width="100"> </div>
                        </div>
                        <h2>Ahorre dinero compartiendo los gastos</h2>
                        <p>Nuestra estrategia de reducción de costos comienza optimizando sus transacciones para maximizar su ahorro cada vez que acepta una tarjeta de crédito o débito asociada con la empresa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('assets/images/about-1.webp') }});"> </div>
                <div class="col-md-6 wrap-about px-md-5  py-5 bg-light">
                    <div class="heading-section">
                        <span class="subheading">Bienvenido a 360 BIZVUE</span>
                        <h2 class="mb-4"><small>Datos de las transacciones + análisis de IA = nuestra diferenciación</small></h2>
                        <p>La mayoría de los problemas de sus futuros clientes se cristalizan con palabras clave y frases clave que se introducen en los motores de búsqueda. La aplicación más valiosa de la inteligencia de mercado digital es equipar a las empresas para que respondan a las consultas más urgentes y lucrativas antes de que el mercado esté alineado a su alrededor.</p>
                        <p>La mejor inteligencia de mercado es predictiva, utilizando los datos actuales y los métodos basados en inteligencia artificial para identificar los resultados comerciales más probables a lo largo del mes, del trimestre y del año. 360 BizVue ha sido pionero de las técnicas de recopilación y análisis de datos para que esto pueda ser posible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ">
                    <span class="subheading">Nuestros servicios</span>
                    <h2 class="mb-3">Podemos ayudarle con esta situación</h2>
                </div>
            </div>
            <div class="row tabulation mt-4 ">
                <div class="col-md-5">
                    <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                        <li class="nav-item active text-left"> <a class="nav-link py-4" data-toggle="tab" href="#services-1">1. Consulta de búsqueda y análisis de tendencias de los clientes</a> </li>
                        <li class="nav-item text-left"> <a class="nav-link py-4" data-toggle="tab" href="#services-2">2. Análisis de las oportunidades de mejor coincidencia para el cliente</a> </li>
                        <li class="nav-item text-left"> <a class="nav-link py-4" data-toggle="tab" href="#services-3">3. Análisis de las debilidades de su competencia</a> </li>
                        <li class="nav-item text-left"> <a class="nav-link py-4" data-toggle="tab" href="#services-4">4. Plan de acción paso a paso</a> </li>
                        <li class="nav-item text-left"> <a class="nav-link py-4" data-toggle="tab" href="#services-5">5. Panel de control de la inteligencia digital de mercado</a> </li>
                        <li class="nav-item text-left"> <a class="nav-link py-4" data-toggle="tab" href="#services-6">6. Campañas de marketing basadas en los conocimientos</a> </li>
                    </ul>
                </div>
                <div class="col-md-7 ">
                    <div class="tab-content">
                        <div class="tab-pane container p-0 active" id="services-1">
                            <div class="img" style="background-image: url({{ asset('assets/images/home1.jpg') }});"></div>
                            <h3><a href="javascript:;">Consulta de búsqueda y análisis de tendencias de los clientes</a></h3>
                            <h5>A través de los datos de las transacciones en tiempo real recogidos de los procesadores de pagos de todo Estados Unidos, vinculamos la actividad de las palabras clave con los resultados reales, incluyendo las compras por primera vez y las de alto valor. Sintetizamos los datos de tendencias de más de una docena de motores de búsqueda, vidrieras en línea y plataformas sociales.</h5>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-2">
                            <div class="img" style="background-image: url({{ asset('assets/images/home2.png') }});"></div>
                            <h3><a href="javascript:;">Análisis de las oportunidades de mejor coincidencia para el cliente</a></h3>
                            <h5>Sus productos y servicios existentes serán los puntos de partida para las oportunidades que tenga una mejor coincidencia. Evaluamos el potencial de mercado actualizado de su cartera actual y, a continuación, clasificamos las opciones disponibles en orden del crecimiento potencial. Esto le brinda una variedad total de claves de crecimiento a corto y largo plazo de donde podrá elegir.</h5>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-3">
                            <div class="img" style="background-image: url({{ asset('assets/images/home3.png') }});"></div>
                            <h3><a href="javascript:;">Análisis de las debilidades de su competencia</a></h3>
                            <h5>Puntuamos las diez primeras URL que actualmente se posicionan en los motores de búsqueda para conseguir las oportunidades deseadas. Muchas páginas de alto rango no son recursos sólidos ni están centrados en el cliente. Generar una alternativa ingeniosa utilizando las mejores prácticas de marketing digital conduce a un rápido crecimiento de su visibilidad en línea.</h5>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-4">
                            <div class="img" style="background-image: url({{ asset('assets/images/home4.png') }});"></div>
                            <h3><a href="javascript:;">Plan de acción paso a paso</a></h3>
                            <h5>Nuestros clientes reciben una instantánea de la inteligencia de mercado digital de forma regular. Usándolo, construimos un Plan de Acción paso a paso que le permite desarrollar planes de crecimiento basado en la intersección de sus fortalezas y las debilidades de sus competidores mientras aborda las necesidades no satisfechas de los consumidores.</h5>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-5">
                            <div class="img" style="background-image: url({{ asset('assets/images/home5.png') }});"></div>
                            <h3><a href="javascript:;">Panel de control de la inteligencia digital de mercado</a></h3>
                            <h5>A medida que se recopilan y analizan los nuevos datos, nuestros científicos de datos le actualizan semanalmente a través de nuestro panel de información digital de mercado. Puede acceder al tablero y hacer preguntas o solicitar mayor información las 24 horas del día, en cualquier dispositivo, en cualquier lugar del mundo.</h5>
                        </div>
                        <div class="tab-pane container p-0 fade" id="services-6">
                            <div class="img" style="background-image: url({{ asset('assets/images/home6.png') }});"></div>
                            <h3><a href="javascript:;">Campañas de marketing basadas en los conocimientos</a></h3>
                            <h5>Le apoyamos para que construya, lance, expanda, mejore y aprenda de sus esfuerzos. Además de las poderosas campañas de marketing, las lecciones generadas por nuestro proceso pueden fortalecer sus ventas, I + D y operaciones, lo cual le permite brindarle una experiencia de cliente incomparable.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section abbr-section ftco-no-pt ftco-no-pb">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-10 heading-section text-center ">
                    <h5>360 BizVue traduce los datos para convertirlos en conocimiento que sirven de base para sus ventajas del mercado. No importa cuán concurrida o competitiva sea su industria, puede diferenciarse con los datos.</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img bg-light" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ">
                    <div class="block-18 py-4 mb-4">
                        <div class="text align-items-center">
                            <strong class="number" data-number="3000">0</strong>
                            <strong style="color: #007bff; font-size: 40px">+</strong>
                            <span>Nuestro satisfecho  &amp; Clientes felices</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ">
                    <div class="block-18 py-4 mb-4">
                        <div class="text align-items-center">
                            <strong class="number" data-number="30">0</strong>
                            <span>Años de experiencia en negocios</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ">
                    <div class="block-18 py-4 mb-4">
                        <div class="text align-items-center">
                            <strong class="number" data-number="200">0</strong>
                            <span>Nuestros expertos en datos calificados</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ">
                    <div class="block-18 py-4 mb-4">
                        <div class="text align-items-center">
                            <strong class="number" data-number="40">0</strong>
                            <span>Categorías de proceso analizadas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection