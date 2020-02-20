<div>
   <div class="form-group">
     <label for="search">Search Your Contacts</label>
      <div class="input-group mb-3">
         <div class="input-group-prepend">
           <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</button>
           <div class="dropdown-menu">
             <a class="dropdown-item" href="#">cat1</a>
             <a class="dropdown-item" href="#">cat2</a>
           </div>
         </div>
         <div class="input-group-prepend">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tags</button>
            <div class="dropdown-menu">
               <a class="dropdown-item" href="#">cat1</a>
               <a class="dropdown-item" href="#">cat2</a>
            </div>
          </div>
          <input 
            type="text"
            class="form-control" 
            id="search" 
            placeholder="Enter contact"
            wire:model="query" 
            wire:keydown.escape="fadeaway"
            wire:keydown.tab="fadeaway"
          />
       </div>
      @if (!empty($query))
         @if (!empty($contacts))
         <ul class="list-group">
            @foreach ($contacts as $contact)
               <li class="list-group-item">name: <b>{{$contact['name']}}</b> | Phone: <b>{{$contact['phone']}}</b> | @: <b>{{$contact['email']}}</b></li>
            @endforeach
         </ul>
         @else
            <li class="list-group-item">No Results</li>
         @endif
      @endif
   </div>

   
</div>
