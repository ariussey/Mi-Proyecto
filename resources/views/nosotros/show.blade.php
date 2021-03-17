<x-app-layout>
    @foreach ($portadas as $portada)
        @if($portada->portada_categoria->name=='Nosotros')
        {{-- <section class="bg-cover" @if ($portada->image) style="background-image: url({{$portada->image->url}})" @else style="background-image: url({{asset('img/home/pexels-sam-lion-6001670.jpg') @endif"> --}}
            <section class="bg-cover" style="background-image: @if ($portada->image) url({{Storage::url($portada->image->url)}} @else url({{asset('img/home/pexels-sam-lion-6001670.jpg')}} @endif">    
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                    <div class="w-full md:w-3/4 lg:w-1/2">
                        <div class="py-2 px-4 rounded-xl shadow" style="background-color:{{$portada->color}}">
                            <h1 class="text-white font-bold text-4xl">{{$portada->title}}</h1>
                            <div class="text-white text-lg mt-2 mb-4">{!! $portada->description !!}</div>
                        </div>
                        <div class="pt-2 relative mx-auto text-gray-600">
                            <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                            type="search" name="search" placeholder="Search">
                            
                            <button type="submit" href="#" class="btn btn-green absolute right-0 top-0 mt-2">
                                Buscar
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
    <style>
        .degrade{
            background-image: linear-gradient(45deg,#10b981,#0d849e ,#4cc8ce);
        }
    </style>
    <section class="py-4 degrade">
        <small class="m-4 text-sm text-white font-medium">Inicio / Nosotros</small>
    </section>
    <section class="bg-white">
        <div class="container rounded-xl my-4 py-4 text-justify">
            <div class="grid grid-cols-5">
            <div class="col-span-5 lg:col-span-1">
                <aside class="sidebar">
                    <ul class="sidebar-links">
                        <li>
                            <section class="sidebar-group depth-0">
                                <p class="font-bold text-2xl pl-4 pb-2"><span>Nosotros</span></p>
                                <ul class="sidebar-links sidebar-group-items">
                                    <li><a class="px-8 font-semibold text-green-500 border-l-4 border-green-300 bg-green-50 py-1 block" href="asd">Reseña Histórica</a></li>
                                    <li><a class="px-8 font-medium py-1 border-l-4 border-white hover:text-green-500 block" href="">Objetivos</a></li>
                                    <li><a class="px-8 font-medium py-1 border-l-4 border-white hover:text-green-500 block" href="">Organigrama</a></li>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-span-5 px-4 md:pl-2 lg:pl-24 lg:col-span-4">
                <h1 class="m-4 text-4xl text-center text-green-500">{{$nosotro->name}}</h1>
                <hr><br>
                <p class="mb-4">El Instituto de Educación Superior Tecnológico Privado ¨Escuela Superior Particular de Administración Rural – Luis Felipe Massaro Gatnau¨, fue creado el 12 de noviembre de 1997, y es una entidad educativa creada y promovida por la Asociación de Promoción Agraria ASPA, una ONG especializada en agricultura que viene trabajando desde 1986 en todo el país. Entre sus directores destacan el Sr. Luis Ramírez Bernaola y en la actualidad el Director Macedonio Bartolome Caya.
                    <span style="float: left;" class="text-xs font-bold text-gray-500"><img class="pr-2 pb-2 mt-6" width="450px" src="{{asset('img/home/esar-reseña.png')}}" alt=""><i>La oficina para atención actualmente esta ubicada en Mariscal Castilla N° 483.</i></span>
                </p>
                {{-- <p class="mb-4">La oficina para atención actualmente esta ubicada en Mariscal Castilla N° 483 – Tienda Inveragro Chincha.</p> --}}
                <p class="mb-4">ASPA, con el apoyo económico de la Fundación Konrad Adenauer, realizando un gran esfuerzo, logró implementar un laboratorio de análisis de agua y suelos, permitiéndonos brindar de esta forma servicios de análisis con la más alta confiabilidad, eficiencia y calidad en resultados.</p>
                <p class="mb-4">El Valle de Chincha con 27,000 hectáreas de área cultivable resulta ser uno de los vales más prósperos e importantes del país, siendo el laboratorio  de análisis un apoyo fundamental para el avance tecnológico de la agricultura de esta región.</p>
                <p class="mb-4">La fertilización como labor cultural resulta ser indispensable para el éxito de la producción de cualquier cultivo, sobre todo en los más intensivos como los de exportación: espárragos y frutales.</p>
                <p class="mb-4">El punto de partida para el éxito de una cosecha radica en un análisis de suelos y foliar su adecuada interpretación, todo ello a tomado en cuenta ESAR, para que con un equipo humano especializado cuantifique las deficiencias y excesos de nutrientes del suelo y entregue información confiable al agricultor para la toma de decisiones precisas.</p>
                <p class="mb-4">Se reactivara próximamente el Laboratorio de Análisis de suelos, aguas y plantas de la ESAR realiza análisis para los agricultores de los valles de Chincha, Pisco Ica y Nazca. El laboratorio constituye uno de los soportes fundamentales de la ESAR en cuanto a servicios, investigación y enseñanza. El recordado Ing. Isaias Castilla Vidalon, dirigía el laboratorio que cuenta con una amplia experiencia profesional en análisis de suelos y aguas en diversos laboratorios de todo el país. En ese sentido la ESAR – ASPA pone a disposición de los agricultores del departamento y otras regiones del país este moderno laboratorio a fin de que realicen sus análisis correspondientes, que contribuyan a mejorar con la productividad y calidad de sus cosechas. La curricula del Instituto es moderna, caracterizada porque se adecua al modelo de inversión de la agricultura. El plan de estudios del Instituto es de tres años de duración, cumple un sistema de certificación progresiva a través de la entrega de diplomas de competencia, que le permite al estudiante trabajar a partir del I Semestre y finalmente, en el último año le otorga la posibilidad de tres opciones de especialización: agricultura, zootecnia y agroindustria. Los egresados obtienen título a nombre de la nación como Técnico en Administración de Negocios Agropecuarios.</p>
        
            </div>
            </div>
        </div>
    </section>
    {{-- <div class="container">
        <h1 class="m-4 text-4xl text-center text-green-500">Objetivos</h1>
        <hr><br>
    </div> --}}
</x-app-layout>