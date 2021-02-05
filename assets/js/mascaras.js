		function mascara_rg(Element) {
			//var rg  = document.getElementById('rg')
			var rg = Element
			if (rg.value.length == 10) {
				rg.value = rg.value+'-'
			}
		}
		function mascara_cpf(Element) {
			// var cpf  = document.getElementById('cpf')
			var cpf  = Element
			if (cpf.value.length == 3 || cpf.value.length == 7) {
				cpf.value += '.'
			}else if(cpf.value.length == 11){
				cpf.value += '-'
			}
		}
		function mascara_telefone1(Element) {
			// var telefone1  = document.getElementById('telefone1')
			var telefone1 = Element
			if (telefone1.value.length == 0) {
				telefone1.value = telefone1.value +'('
			}else if(telefone1.value.length == 3){
				telefone1.value = telefone1.value +')'
			}else if(telefone1.value.length == 9){
				telefone1.value = telefone1.value +'-'
			}
		}
		function mascara_telefone2(Element) {
			// var telefone2  = document.getElementById('telefone2')
			var telefone2 = Element
			if (telefone2.value.length == 0) {
				telefone2.value = telefone2.value +'('
			}else if(telefone2.value.length == 3){
				telefone2.value = telefone2.value +')'
			}else if(telefone2.value.length == 9){
				telefone2.value = telefone2.value +'-'
			}
		}