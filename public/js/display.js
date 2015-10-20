var type = function(category,text){
	this.cat = category; //image source
	this.word = text; // text to be included 
}

var beef = new type(beef,beef.php);
var pork = new type(pork,pork.php);
var chicken = new type(chicken,chicken.php);
var duck = new type(duck,duck.php);
var vegetable = new type(vegetable,vegetable.php);
var other = new type(other,other.php);


//beef
 var beef = document.getElementById('beef');
  beef.addEventListener('click', beef)
function beef(){
	$.get(this.word, function(data) {
    $('#stuff').html(data)
});
}







