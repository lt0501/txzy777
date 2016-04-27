/*蓝科企业网站系统PHP版
http://www.lankecms.com*/

function left_active(){      
    if(document.getElementById("nav_active"+bid)!=null){
        document.getElementById("nav_active"+bid).className="nav_active";
    }else{
        document.getElementById('home_nav').className="nav_active";
    }

    if(document.getElementById("cat_active"+catid)!=null){
        document.getElementById("cat_active"+catid).className="category_active";
    }else{
        if (document.getElementById("left_cat")!=null) {
            var tid=document.getElementById('left_cat').getElementsByTagName('a')[0].id;
            document.getElementById(tid).className="category_active";
        }
    }

    if(document.getElementById("smallshow"+catid)!=null){
        document.getElementById("smallshow"+catid).style.display="block";
    }else{
        if(document.getElementById("smallshow"+pid)!=null)document.getElementById("smallshow"+pid).style.display="block";     
    }
}
window.onload=left_active;