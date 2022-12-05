<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; My-Duck.app <?= date('Y') ?></span>
        </div>
    </div>
</footer>
<script type="text/javascript">
    window.setTimeout(function () {
        $(".alert").fadeTo(500,0).slideUp(500, function() {
            $(this).remove();
        });
    },3000);
</script>