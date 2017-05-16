<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <i class="fa fa-home" aria-hidden="true"></i> ShopKeeper
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                {{--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>--}}
            </ul>
            {{--<form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>--}}
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-flag-checkered" aria-hidden="true"></i> Category</a></li>
                <li><a href="#"><i class="fa fa-podcast" aria-hidden="true"></i> Brand</a></li>
                <li>
                    <a href="{{url('products/cart')}}">
                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Cart
                        @if(session('items'))
                            <span class="label label-success">{{count(session('items'))}}</span>
                        @endif
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('products/create')}}">Create</a></li>
                        <li><a href="{{url('products')}}">View All Products</a></li>
                        <li><a href="#">Edit</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Logout</a></li>
                        <li><a href="#">Register</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>