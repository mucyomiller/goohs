        <script type="text/javascript">
            $(document).ready(function() {
            $('#example').dataTable();
            } );

            function back () {
                window.history.back();
            }

            function printDiv() {
                var printContents = $("#printTable").html();
                w=window.open();
                w.document.write(printContents);
                w.print();
                w.close();
            }
  </script>