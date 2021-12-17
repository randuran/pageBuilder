           <div {{ $attributes }}>
               <div x-on:blur='content = $event.target.innerHTML.replace(/<\/?[^>]+(>|$)/g, "").replace(/\s+/g, " ").trim()'
                   {{ auth()->user() ? 'contenteditable=true' : '' }}>

                   {{ $slot }}
               </div>
           </div>
