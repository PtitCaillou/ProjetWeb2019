      </form>
       <form style= "position: relative; margin-left: 120%; margin-top: -1rem; max-width: 20%;" action="{{('filter')}}" >
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Options</label>
      </div>  
      <select class="custom-select" id="inputGroupSelect01">
        <option selected>Choose...</option>
        @foreach($prod as $prod)
          <option name="filterCat" value="">
            {{$prod->type}}
          </option>
        @endforeach
        <option>
          Prix par ordre croissant
        </option>
        <option>
          Prix par ordre décroissant
        </option>
      </select>
    </div>
    <button class="btn btn-sm" style="background-color: rgb(238, 193, 94);">Filtrer</button>
  </form>