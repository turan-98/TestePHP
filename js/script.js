var example1 = new Vue({
  		el: '#app',
		methods:{
			inviteForm:function(event){

				var input,
					fatherInput;

				input = document.createElement("input");
				input.setAttribute('type', 'text')
				input.setAttribute('placeholder','Email do seu amigo :)')
				input.setAttribute('name', 'emailConvidado')
				input.classList.add("form-control")

				fatherInput = document.querySelector("#amigoInvite");
				fatherInput.appendChild(input)

			}
		}
	})