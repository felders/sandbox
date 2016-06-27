<script>

function createTab(content) {
  $('div.active').removeClass('active').removeClass('in');
  $('li.active').removeClass('active');

	$('#myTab').append('<li><a href="#tab3" data-toggle="tab">Tab 3</a></li>');

	$('#tabContents').append('<div class="tab-pane active" id="tab3">' + content + '</div>');
}


$(document).ready(function() {

	$(".addTab").click(function() {

		$.get("index.php?r=tbl-contact/get-new-tab&id=3", function (content) {
			createTab(content);
		});

	});

});


</script>

<ul class="nav nav-tabs responsive" id="myTab">
<li><a href="#tab1" data-toggle="tab">Tab 1</a></li>
<li><a href="#tab2" data-toggle="tab">Tab 2</a></li>
</ul>
<div class="tab-content responsive" id="tabContents">

<div class="tab-pane active" id="tab1">
<?php

echo $this->render('tab1');

?>
<br /><br />
<a href="#" class="addTab">Add Tab - AJAX</a>


</div>

<div class="tab-pane" id="tab2">
def
</div>

</div>

