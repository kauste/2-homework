 <div class="card-header">Sort by</div>
 <div class="card-body">
     <form class="form-group sort-form" action="{{route('frontIndex')}}" method="get">
         <!--ar gali forma buti get??-->
         <select name="sort" class="col-3">
             <option class="sorce-option" value="animal-asc" @if($sort=='animal-asc' ) selected @endif>Animal A-Z</option>
             <option class="sorce-option" value="animal-desc" @if($sort=='animal-desc' ) selected @endif>Animal Z-A</option>
              <option class="sorce-option" value="color-asc" @if($sort=='color-asc' ) selected @endif>Color-A-Z</option>
             <option class="sorce-option" value="color-desc" @if($sort=='color-desc' ) selected @endif>Color-Z-A</option>
             <option class="sorce-option" value="default" @if($sort=='default' || $sort==null)selected @endif>default</option>
         </select>
         <button class="btn btn-outline-success ml-2" type="submit">Sort</button>
     </form>
     <a class="btn btn-outline-danger ml-2" href={{route('frontIndex')}}>Reset</a>
 </div>
 </div>
