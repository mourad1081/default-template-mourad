<div class="container">
    <form>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Autheur</label>
            <div class="col-sm-10">
                <p class="form-control-static">{{ $nameAuthor }}</p>
            </div>
        </div>
        <div class="form-group row">
            <label for="article-title" class="col-sm-2 col-form-label">Titre de l'article</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="article-title" placeholder="Titre">
            </div>
        </div>
        <div class="form-group row">
            <label for="article-content">Contenu</label>
            <textarea class="form-control" id="article-content"></textarea>
        </div>
    </form>
</div>
