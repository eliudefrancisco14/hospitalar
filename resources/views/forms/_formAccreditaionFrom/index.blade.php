

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo da acreditação</h5>
            <p>Digite o corpo do Sobre a acreditação</p>
            <!-- Create the editor container -->
            <textarea name="body" id="editor1" style="min-height:300px; min-width:100%">
       {{ isset($about->body) ? $about->body : '' }}
        </textarea>
        </div>
    </div>
</div>
