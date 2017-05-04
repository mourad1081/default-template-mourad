{!! $header !!}
<!-- Root -->
<div id="root" class="container-fluid">
    <div class="row">
        <!-- Header -->
        <div id="header" class="col-xs-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis, cum deleniti dolorum
                praesentium tempora! Animi culpa dicta dolorem doloribus eius, explicabo iste quasi, quidem quod
                reiciendis rem veniam? Iste.</p>
        </div>
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-2">
            <h3 class="h3-responsive"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</h3>

            <div id="accordion" role="tablist" class="sidebar-menu" aria-multiselectable="true">
                <div>
                    <!-- Partie titre du menu-item -->
                    <div role="tab" id="headingOne" class="sidebar-menu-item active">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Gérer articles
                            </a>
                        </h5>
                    </div>
                    <!-- Partie contenu du menu-item -->
                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <ul class="sidebar-menu">
                            <li class="sidebar-menu-item"><i class="fa fa-plus" aria-hidden="true"></i> Nouvel article</li>
                            <li class="sidebar-menu-item"><i class="fa fa-gear" aria-hidden="true"></i> Gérer articles</li>
                            <li class="sidebar-menu-item"><i class="fa fa-tags" aria-hidden="true"></i> Catégories</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div role="tab" id="headingTwo" class="sidebar-menu-item">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Gérer images
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <ul class="sidebar-menu">
                            <li class="sidebar-menu-item"></li>
                            <li class="sidebar-menu-item"></li>
                            <li class="sidebar-menu-item"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Application -->
        <div id="app" class="col-md-10">

            {!! $createArticlePanel !!}

        </div>

    </div>
</div>

{!! $footer !!}





























