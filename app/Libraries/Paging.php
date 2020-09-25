<?php namespace App\Libraries;

Class Paging {
    var $start,$total_page,$scale;

    public function start($page){
        $scale = 9;
        global $start;
        $start = ($page - 1) * $scale;
        return $start;
    }

    public function tpage($total) {
        $scale = 9;
        global $total_page;
        $total_page = ceil($total/$scale);

        return $total_page;
    }

    public function divpage($url, $totpage, $npage, $ln) {
        //한페이지당 출력수
        $scale = 10;
        $divpageing = "";

        $first = ($npage-1)*$scale;	// 뽑아올 게시물 [처음]
        $last = $scale;					// 뽑아올 게시물 [끝]

        //뽑아올 게시물[끝] : 총 게시물 수가 한페이지당 출력될 게시물수보다 적으면 총 게시물수를 뽑아올 게시물[끝] 으로 정한다
        if($scale < $last)
        {
            $last = $scale;
            // 뽑아올 게시물 [처음]~뽑아올 게시물 [끝] 구한값으로 한페이지에 글을 뽑아 온다
            $limit = "limit $first,$last";
        }
        //echo "limit==$limit<br>";

        //시작점......
        $first_page = intval(($npage-1)/$scale+1)*$scale-($scale-1);
        //마지막점....
        $last_page = $first_page+($scale-1);

        //마지막이 전체보다 클때 전체가 마지막이 된다.
        if($last_page > $totpage)
        {
            $last_page = $totpage;
        }

        //[이전] 버튼 링크
        $prev = $first_page-1;
        if($npage > $scale)
        {
            //$divpageing.="<a href=$url/?page=1$ln><IMG SRC=\"/img/admin/bbs_first.gif\" align=\"absmiddle\" border=0></a>&nbsp;";
            $divpageing.="<a href=\"$url/?page=$prev.$ln\" class=\"page_prev\"><span class=\"hide\">이전</span></a>";
        }
        else {
            $divpageing.="<a href=\"#self\" class=\"page_prev\"><span class=\"hide\">이전</span></a>";
        }

        $divpageing.= "<span class=\"page\">";

        // 페이지 링크 출력
        for($i = $first_page; $i <= $last_page; $i++)
        {
            //$page=($i-1);

            if($npage==$i)
            {
                $divpageing.="<a href=\"$url/?page=$i.$ln\" class=\"on\">".$i."</a>";
            }else{
                $divpageing.="<a href=\"$url/?page=$i$ln\">$i</a>";
            }
        }

        $divpageing.="</span>";
        // [다음] 버튼 출력
        $next = $last_page+1;
        if($next <= $totpage)
        {
            $divpageing.="<a href=\"$url/?page=$next$ln\" class=\"page_next\"><span class=\"hide\">다음</span></a>";
            //$divpageing.="&nbsp;<a href=$url/?page=$totpage$ln><IMG SRC=\"/img/admin/bbs_last.gif\" align=\"absmiddle\" border=0></a>";
        }
        else {
            $divpageing.="<a href=\"#self\" class=\"page_next\"><span class=\"hide\">다음</span></a>";
        }

        return $divpageing;
    }
}
?>