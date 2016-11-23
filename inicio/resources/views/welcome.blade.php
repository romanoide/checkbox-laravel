<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Procedimientos Quirurgicos</title>

        

        <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap-theme.min.css')}}" rel="stylesheet">
        
        <script src="{{asset('assets/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.js')}}"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>
    <body>
<div class="superior">
<center><h1>Procedimientos Quirúrgicos</h1></center>
    <br>
    <div class="container">
    <div class="blank-ini col-md-12" style="border: 2px solid white;"></div>
    <div class="blank-space col-md-12"> <br></div>
    <div class="blank-space col-md-1"></div> 
        <div class="oftalmo-gral col-md-3" style="border: 2px solid black; color: black; background: white; font-size: 11px; border-radius: 10px;">

            <h3>Oftalmología general</h3>
            <div class="checkbox checkbox-danger">
                <input id="pt" type="checkbox">
                <label for="pt">Ptrígión</label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="cha" type="checkbox">
                <label for="cha"> Chalazión </label>
            </div>

        </div>
        <div class="blank col-md-1"></div>
        <div class="estrabismo col-md-2" style="border: 2px solid black; color: black; background: white; font-size: 11px; border-radius: 10px;">

            <h3>Estrabismo</h3>        
            <div class="checkbox checkbox-danger">
                <input id="pm" type="checkbox">
                <label for="pm"> Plastia Muscular </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="e" type="checkbox">
                <label for="e"> Exploración </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="b" type="checkbox">
                <label for="b"> Botox </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="kb" type="checkbox">
                <label for="kb"> K-Botox </label>
            </div>

        </div>
        <div class="blank col-md-1"></div>
        <div class="glaucoma col-md-2" style="border: 2px solid black; color: black; background: white; font-size: 11px; border-radius: 10px;">

            <h3>Glaucoma</h3>
            <div class="checkbox checkbox-danger">
                <input id="trabe" type="checkbox">
                <label for="trabe"> Trabeculectomia </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="impval" type="checkbox">
                <label for="impval"> Implante Valvular </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="ciclo" type="checkbox">
                <label for="ciclo"> Ciclocrioablación </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="gsec" type="checkbox">
                <label for="gsec"> G - Secundarios </label> 
            </div>

    </div>
        <div class="blank col-md-1"></div>

        <div class="blank-space col-md-12"><br></div>

        <div class="oculoplastia col-md-3" style="border: 2px solid black; color: black; background: white; font-size: 11px; border-radius: 10px;">

            <h3>Oculoplástica, vías lagrimales y órbita</h3> 
            <div class="checkbox checkbox-danger">
                <input id="rp" type="checkbox">
                <label for="rp"> Reconstrucción Palpebral </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="bl" type="checkbox">
                <label for="bl"> Blefaroplastí </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="ob" type="checkbox">
                <label for="ob"> O- Botox </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="pb" type="checkbox">
                <label for="pb"> P- Biopsia </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="cb" type="checkbox">
                <label for="cb"> C- Biopsia </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="evis" type="checkbox">
                <label for="evis"> Evisceración </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="enu" type="checkbox">
                <label for="enu"> Enucleación </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="orb" type="checkbox">
                <label for="orb"> Orbitotomía </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="son" type="checkbox">
                <label for="son"> Sondeo </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="dacn" type="checkbox">
                <label for="dacn"> Dacriointubación </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="daca" type="checkbox">
                <label for="daca"> Dacriocistorinostomia </label>
            </div>

        </div>

        <div class="blank col-md-1"></div>

        <div class="segment col-md-2" style="border: 2px solid black; color: black; background: white; font-size: 11px; border-radius: 10px;">

            <h3>Segmento Anterior</h3>
            <div class="checkbox checkbox-danger">
                <input id="sics" type="checkbox">
                <label for="sics"> SICS </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="faco" type="checkbox">
                <label for="faco"> Facoemulsificación </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="imp" type="checkbox">
                <label for="imp"> Implante Secundario </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="pupilp" type="checkbox">
                <label for="pupilp"> Pupiloplastia </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="reli" type="checkbox">
                <label for="reli"> Retiro de lente Intraocular </label> 
            </div>
            <div class="checkbox checkbox-danger">
                <input id="sasec" type="checkbox">
                <label for="sasec"> SA - Secundarios </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="anin" type="checkbox">
                <label for="anin"> Anillos Intraestromales </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="clink" type="checkbox">
                <label for="clink"> Cross - Linking </label>
            </div>
    </div>        
        <div class="blank col-md-1"></div>
        <div class="retina col-md-2" style="border: 2px solid black; color: black; background: white; font-size: 11px; border-radius: 10px;">

            <h3>Retina</h3>
            <div class="checkbox checkbox-danger">
                <input id="vitre" type="checkbox">
                <label for="vitre"> Vitrectomía </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="cerc" type="checkbox">
                <label for="cerc"> Cerclaje </label> 
            </div>
            <div class="checkbox checkbox-danger">
                <input id="redsi" type="checkbox">
                <label for="redsi"> Retiro de Silicón </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="disin" type="checkbox">
                <label for="disin"> Dispositivos Intravítreos </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="crio" type="checkbox">
                <label for="crio"> Crioablación </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="pneumo" type="checkbox">
                <label for="pneumo"> Pneumoretinopexia </label>
            </div>

    </div>
        <div class="blank col-md-1"></div>

        <div class="adicionales col-md-2" style="border: 2px solid black; color: black; background: white; font-size: 11px; border-radius: 10px;">

            <h3>Adicionales</h3>
            <div class="checkbox checkbox-danger">
                <input id="lenin" type="checkbox">
                <label for="lenin"> Lente Intraocular </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="lenfa" type="checkbox">
                <label for="lenfa"> Lente Fáquico </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="anin1" type="checkbox">
                <label for="anin1"> Anillos Intraestromales </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="impval1" type="checkbox">
                <label for="impval1"> Implante Valvular </label>
            </div>
            <div class="checkbox checkbox-danger">
                <input id="impde" type="checkbox">
                <label for="impde"> Implante Dexametasona </label>                         
            </div>
        </div>
        <center><a href="{{ URL::route('redirectejem') }}" class="btn btn-success"> Demo DB </a></button>
    </div>
       
</div>
    @yield('content')
 
    <!-- Scripts -->
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    </body>
</html>
