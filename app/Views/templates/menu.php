<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li <?= $current_left=="main"?"class=\"current\"":FALSE?>><a href="/manager/view/main"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
            <li <?= $current_left=="display"?"class=\"current\"":FALSE?>><a href="/manager/view/display"><i class="glyphicon glyphicon-list"></i> 전시관 관리</a></li>
            <li <?= $current_left=="board"?"class=\"current\"":FALSE?>><a href="/manager/view/board"><i class="glyphicon glyphicon-list"></i> 게시판 관리</a></li>
            <li <?= $current_left=="event"?"class=\"current\"":FALSE?>><a href="/manager/view/event"><i class="glyphicon glyphicon-list"></i> 이벤트 관리</a></li>
            <li <?= $current_left=="stats"?"class=\"current\"":FALSE?>><a href="/manager/view/stats"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
            <li <?= $current_left=="admin"?"class=\"current\"":FALSE?>><a href="/manager/view/admin"><i class="glyphicon glyphicon-list"></i> 관리자 관리</a></li>
            <li <?= $current_left=="calendar"?"class=\"current\"":FALSE?>><a href="/manager/view/calendar"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
            <li <?= $current_left=="tables"?"class=\"current\"":FALSE?>><a href="/manager/view/tables"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
            <li <?= $current_left=="buttons"?"class=\"current\"":FALSE?>><a href="/manager/view/buttons"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
            <li <?= $current_left=="editors"?"class=\"current\"":FALSE?>><a href="/manager/view/editors"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
            <li <?= $current_left=="forms"?"class=\"current\"":FALSE?>><a href="/manager/view/forms"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Pages
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="login">Login</a></li>
                    <li><a href="signup">Signup</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>