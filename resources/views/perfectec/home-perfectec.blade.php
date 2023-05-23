@extends('layouts.plantilla-perfectec')

@section('section-principal-perfectec')
    <div class="antialiased text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900 header bg-[url('../public/img/perfectec/fondo1.jpg')] bg-no-repeat bg-cover bg-center h-[42rem]  p-4">
        <nav class="flex justify-between text-white drop-shadow-2xl navegacion">
            <h1 class="text-3xl cursor-pointer"><a href="no-underline">PERFECTEC</a></h1>
            <ul class="flex">
                <li><a href="">Inicio</a></li>
                <li class="mx-5"><a href="">Trabajos</a></li>
                <li><a href="">Formulario</a></li>
                <li><a href=""></a></li>
            </ul>   
        </nav>
        <div class="relative max-w-5xl mx-auto pt-20 sm:pt-24 lg:pt-32" >

            <h1 class="text-slate-900 font-extrabold text-4xl sm:text-5xl lg:text-6xl tracking-tight text-center dark:text-white " style="text-shadow: 1px 1px 1px #000">Cualquier problema de albañileria en su casa, póngase en contacto</h1>
            <p class="mt-6 text-lg  text-center max-w-3xl mx-auto text-white font-semibold" style="text-shadow: 1px 1px 1px #000">Trabajos rápidos y prolijos, sin contratistas ni intermediarios, arreglos directos con dueños de casa, consulte para ver presupuesto.</p>
                
            <div class="mt-6 sm:mt-10 flex justify-center space-x-6 text-sm">
                <a class="bg-slate-900 hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2 focus:ring-offset-slate-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400" href="/docs/installation">Saber mas</a>
            </div>
        </div>
    </div>
    
@endsection