
<script type="text/javascript">
$(document).ready(function() {
$('#example').dataTable();

} );
function back () {
window.history.back();
}
</script>
<script>
$(document).ready(function(){
$('#date').change(function() {
var doc_id = $('#employee_id').val();
var date = $('#date').val();
$.ajax({
url: '/getSlots',
type: 'get',
data: {'id': doc_id, 'date': date},
success: function(response){
console.log(response)
$("select#time_slot_id").empty();
if(response != 'false'){
$.each($.parseJSON(response), function() {
$("select#time_slot_id").append( $("<option>")
.val(this.id)
.html(this.slot)
);
});
}else{
alert('Doctor is not available!')
}
}
});
});

});
</script>