  var checkall=document.getElementsByName("dell[]");
    function select(){                          //全选
      for(var $i=0;$i<checkall.length;$i++){
        checkall[$i].checked=true;
      }
    }
    function fanselect(){                        //反选
      for(var $i=0;$i<checkall.length;$i++){
        if(checkall[$i].checked){
          checkall[$i].checked=false;
        }else{
          checkall[$i].checked=true;
        }
      }
    }         
    function noselect(){                          //全不选
      for(var $i=0;$i<checkall.length;$i++){
        checkall[$i].checked=false;
      }
    }