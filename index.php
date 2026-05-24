<input type="text" id="search">

<div id="result"></div>

<script>

document.getElementById("search").addEventListener("keyup", function(){

let keyword = this.value;

fetch("search.php?search="+keyword)

.then(response => response.text())

.then(data => {
document.getElementById("result").innerHTML = data;
});

});

</script>