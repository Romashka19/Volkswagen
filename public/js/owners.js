(function() {
    $(document).ready(function() {
        $('#save-order').click(function(params) {
            let car_id = $('#car-id').val();
            let user_id = $('#user_id').val();
            let address = $('#address').val();
            $.ajax({
                url: urlRoute['order'],
                type: 'POST',
                data:{
                    car_id: car_id,
                    user_id: user_id,
                    address:address,
                    _token: csrfToken
                },
                success:function () {
                    location.href="/";
                }
            });
        });
    })
})();