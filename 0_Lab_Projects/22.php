<!DOCTYPE html>
<html lang="en">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $("#formABC").submit(function (e) {

            //stop submitting the form to see the disabled button effect
            e.preventDefault();

            //disable the submit button
            $("#btnSubmit").attr("disabled", true);

            //disable a normal button
            $("#btnTest").attr("disabled", true);

            return true;

        });
    });
	
	function di(){
		 $("#btnTest").attr("disabled", true);
		showDiv();
	}
	
	function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}
</script>
	
	
<body>
<h1>jQuery - How to disabled submit button after clicked</h1>

<form id="formABC" action="#" method="POST">
    <input type="submit" id="btnSubmit" value="Submit"></input>
</form>

<div id="welcomeDiv"  style="display:none;" > WELCOME</div>
	< class="answer_list">
<input type="button" name="answer" value="Show Div" onclick="showDiv()" />
<input type="button" value="i am normal abc" onClick="di()" id="btnTest"></input>
</body>
</html>