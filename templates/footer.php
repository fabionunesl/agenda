<script src="https://unpkg.com/imask"></script>

<script>
    var phoneInput = document.getElementById('phone');

    var maskOptions = {
        mask: '(00) 00000-0000'
    };

    var mask = IMask(phoneInput, maskOptions);
</script>


</body>

</html>