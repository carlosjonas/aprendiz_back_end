		function mascara_rg() {
			var rg  = document.getElementById('rg')
			if (rg.value.length == 10) {
				rg.value = rg.value+'-'
			}
		}
		function mascara_cpf() {
			var cpf  = document.getElementById('cpf')
			if (cpf.value.length == 3 || cpf.value.length == 7) {
				cpf.value += '.'
			}else if(cpf.value.length == 11){
				cpf.value += '-'
			}
		}
		function mascara_telefone1() {
			var telefone1  = document.getElementById('telefone1')
			if (telefone1.value.length == 0) {
				telefone1.value = telefone1.value +'('
			}else if(telefone1.value.length == 3){
				telefone1.value = telefone1.value +')'
			}else if(telefone1.value.length == 9){
				telefone1.value = telefone1.value +'-'
			}
		}
		function mascara_telefone2() {
			var telefone2  = document.getElementById('telefone2')
			if (telefone2.value.length == 0) {
				telefone2.value = telefone2.value +'('
			}else if(telefone2.value.length == 3){
				telefone2.value = telefone2.value +')'
			}else if(telefone2.value.length == 9){
				telefone2.value = telefone2.value +'-'
			}
		}