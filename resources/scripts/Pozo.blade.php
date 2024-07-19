<script src="{{ asset("assets/$theme/plugins/select2/js/select2.full.min.js") }}"></script>

<script type="text/javascript">
    $(function() {
        $('.selectMultiple').select2()
    });

    function modalEdit(id, type, asunto) {
        var url = "/inbox/correspondence/update/" + type + "/" + id + "/";
        $("#editSend").attr("action", url);
        $("#asuntoSend").text(asunto);
    }
</script>
