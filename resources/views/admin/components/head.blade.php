<!-- <link rel="icon" href="{{ asset('views/admin/assets/images/favicon.png') }}" type="image/x-icon">

<link rel="stylesheet" href="{{ asset('views/template/user/css/fontawesome.all.min.css') }}">
<link rel="stylesheet" href="{{ asset('views/admin/assets/css/styles.min.css') }}"> -->

<link rel="icon" href="{{ asset('ad/img/favicon.png') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('ad/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('ad/css/styles.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- {{-- <link rel="stylesheet" href="sweetalert2.min.css"> --}} -->
<link rel="stylesheet" href="sweetalert2.min.css">

<style>
    body::-webkit-scrollbar {
        display: none;
    }

    /* bàn tay animation */
    .wave {
        animation-name: wave-animation;
        animation-duration: 2.5s;
        animation-iteration-count: infinite;
        transform-origin: 70% 70%;
        display: inline-block;
    }

    @keyframes wave-animation {
        0% {
            transform: rotate(0.0deg)
        }

        10% {
            transform: rotate(14.0deg)
        }

        20% {
            transform: rotate(-8.0deg)
        }

        30% {
            transform: rotate(14.0deg)
        }

        40% {
            transform: rotate(-4.0deg)
        }

        50% {
            transform: rotate(10.0deg)
        }

        60% {
            transform: rotate(0.0deg)
        }

        100% {
            transform: rotate(0.0deg)
        }
    }
</style>
