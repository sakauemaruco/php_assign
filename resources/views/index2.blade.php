<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Font Switcher</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hidden { display: none; }
        .visible { display: block; }
    </style>
</head>
<body class="font-sans p-10">
    <h1 id="text" class="text-4xl font-sans">Hello, Tailwind!</h1>
    
    <div id="font-switcher" class="hidden mt-4">
        <label for="fonts" class="block mb-2">Select a Font:</label>
        <select id="fonts" class="border border-gray-300 rounded p-2">
            <option value="font-sans">Sans</option>
            <option value="font-pp">PP Neue Montreal</option>
            <option value="font-timmons">Timmons NY 2.0</option>
            <option value="font-noto">Noto Serif JP</option>
            <option value="font-cormorant">Cormorant Garamond</option>
            <option value="font-roboto">Roboto Slab</option>
            <option value="font-poppins">Poppins</option>
            <option value="font-lobster">Lobster</option>
            <!-- 他のフォントも追加可能 -->
        </select>
    </div>

    <script>
        // DOM要素を取得
        const textElement = document.getElementById('text');
        const fontSwitcher = document.getElementById('font-switcher');
        const fontSelector = document.getElementById('fonts');

        // ホバーでセレクトボックスを表示
        textElement.addEventListener('mouseover', () => {
            fontSwitcher.classList.remove('hidden');
            fontSwitcher.classList.add('visible');
        });

        textElement.addEventListener('mouseleave', () => {
            setTimeout(() => {
                fontSwitcher.classList.remove('visible');
                fontSwitcher.classList.add('hidden');
            }, 3000); // 3秒後に非表示
        });

        // フォント切り替え処理
        fontSelector.addEventListener('change', (event) => {
            const selectedFontClass = event.target.value;

            // フォントを切り替えるために既存フォントクラスを削除
            textElement.classList.remove(
                'font-sans',
                'font-pp',
                'font-timmons',
                'font-noto',
                'font-cormorant',
                'font-roboto',
                'font-poppins',
                'font-lobster'
            );

            // 選択されたフォントを適用
            textElement.classList.add(selectedFontClass);
        });
    </script>
</body>
</html>
