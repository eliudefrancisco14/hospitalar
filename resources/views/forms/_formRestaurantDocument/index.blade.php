
<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo da Informação</h5>
            <p>Digite o corpo do restaurante</p>
            <!-- Create the editor container -->
            <textarea name="body" id="editor1" style="min-height:300px; min-width:100%">
       {{ isset($hospitalDocument->body) ? $hospitalDocument->body : '' }}
        </textarea>
        </div>
    </div>
</div>
