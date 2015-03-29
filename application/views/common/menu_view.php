<body>
<!-- start: Layout Settings -->
<div id="theme-settings" class="hidden-sm hidden-xs">
    <div id="open-close">
        <i class="fa fa-cog"></i>
    </div>
    <h4>Options</h4>
    <ul id="options">
        <li>
            <label class="custom-checkbox-item pull-left">
                <input id="sm" class="custom-checkbox" type="checkbox"/>
                <span class="custom-checkbox-mark"></span>
            </label>
            <span class="desc">Sidebar Minified</span>
        </li>
        <li>
            <label class="custom-checkbox-item pull-left">
                <input id="sh" class="custom-checkbox" type="checkbox"/>
                <span class="custom-checkbox-mark"></span>
            </label>
            <span class="desc">Sidebar Hidden</span>
        </li>
        <li>
            <label class="custom-checkbox-item pull-left">
                <input id="rtl" class="custom-checkbox" type="checkbox"/>
                <span class="custom-checkbox-mark"></span>
            </label>
            <span class="desc">Right to Left</span>
        </li>
        <li>
            <label class="custom-checkbox-item pull-left">
                <input id="she" class="custom-checkbox" type="checkbox"/>
                <span class="custom-checkbox-mark"></span>
            </label>
            <span class="desc">Static Header</span>
        </li>
    </ul>

    <hr>

    <h4>Themes</h4>
    <ul id="themes">
        <li>
            <label class="custom-checkbox-item pull-left">
                <input id="default" class="custom-checkbox" type="checkbox"/>
                <span class="custom-checkbox-mark"></span>
            </label>
            <span class="desc">Default</span>
        </li>
        <li>
            <label class="custom-checkbox-item pull-left">
                <input id="elegant" class="custom-checkbox" type="checkbox"/>
                <span class="custom-checkbox-mark"></span>
            </label>
            <span class="desc">Elegant</span>
        </li>
        <li>
            <label class="custom-checkbox-item pull-left">
                <input id="sky" class="custom-checkbox" type="checkbox"/>
                <span class="custom-checkbox-mark"></span>
            </label>
            <span class="desc">Sky</span>
        </li>
    </ul>

    <hr>

    <button type="button" class="btn btn-success btn-block" id="restore">factory settings</button>

</div>
<!-- end: Layout Settings -->
<!-- start: Header -->
<div class="navbar" role="navigation">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/login/logout"><i class="fa fa-power-off"></i></a></li>
        </ul>
    </div>
</div>
<!-- end: Header -->



<!-- start: Main Menu -->
<div class="sidebar ">
    <div class="sidebar-collapse">
        <div class="sidebar-header">
            <img src="assets/img/avatar.jpg">
            <h2>Lukasz Holeczek</h2>
            <h3>user@email.com</h3>
        </div>

        <div class="sidebar-menu">
            <ul class="nav nav-sidebar">
                <li>
                    <a href="index">
                        <i class="fa fa-bar-chart-o"></i>
                        <span class="text"> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i><span class="text">Работники</span> <span class="indicator"></span></a>
                    <ul>
                        <li><a href="schedule"><i class="fa fa-edit"></i><span class="text">Рабочий график</span></a></li>
                        <li><a href="workers_list"><i class="fa fa-edit"></i><span class="text"> Список работников</span></a></li>
                    </ul>
                </li>

                <li>
                    <a href="widgets.html">
                        <i class="fa fa-dashboard"></i>
                        <span class="text">Сохранённое время</span>
                    </a>
                </li>
                <li>
                    <a href="widgets.html">
                        <i class="fa fa-dashboard"></i>
                        <span class="text">Таймеры</span>
                    </a>
                </li>
                <li>
                    <a href="accounting">
                        <i class="fa fa-dashboard"></i>
                        <span class="text">Бугалтерия</span>
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i><span class="text">Цены</span> <span class="indicator"></span></a>
                    <ul>
                        <li><a href="prices"><i class="fa fa-edit"></i><span class="text">Таблица цен</span></a></li>
                        <li><a href="edit_price"><i class="fa fa-edit"></i><span class="text">Изменение цен</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="storage">
                        <i class="fa fa-dashboard"></i>
                        <span class="text">Архив документов</span>
                    </a>
                </li>
                <li>
                    <a href="gallery">
                        <i class="fa fa-dashboard"></i>
                        <span class="text">Галлерея</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <ul class="sidebar-footer-menu">
            <li><a href="index.html#"><i class="fa fa-cog"></i> Settings</a></li>
            <li><a href="/login/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
        <div class="sidebar-brand">
            Cell Game Club
        </div>
    </div>
</div>
<!-- end: Main Menu -->
