const AdmZip = require('adm-zip');
const fs = require('fs');
const path = require('path');

// إنشاء ملف مضغوط جديد
const zip = new AdmZip();

// إضافة الملفات للأرشيف
const themeDir = path.join(__dirname, '../black-to-white');
const outputPath = path.join(__dirname, '../black-to-white.zip');

// التأكد من وجود المجلد
if (!fs.existsSync(themeDir)) {
    fs.mkdirSync(themeDir, { recursive: true });
}

// قائمة الملفات التي سيتم تضمينها
const files = [
    'style.css',
    'functions.php',
    'index.php',
    'screenshot.php',
    'readme.txt',
    'template-parts/hero.php',
    'template-parts/services.php',
    'template-parts/contact.php',
    'inc/customizer.php',
    'inc/widgets.php',
    'assets/js/main.js'
];

// إضافة كل ملف إلى الأرشيف
files.forEach(file => {
    const filePath = path.join(themeDir, file);
    const fileDir = path.dirname(filePath);
    
    // إنشاء المجلدات إذا لم تكن موجودة
    if (!fs.existsSync(fileDir)) {
        fs.mkdirSync(fileDir, { recursive: true });
    }
    
    // إضافة الملف إلى الأرشيف
    if (fs.existsSync(filePath)) {
        zip.addLocalFile(filePath);
    }
});

// حفظ الملف المضغوط
zip.writeZip(outputPath);

console.log('تم إنشاء ملف القالب المضغوط بنجاح:', outputPath);