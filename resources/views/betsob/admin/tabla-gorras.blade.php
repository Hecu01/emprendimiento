@extends('layouts.plantilla-betsob')
@section('section-principal-betsob')

	<x-header-betsob-admin/>
	<div class="contenedor d-flex admin-1 justify-content-center" style="height:600px">

	
        <div class="div ">
            <table class="table table-striped table-dark  mt-3 ml-3 " >
                <thead>

                    <th>ID</th>
                    <th>Talle</th>
                    <th>Precio</th>
                    <th>Img</th>
                    <th>Reversible</th>
                    <th>Autor</th>
                    <th>Cantidad</th>
                    <th>Funciones</th>
                    <th style="text-align:center">QR</th>
                    
                </thead>
                <tbody style="font-size: 1.2em">
                    @foreach($gorras as $item)
                        <tr>
                            <th>{{ $item->id}}</th>
                            @if($item->talle2 > 0 )
                                <td>{{ $item->talle1}}-{{ $item->talle2}}</td>
                            @else
                                <td>{{ $item->talle1}}</td>
                            @endif
                            <td>${{ $item->precio}}</td>
                            <td style="width: 75px;"><img src="{{ $item->gorra}}" alt="Gorra para soldado {{$item->id}}" style="width: 100%"></td>
                            @if($item->reversible == true)
                                <td>Reversible</td>
                                @else 
                                <td>No reversible</td>
                            @endif
                            <td>{{$item->autor}}</td>
                            <td>
                                {{$item->cantidad}} (disponibles)<br/>

                                <form action="{{ route('gorra.agregar.una.mas', $item->id) }}" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </form>
                                
                                <form action="" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                </form>
            
                                                        
                            </td>
                            <td>
                                <a href="#" class="btn btn-secondary"title="Visible">
                                    <i class="fa-sharp fa-solid fa-eye"></i>
                                </a>									
                                <a href="{{ route('gorra.editar', $item->id) }}" class="btn btn-success"  title="Editar">
                                    
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('gorra.eliminar', $item->id) }}" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <button type="submit" class="btn btn-danger"title="Eliminar">
                                        
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            <td><a href="#" class="btn btn-primary" id=""> <i class="fa-solid fa-print"></i></a></td>

                        </tr>
                    @endforeach()

                </tbody>
            </table>
            @if (session('mensaje'))

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Atención!</strong> {{ session('mensaje') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="d-flex justify-content-center" >
                {{ $gorras->links() }}
            </div>

        </div>

	</div>

@endsection
