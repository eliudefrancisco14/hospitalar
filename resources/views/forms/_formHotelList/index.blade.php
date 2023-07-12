
<div class="col-md-6">
    <div class="form-group">
        <label for="hotelname">Nome do Hotel</label>
        <input type="text" name="hotelname" id="hotelname" value="{{ isset($hostelList->hotelname) ? $hostelList->hotelname : old('hotelname') }}"
            class="form-control border-secondary" placeholder="Nome do Hotel" required>
    </div>
</div> <!-- /.col -->
<div class="col-md-6">
    <div class="form-group">
        <label for="hotelname">Quantidade de Estrelas</label>
        <input type="text" name="stars" id="stars" value="{{ isset($hostelList->stars) ? $hostelList->stars : old('stars') }}"
            class="form-control border-secondary" placeholder="Quantidade de Estrelas" required>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="location">Link do Mapa</label>
        <input type="text" name="locationMap" id="locationMap" value="{{ isset($hostelList->locationMap) ? $hostelList->locationMap : old('locationMap') }}"
        class="form-control border-secondary" placeholder="Link do Mapa" >
    </div>
</div> <!-- /.col -->
<div class="col-md-6">
    <div class="form-group">
        <label for="hotelname">Foto de capa</label>
        <input type="file" name="attachment" id="attachment" value="{{ isset($hostelList->attachment) ? $hostelList->attachment : old('attachment') }}"
            class="form-control border-secondary" placeholder="" >
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-hotelname">Descrição</h5>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%" >
                {{ isset($hostelList->description) ? $hostelList->description : old('description')}}
            </textarea>
        </div>
    </div>
</div>
