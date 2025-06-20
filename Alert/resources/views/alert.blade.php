@if (session('alert.message'))
    <style>
        .custom-toast {
            position: fixed;
            top: 20px;
            right: 20px;
            color: #fff;
            padding: 15px 25px;
            border-radius: 4px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.5s, transform 0.5s;
            z-index: 9999;
        }

        .custom-toast.show {
            opacity: 1;
            transform: translateY(0);
        }

        .custom-toast.success {
            background-color: {{ config('alert.colors.success') }};
        }

        .custom-toast.danger {
            background-color: {{ config('alert.colors.danger') }};
        }

        .custom-toast.info {
            background-color: {{ config('alert.colors.info') }};
        }

        .custom-toast.warning {
            background-color: {{ config('alert.colors.warning') }};
            color: #000;
        }

        .custom-toast .close-btn {
            margin-left: 15px;
            cursor: pointer;
            font-weight: bold;
        }
    </style>

    <div id="custom-toast" class="custom-toast {{ session('alert.level') }}">
        {{ session('alert.message') }}
        <span class="close-btn" onclick="closeToast()">&times;</span>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const toast = document.getElementById('custom-toast');
            if (toast) {
                toast.classList.add('show');
                setTimeout(() => {
                    toast.classList.remove('show');
                }, {{ config('alert.colors.timeout') }});
            }
        });

        function closeToast() {
            const toast = document.getElementById('custom-toast');
            if (toast) {
                toast.classList.remove('show');
            }
        }
    </script>
@endif
