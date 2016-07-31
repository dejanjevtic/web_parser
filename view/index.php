<div class="container">
  <div class="jumbotron">
    <h1>Main Page</h1> 
    <p>Type url address and item in input fields down and then press submit.</p> 
  </div>
            <fieldset>
                                <div class="form-group">
                                    <input id="address" class="form-control" placeholder="Type URL address in format http://www.example.com" type="text" name="address" value="http://" autofocus>
                                </div>
                               
                                <div class="form-group">
                                <select id="searchlist-items" class="selectpicker">
                                                                       
                                        <option value="title">title</option>
                                        <option value="meta">meta</option>
                                        <option value="input">input</option>
  
                                </select>
                                 </div>                              
                                <input id="subm" type="submit" class="btn btn-success" name="Submit"/>
            </fieldset>
	<br>
    <div id="parse_screen"></div>
	<br>
</div>

<script>
		$(function() {
                    $( "#subm" ).click(function(e) {
						var string1=$("#address").val();
                        if (string1.indexOf("www") !=-1||string1.indexOf(".") !=-1) {
													
                        $.ajax({
                            url:'parser',
                            type:'POST',
                            data: {address: $("#address").val(),item: $("#searchlist-items").val()},
                            success:function(response){
					
                                        $('#parse_screen').html('<b>'+response+'</b><hr>');
                            }
                        });
						}
						else $('#parse_screen').html('<b>Wrong url !</b><hr>');
                        e.preventDefault(); 
                    });
                });
    </script>