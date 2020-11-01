<script>
function ShowLoading(e) {
        var div = document.createElement('div');
        div.innerHTML = '<h3>Processing................</h3><div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>';
        div.style.cssText = 'position: fixed; top: 1%; z-index: 5000; width: 100%; text-align: center; background: white; border: 2px solid midnightblue; height:100vh';
        document.body.appendChild(div);
        return true;
    }
</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/app.js"></script>
</body>
</html>