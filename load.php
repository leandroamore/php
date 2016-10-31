$('#btn').click(function(){

  $.ajax({
    url:'test.php?call=true',
    type:'GET',
    success:function(data){
    body.append(data);

    }
  });

})
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
<form  method='get' >
  
  <input type="button" id="btn" value="click">    
  
</form>

<?php 
if(isset($_GET['call'])){

    function anyfunction(){
    echo "added";

     // your funtion code

}
}
?>