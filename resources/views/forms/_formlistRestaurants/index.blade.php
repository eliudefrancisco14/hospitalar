
<div class="col-md-6">
    <div class="form-group">
        <label for="restaurantName">Nome do Restaurantes</label>
        <input type="text" name="restaurantName" id="restaurantName" value="{{ isset($listRestaurant->restaurantName) ? $listRestaurant->restaurantName : old('listRestaurantName') }}"
            class="form-control border-secondary" placeholder="Nome do  Restaurante" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="location">Link do Mapa</label>
        <input type="text" name="locationMap" id="locationMap" value="{{ isset($listRestaurant->locationMap) ? $listRestaurant->locationMap : old('locationMap') }}"
        class="form-control border-secondary" placeholder="Link do Mapa" >
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="attachment">Foto de capa</label>
        <input type="file" name="attachment" id="attachment" value="{{ isset($listRestaurant->attachment) ? $listRestaurant->attachment : old('attachment') }}"
            class="form-control border-secondary" placeholder="" >
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-description">Descrição</h5>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%" >
                {{ isset($listRestaurant->description) ? $listRestaurant->description : old('description')}}
            </textarea>
        </div>
    </div>
</div>
