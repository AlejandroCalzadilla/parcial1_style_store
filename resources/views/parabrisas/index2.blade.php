<x-app-layout>

   
    {{-- <div class=" w-full  max-w-xl   mx-auto bg-white  rounded-lg  mt-20 p-5 break-inside:avoid">
                 
      <div class="m-0 flex justify-between items-center break-inside:avoid ">
       <h1 class="m-0  text-2xl font-bold"> 
        Categorias</h1>
       <a href="{{route('productos.create')}}" class=" m-0 btn text-white p-1 bg-blue-500 rounded-lg  mr-5 pl-5 pr-5">crear</a>
     </div>  
      <br>
     <table class=" table-fixed  m-0  table-striped table-bordered table-hover w-full ">
      <thead class=" bg-gray-200 rounded-lg">
      <tr >
        <th class="text-center">
          ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">genero</th>
        <th class=" text-center"></th>
      </tr>  
      </thead >
      <tbody class="mt-3">
        @foreach ($productos as $producto)
        <tr>
        
            <td class="text-center bg-green-300">  <a href="{{route('categorias.show',$producto->id)}}"> {{ $producto->id }}  </a></td>
         
          <td class="text-center">{{ $producto->nombre }}</td>
          
          <td class="text-center">{{ $categoria->genero}}</td>
          <td class="flex justify-between">
           <div class=" flex justify-normal">
            
            <a href="{{route('categorias.create')}}" class="btn text-white p-1 bg-blue-500 rounded-lg mr-2 ml-2">Editar</a>
            <form action="{{ route('categorias.destroy', $categoria) }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn bg-red-500 p-1 text-white rounded-lg ml-2 mt-0">Eliminar</button>
            </form>
             </div>
          
          </td>
          
        </tr>
         
        @endforeach     
      </tbody>  
      </tr>
     </table> 
    
   </div> --}}
               
  
    <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Los clientes también compraron</h2>
  
  
  
     
      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
  
  
         @foreach ($parabrisas as $parabrisa)
        <div class="group relative">
  
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{asset($parabrisa->imagen)}}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  {{$parabrisa->titulo}}
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">{{$parabrisa->color}} </p>
            </div>
            <p class="text-sm font-medium text-gray-900">$35</p>
          </div>
        </div>
        @endforeach   
  
      </div>
   
      
  
  
  
    </div>
  </div> 
   
  
  
  
  
  
  
  
  
           
  
          
         
  
  
  
  
        </x-app-layout>
