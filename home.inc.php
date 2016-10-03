<body>
<div class="slide-container">
	<img src="amarelo.jpg" class="slide">
	<img src="azul.jpg" class="slide">
	<img src="rosa.jpg" class="slide">
</div>
<script type="text/javascript">
    var index = 0;
    passarImagem();

    function passarImagem(){
        var i;
        var x = document.getElementsByClassName("slide");
        for (i = 0; i < x.length; i++)
            x[i].style.display = "none";  
	   index++;

        if (index > x.length) 
    	index = 1; 

            x[index-1].style.display = "block";

        setTimeout(passarImagem, 9000); 
}
</script>


</body>
</html>