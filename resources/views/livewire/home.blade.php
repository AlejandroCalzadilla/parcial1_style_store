
<div class="bg-white" x-data="{carrito:false,res:false}" >
    <!--
      Mobile menu
  
      ----------------------------------MENU MOVIL NO TOCAR ---------------------------------------------------
      --------------------------------------------------------------------------------------------------------
      --------------------------------------------------------------------------------------------------------
    -->
    <div x-show="res"   class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
      <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.
  
        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
        -------------------------------------------------MENU MOVIL NO TOCAR----------------------------------
         --------------------------------------------------------------------------------------------                              
        ----------------------------------------------------------------------------------------------

      -->
      <!--<div  class="fixed inset-0 bg-black bg-opacity-25"></div> -->
  
      <div class="fixed inset-0 z-40 flex">
        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.
  
          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div   class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
          <div   class="flex px-4 pb-2 pt-5">
            <button x-on:click="res=false" type="button" class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Close menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
  
          <!-- Links -->
          <div   class="mt-2">
            <div class="border-b border-gray-200">
              <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                <button id="tabs-1-tab-1" class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>
                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                <button id="tabs-1-tab-2" class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
              </div>
            </div>
  
            <!-- 'Women' tab panel, show/hide based on tab state. -->
            <div id="tabs-1-panel-1" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
              <div class="grid grid-cols-2 gap-x-4">
                <div class="group relative text-sm">
                  <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                  </div>
                  <a href="#" class="mt-6 block font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    New Arrivals
                  </a>
                  <p aria-hidden="true" class="mt-1">Shop now</p>
                </div>
                <div class="group relative text-sm">
                  <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                  </div>
                  <a href="#" class="mt-6 block font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    Basic Tees
                  </a>
                  <p aria-hidden="true" class="mt-1">Shop now</p>
                </div>
              </div>
              <div>
                <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                <ul role="list" aria-labelledby="women-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Dresses</a>
                  </li>
                  {{-- <li class="flow-root">
                    <a x-bind:href="{{route('producto')}}" class="-m-2 block p-2 text-gray-500">Pants</a>
                  </li> --}}
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Denim</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                  </li>
                </ul>
              </div>
              <div>
                <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
                <ul role="list" aria-labelledby="women-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                  </li>
                </ul>
              </div>
              <div>
                <p id="women-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                <ul role="list" aria-labelledby="women-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Significant Other</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- 'Men' tab panel, show/hide based on tab state. -->
            <div id="tabs-1-panel-2" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
              <div class="grid grid-cols-2 gap-x-4">
                <div class="group relative text-sm">
                  <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-cover object-center">
                  </div>
                  <a href="#" class="mt-6 block font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    New Arrivals
                  </a>
                  <p aria-hidden="true" class="mt-1">Shop now</p>
                </div>
                <div class="group relative text-sm">
                  <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-cover object-center">
                  </div>
                  <a href="#" class="mt-6 block font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    Artwork Tees
                  </a>
                  <p aria-hidden="true" class="mt-1">Shop now</p>
                </div>
              </div>
              <div>
                <p id="men-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                <ul role="list" aria-labelledby="men-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                  </li>
                  {{-- <li class="flow-root">
                    <a href="{{route('producto')}}" class="-m-2 block p-2 text-gray-500">Pants</a>
                  </li> --}}
                  {{-- <li class="flow-root">
                    <a href="{{route('producto')}}" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                  </li> --}}
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                  </li>
                </ul>
              </div>
              <div>
                <p id="men-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
                <ul role="list" aria-labelledby="men-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                  </li>
                </ul>
              </div>
              <div>
                <p id="men-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                <ul role="list" aria-labelledby="men-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
  
          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            {{-- <div class="flow-root">
              <a href="{{route('producto')}}" class="-m-2 block p-2 font-medium text-gray-900">Contacto</a>
            </div> --}}
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Informacion</a>
            </div>
          </div>
  
          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
            </div>
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create account</a>
            </div>
          </div>
  
          <div class="border-t border-gray-200 px-4 py-6">
            <a href="#" class="-m-2 flex items-center p-2">
              <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="block h-auto w-5 flex-shrink-0">
              <span class="ml-3 block text-base font-medium text-gray-900">CAD</span>
              <span class="sr-only">, change currency</span>
            </a>
          </div>
        </div>
      </div>


    </div>
    

   <!--   
  
     -------------------------------------FINAL MENU MOVIL----------------------------------------------
     ------------------------------------------------------------------------------------------------
      
    -->

    

       




















    <header class="relative bg-white">
      <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="border-b border-gray-200">
          <div class="flex h-16 items-center">
            <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
            <button x-on:click="res=true" type="button" class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden">
              <span class="absolute -inset-0.5"></span>
              <span   class="sr-only">Open1 menu</span>
              <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
  
            <!-- Logo -->
            <div class="ml-4 flex lg:ml-0">
              <a href="/" class="display-flex justify-items-end  text-red-500">Style Store
                
                {{-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""> --}}
              </a>
            </div>
  


            {{-- --------------------------------------------------MENU DE OPCIONES --------------------------------------}}
            <!-- Flyout menus -->
            <div class="hidden lg:ml-8 lg:block lg:self-stretch" > 
              
              {{-- menu de opciones mas chico --}}
                <div  class="flex h-full space-x-8" >


                {{-- MOCULO DE CATALOGO  --}}
                {{-- x-on:mouseenter="open=true" x-on:mouseleave.away="open=false"  --}}
                <div  class="flex  " x-data="{open:false}"  x-on:mouseleave.self="open=false">
                  <div  x-on:click="open=true" class="relative flex">
                    <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                    <button  type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">Catalogo</button>
                  </div>
  
                 
                  <div  x-show="open"  class="absolute inset-x-0 top-full text-sm text-gray-500 fixed z-10">
                    <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
  
                    <div class="relative bg-white">
                      <div class="mx-auto max-w-7xl px-8">
                        <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                          <div class="col-start-2 grid grid-cols-2 gap-x-8">
                            <div class="group relative text-base sm:text-sm">
                              
                              
                                {{-- imagen de fondo  --}}
                                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                              </div>
                              
                              
                              <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                New Arrivals
                              </a>
                              <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>
                            <div class="group relative text-base sm:text-sm">
                              
                                 {{-- imagen de fondo --}}
                                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                              </div>
                              <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Basic Tees
                              </a>
                              <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>
                          </div>
                          <div class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm">
                       
                             
                            <div>
                              <p id="Accessories-heading" class="font-medium text-gray-900">Categorias</p>
                              <ul role="list" aria-labelledby="Accessories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Zapatos</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Ropa</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Accesorios</a>
                                </li>
                               
                              </ul>
                            </div>
                             
                            <div>
                              <p id="Accessories-heading" class="font-medium text-gray-900">Admin</p>
                              <ul role="list" aria-labelledby="Accessories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                               
                                {{-- <li class="flex">
                                  <a href="{{route('productos.create')}}" class="hover:text-gray-800">Productos</a>
                                </li>
                                
                                <li class="flex">
                                  <a href="{{route('categorias.index')}}" class="hover:text-gray-800">categoria</a>
                                </li> --}}
                                


                              </ul>
                            </div>





                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 



                  {{-- HOMBRES   --}}
                <div class="flex" x-data="{open:false}"  x-on:mouseleave.self="open=false">
                  <div  class="relative flex"  class="flex">
                    <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                    <button  x-on:click="open=true" type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">Sucursales</button>
                  </div>
  
                  <!--
                    'Men' flyout menu, show/hide based on flyout menu state.
  
                    Entering: "transition ease-out duration-200"
                      From: "opacity-0"
                      To: "opacity-100"
                    Leaving: "transition ease-in duration-150"
                      From: "opacity-100"
                      To: "opacity-0"
                  -->
                  <div  x-show="open"   class="absolute inset-x-0 top-full text-sm text-gray-500 fixed z-10" >
                    <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
  
                    <div class="relative bg-white">
                      <div class="mx-auto max-w-7xl px-8">
                        <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                          <div class="col-start-2 grid grid-cols-2 gap-x-8">
                            <div class="group relative text-base sm:text-sm">
                              <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                              </div>
                              <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                New Arrivals
                              </a>
                              <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>
                            <div class="group relative text-base sm:text-sm">
                              <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-cover object-center">
                              </div>
                              <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Artwork Tees
                              </a>
                              <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>
                          </div>
                          <div class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm">
                            <div>
                            
                              <ul role="list" aria-labelledby="Clothing-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Sucursal</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Stock_Sucursal</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">empleados</a>
                                </li>
                                
                              </ul>
                            </div>
                            
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>   



                
                <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Contacto</a>
                <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Informacion</a>
              </div>
            </div>
            


             

            {{-- CUENTAS --}}
              @auth

              
                
                             <div class="ml-auto flex items-endr"  x-data="{openn : false}">
                                <div>
                                      <button x-on:click="openn=true" type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white     focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                              <span class="absolute -inset-1.5"></span>
                                <img class="h-8 w-8 rounded-full" src="{{auth()->user()->profile_photo_url}}" alt="">
                                  </button>
                                </div>

                              <div x-show="openn" x-on:click.away="openn=false" class="absolute right-30 z-10 mt-10 w-48 origin-bottom-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">tu perfil</a>
                                 <a href="{{route('dashboard')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Admin</a> 
                          
                        
                                  <form method="POST" action="{{ route('logout') }}" x-data>
                                  @csrf
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2"  @click.prevent="$root.submit();">
                                    Sign out</a>
                                </form>
                              </div>
                        </div> 
                          





                                  <div  class="ml-4 flow-root lg:ml-6" x-on:click="carrito=true">
                                    <a href="#" class="group -m-2 flex items-center p-2">
                                <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                <span class="sr-only">items in cart, view bag</span>
                              </a>
                            </div>

                            <!-- Search -->
                            <div class="flex lg:ml-6">
                              <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Search</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                              </a>
                            </div>
                          
             
                
                 
             
                    

                      @else  
                      <div class="ml-auto flex items-center">
                        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                          <a href="{{route('login')}}" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign in</a>
                          <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                          <a href="{{route('register')}}" class="text-sm font-medium text-gray-700 hover:text-gray-800">Crear cuenta</a>
                        </div> 
                      </div>    

                      @endauth
                    












            

            
          </div>
                 






        </div>
      </nav>
    </header>



    <div x-show="carrito"  class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
      <!--
        Background backdrop, show/hide based on slide-over state.
    
        Entering: "ease-in-out duration-500"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in-out duration-500"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    
      <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
          <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
            <!--
              Slide-over panel, show/hide based on slide-over state.
    
              Entering: "transform transition ease-in-out duration-500 sm:duration-700"
                From: "translate-x-full"
                To: "translate-x-0"
              Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
                From: "translate-x-0"
                To: "translate-x-full"
            -->
            <div class="pointer-events-auto w-screen max-w-md">
              <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                  <div class="flex items-start justify-between">
                    <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Carrito de Compra</h2>
                    <div class="ml-3 flex h-7 items-center">
                      <button x-on:click="carrito=false"  type="button" class="relative -m-2 p-2 text-gray-400 hover:text-gray-500">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Close panel</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                      </button>
                    </div>
                  </div>
    
                  <div class="mt-8">
                    <div class="flow-root">
                      <ul role="list" class="-my-6 divide-y divide-gray-200">
                        <li class="flex py-6">
                          <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                            <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                          </div>
    
                          <div class="ml-4 flex flex-1 flex-col">
                            <div>
                              <div class="flex justify-between text-base font-medium text-gray-900">
                                <h3>
                                  <a href="#">Throwback Hip Bag</a>
                                </h3>
                                <p class="ml-4">$90.00</p>
                              </div>
                              <p class="mt-1 text-sm text-gray-500">Salmon</p>
                            </div>
                            <div class="flex flex-1 items-end justify-between text-sm">
                              <p class="text-gray-500">Qty 1</p>
    
                              <div class="flex">
                                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="flex py-6">
                          <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                            <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="h-full w-full object-cover object-center">
                          </div>
    
                          <div class="ml-4 flex flex-1 flex-col">
                            <div>
                              <div class="flex justify-between text-base font-medium text-gray-900">
                                <h3>
                                  <a href="#">Medium Stuff Satchel</a>
                                </h3>
                                <p class="ml-4">$32.00</p>
                              </div>
                              <p class="mt-1 text-sm text-gray-500">Blue</p>
                            </div>
                            <div class="flex flex-1 items-end justify-between text-sm">
                              <p class="text-gray-500">Qty 1</p>
    
                              <div class="flex">
                                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                              </div>
                            </div>
                          </div>
                        </li>
    
                        <!-- More products... -->
                      </ul>
                    </div>
                  </div>
                </div>
    
                <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                  <div class="flex justify-between text-base font-medium text-gray-900">
                    <p>Subtotal</p>
                    <p>$262.00</p>
                  </div>
                  <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                  <div class="mt-6">
                    <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                  </div>
                  <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                    <p>
                      or
                      <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Continue Shopping
                        <span aria-hidden="true"> &rarr;</span>
                      </button>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    






  </div>
  