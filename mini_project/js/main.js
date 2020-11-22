<script>
var x= document.getElementById("myimage"),
    
     images = [
     'images/chess-1.jpg',
     'images/chess-2.jpg',
     'images/chess-3.jpg',
    
    ]
 
     setInterval(function() {
     var myRrandomNum = Math.floor(Math.random()*images.length);
         console.log("interval")
         x.src= images[myRrandomNum];
         }, 1500); 
         function myFunction() {
            y=document.getElementById("show").href= "Form.html";
        }
</script> 