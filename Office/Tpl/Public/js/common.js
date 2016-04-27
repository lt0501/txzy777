function select_all(chkName,frmName){
	var frm=document.forms[frmName];
	for(var i=0;i<frm.elements.length;i++){
		var e =frm.elements[i];
		if ((e.name != 'check_all') && (e.type=='checkbox')){
			e.checked =frm.check_all.checked;
			tr_bgcolor(frm.elements[i]);
		}
	}
}

function tr_bgcolor(c){
	var tr = c.parentNode.parentNode;
	tr.style.backgroundColor = c.checked ? "#FFFDD7" : "#FFFFFF";
}

function trim(str){
	str = str.replace(/^\s*|\s*$/g,"");
	return str;
}

function setImgSizeWH(theURL,sImage,imgW,imgH){
	var imgObj;
	imgObj = new Image();
	imgObj.src = theURL;
	if ((imgObj.width != 0) && (imgObj.height != 0)) {
		if(imgObj.width>imgW || imgObj.height>imgH){
			var iHeight = imgObj.height*imgW/imgObj.width;
			if(iHeight<=imgH){
				sImage.width=imgW;
				sImage.height=iHeight;
			}else{
				var iWidth=imgObj.width*imgH/imgObj.height;
				sImage.width=iWidth;
				sImage.height=imgH;
			}
		}else{
			sImage.width=imgObj.width;
			sImage.height=imgObj.height;
		}
	}else{
		sImage.width = imgW;
		sImage.height= imgH;
	}
}

			
 function getX(elem){
    var x = 0;
    while(elem){
        x = x + elem.offsetLeft;
        elem = elem.offsetParent;
    }
    return x;
}
function getY(elem){
    var y = 0;
    while(elem){
        y = y + elem.offsetTop;
        elem = elem.offsetParent;
    }
    return y;
}