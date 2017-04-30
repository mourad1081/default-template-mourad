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
            <h2 class="h2-responsive"><i class="fa fa-navicon" aria-hidden="true"></i> Menu</h2>
            <ul class="sidebar-menu">
                <li class="sidebar-menu">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i> Articles
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item"><i class="fa fa-plus" aria-hidden="true"></i> Nouvel article</li>
                        <li class="sidebar-menu-item"><i class="fa fa-gear" aria-hidden="true"></i> Gérer articles</li>
                        <li class="sidebar-menu-item"><i class="fa fa-tags" aria-hidden="true"></i> Catégories</li>
                    </ul>
                </li>
                <li class="sidebar-menu-item"><i class="fa fa-image" aria-hidden="true"></i> Images</li>
                <li class="sidebar-menu-item"></li>
                <li class="sidebar-menu-item"></li>
                <li class="sidebar-menu-item"></li>
            </ul>
        </nav>
        <!-- Application -->
        <div id="app" class="col-md-10">

            {!! $createArticlePanel !!}

        </div>

    </div>
</div>

{!! $footer !!}





























