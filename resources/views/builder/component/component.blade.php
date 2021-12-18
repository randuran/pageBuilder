 <section class="relative overflow-hidden">
     <x-builder.toolbar :container="$container" />

     <div class="{{ $container->status ? '' : 'opacity-20 hover:opacity-80  transition-all ease-in-out duration-200' }}"
         {{ $slot }} </div>
 </section>
