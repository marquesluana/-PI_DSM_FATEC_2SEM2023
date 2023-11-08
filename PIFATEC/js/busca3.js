<script>
document.getElementById('menu-button').addEventListener('click', function () {
    const menuOptions = document.getElementById('menu-options');
    if (menuOptions.style.display === 'block') {
        menuOptions.style.display = 'none';
    } else {
        menuOptions.style.display = 'block';
    }
});
</script>