<style>
.form__daterange {
    font-size: 16px;
    padding: 8px;
    width: 20em;
}
.ui-datepicker-range > .ui-state-default {
    background: lightsalmon;
}
</style>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable();
        $("#cnic").mask("99999-9999999-9");
        $("#phone").mask("(9999) 999-9999999");
    } );

    function back () {
        window.history.back();
    }

    function getAge(){
        var dob = new Date($('#dob').val());
        var today = new Date();
        var age = today.getFullYear() - dob.getFullYear();
        $('#age').val(age);
    }
</script
