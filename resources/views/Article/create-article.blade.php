<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9">
            <form>
                <h3 class="h3-responsive">Ajouter un nouvel article</h3>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">
                        <i class="fa fa-user"></i> Auteur
                    </label>
                    <div class="col-sm-10">
                        <p class="form-control-static">{{ $nameAuthor }}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="article-title" class="col-sm-12 col-form-label">
                        <i class="fa fa-header" aria-hidden="true"></i> Titre de l'article
                    </label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="article-title" placeholder="Titre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="article-content" class="col-sm-12 col-form-label">
                        <i class="fa fa-pencil" aria-hidden="true"></i> Contenu
                    </label>
                    <textarea class="form-control" id="article-content"></textarea>
                </div>
            </form>
        </div>
        <div class="col-sm-3">
            <h4 class="h4-responsive">Actions</h4>
            Sauvegarder, publier, sur quelle page, (catégorie ici ou dans un autre form ?)<br><br>
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores assumenda atque est et ex excepturi hic, minima nostrum officiis possimus praesentium tenetur vero? Aliquid molestias, nostrum quia quibusdam quos repellat?</span><span>A ab aliquid aut dolore earum, enim et harum inventore ipsam iure minus mollitia natus neque nostrum odio odit perferendis totam veritatis voluptas voluptate. Ab cum eius non recusandae sit.</span><span>A animi beatae commodi consectetur debitis dicta, enim est id ipsa labore necessitatibus odio, quaerat quis repudiandae rerum sapiente tempora voluptates? Accusamus commodi consequuntur eaque nostrum possimus quis quo quos.</span>
            </p>
        </div>
    </div>

</div>
