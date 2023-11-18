<script>
<script>
    const specialtyInput = document.getElementById('specialty-input');
    const locationInput = document.getElementById('location-input');
    const specialtiesList = document.querySelectorAll('.specialty-location');

    function filterSpecialties() {
        const specialtyTerm = specialtyInput.value.toLowerCase();
        const locationTerm = locationInput.value.toLowerCase();

        specialtiesList.forEach(specialty => {
            const specialtyText = specialty.getAttribute('data-specialty').toLowerCase();
            const locationText = specialty.getAttribute('data-location').toLowerCase();

            if (specialtyText.includes(specialtyTerm) && locationText.includes(locationTerm)) {
                specialty.style.display = 'block';
            } else {
                specialty.style.display = 'none';
            }
        });
    }

    specialtyInput.addEventListener('input', filterSpecialties);
    locationInput.addEventListener('input', filterSpecialties);
</script>
</script>