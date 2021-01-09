var t
var today = new Date();
var a = today.getDate();
var y = today.getFullYear();
var m = today.getMonth();
if(y > 2020){
	if(m == 2){
		if(a == 1){
			t = 14
			document.write(t)
		}
		if(a > 1){
			t = 15 - a
			document.write(t)
		}
		if(a > 15)
			t = 0
			document.write(t)
		}
						
	if(m == 1){
		if(a == 1){
			t = 42
			document.write(t)
		}
		if(a > 1) {
			t = 43 - a
			document.write(t);
		}
	}	
	if(m == 0){
		if(a == 1){
			t = 73;
			document.write(t)
		}
		if(a > 1){
			t = 74 - a;
			document.write(t)
		}
	}	
}

if(y == 2020){
	if(a == 11){
		t = 94;
		document.write(t)
	}
	if(a > 11){
		a = a - 11
		t = 94 - a 
		document.write(t);
	}
}
