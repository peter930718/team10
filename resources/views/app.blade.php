<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-buttons {
            display: flex;
            gap: 15px;
        }

        .nav-buttons .dropdown {
            position: relative;
        }

        .nav-buttons button {
            background-color: #444;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 8px; /* 增加圓角 */
            transition: transform 0.2s ease, background-color 0.2s ease;
        }

        .nav-buttons button:hover {
            background-color: #555;
            transform: scale(0.95); /* 凹進效果 */
        }

        .dropdown-content {
            position: absolute;
            background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            z-index: 1;
            margin-top: 5px;
            min-width: 150px;
            border-radius: 4px; /* 表單內容也有圓角 */
            overflow: hidden;
            max-height: 0; /* 初始高度為 0 */
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.3s ease, transform 0.3s ease, max-height 0.3s ease;
        }

        .dropdown-content a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: black;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown.open .dropdown-content {
            opacity: 1;
            transform: translateY(0);
            max-height: 500px; /* 足夠的高度來顯示內容 */
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div>
            <div>
                <div>
                    @include('header')
                </div>
                <div>
                    @yield('sdg_contents')
                </div>
            </div>

        </div>

        @include('footer')
    </div>
</div>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const dropdowns = document.querySelectorAll('.dropdown');

        dropdowns.forEach(dropdown => {
            const button = dropdown.querySelector('button');
            const content = dropdown.querySelector('.dropdown-content');

            button.addEventListener('click', () => {
                // 切換 open class
                dropdown.classList.toggle('open');

                // 確保只有一個下拉表單展開
                dropdowns.forEach(otherDropdown => {
                    if (otherDropdown !== dropdown) {
                        otherDropdown.classList.remove('open');
                    }
                });
            });

            // 點擊頁面其他區域時關閉表單
            document.addEventListener('click', (e) => {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('open');
                }
            });
        });
    });
</script>

</body>
</html>
