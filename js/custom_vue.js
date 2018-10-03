// instancja vuejs - zaczep
var submit_input = $('#calc_sum');
var instance_app = new Vue({
	el:'#instance_app',
	data: {
		most_important: "",
		todos_votes: [],
		submit_calc:"",
		input_one : "",
		test_vtext:"<h2>test</h2>",
		test_vhtml:"<h2>test</h2>",
		another: 1,
		show : true,
		title_span : "To jest tytuł elementu",
		text_one : "Witaj, to jest moje pierwsze odwołanie vue.js",
		users_test : [],
		users : [
			{
				name : "Elżbieta",
				surname : "Kownacka"
			},
			{
				name : "Elka",
				surname : "Tasamacowyzej"
			}

		],
		todos : [
			{ name : 'Do zrobienia one', vote : 0},
			{ name : 'Do zrobienia two', vote : 0},
			{ name : 'Do zrobienia three', vote : 0}
		]
	},
	methods: {
		test: function(event){
			console.log(event);
			var current_el = event.path[0];
			var current_color = event.target.attributes.color.value;
			$(current_el).css("background",current_color);
			alert(current_color);
		},
		get_value: function(){
			var value = event.target.innerText;

			if (value == "ENTER") {

				this.submit_calc = eval(this.submit_calc);
				submit_input.addClass('enter');


			}else if( value == "<-"){

				this.submit_calc = this.submit_calc.slice(0,-1);

			}else if (value == "NULL"){

				this.submit_calc = "";

			}else if( (value == "-") || (value == "+")  ){

				var length_of_input = this.submit_calc.length;
				var last_el_input = this.submit_calc.slice(length_of_input-1,length_of_input);

				if ((last_el_input != value) && ((last_el_input == "-") || (last_el_input == "+"))) {
					this.submit_calc += value;
				}
				

			}else{


				if ( submit_input.hasClass('enter') ) {

					submit_input.removeClass('enter');	
					this.submit_calc = "";
					this.submit_calc += value;
					console.log(this.submit_calc);

				}else{

					this.submit_calc += value;
					console.log(this.submit_calc);
				}

			
			}

			// // this.submit_calc = this.submit_calc + value;
			// // to jest to samo
			// this.submit_calc += value;


		},
		submit_enter : function(){
			this.get_value;
			this.submit_calc = eval(this.submit_calc);
			submit_input.addClass('enter');

		},

		// metody simple todos
		todo_delete: function(todo_el){

			// funkcja filter -wersja skrócona
			this.todos = this.todos.filter( i => i != todo_el);

			// funkcja filter - wersja pełna
			// this.todos = this.todos.filter(function(i){
			// 	return i != todo_el;
			// })

			// this.todos = this.todos.filter(function(nazwanie_elementu){
			// 	return element_ktory_chcemy_zmienic != todo_el;
			// })

		},
		add_todo : function(){
			console.log(event.target.value);
			this.todos.push({
				name: event.target.value,
				vote: 0
			})
			event.target.value = "";
		}	







		// // metody kalkulatora
		// get_value: function(){
		// 	var value = event.target.innerText;
		// 	// var before_class = event.target.attributes.class.value

		// 	if (value == "ENTER") {

		// 		this.submit_calc = eval(this.submit_calc);
		// 		$('#calc_sum').addClass('enter');	
			
		// 	} else if (value == "<-") {

		// 		this.submit_calc = this.submit_calc.slice(0, -1);
			
		// 	}else if(value == "NULL"){
			
		// 		this.submit_calc = "";
			
		// 	}else{

		// 		if ( $('#calc_sum').hasClass( "enter" ) ) {

		// 			$('#calc_sum').removeClass('enter');
		// 			this.submit_calc = "";
					
		// 			this.submit_calc += value;		
		// 			console.log(this.submit_calc);	
				
		// 		} else {

		// 			this.submit_calc += value;		
		// 			console.log(this.submit_calc);
				
		// 		}	
		// 	}
		// },
		// submit_enter : function () {
		// 	this.submit_calc = eval(this.submit_calc);
		// 	$('#calc_sum').addClass('enter');	
		// },
		// // metody kalkulatora




	},

updated : function(){
	this.todos_votes = [];

	for (var i = 0; i < this.todos.length; i++){
		this.todos_votes.push(this.todos[i].vote);
	}
	this.most_important = Math.max.apply(null, this.todos_votes);
} 

})