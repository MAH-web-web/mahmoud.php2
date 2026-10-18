<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        // تعريف متغيرات PHP لعنوان الصفحة واسم المستخدم
        $pageTitle = "صفحتي الشخصية الديناميكية";
        $userName = "أحمد"; 
    ?>
    <title><?php echo $pageTitle; ?></title>
    
    <!-- تنسيقات CSS مدمجة لتحسين المظهر -->
    <style>
        :root {
            --primary-color: #4f46e5;
            --text-color: #1f2937;
            --bg-color: #f3f4f6;
            --card-bg: #ffffff;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 2rem 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        main {
            flex: 1;
            max-width: 800px;
            width: 100%;
            margin: 2rem auto;
            padding: 0 1rem;
            box-sizing: border-box;
        }

        .card {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
            line-height: 1.8;
        }

        .card h2 {
            color: var(--primary-color);
            margin-top: 0;
            border-bottom: 2px solid var(--bg-color);
            padding-bottom: 0.5rem;
        }

        .time-box {
            background-color: #e0e7ff;
            color: #3730a3;
            padding: 0.75rem;
            border-radius: 8px;
            font-weight: bold;
            text-align: center;
            margin-top: 1.5rem;
        }

        footer {
            background-color: #1f2937;
            color: #9ca3af;
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <header>
        <h1>مرحباً ggggبك، <?php echo $userName; ?>!</h1>
    </header>

    <main>
        <div class="card">
            <h2>من أنا؟</h2>
            <p>مرحباً! هذه الصفحة تم بناؤها باستخدام <strong>HTML</strong> لتحديد الهيكل، و **CSS** لإعطائها هذا المظهر العصري، و **PHP** لجعل بياناتها ديناميكية ومتفاعلة.</p>
            
            <!-- استخدام PHP لعرض الوقت والتاريخ الحالي تلقائياً -->
            <div class="time-box">
                تاريخ زيارتك الحالي هو: <?php echo date("Y-m-d") . " وتوقيتك هو " . date("h:i A"); ?>
            </div>
        </div>
    </main>

    <footer>
        <!-- تحديث السنة تلقائياً في التذييل عبر PHP -->
        <p>جميع الحقوق محفوظة © <?php echo date("Y"); ?> | تصميم ذكي</p>
    </footer>

</body>
</html>
