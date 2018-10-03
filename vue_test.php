<?php 
	require "conection.php";
	require "header.php";
	$title = "Vue test";
	include "partials/subheader.php";
 ?>

 <div id="instance_app">

<section class="hide">
	<button v-on:click="show = false">Usuń</button>
	<button v-on:click="show = true">Pokaż</button>
	<button v-on:click="another++">Dodaj 1</button>
	<button v-on:click="another--">Usuń 1</button>

		{{another}}

	<span v-if="show" :color="text_one" :title="title_span" :class="text_one">
		{{text_one}}
	</span >
	<span v-else-if="another < 5">
		another mniejsze od 10
	</span>
	<span v-else>
		Ups.. usunąłeś element
	</span>

	<!-- wykorzystanie v-text -->
	<span v-text="test_vtext"></span>

	<!-- wykorzystanie v-text -->
	<span v-html="test_vhtml"></span>

<ul>
	<li v-for="user in users">
		{{user.name}}
	</li>
</ul>


<ul>
	<li v-for="(user, index) in users" :key="user.id">
		{{index}}. {{user.name}} 
	</li>
</ul>

<input v-model="input_one">
{{input_one}}

<input @keyup.enter="test($event)" color="black">
</section>







<section id="vue_calculate">
	
	<div class="container">
		<h3>SIMPLE CALCULATOR</h3>
	</div>

<div class="cont_calculator">
	
	<div class="row">
		<div class="col-12">
			<input type="text" id="calc_sum" @keyup.enter="submit_enter($event)" class="form-control" v-model="submit_calc" >
		</div>
	</div>

	<div class="row">
		<div class="col-3" @click="get_value($event)">%</div>
		<div class="col-3" @click="get_value($event)">(</div>
		<div class="col-3" @click="get_value($event)">)</div>
		<div class="col-3" @click="get_value($event)"><-</div>
	</div>

	<div class="row">
		<div class="col-3" @click="get_value($event)">NULL</div>
		<div class="col-3" @click="get_value($event)">/</div>
		<div class="col-3" @click="get_value($event)">*</div>
		<div class="col-3" @click="get_value($event)">-</div>
	</div>

	<div class="row">
		<div class="col-3" @click="get_value($event)">7</div>
		<div class="col-3" @click="get_value($event)">8</div>
		<div class="col-3" @click="get_value($event)">9</div>
		<div class="col-3" @click="get_value($event)">+</div>
	</div>

	<div class="row">
		<div class="col-3" @click="get_value($event)">4</div>
		<div class="col-3" @click="get_value($event)">5</div>
		<div class="col-3" @click="get_value($event)">6</div>
		<div class="col-3" @click="get_value($event)">ENTER</div>
	</div>
	<div class="row">
		<div class="col-3" @click="get_value($event)">1</div>
		<div class="col-3" @click="get_value($event)">2</div>
		<div class="col-3" @click="get_value($event)">3</div>
		<div class="col-3" @click="get_value($event)">ENTER</div>
	</div>
	<div class="row">
		<div class="col-6" @click="get_value($event)">0</div>
		<div class="col-3" @click="get_value($event)">.</div>
		<div class="col-3" @click="get_value($event)">ENTER</div>
	</div>
</div>




</section>






<section id="simple_todo">
	<div class="container">
		<h3>SIMPLE TODO</h3>

		<div class="todos">
			<ul>
				<li :class="(most_important == todo.vote) && (todo.vote != 0) ? 'most_important' : ''" v-for="todo in todos" :key="todo.id" class="d-flex justify-content-between">
					<span>{{todo.name}} - {{todo.vote}}</span>
					<div class="el_nav">
						<button class="btn todos_btn" @click="todo.vote++">+</button>
						<button class="btn todos_btn" @click="todo.vote--">-</button>
						<button class="btn todos_btn" @click="todo_delete(todo)">Delete</button>
					</div>
				</li>
			</ul>
			<div class="row">
				<input @keyup.enter="add_todo($event)" type="text" placeholder="Wpisz treść todo" class="form-control input_margin">
			</div>
		</div>
	</div>
</section>












</div>


<!-- 	<div id="app_second">
		
	</div>
	<div id="app_three">
		
	</div> -->


 <?php require 'footer.php'; ?>