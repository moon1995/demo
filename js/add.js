function add(elem,eventype,fun){
	try{
		if(elem!= null && typeof elem=="object"){
			if(-[1,]){
				elem.addEventListener(eventype,fun)
				}else{
					elem.attachEvent("on"+eventype,fun);
					}
			
			}else{
				alert("对象为空或不是对象");
				}
		
		}catch(e){
			
			alert(e.message);
			}
	}