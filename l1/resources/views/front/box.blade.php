 <div class="card-header">Sort by</div>
 <div class="card-body">
     <form class="form-group sort-form" action="{{route('frontIndex')}}" method="get">
         <div class="sort-selects">
             <select name="sort" class="col-5">
                 <option class="sorce-option" value="default" @if($sort=='default' || $sort==null)selected @endif>default</option>
                 <option class="sorce-option" value="animal-asc" @if($sort=='animal-asc' ) selected @endif>Animal A-Z</option>
                 <option class="sorce-option" value="animal-desc" @if($sort=='animal-desc' ) selected @endif>Animal Z-A</option>
                 <option class="sorce-option" value="color-asc" @if($sort=='color-asc' ) selected @endif>Color-A-Z</option>
                 <option class="sorce-option" value="color-desc" @if($sort=='color-desc' ) selected @endif>Color-Z-A</option>
             </select>
             <select name="color_id" class="col-5">
                 <option value="0" @if($filter==0) selected @endif>No filter</option>
                 @foreach($colors as $color)
                 <option style="background:{{$color->color}}" value="{{$color->id}}" @if($filter==$color->id) selected @endif>{{$color->title}}</option>
                 @endforeach
             </select>
         </div>
         <div class="sort-actions">
             <button class="btn btn-outline-success" type="submit">Sort</button>
             <a class="btn btn-outline-danger" href={{route('frontIndex')}}>Reset</a>
         </div>
     </form>

     <form class="form-group search-form" action="{{route('frontIndex')}}" method="get">
         <input class="col-9" type="text" name="s" value="{{$s}}">
         <button class="btn btn-outline-success col-2" type="submit" ">Search</button>
     </form>

 </div>
 </div>
