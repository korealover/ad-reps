<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <?php if($admin_menu=='1001' || $admin_menu=='1002' || $admin_menu=='1003' || $admin_menu=='1004'){?>
            <li <?= $current_left=="main"?"class=\"current\"":FALSE?>><a href="/manager/view/main"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
            <?php }?>
            <?php if($admin_menu=='1001' || $admin_menu=='1002'){?>
            <li <?= $current_left=="display"?"class=\"current\"":FALSE?>><a href="/manager/view/display"><i class="glyphicon glyphicon-expand"></i> 전시관 관리</a></li>
            <?php }?>
            <?php if($admin_menu=='1001' || $admin_menu=='1003'){?>
            <li class="submenu <?= ($current_left=="board" || $current_left=="faq")?" current ":FALSE?>">
                <a href="#">
                    <i class="glyphicon glyphicon-comment"></i> 게시판 관리
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li <?= $current_left=="board"?"class=\"current\"":FALSE?>><a href="/manager/view/board">공지사항</a></li>
                    <li <?= $current_left=="faq"?"class=\"current\"":FALSE?>><a href="/manager/view/faq">FAQ</a></li>
                </ul>
            </li>
            <?php }?>
            <?php if($admin_menu=='1001' || $admin_menu=='1004'){?>
            <li <?= $current_left=="event"?"class=\"current\"":FALSE?>><a href="/manager/view/event"><i class="glyphicon glyphicon-gift"></i> 이벤트 관리</a></li>
            <?php }?>
            <?php if($admin_menu=='1001'){?>
            <li class="submenu <?= ($current_left=="stats" || $current_left=="statstot" || $current_left=="statsday" || $current_left=="statsweek" || $current_left=="statsmonth")?" current ":FALSE?>">
                <a href="#">
                    <i class="glyphicon glyphicon-comment"></i> 통계
                    <span class="caret pull-right"></span>
                </a>
                <ul>
                    <li <?= $current_left=="stats"?"class=\"current\"":FALSE?>><a href="/manager/view/stats">접속 추이</a></li>
                    <li <?= $current_left=="statstot"?"class=\"current\"":FALSE?>><a href="/manager/view/statstot">접속 통계</a></li>
                    <li <?= $current_left=="statsday"?"class=\"current\"":FALSE?>><a href="/manager/view/statsday">일별 접속 통계</a></li>
                    <li <?= $current_left=="statsweek"?"class=\"current\"":FALSE?>><a href="/manager/view/statsweek">주별 접속 통계</a></li>
                    <li <?= $current_left=="statsmonth"?"class=\"current\"":FALSE?>><a href="/manager/view/statsmonth">월별 접속 통계</a></li>
                </ul>
            </li>
            <?php }?>
            <?php if($admin_menu=='1001'){?>
            <li <?= $current_left=="admin"?"class=\"current\"":FALSE?>><a href="/manager/view/admin"><i class="glyphicon glyphicon-user"></i> 관리자 관리</a></li>
            <?php }?>
            <?php if($admin_menu=='1001'){?>
            <li <?= $current_left=="howto"?"class=\"current\"":FALSE?>><a href="/manager/view/howto"><i class="glyphicon glyphicon-calendar"></i> 에디터 사용법</a></li>
<!--
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
                <ul>
                    <li><a href="login">Login</a></li>
                    <li><a href="signup">Signup</a></li>
                </ul>
            </li>
                //-->
            <?php }?>
        </ul>
    </div>
</div>