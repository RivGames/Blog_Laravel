<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <h1>TopBlog.ua</h1>
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.main.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Головна
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.post.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Пости
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.category.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Категорії
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.tag.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Теги
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.user.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Юзери
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
