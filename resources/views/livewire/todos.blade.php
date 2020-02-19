<div>
    <div>
        <div class="form-group">
            <label for="todo">Add Todos</label>
            <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" value="{{ old('todo') }}" name="todo" id="todo" placeholder="What needs to be done!" wire:model="title" wire:keydown.enter="addTodo">

            @if($errors->has('title'))
                <small class="form-text text-danger">{{ $errors->first('title') }}</small>
            @endif
        </div>
        {{-- <div class="form-group">
            <button class="btn btn-primary" wire:click="addTodo" type="submit">Add</button>
        </div>   --}}
        <div class="form-group">
            <ul class="list-group">
                @foreach ($todos as $todo)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <input 
                            type="checkbox" 
                            wire:change="toggleTodo({{$todo->id}})"
                            {{$todo->completed ? 'checked' : ''}}
                            >&nbsp;
                            <a href="#" 
                                class="{{$todo->completed ? 'completed' : ''}}"
                                onclick="updateTodoPrompt('{{$todo->title}}') || event.stopImmediatePropagation()"
                                wire:click="updateTodo({{$todo->id}}, todoUpdated)"
                            >{{$todo->title}}</a>   
                        </div>
                        <div>
                            <button 
                                class="btn btn-danger btn-sm" 
                                onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                wire:click="deleteTodo({{$todo->id}})"
                                >&times;</button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
