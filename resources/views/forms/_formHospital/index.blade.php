
<div class="col-md-6">
    <div class="form-group">
        <label for="hospitalName">Nome do Hospital</label>
       
        <input type="text" name="hospitalName" id="hospitalName" value="{{ isset($hospital->hospitalName) ? $hospital->hospitalName : old('hospitalName') }}"
            class="form-control border-secondary" placeholder="Nome do Hospital" required>
            @if($errors->first('hospitalName') )
            <div class="alert alert-danger">
                {{ $errors->first('hospitalName') }} </div> @endif
    </div>
</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <label for="hospitalName">Foto de capa</label>
      
        <input type="file" name="attachment" id="attachment" value="{{ isset($hospital->attachment) ? $hospital->attachment : old('attachment') }}"
            class="form-control border-secondary" placeholder="" >
            @if($errors->first('attachment') )
            <div class="alert alert-danger">
                {{ $errors->first('attachment') }} </div> @endif
    </div>
</div> <!-- /.col -->

<div class="col-md-12">
    <div class="form-group">
        <label for="location">Link do Mapa</label>
       
        <input type="text" name="locationMap" id="locationMap" value="{{ isset($hospital->locationMap) ? $hospital->locationMap : old('locationMap') }}"
        class="form-control border-secondary" placeholder="Link do Mapa" >
        @if($errors->first('locationMap') )
        <div class="alert alert-danger">
            {{ $errors->first('locationMap') }} </div> @endif
    </div>
</div> <!-- /.col -->


<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-hospitalName">Descrição</h5>
            <!-- Create the editor container -->
          
    
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%" >
                {{ isset($hospital->description) ? $hospital->description : old('description')}}
            </textarea>
            @if($errors->first('description') )
            <div class="alert alert-danger">
                {{ $errors->first('description') }} </div> @endif
        </div>
    </div>
</div>
