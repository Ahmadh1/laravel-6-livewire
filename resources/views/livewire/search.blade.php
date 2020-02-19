<div>
   <div class="form-group">
     <label for="search">Search Your Contacts</label>
     <input 
            type="text"
            class="form-control" 
            wire:model="query" 
            id="search" 
            placeholder="Enter contact"
      />
      @if (!empty($query))
         @if (!empty($contacts))
         <ul class="list-group">
            @foreach ($contacts as $contact)
               <li class="list-group-item">{{$contact['name']}}</li>
            @endforeach
         </ul>
         @else
            <li class="list-group-item">No Results</li>
         @endif
      @endif
   </div>

   
</div>
