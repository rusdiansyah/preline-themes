<div>
    <script src="https://cdn.jsdelivr.net/npm/preline/dist/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.addEventListener("swal", event => {
        Swal.fire({
            icon: event.detail[0].icon,
            title: event.detail[0].title,
            text: event.detail[0].text,
        });
    });
</script>
</div>
