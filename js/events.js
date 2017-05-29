function addEvent(ele,type,fun) {
	try {
		if(ele != null && typeof ele == 'object') {
			if(-[1,]) {
				ele.addEventListener(type,fun);
			}else{
				ele.attachEvent("on" + type,fun)
			}
		}else {
			throw new Error("不是对象或对象不为空");
		}
	}catch(e) {
		alert(e.message);
	}
}