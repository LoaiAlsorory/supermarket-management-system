<?php
// استدعاء الاتصال
include 'db_connect.php';

// جلب البيانات من جدول المنتجات
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// عرض النتائج
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "المنتج: " . $row["product_name"] . " - السعر: " . $row["price"] . "<br>";
    }
} else {
    echo "لا توجد منتجات";
}

// إغلاق الاتصال
$conn->close();
?>
